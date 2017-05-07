<?php

class Rekap_tagihan extends MX_Controller {

    //put your code here

    var $table = "t_rekap_tagihan";

    public function __construct() {
        parent::__construct();
        $this->load->model('M_t_leasing');
        $this->load->model(array('M_t_rekap_tagihan' => 't_rekap', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));

        //set breadcrumb
        $this->breadcrumbs->push('Rekap Kwitansi', '/rekap-tagihan');
    }

    public function index() {
        $data_session = $this->__getSession();

        $config['base_url'] = base_url() . 'rekap-tagihan';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->t_rekap->getdata($this->table, $limit, $config['per_page'], $like = $data_session, $where = array());
        $data['sr_data'] = $data_session;

        $data['view'] = "leasing/rekap_tagihan/main";
        $this->load->view('default', $data);
    }

    function form() {
        $data['notagihan'] = $this->main_model->generate_code($this->table, 'TGH/MKA-REK/' . date('Y'), '/', 6, $date = false, $loop = false, 'id', 'no_tagihan');
        $this->breadcrumbs->push('Add', '/rekap-tagihan-tambah');
        $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('status_leasing' => '1'));
        $data['view'] = "leasing/rekap_tagihan/print-form";
        $this->load->view('default', $data);
    }

    public function add() {
        $this->breadcrumbs->push('Add', '/kwitansi-fee');
        $data['codeso'] = $this->main_model->generate_code($this->table, 'KWT/KF-' . date('Y') . '-' . romanic_number(date('m')), '-', 6, $date = false, $loop = true);
        //var_dump($data['codeso']);
        $data['view'] = "t_kwitansi/kwitansi_fee/add";
        $this->load->view('default', $data);
    }

    public function getSO() {
        $query = $this->input->get('query');
        $data = $this->t_kwitansi->getNOSO($query);
        //echo $this->db->last_query();
        echo json_encode($data);
    }

    /*
      public function detail($id) {
      $this->breadcrumbs->push('Detail', '/kwitansi-fee-detail');
      $data['detail'] = $this->t_kwitansi->get_detail_fee($id);
      $data['view'] = 't_kwitansi/kwitansi_fee/detail';
      $this->load->view('default', $data);
      }
     */

    public function printout() {
        //var_dump($_POST);

        $id = $this->uri->segment(2);
        $cek = str_replace("_", "/", $id);
        $data['list'] = $this->t_kwitansi->get_data_print_fee($cek);
        //var_dump($data['list']);
        $data['template'] = array("template" => "t_kwitansi/kwitansi_fee/" . $_GET['template'], "filename" => $_GET['name']);
        //$data['list'] = $this->M_t_kwitansi->getdata($this->table, 0, 1000, $like = array());
        $this->load->view('t_kwitansi/kwitansi_fee/table_html', $data);
        //$this->printpdf->create_pdf($data);
    }

    public function edit($id) {
        $data['notagihan'] = '';
        $this->breadcrumbs->push('Edit', '/rekap-tagihan-edit-' . $id);

        $data['rkwitansi'] = $this->main_model->getMaster($this->table, $like = array(), $where = array('id' => $id));
        $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('kd_leasing' => $data['rkwitansi'][0]['kdleasing'], 'status_leasing' => '1'));

        $data['rekap_detail'] = $this->main_model->getMaster('t_rekap_tagihan_detail', $like = array(), $where = array('nomor_tagihan' => $data['rkwitansi'][0]['no_tagihan']));

        $data['view'] = "leasing/rekap_tagihan/print-form-edit";

        $this->load->view('default', $data);
    }

    public function get_drekap_edit() {
        $no_tagihan = $this->input->post('no_tagihan');

        $tanggal_start = $this->input->get('tanggal_start');
        $tanggal_end = $this->input->get('tanggal_end');
        $kdleasing = $this->input->get('kdleasing');

        $table = 't_rekap_tagihan_detail';

        $column_search = array('t_rekap_tagihan_detail.id_kwitansi', 't_rekap_tagihan_detail.price_list', 't_rekap_tagihan_detail.nomor_tagihan', 't_rekap_tagihan_detail.status_rekap', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso', 't_kwitansi_leasing.dp_system', 't_kwitansi_leasing.tagih', 't_kwitansi_leasing.subsidi1', 't_kwitansi_leasing.subsidi2', 't_penjualan.nosj', 't_penjualan.nokonsumen', 't_penjualan.ktp', 't_penjualan.tanggal', 't_penjualan.nomsn', 't_penjualan.warna_motor', 't_penjualan.harga_otr', 't_penjualan.status_kwitansi', 'penerimaan_motor.nopolisi', 'penerimaan_motor.norangka', 'penerimaan_motor.tipe', 'penerimaan_motor.warna', 'penerimaan_motor.tahun', 'penerimaan_motor.kdgudang', 'penerimaan_motor.tglupload', 'penerimaan_motor.status_jual', 't_harga_motor.cara_pembelian', 't_harga_motor.marketing', 't_harga_motor.leasing', 't_harga_motor.dp_system', 't_harga_motor.diskon', 't_harga_motor.tagih', 't_harga_motor.dp', 't_harga_motor.sisa_hutang', 't_harga_motor.dp_lunas', 't_harga_motor.fee', 'm_customer.nama_customer', 'm_customer.tempat_lahir_customer', 'm_customer.tanggal_lahir_customer', 'm_customer.kelamin_customer', 'm_customer.alamat_customer', 'm_customer.telepon_customer', 'm_customer.handphone_customer', 'm_customer.rt', 'm_customer.rw', 'm_customer.wilayah', 'm_customer.kelurahan', 'm_customer.kecamatan', 'm_motor.nama_motor', 'm_motor.varian', 'm_motor.merk', 'm_motor.harga_otr', 'm_motor.nama_foto', 'm_motor.url_foto');

        $column_filter = array('t_rekap_tagihan_detail.id_kwitansi', 't_rekap_tagihan_detail.price_list', 't_rekap_tagihan_detail.nomor_tagihan', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso', 't_kwitansi_leasing.dp_system', 't_kwitansi_leasing.tagih', 't_kwitansi_leasing.subsidi1', 't_kwitansi_leasing.subsidi2', 't_penjualan.nosj', 't_penjualan.nokonsumen', 't_penjualan.ktp', 't_penjualan.tanggal', 't_penjualan.nomsn', 't_penjualan.warna_motor', 't_penjualan.harga_otr', 't_penjualan.status_kwitansi', 'penerimaan_motor.nopolisi', 'penerimaan_motor.norangka', 'penerimaan_motor.tipe', 'penerimaan_motor.warna', 'penerimaan_motor.tahun', 'penerimaan_motor.kdgudang', 'penerimaan_motor.tglupload', 'penerimaan_motor.status_jual', 't_harga_motor.cara_pembelian', 't_harga_motor.marketing', 't_harga_motor.leasing', 't_harga_motor.dp_system', 't_harga_motor.diskon', 't_harga_motor.tagih', 't_harga_motor.dp', 't_harga_motor.sisa_hutang', 't_harga_motor.dp_lunas', 't_harga_motor.fee', 'm_customer.nama_customer', 'm_customer.tempat_lahir_customer', 'm_customer.tanggal_lahir_customer', 'm_customer.kelamin_customer', 'm_customer.alamat_customer', 'm_customer.telepon_customer', 'm_customer.handphone_customer', 'm_customer.rt', 'm_customer.rw', 'm_customer.wilayah', 'm_customer.kelurahan', 'm_customer.kecamatan', 'm_motor.nama_motor', 'm_motor.varian', 'm_motor.merk', 'm_motor.harga_otr', 'm_motor.nama_foto', 'm_motor.url_foto');

        $column_order = array(null, 't_rekap_tagihan_detail.id_kwitansi', 't_rekap_tagihan_detail.nomor_tagihan', 't_kwitansi_leasing.nokwitansi');

        $filter['join'] = array("t_kwitansi_leasing" => "t_kwitansi_leasing.id = t_rekap_tagihan_detail.id_kwitansi",
            "t_penjualan" => "t_penjualan.noso = t_kwitansi_leasing.noso",
            "penerimaan_motor" => "penerimaan_motor.nomesin = t_penjualan.nomsn",
            "t_harga_motor" => "t_harga_motor.noso = t_penjualan.noso",
            "m_customer" => "m_customer.no_ktp=t_penjualan.ktp",
            "m_motor" => "m_motor.tipe_motor=penerimaan_motor.tipe");
        $filter['where'] = array('t_rekap_tagihan_detail.nomor_tagihan' => $no_tagihan);
        $filter['group_by'] = 't_kwitansi_leasing.nokwitansi';

        @$list = $this->t_rekap->get_dt_tables($table, $column_search, $column_filter, $filter);

        $no = isset($_POST['start']) ? $_POST['start'] : 0;
        $data = array();
        foreach ($list as $result) {
            $no++;
            $row = array();

            $row[] = "<button type='button' name='btnHapus' id='btnHapus' class='btn btn-danger btn-xs' onclick='hapusDetail(" . $result->id_kwitansi . ");'><i class='fa fa-remove'></i></button>";

            //$row[] = "";
            $row[] = $no;
            $row[] = date("d F Y", strtotime($result->tanggal));
            $row[] = $result->nokwitansi;
            $row[] = $result->nama_customer;
            //$row[] = $result->tipe;
            //$row[] = $result->nomsn;
            $row[] = $result->norangka;
            $row[] = formatrp($result->harga_otr);
            $row[] = formatrp($result->dp_system);
            $row[] = formatrp($result->subsidi1 + $result->subsidi2);
            $row[] = formatrp(($result->harga_otr - $result->dp_system) + ($result->subsidi1 + $result->subsidi2));
            $row[] = "<input type='text' name='price_list_" . $result->id_kwitansi . "' class='price_list' id='price_list_" . $result->id_kwitansi . "' value='".$result->price_list."'/>"; //$result->varian;

            $data[] = $row;
        }

        $output = array(
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : 0,
            "recordsTotal" => $this->t_rekap->count_all($table, $where = array($table . '.m_status' => 1)),
            "recordsFiltered" => $this->t_rekap->count_filtered($table, $column_search, $column_filter, $filter),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    function delete($id) {
        $this->main_model->delete('rekap_tagihan', array('id' => $id), array('status_gudang' => '3'));
        redirect("penjualan");
    }

    function delete_detail() {
        $idkwitansi = $this->input->post('id_kwitansi');

        $delete = $this->t_rekap->delete('t_rekap_tagihan_detail', $idkwitansi);
        $sukses = 0;
        if ($delete) {
            $update = $this->t_rekap->update_status_kwitansi($idkwitansi, 0);
            $sukses = $update <> false ? 1 : 0;
        }
        echo json_encode(array("success" => $sukses));
    }

    function save() {
        if ($this->input->post()) {
            $post = $this->input->post();

            $dtsession = $this->session->userdata('logged_in_admin');
            $input = [];
            foreach ($post['rtagihan'] as $rtagihan) {
                if ($rtagihan['name'] == "sisa_tagihan" || $rtagihan['name'] == "tot_tagihan") {
                    $value = explode(".", $rtagihan['value']);
                    $input[$rtagihan['name']] = (double) implode("", $value);
                } else {
                    $input[$rtagihan['name']] = $rtagihan['value'];
                }
            }
            $input['sys_create_user'] = $dtsession['id'];
            $input['sys_create_date'] = date('Y-m-d H:i:s');
            $input['m_status'] = 1;

            $result = $this->t_rekap->save_trekapan($input);
            
            $pricelist[] = "";
            foreach($post['price_list'] as $price_list){
                $idkwi = explode("_",$price_list['name']);
                $pricelist[$idkwi[2]] = $price_list['value'];
            }
            
            if ($result) {
                foreach ($post['kleasing'] as $kleasing) {
                    $ileasing['id_kwitansi'] = $kleasing;
                    $ileasing['nomor_tagihan'] = $input['no_tagihan'];
                    $ileasing['price_list'] = $pricelist[$kleasing];
                    $ileasing['sys_create_user'] = $dtsession['id'];
                    $ileasing['sys_create_date'] = date('Y-m-d H:i:s');
                    $ileasing['m_status'] = 1;

                    $result_detail = $this->t_rekap->save_trekapan_detail($ileasing);
                    $result_update = $this->t_rekap->update_kwitansi_leasing($ileasing['id_kwitansi'], 1);
                }

                $status = "success";
                $pesan = "Data success added !";
            } else {
                $status = "error";
                $pesan = "Data fail added !";
            }

            echo json_encode(array('status' => $status, 'pesan' => $pesan));
        } else {
            echo json_encode(array('status' => 'error', 'pesan' => 'Data still empty !'));
        }
    }

    function save_detail() {
        $post = $this->input->post();
        $dtsession = $this->session->userdata('logged_in_admin');

        $idkwitansi = explode(",", $post['id_kwitansi']);
        $no = 0;
        foreach ($idkwitansi as $kwitansi) {
            $ileasing['id_kwitansi'] = $kwitansi;
            $ileasing['nomor_tagihan'] = $post['no_tagihan'];
            $ileasing['sys_create_user'] = $dtsession['id'];
            $ileasing['sys_create_date'] = date('Y-m-d H:i:s');
            $ileasing['m_status'] = 1;

            $result_detail = $this->t_rekap->save_trekapan_detail($ileasing);
            if ($result_detail) {
                $result_update = $this->t_rekap->update_kwitansi_leasing($kwitansi, 1);
                $no++;
            }
        }
        if ($no === count($idkwitansi)) {
            echo json_encode(array('success' => 1, 'pesan' => 'Data sukses ditambah !'));
        } else {
            echo json_encode(array('success' => 0, 'pesan' => 'Data gagal ditambah !'));
        }
    }

    function update() {
        if ($this->input->post()) {
            $post = $this->input->post();

            $dtsession = $this->session->userdata('logged_in_admin');
            $input = [];
            foreach ($post['rtagihan'] as $rtagihan) {
                if ($rtagihan['name'] == "sisa_tagihan" || $rtagihan['name'] == "tot_tagihan") {
                    $value = explode(".", $rtagihan['value']);
                    $input[$rtagihan['name']] = (double) implode("", $value);
                } else {
                    if ($rtagihan['name'] == "cabang_leasing") {
                        $input[$rtagihan['name']] = $rtagihan['value'];
                    }
                }
            }
            $input['sys_update_user'] = $dtsession['id'];
            $input['sys_update_date'] = date('Y-m-d H:i:s');

            $result = $this->t_rekap->update_trekapan($input, $post['rtagihan'][1]['value']);
            if ($result) {

                foreach ($post['price_list'] as $price_list) {
                    $split_id = explode("_", $price_list['name']);
                    $idkwitansi = $split_id[2];
                    $pricelist[$split_id[0] . "_" . $split_id[1]] = $price_list['value'];
                    $result_detail = $this->t_rekap->update_trekapan_detail($pricelist, $idkwitansi);
                }

                echo json_encode(array('status' => 'success', 'pesan' => 'Data successed update !'));
            } else {
                echo json_encode(array('status' => 'error', 'pesan' => 'Data failed update !'));
            }
        } else {
            echo json_encode(array('status' => 'error', 'pesan' => 'Data still empty !'));
        }
    }

    function dt_leasing_json() {
        $post = $this->input->post();
        //print_r($post);die();

        $nmleasing = $this->t_rekap->get_leasing($post['kdleasing']);

        echo json_encode(array('leasing' => $nmleasing));
    }

    function get_list_kwitansi() {
        $tanggal_start = $this->input->get('tanggal_start');
        $tanggal_end = $this->input->get('tanggal_end');
        $kdleasing = $this->input->get('kdleasing');

        $table = 't_kwitansi_leasing';

        $column_search = array('t_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso', 't_kwitansi_leasing.dp_system', 't_kwitansi_leasing.tagih', 't_kwitansi_leasing.subsidi1', 't_kwitansi_leasing.subsidi2', 't_kwitansi_leasing.m_status', 't_kwitansi_leasing.sys_create_user', 't_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.status_rekap', 't_penjualan.nosj', 't_penjualan.nokonsumen', 't_penjualan.ktp', 't_penjualan.tanggal', 't_penjualan.nomsn', 't_penjualan.warna_motor', 't_penjualan.harga_otr', 'penerimaan_motor.norangka', 'penerimaan_motor.tipe', 'penerimaan_motor.warna', 'penerimaan_motor.tahun', 'penerimaan_motor.kdgudang', 'penerimaan_motor.tglupload', 't_harga_motor.cara_pembelian', 't_harga_motor.marketing', 't_harga_motor.leasing', 't_harga_motor.dp_system', 't_harga_motor.diskon', 't_harga_motor.tagih', 't_harga_motor.dp', 't_harga_motor.dp_system', 't_harga_motor.sisa_hutang', 't_harga_motor.dp_lunas', 't_harga_motor.fee', 'm_customer.nama_customer', 'm_customer.tempat_lahir_customer', 'm_customer.tanggal_lahir_customer', 'm_customer.kelamin_customer', 'm_customer.alamat_customer', 'm_customer.telepon_customer', 'm_customer.handphone_customer', 'm_customer.rt', 'm_customer.rw', 'm_customer.wilayah', 'm_customer.kelurahan', 'm_customer.kecamatan', 'm_motor.nama_motor', 'm_motor.varian', 'm_motor.merk', 'm_motor.url_foto');

        $column_filter = array('t_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.nokwitansi', 'm_customer.nama_customer', 'penerimaan_motor.tipe', 't_penjualan.nomsn', 'penerimaan_motor.norangka', 't_penjualan.harga_otr', 't_harga_motor.dp', 'm_motor.varian');

        $column_order = array(null, 't_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso');

        $filter['join'] = array("t_penjualan" => "t_penjualan.noso=t_kwitansi_leasing.noso",
            "penerimaan_motor" => "penerimaan_motor.nomesin=t_penjualan.nomsn",
            "t_harga_motor" => "t_harga_motor.noso=t_kwitansi_leasing.noso",
            "m_customer" => "m_customer.no_ktp=t_penjualan.ktp",
            "m_motor" => "m_motor.tipe_motor=penerimaan_motor.tipe");

        $filter['where'] = array('t_penjualan.sys_create_user' => $this->sessionGlobal['id'],
            't_harga_motor.leasing' => $kdleasing,
            't_kwitansi_leasing.status_rekap' => 0
        );

        if ($tanggal_start <> "") {
            $sWhereTgl = array('t_penjualan.tanggal >= ' => $tanggal_start,
                't_penjualan.tanggal <= ' => $tanggal_end);
            $filter['where'] = array_merge($sWhereTgl, $filter['where']);
        }

        @$list = $this->t_rekap->get_dt_tables($table, $column_search, $column_filter, $filter);

        $no = isset($_POST['start']) ? $_POST['start'] : 0;
        $data = array();
        foreach ($list as $result) {
            $no++;
            $row = array();

            $row[] = "<span align='center'><input type='checkbox' class='idkwitansileasing' value='" . $result->id . "'  /></span>";
            //$row[] = "";
            $row[] = $no;
            $row[] = date("d F Y", strtotime($result->sys_create_date));
            $row[] = $result->nokwitansi;
            $row[] = $result->nama_customer;
            //$row[] = $result->tipe;
            //$row[] = $result->nomsn;
            $row[] = $result->norangka;
            $row[] = formatrp($result->harga_otr);
            $row[] = formatrp($result->dp_system);
            $row[] = formatrp($result->subsidi1 + $result->subsidi2);
            $row[] = formatrp(($result->harga_otr - $result->dp_system) + ($result->subsidi1 + $result->subsidi2));
            //$row[] = "<input type='text' name='price_list_" . $result->id_kwitansi . "' class='price_list' id='price_list_" . $result->id_kwitansi . "' value='".$result->price_list."'/>"; //$result->varian;

            $data[] = $row;
        }

        $output = array(
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : 0,
            "recordsTotal" => $this->t_rekap->count_all($table, $where = array($table . '.m_status' => 1)),
            "recordsFiltered" => $this->t_rekap->count_filtered($table, $column_search, $column_filter, $filter),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    function get_list_kwitansi_leasing() {
        $tanggal_start = $this->input->get('tanggal_start');
        $tanggal_end = $this->input->get('tanggal_end');
        $kdleasing = $this->input->get('kdleasing');

        $table = 't_kwitansi_leasing';

        $column_search = array('t_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso', 't_kwitansi_leasing.dp_system', 't_kwitansi_leasing.tagih', 't_kwitansi_leasing.subsidi1', 't_kwitansi_leasing.subsidi2', 't_kwitansi_leasing.m_status', 't_kwitansi_leasing.sys_create_user', 't_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.status_rekap', 't_penjualan.nosj', 't_penjualan.nokonsumen', 't_penjualan.ktp', 't_penjualan.tanggal', 't_penjualan.nomsn', 't_penjualan.warna_motor', 't_penjualan.harga_otr', 'penerimaan_motor.norangka', 'penerimaan_motor.tipe', 'penerimaan_motor.warna', 'penerimaan_motor.tahun', 'penerimaan_motor.kdgudang', 'penerimaan_motor.tglupload', 't_harga_motor.cara_pembelian', 't_harga_motor.marketing', 't_harga_motor.leasing', 't_harga_motor.dp_system', 't_harga_motor.diskon', 't_harga_motor.tagih', 't_harga_motor.dp', 't_harga_motor.sisa_hutang', 't_harga_motor.dp_lunas', 't_harga_motor.fee', 'm_customer.nama_customer', 'm_customer.tempat_lahir_customer', 'm_customer.tanggal_lahir_customer', 'm_customer.kelamin_customer', 'm_customer.alamat_customer', 'm_customer.telepon_customer', 'm_customer.handphone_customer', 'm_customer.rt', 'm_customer.rw', 'm_customer.wilayah', 'm_customer.kelurahan', 'm_customer.kecamatan', 'm_motor.nama_motor', 'm_motor.varian', 'm_motor.merk', 'm_motor.url_foto');

        $column_filter = array('t_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.nokwitansi', 'm_customer.nama_customer', 'penerimaan_motor.tipe', 't_penjualan.nomsn', 'penerimaan_motor.norangka', 't_penjualan.harga_otr', 't_harga_motor.dp', 'm_motor.varian');

        $column_order = array(null, 't_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso');

        $filter['join'] = array("t_penjualan" => "t_penjualan.noso=t_kwitansi_leasing.noso",
            "penerimaan_motor" => "penerimaan_motor.nomesin=t_penjualan.nomsn",
            "t_harga_motor" => "t_harga_motor.noso=t_kwitansi_leasing.noso",
            "m_customer" => "m_customer.no_ktp=t_penjualan.ktp",
            "m_motor" => "m_motor.tipe_motor=penerimaan_motor.tipe");

        $filter['where'] = array('t_penjualan.sys_create_user' => $this->sessionGlobal['id'],
            't_harga_motor.leasing' => $kdleasing
        );

        if ($tanggal_start <> "") {
            $sWhereTgl = array('t_penjualan.tanggal >= ' => $tanggal_start,
                't_penjualan.tanggal <= ' => $tanggal_end);
            $filter['where'] = array_merge($sWhereTgl, $filter['where']);
        }

        @$list = $this->t_rekap->get_dt_tables($table, $column_search, $column_filter, $filter);

        $no = isset($_POST['start']) ? $_POST['start'] : 0;
        $data = array();
        foreach ($list as $result) {
            $no++;
            $row = array();

            $row[] = "<span align='center'><input type='checkbox' class='idkwitansileasing' value='" . $result->id . "'  /></span>";
            //$row[] = "";
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
            $row[] = "<input type='text' name='price_list_" . $result->id_kwitansi . "' class='price_list' id='price_list_" . $result->id_kwitansi . "' value='".$result->price_list."'/>"; //$result->varian;

            $data[] = $row;
        }

        $output = array(
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : 0,
            "recordsTotal" => $this->t_rekap->count_all($table, $where = array($table . '.m_status' => 1)),
            "recordsFiltered" => $this->t_rekap->count_filtered($table, $column_search, $column_filter, $filter),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    function get_rekap_tagihan() {
        $idkwitansi_leasing = explode(",", $this->input->get('dt'));

        $table = 't_kwitansi_leasing';
        $column_search = array('t_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso', 't_kwitansi_leasing.dp_system', 't_kwitansi_leasing.tagih', 't_kwitansi_leasing.subsidi1', 't_kwitansi_leasing.subsidi2', 't_kwitansi_leasing.m_status', 't_kwitansi_leasing.sys_create_user', 't_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.status_rekap', 't_penjualan.nosj', 't_penjualan.nokonsumen', 't_penjualan.ktp', 't_penjualan.tanggal', 't_penjualan.nomsn', 't_penjualan.warna_motor', 't_penjualan.harga_otr', 'penerimaan_motor.norangka', 'penerimaan_motor.tipe', 'penerimaan_motor.warna', 'penerimaan_motor.tahun', 'penerimaan_motor.kdgudang', 'penerimaan_motor.tglupload', 't_harga_motor.cara_pembelian', 't_harga_motor.marketing', 't_harga_motor.leasing', 't_harga_motor.dp_system', 't_harga_motor.diskon', 't_harga_motor.tagih', 't_harga_motor.dp', 't_harga_motor.sisa_hutang', 't_harga_motor.dp_lunas', 't_harga_motor.fee', 'm_customer.nama_customer', 'm_customer.tempat_lahir_customer', 'm_customer.tanggal_lahir_customer', 'm_customer.kelamin_customer', 'm_customer.alamat_customer', 'm_customer.telepon_customer', 'm_customer.handphone_customer', 'm_customer.rt', 'm_customer.rw', 'm_customer.wilayah', 'm_customer.kelurahan', 'm_customer.kecamatan', 'm_motor.nama_motor', 'm_motor.varian', 'm_motor.merk', 'm_motor.url_foto, t_kwitansi_leasing.id as id_kwitansi, t_rekap_tagihan_detail.price_list');
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
            //$row[] = $result->tipe;
            //$row[] = $result->nomsn;
            $row[] = $result->norangka;
            $row[] = formatrp($result->harga_otr);
            $row[] = formatrp($result->dp_system);
            $row[] = formatrp($result->subsidi1 + $result->subsidi2);
            $row[] = formatrp(($result->harga_otr - $result->dp_system) + ($result->subsidi1 + $result->subsidi2));
            $row[] = "<input type='text' name='price_list_" . $result->id_kwitansi . "' class='price_list' id='price_list_" . $result->id_kwitansi . "' value='".$result->price_list."'/>"; //$result->varian;

            $data[] = $row;
        }

        $output = array(
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : 0,
            "recordsTotal" => $this->t_rekap->count_all($table, $where = array($table . '.m_status' => 1)),
            "recordsFiltered" => $this->t_rekap->count_filtered($table, $column_search, $column_filter, $filter),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    function get_rekap_tagihan_edit() {
        $idkwitansi_leasing = explode(",", $this->input->get('dt'));
        $idkwitansi_leasing_uncheck = explode(",", $this->input->get('dtuncheck'));

        $table = 't_kwitansi_leasing';
        $column_search = array('t_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso', 't_kwitansi_leasing.dp_system', 't_kwitansi_leasing.tagih', 't_kwitansi_leasing.subsidi1', 't_kwitansi_leasing.subsidi2', 't_kwitansi_leasing.m_status', 't_kwitansi_leasing.sys_create_user', 't_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.status_rekap', 't_penjualan.nosj', 't_penjualan.nokonsumen', 't_penjualan.ktp', 't_penjualan.tanggal', 't_penjualan.nomsn', 't_penjualan.warna_motor', 't_penjualan.harga_otr', 'penerimaan_motor.norangka', 'penerimaan_motor.tipe', 'penerimaan_motor.warna', 'penerimaan_motor.tahun', 'penerimaan_motor.kdgudang', 'penerimaan_motor.tglupload', 't_harga_motor.cara_pembelian', 't_harga_motor.marketing', 't_harga_motor.leasing', 't_harga_motor.dp_system', 't_harga_motor.diskon', 't_harga_motor.tagih', 't_harga_motor.dp', 't_harga_motor.sisa_hutang', 't_harga_motor.dp_lunas', 't_harga_motor.fee', 'm_customer.nama_customer', 'm_customer.tempat_lahir_customer', 'm_customer.tanggal_lahir_customer', 'm_customer.kelamin_customer', 'm_customer.alamat_customer', 'm_customer.telepon_customer', 'm_customer.handphone_customer', 'm_customer.rt', 'm_customer.rw', 'm_customer.wilayah', 'm_customer.kelurahan', 'm_customer.kecamatan', 'm_motor.nama_motor', 'm_motor.varian', 'm_motor.merk', 'm_motor.url_foto');
        $column_order = array(null, 't_kwitansi_leasing.id', 't_kwitansi_leasing.nokwitansi', 't_kwitansi_leasing.noso');

        $column_filter = array('t_kwitansi_leasing.sys_create_date', 't_kwitansi_leasing.nokwitansi', 'm_customer.nama_customer', 'penerimaan_motor.tipe', 't_penjualan.nomsn', 'penerimaan_motor.norangka', 't_penjualan.harga_otr', 't_harga_motor.dp', 'm_motor.varian');

        $filter['join'] = array("t_penjualan" => "t_penjualan.noso=t_kwitansi_leasing.noso",
            "penerimaan_motor" => "penerimaan_motor.nomesin=t_penjualan.nomsn",
            "t_harga_motor" => "t_harga_motor.noso=t_kwitansi_leasing.noso",
            "m_customer" => "m_customer.no_ktp=t_penjualan.ktp",
            "m_motor" => "m_motor.tipe_motor=penerimaan_motor.tipe");
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
            $row[] = "<input type='text' name='price_list_" . $result->id_kwitansi . "' class='price_list' id='price_list_" . $result->id_kwitansi . "' value='".$result->price_list."'/>"; //$result->varian;

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

    public function print_rekap_tagihan() {
        $notagihan = $this->input->get('notagihan');

        $data['rkwitansi'] = $this->main_model->getMaster($this->table, $like = array(), $where = array('no_tagihan' => $notagihan));
        $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('kd_leasing' => $data['rkwitansi'][0]['kdleasing'], 'status_leasing' => '1'));

        $data['rekap_detail'] = $this->main_model->getMaster('t_rekap_tagihan_detail', $like = array(), $where = array('nomor_tagihan' => $data['rkwitansi'][0]['no_tagihan']));

        $data['list_rekapan'] = $this->t_rekap->get_rekap_kwitansi_leasing($data['rkwitansi'][0]['no_tagihan'])->result_array();

        $this->load->view('leasing/rekap_tagihan/print_rekap_tagihan', $data);
    }

    public function detail($id) {
        $data['notagihan'] = '';
        $this->breadcrumbs->push('Edit', '/rekap-tagihan-edit-' . $id);

        $data['rkwitansi'] = $this->main_model->getMaster($this->table, $like = array(), $where = array('id' => $id));
        $data['dtleasing'] = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('kd_leasing' => $data['rkwitansi'][0]['kdleasing'], 'status_leasing' => '1'));

        $data['rekap_detail'] = $this->main_model->getMaster('t_rekap_tagihan_detail', $like = array(), $where = array('nomor_tagihan' => $data['rkwitansi'][0]['no_tagihan'], 'status_rekap' => 1));

        $data['view'] = "leasing/" . $this->router->fetch_class() . "/print-form-edit";

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

    public function print_pdf() {
        //echo $id;
        //die();

        $data['template'] = array("template" => "leasing/rekap_tagihan/table_pdf", "filename" => "Rekap Kwitansi Leasing PDF");
        $data['list'] = $this->t_rekap->getdata($this->table, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        //$data['parsing'] = $this->t_kwitansi->get_print_fee($id);
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
        $data['list'] = $this->t_rekap->getdata($this->table, 0, 1000, $like = array(), $where = array('m_status!=' => '3'));
        $this->load->view('template_excel', $data);
    }

    public function get_list_motor() {
        $table = 'm_motor';
        $column_order = array(null, 'id', 'nomsn', 'norangka', 'nama_motor', 'warna', 'tahun', 'varian', 'harga_otr');
        $column_search = array('id', 'nomsn', 'norangka', 'nama_motor', 'warna', 'tahun', 'varian', 'harga_otr');
        $list = $this->m_datatable->get_datatables($table, $column_order, $column_search, $order = array('id' => 'asc'));
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $result) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $result->id;
            $row[] = $result->nomsn;
            $row[] = $result->norangka;
            $row[] = $result->nama_motor;
            $row[] = $result->warna;
            $row[] = $result->tahun;
            $row[] = $result->varian;
            $row[] = formatrp($result->harga_otr);

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_datatable->count_all($table),
            "recordsFiltered" => $this->m_datatable->count_filtered($table, $column_order, $column_search, $order = array('id' => 'asc')),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    function load_cpembelian($cpembelian = "") {
        switch ($cpembelian) {
            case "Cash":
                $this->load->view('rekap_tagihan/pembelian_cash');
                break;
            case "Kredit":
                $data['dtleasing'] = $this->rekap_tagihan->getdata('m_leasing', 0, 1000, $like = array(), $where = array('status_leasing!=' => '3'));
                $this->load->view('rekap_tagihan/pembelian_kredit', $data);
                break;
            default:
                $this->load->view('rekap_tagihan/pembelian_cash');
                break;
        }
    }

    function load_transaction_by_noso() {
        $noso = $this->input->post('noso');
        $result = $this->t_penjualan->getdata_transaction_by_noso($noso);
        echo json_encode($result);
    }

    function get_detail_rekap_with_notagihan() {
        $notagih = $this->input->post('notagih');
        $kodeleasing = $this->input->post('kodeleasing');

        $dtleasing = $this->main_model->getMaster('m_leasing', $like = array(), $where = array('kd_leasing' => $kodeleasing, 'status_leasing' => '1'));

        $detail_rekap = $this->main_model->getMaster('t_rekap_tagihan_detail', $like = array(), $where = array('nomor_tagihan' => $notagih));

        $id_kwitansi = array();
        foreach ($detail_rekap as $drekap) {
            $id_kwitansi[] = (int) $drekap['id_kwitansi'];
        }


        $kwitansi_rekap = $this->t_rekap->get_kwitansi_rekap($id_kwitansi);

        echo json_encode($kwitansi_rekap);
    }

}
