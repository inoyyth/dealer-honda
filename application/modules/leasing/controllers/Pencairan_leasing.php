<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pencairan_leasing
 *
 * @author Langit-Biru
 */
class Pencairan_leasing extends MX_Controller {

    //put your code here
    var $table = "t_rekap_tagihan";

    public function __construct() {
        parent::__construct();

        $this->load->model('M_t_leasing');
        $this->load->model(array('M_t_pleasing' => 't_pleasing', 'Datatable_model' => 'm_datatable', 'M_t_rekap_tagihan' => 't_rekap'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));

        //set breadcrumb
        $this->breadcrumbs->push('Pencairan Leasing', '/pencairan-leasing');
    }

    public function index() {
        $data_session = $this->__getSession();

        $config['base_url'] = base_url() . 'pencairan-leasing';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;

        $data['mleasing'] = $this->t_pleasing->get_leasing()->result();

        $data['view'] = "leasing/pencairan_leasing/main";
        $this->load->view('default', $data);
    }

    function json_rlist() {
        $searchField = isset($_GET['field']) ? $_GET['field'] : NULL;
        $searchValue = isset($_GET['value']) ? $_GET['value'] : NULL;
        $sort = $this->input->post('sort');

        $kdleasing = $this->uri->segment(4);

        if ($this->input->get('climit')) {
            if ($this->input->get('climit') > 0) {
                $lmt = $this->input->get('climit');
            } else {
                $lmt = 0;
            }
        } else {
            $lmt = 10;
        }

        $boot['current'] = isset($_GET['cOffset']) > 0 ? $_GET['cOffset'] : 0;
        $boot['rowCount'] = $lmt;

        // Offset didapat setelah mendapat nilai dari $boot['current'] dan $lmt
        $offset = ((int) $boot['current']);

        $this->db->select('m_leasing.kd_leasing, m_leasing.leasing, COUNT(t_rekap_tagihan_detail.nomor_tagihan) AS jml_motor, t_rekap_tagihan.*, (t_rekap_tagihan.tot_tagihan + t_rekap_tagihan.sisa_tagihan) as total_tagihan,
                (SELECT ((SUM(c.harga_otr) - (SUM(d.dp_system)) + (SUM(b.subsidi1) + SUM(b.subsidi2)))) AS SISA FROM
t_pencairan_leasing_detail a
LEFT JOIN t_kwitansi_leasing b ON b.id = a.id_kwitansi
LEFT JOIN t_penjualan c ON c.noso = b.noso
LEFT JOIN t_harga_motor d ON d.noso = b.noso
WHERE a.no_tagihan=t_rekap_tagihan.no_tagihan
GROUP BY a.no_tagihan) AS terbayar 
', false);
        $this->db->from('m_leasing');
        $this->db->join('t_rekap_tagihan', 't_rekap_tagihan.kdleasing = m_leasing.kd_leasing', 'left outer');
        $this->db->join('t_rekap_tagihan_detail', 't_rekap_tagihan_detail.nomor_tagihan=t_rekap_tagihan.no_tagihan', 'left outer');
        $this->db->where('m_leasing.status_leasing', 1);
        $this->db->where('t_rekap_tagihan.kdleasing', $kdleasing);

        if ($searchField <> NULL and $searchField <> "" and $searchField <> "all") {
            switch ($searchField) {
                case 'terbayar':
                    $this->db->having('terbayar', $searchValue);
                    break;
                case 'jml_motor':
                    $this->db->having('jml_motor', $searchValue);
                    break;
                default:
                    $this->db->like('t_rekap_tagihan.' . $searchField, $searchValue);
                    break;
            }
        }
        
        $this->db->group_by('t_rekap_tagihan.no_tagihan');
        $this->db->limit($lmt);
        $this->db->offset($offset);

        if ($sort <> NULL) {
            $this->db->order_by($sort);
        } else {
            $this->db->order_by('t_rekap_tagihan.id', 'desc');
        }

        $query = $this->db->get();

        $boot['rows'] = $query->result();
        $boot['total'] = $query->num_rows();

        echo json_encode($boot);
    }

    public function lists($id) {
        $data['notagihan'] = '';
        $this->breadcrumbs->push('List', '/pencairan-leasing-list-' . $id);

        $data['idrekap'] = $id;

        $data['rekap_tagihan'] = $this->main_model->getMaster($this->table, $like = array(), $where = array('id' => $id));

        $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('kd_leasing' => $data['rekap_tagihan'][0]['kdleasing'], 'status_leasing' => '1'));

        $data['rekap_detail'] = $this->main_model->getMaster('t_rekap_tagihan_detail', $like = array(), $where = array('nomor_tagihan' => $data['rekap_tagihan'][0]['no_tagihan'], 'status_rekap' => 1));

        $data['pencairan_leasing'] = $this->main_model->getMaster('t_pencairan_leasing', $like = array(), $where = array('no_tagihan' => $data['rekap_tagihan'][0]['no_tagihan']));

        $data['view'] = "leasing/pencairan_leasing/list";
        $this->load->view('default', $data);
    }

