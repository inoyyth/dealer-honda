<?php

class T_kwitansidp extends MX_Controller {

    var $table = "t_pembayaran";

    public function __construct() {
        parent::__construct();

        $this->load->model(array('M_t_kwitansi' => 'mt_kwitansi', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));

        //set breadcrumb
        $this->breadcrumbs->push('Transaksi Kwitansi', '/kwitansi-dp');
    }

    public function index() {
        $data_session = $this->__getSession();
        $config['base_url'] = base_url() . 'kwitansi-dp';
        $config['total_rows'] = $this->main_model->countdata($this->table, $where = array());
        $config['per_page'] = (!empty($data_session['page']) ? $data_session['page'] : 10);
        $config['uri_segment'] = 2;
        $limit = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['data'] = $this->mt_kwitansi->getdata_dp($this->table, $limit, $config['per_page'], $like = $data_session, $where = array());
        //$data['data'] = $this->mt_kwitansi->getdata_dp();
        $data['sr_data'] = $data_session;
        $data['view'] = 't_kwitansi/kwitansi_dp/main';
        $this->load->view('default', $data);
    }

    public function getSO() {
        $query = $this->input->get('query');
        $data = $this->db->query("SELECT * FROM t_penjualan WHERE noso LIKE '%$query%' AND m_status='1'")->result_array();
        echo json_encode($data);
    }

    public function __getSession() {
        if ($_POST) {
            return $data = array(
                'page' => set_session_table_search('page', $this->input->get_post('page', TRUE)),
                'nokwitansi' => set_session_table_search('nokwitansi', $this->input->get_post('nokwitansi', TRUE)),
                'a.noso' => set_session_table_search('noso', $this->input->get_post('noso', TRUE)),
                'nama_customer' => set_session_table_search('nama_customer', $this->input->get_post('nama_customer', TRUE)),
                'tgl_dp' => set_session_table_search('tgl_dp', $this->input->get_post('tgl_dp', TRUE)),
                'nominal' => set_session_table_search('nominal', $this->input->get_post('nominal', TRUE)),
                'transaksi' => set_session_table_search('transaksi', $this->input->get_post('transaksi', TRUE))
            );
        } else {
            return $data = array(
                'page' => $this->session->userdata('page'),
                'nokwitansi' => $this->session->userdata('nokwitansi'),
                'a.noso' => $this->session->userdata('noso'),
                'nama_customer' => $this->session->userdata('nama_customer'),
                'tgl_dp' => $this->session->userdata('tgl_dp'),
                'nominal' => $this->session->userdata('nominal'),
                'transaksi' => $this->session->userdata('transaksi')
            );
        }
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/kwitansi-dp');
        $data['nokwitansi'] = $this->main_model->generate_code($this->table, 'KWT/KD/' . date('Y') . '/' . romanic_number(date('m')), '/', 6, $date = false, $loop = true);
        $data['view'] = "t_kwitansi/kwitansi_dp/add";
        $this->load->view('default', $data);
    }
    
    public function save() {
        if ($_POST) {
            if ($this->mt_kwitansi->save_proses()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("kwitansi-dp");
        } else {
            show_404();
        }
    }
    
    public function get_detail_so($id=null) {
        if($id == null){
            $id = $this->input->post('id');
        }
        $data['penjualan'] = $this->main_model->getMaster('t_penjualan', $like = array(), $where = array('id' => $id));
        $data['customer'] = $this->main_model->getMaster('m_customer', $like = array(), $where = array('no_ktp' => $data['penjualan'][0]['ktp']));
        $data['terima_motor'] = $this->main_model->getMaster('penerimaan_motor', $like = array(), $where = array('nomesin' => $data['penjualan'][0]['nomsn']));
        $data['master_motor'] = $this->main_model->getMaster('m_motor', $like = array(), $where = array('tipe_motor' => $data['terima_motor'][0]['tipe']));
        $data['master_harga_motor'] = $this->main_model->getMaster('t_harga_motor', $like = array(), $where = array('noso' => $data['penjualan'][0]['noso']));
        $data['total_bayar'] = $this->mt_kwitansi->getTotalBayar($data['penjualan'][0]['noso']);
        
        $jumTransaksi = array('2'=>'DP2','3'=>'DP3','4'=>'DP4 / Pelunasan');
        $currentTransaksi = $data['total_bayar']['maxdp'];
        for($i=1;$i<=$currentTransaksi;$i++){
            unset($jumTransaksi[$i]);
        }
        
        $transaksiList = "<option value='' selected>==pilih==</option>";
        foreach($jumTransaksi as $k=>$v){
            $transaksiList .= "<option value='".$k."'>".$v."</option>";
        }
        $data['transaksi'] = $transaksiList;
        echo json_encode($data);
    }
    
    function terbilang() {
        $nominal = $this->input->post('nominal');
        $terbilang = terbilang($nominal);
        echo $terbilang;
    }

}