    public function jlist() {
        $searchField = isset($_GET['field']) ? $_GET['field'] : NULL;
        $searchValue = isset($_GET['value']) ? $_GET['value'] : NULL;
        $sort = $this->input->post('sort');

        $no_tagihan = $this->uri->segment(4);
        $no_tagihan = str_replace("_", "/", $no_tagihan);

        if ($this->input->get('climit')) {
            if ($this->input->get('climit') > 0) {
                $lmt = $this->input->get('climit');
            } else {
                $lmt = 0;
            }
        } else {
            $lmt = 10;
        }

        $boot['current'] = isset($_GET['cOffset']) > 0 ? $_GET['cOffset'] : 0;
        $boot['rowCount'] = $lmt;

        // Offset didapat setelah mendapat nilai dari $boot['current'] dan $lmt
        $offset = ((int) $boot['current']);

        $this->db->select('t_rekap_tagihan_detail.id_kwitansi,t_rekap_tagihan_detail.nomor_tagihan,t_rekap_tagihan_detail.status_rekap,t_kwitansi_leasing.nokwitansi,t_kwitansi_leasing.noso,t_kwitansi_leasing.dp_system,t_kwitansi_leasing.tagih,t_kwitansi_leasing.subsidi1,t_kwitansi_leasing.subsidi2,t_penjualan.nosj,t_penjualan.nokonsumen,t_penjualan.ktp,t_penjualan.tanggal,t_penjualan.nomsn,t_penjualan.warna_motor,t_penjualan.harga_otr,t_penjualan.status_kwitansi,penerimaan_motor.nopolisi,penerimaan_motor.norangka,penerimaan_motor.tipe,penerimaan_motor.warna,penerimaan_motor.tahun,penerimaan_motor.kdgudang,penerimaan_motor.tglupload,penerimaan_motor.status_jual,t_harga_motor.cara_pembelian,t_harga_motor.marketing,t_harga_motor.leasing,t_harga_motor.dp_system,t_harga_motor.diskon,t_harga_motor.tagih,t_harga_motor.dp,t_harga_motor.sisa_hutang,t_harga_motor.dp_lunas,t_harga_motor.fee,m_customer.nama_customer,m_customer.tempat_lahir_customer,m_customer.tanggal_lahir_customer,m_customer.kelamin_customer,m_customer.alamat_customer,m_customer.telepon_customer,m_customer.handphone_customer,m_customer.rt,m_customer.rw,m_customer.wilayah,m_customer.kelurahan,m_customer.kecamatan,m_motor.nama_motor,m_motor.varian,m_motor.merk,m_motor.harga_otr,m_motor.nama_foto,m_motor.url_foto, t_pencairan_leasing_detail.no_bukti_potongan, t_pencairan_leasing_detail.tgl_pencairan', false);
        $this->db->from('t_rekap_tagihan_detail');
        $this->db->join('t_kwitansi_leasing', 't_kwitansi_leasing.id = t_rekap_tagihan_detail.id_kwitansi', 'left');
        $this->db->join('t_penjualan', 't_penjualan.noso = t_kwitansi_leasing.noso', 'left');
        $this->db->join('penerimaan_motor', 'penerimaan_motor.nomesin = t_penjualan.nomsn', 'left');
        $this->db->join('t_harga_motor', 't_harga_motor.noso = t_penjualan.noso', 'left');
        $this->db->join('m_customer', 'm_customer.no_ktp=t_penjualan.ktp', 'left');
        $this->db->join('m_motor', 'm_motor.tipe_motor=penerimaan_motor.tipe', 'left');
        $this->db->join('t_pencairan_leasing_detail', 't_pencairan_leasing_detail.id_kwitansi=t_kwitansi_leasing.id', 'left');

        $this->db->where('t_rekap_tagihan_detail.nomor_tagihan', $no_tagihan);

        if ($searchField <> NULL and $searchField <> "" and $searchField <> "all") {
            switch ($searchField) {
                case 'tanggal':
                case 'nomsn':
                    if ($searchValue <> NULL || $searchValue <> "")
                        $this->db->like('t_penjualan.' . $searchField, $searchValue);
                    break;
                case 'nokwitansi':
                    if ($searchValue <> NULL || $searchValue <> "")
                        $this->db->like('t_kwitansi_leasing.' . $searchField, $searchValue);
                    break;
                case 'nama_customer':
                    if ($searchValue <> NULL || $searchValue <> "")
                        $this->db->like('m_customer.' . $searchField, $searchValue);
                    break;
                case 'tipe':
                case 'norangka':
                    if ($searchValue <> NULL || $searchValue <> "")
                        $this->db->like('penerimaan_motor.' . $searchField, $searchValue);
                    break;
                case 'harga_otr':
                    if ($searchValue <> NULL || $searchValue <> "")
                        $this->db->like('m_motor.' . $searchField, $searchValue);
                    break;
                case 'dp':
                    if ($searchValue <> NULL || $searchValue <> "")
                        $this->db->like('t_harga_motor.' . $searchField, $searchValue);
                    break;
                case 'subsidi':
                    if ($searchValue <> NULL || $searchValue <> "")
                        $this->db->like('(t_kwitansi_leasing.subsidi1 + t_kwitansi_leasing.subsidi2)', $searchValue);
                    break;
                case 'sisa':
                    if ($searchValue <> NULL || $searchValue <> "")
                        $this->db->like('((m_motor.harga_otr) - (t_harga_motor.dp + t_kwitansi_leasing.subsidi1 + t_kwitansi_leasing.subsidi2))', $searchValue);
                    break;
                case 'no_bukti_potongan':
                    if ($searchValue <> NULL || $searchValue <> "")
                        $this->db->like('t_pencairan_leasing_detail.no_bukti_potongan', $searchValue);
                    break;
            }
        }

        $this->db->limit($lmt);
        $this->db->offset($offset);

        if ($sort <> NULL) {
            $this->db->order_by($sort);
        } else {
            $this->db->order_by('t_rekap_tagihan_detail.id', 'desc');
        }

        $query = $this->db->get();

        $boot['rows'] = $query->result();
        $boot['total'] = $query->num_rows();

        echo json_encode($boot);
    }

    function get_rekap_tagihan_edit() {
        $idkwitansi_leasing = explode(",", $this->input->get('dt'));
        $idkwitansi_leasing_uncheck = explode(",", $this->input->get('dtuncheck'));

        $table = 't_kwitansi_leasing';
        $column_search = array('t_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso', 't_kwitansi_leasing.dp_system', 't_kwitansi_leasing.tagih', 't_kwitansi_leasing.subsidi1', 't_kwitansi_leasing.subsidi2', 't_kwitansi_leasing.m_status', 't_kwitansi_leasing.sys_create_user', 't_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.status_rekap', 't_penjualan.nosj', 't_penjualan.nokonsumen', 't_penjualan.ktp', 't_penjualan.tanggal', 't_penjualan.nomsn', 't_penjualan.warna_motor', 't_penjualan.harga_otr', 'penerimaan_motor.norangka', 'penerimaan_motor.tipe', 'penerimaan_motor.warna', 'penerimaan_motor.tahun', 'penerimaan_motor.kdgudang', 'penerimaan_motor.tglupload', 't_harga_motor.cara_pembelian', 't_harga_motor.marketing', 't_harga_motor.leasing', 't_harga_motor.dp_system', 't_harga_motor.diskon', 't_harga_motor.tagih', 't_harga_motor.dp', 't_harga_motor.dp_system', 't_harga_motor.sisa_hutang', 't_harga_motor.dp_lunas', 't_harga_motor.fee', 'm_customer.nama_customer', 'm_customer.tempat_lahir_customer', 'm_customer.tanggal_lahir_customer', 'm_customer.kelamin_customer', 'm_customer.alamat_customer', 'm_customer.telepon_customer', 'm_customer.handphone_customer', 'm_customer.rt', 'm_customer.rw', 'm_customer.wilayah', 'm_customer.kelurahan', 'm_customer.kecamatan', 'm_motor.nama_motor', 'm_motor.varian', 'm_motor.merk', 'm_motor.url_foto, t_kwitansi_leasing.id as id_kwitansi, t_rekap_tagihan_detail.price_list');
        $column_order = array(null, 't_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso');

        $column_filter = array('t_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.nokwitansi', 'm_customer.nama_customer', 'penerimaan_motor.tipe', 't_penjualan.nomsn', 'penerimaan_motor.norangka', 't_penjualan.harga_otr', 't_harga_motor.dp', 'm_motor.varian');

        $filter['join'] = array("t_penjualan" => "t_penjualan.noso=t_kwitansi_leasing.noso",
            "penerimaan_motor" => "penerimaan_motor.nomesin=t_penjualan.nomsn",
            "t_harga_motor" => "t_harga_motor.noso=t_kwitansi_leasing.noso",
            "m_customer" => "m_customer.no_ktp=t_penjualan.ktp",
            "m_motor" => "m_motor.tipe_motor=penerimaan_motor.tipe",
            "t_rekap_tagihan_detail" => "t_rekap_tagihan_detail.id_kwitansi=t_kwitansi_leasing.id");
        $filter['where_in'] = array($table . '.id' => $idkwitansi_leasing);

        @$list = $this->t_rekap->get_dt_tables($table, $column_search, $column_filter, $filter);

        $no = isset($_POST['start']) ? $_POST['start'] : 0;
        $data = array();
        foreach ($list as $result) {
            $no++;
            $row = array();

            $row[] = "<span align='center'><input type='checkbox' checked='true' class='idkwitansileasing' value='" . $result->id . "'  /></span>";
            $row[] = $no;
            $row[] = date("d F Y", strtotime($result->sys_create_date));
            $row[] = $result->nokwitansi;
            $row[] = $result->nama_customer;
            $row[] = $result->tipe;
            $row[] = $result->nomsn;
            $row[] = $result->norangka;
            $row[] = formatrp($result->harga_otr);
            $row[] = formatrp($result->dp_system);
            $row[] = formatrp($result->subsidi1 + $result->subsidi2);
            $row[] = formatrp(($result->harga_otr - $result->dp_system) + ($result->subsidi1 + $result->subsidi2));
            $row[] = $result->price_list;

            $data[] = $row;
        }

        $rkwitansi_leasing_uncheck = $this->t_rekap->get_rkwitansi_detail($idkwitansi_leasing_uncheck)->result_array();

        $output = array(
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : 0,
            "recordsTotal" => $this->t_rekap->count_all($table, $where = array($table . '.m_status' => 1)),
            "recordsFiltered" => $this->t_rekap->count_filtered($table, $column_search, $column_filter, $filter),
            "data" => $data,
            "data_uncheck" => $rkwitansi_leasing_uncheck
        );
        //output to json format
        echo json_encode($output);
    }

    public function save() {
        $post = $this->input->post();

        $rtagihan = object_for_save($post['rtagihan']);
        $kleasing = object_to_array($post['kleasing']);
        $uncheck = explode(",", $post['uncheck']);

        $rtagihan['tot_tagihan'] = floatval(str_replace(".", "", $rtagihan['tot_tagihan']));
        $rtagihan['tot_pencairan'] = floatval(str_replace(".", "", $rtagihan['tot_pencairan']));
        $rtagihan['sisa_tagihan'] = floatval(str_replace(".", "", $rtagihan['sisa_tagihan']));

        $get_pleasing = $this->t_pleasing->get_pleasing($rtagihan['no_tagihan'])->row();

        if ($get_pleasing <> false) {
            $result_pleasing = $this->t_pleasing->save_pleasing($rtagihan, $rtagihan['no_tagihan']);
        } else {
            $result_pleasing = $this->t_pleasing->save_pleasing($rtagihan);
        }

        if ($result_pleasing) {

            $ins_detail = array();
            foreach ($kleasing as $det_kleasing) {
                $ins_detail = object_for_save($det_kleasing);
                $ins_detail['no_tagihan'] = $rtagihan['no_tagihan'];

                if (count($uncheck) > 0) {
                    $delete_pleasing_detail = $this->t_pleasing->delete_pleasing_detail($uncheck);
                }

                $check_pleasing_detail = $this->t_pleasing->get_pleasing_detail($ins_detail['id_kwitansi'])->row();
                if ($check_pleasing_detail <> false) {
                    $result_dleasing = $this->t_pleasing->save_pleasing_detail($ins_detail, $ins_detail['id_kwitansi']);
                } else {
                    $result_dleasing = $this->t_pleasing->save_pleasing_detail($ins_detail);
                }
            }
            echo json_encode(array('status' => 'success', 'pesan' => "Data berhasil disimpan !", 'post' => $ins_detail));
        } else {
            echo json_encode(array('status' => 'false', 'pesan' => "Data gagal disimpan !", 'post' => $rtagihan));
        }
    }

    public function view($id) {
        $data['notagihan'] = '';
        $this->breadcrumbs->push('List', '/pencairan-leasing-list-' . $id);

        $data['idrekap'] = $id;

        $data['rekap_tagihan'] = $this->main_model->getMaster($this->table, $like = array(), $where = array('id' => $id));

        $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('kd_leasing' => $data['rekap_tagihan'][0]['kdleasing'], 'status_leasing' => '1'));

        $data['rekap_detail'] = $this->main_model->getMaster('t_rekap_tagihan_detail', $like = array(), $where = array('nomor_tagihan' => $data['rekap_tagihan'][0]['no_tagihan'], 'status_rekap' => 1));

        $data['pencairan_leasing'] = $this->main_model->getMaster('t_pencairan_leasing', $like = array(), $where = array('no_tagihan' => $data['rekap_tagihan'][0]['no_tagihan']));

        $data['view'] = "leasing/pencairan_leasing/view";
        $this->load->view('default', $data);
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'no_tagihan' => set_session_table_search('page', $this->input->get_post('no_tagihan', TRUE)),
                'tgl_tagihan' => set_session_table_search('noso', $this->input->get_post('tgl_tagihan', TRUE)),
                'tot_tagihan' => set_session_table_search('nomsn', $this->input->get_post('total_tagihan', TRUE)),
                'kdleasing' => set_session_table_search('nomsn', $this->input->get_post('kd_leasing', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'no_tagihan' => $this->session->userdata('no_tagihan'),
                'tgl_tagihan' => $this->session->userdata('tgl_tagihan'),
                'tot_tagihan' => $this->session->userdata('tot_tagihan'),
                'kdleasing' => $this->session->userdata('kdleasing')
            );
        }
    }

    public function print_rekap_pleasing() {
        $idrekap = $this->input->get('idrekap');

        $data['head_pleasing'] = $this->t_pleasing->get_head_pleasing($idrekap)->row_array();
        $data['detail_pleasing'] = $this->t_pleasing->get_item_pleasing($idrekap)->result_array();
        $this->load->view('leasing/pencairan_leasing/print_pencairan_leasing', $data);
    }

    public function cetak($id) {
        $notagihan = $this->input->get('notagihan');

        $data['rkwitansi'] = $this->main_model->getMaster($this->table, $like = array(), $where = array('no_tagihan' => $notagihan));
        $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('kd_leasing' => $data['rkwitansi'][0]['kdleasing'], 'status_leasing' => '1'));

        $data['rekap_detail'] = $this->main_model->getMaster('t_rekap_tagihan_detail', $like = array(), $where = array('nomor_tagihan' => $data['rkwitansi'][0]['no_tagihan']));

        $data['list_rekapan'] = $this->t_rekap->get_rekap_kwitansi_leasing($data['rkwitansi'][0]['no_tagihan'])->result_array();

        $this->load->view('leasing/rekap_tagihan/print_rekap_tagihan', $data);
    }

    public function print_pdf($id) {
        //echo $id;
        //die();

        $data['template'] = array("template" => "t_kwitansi/kwitansi_fee/print_out_fee", "filename" => "Kwitansi PDF");
        $data['parsing'] = $this->t_kwitansi->get_print_fee($id);
        //var_dump($data['parsing']);
        //die();
        //$data['cpembelian'] = $this->main_model->get_global_data('cpembelian');
        //$data['detail_penjualan'] = $this->db->get_where($this->table, array('id' => $id))->row_array();
        //$data['detail_harga'] = $this->db->get_where('t_harga_motor',array('noso'=>$data['detail_penjualan']['noso']))->row_array();
        //$data['detail_penerimaan_motor'] = $this->db->get_where('penerimaan_motor',array('nomesin'=>$data['detail_penjualan']['nomsn']))->row_array();
        //$data['detail_motor'] = $this->db->get_where('m_motor',array('tipe_motor'=>$data['detail_penerimaan_motor']['tipe']))->row_array();
        //$data['detail_customer'] = $this->db->get_where('m_customer',array('no_ktp'=>$data['detail_penjualan']['ktp']))->row_array();
        //$data['detail_leasing'] = $this->db->get_where('m_leasing',array('kd_leasing'=>$data['detail_harga']['leasing']))->row_array();
        $this->printpdf->create_pdf($data);
    }

    public function print_excel() {
        $data['template_excel'] = "rekap_tagihan/" . $_GET['template'];
        $data['file_name'] = $_GET['name'];
        $data['list'] = $this->rekap_tagihan->getdata($this->table, 0, 1000, $like = array(), $where = array('status_gudang!=' => '3'));
        $this->load->view('template_excel', $data);
    }

}
