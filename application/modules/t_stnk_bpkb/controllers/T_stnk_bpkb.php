<?php
class T_stnk_bpkb extends MX_Controller {
    //put your code here
    var $table = "t_stnk_bpkb";
    function __construct() {
        parent::__construct();
        
        $this->load->model(array('M_t_stnk_bpkb' => 't_stnk_bpkb', 'Datatable_model' => 'm_datatable'));
        $this->load->library(array('upload', 'encrypt', 'Printpdf', 'Auth_log'));
        
        //set breadcrumb
        $this->breadcrumbs->push('Transaksi STNK & BPKB', '/stnk-bpkb');
    }
    
    public function add() {
        $this->breadcrumbs->push('Add', '/t_stnk_bpkb');
        $data['codeso'] = $this->main_model->generate_code($this->table, 'SB-' . date('Y') .'-'. date('m') , '-', 6, $date = false, $loop = false);
        $data['view'] = "t_stnk_bpkb/add";
        $this->load->view('default', $data);
    }
    
    public function getSO(){
        $query = $this->input->get('query');
        $data = $this->t_stnk_bpkb->getNOSO($query);
        echo json_encode($data);
    }
    
    public function getNOPRO(){
        $hasil = $this->input->get('hasil');
        $data = $this->t_stnk_bpkb->getNOPRO($hasil);
        echo json_encode($data);
    }
    
    public function save_proses(){
         if ($_POST) {
            if ($this->t_stnk_bpkb->save_proses()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("stnk");
        } else {
            show_404();
        }
    }
    
    public function save_tt(){
        if ($_POST) {
            if ($this->t_stnk_bpkb->save_tt()) {
                $this->session->set_flashdata('success', 'Data Berhasil Di Simpan !');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Simpan !');
            }
            redirect("stnk");
        } else {
            show_404();
        }
    }
    
    public function pro_est_date_stnk(){
        $tgl_proses_stnk = $this->input->post('tgl_proses_stnk');
        $tgl2 = date('Y-m-d', strtotime('+14 days', strtotime($tgl_proses_stnk))); //operasi penjumlahan tanggal sebanyak 6 hari
        echo $tgl2;
    }
    
    function terbilang(){
        $nominal = $this->input->post('nominal');
        $terbilang = terbilang($nominal);
        echo $terbilang;
    }
    
   public function pro_est_date_bpkb(){
        $tgl_proses_bpkb = $this->input->post('tgl_proses_bpkb');       
        $tgl2 = date('Y-m-d', strtotime('+90 days', strtotime($tgl_proses_bpkb))); //operasi penjumlahan tanggal sebanyak 6 hari
        echo $tgl2;
    }
    
    public function get_sales_order(){
        $query = $this->input->get('query');
        $so_exist = $this->main_model->getMaster('t_stnk', $like=array(), $where=array('m_status'=>'1'));
        $where_not_in = array();
        foreach($so_exist as $k=>$v){
            $where_not_in[] = $v['noso'];
        }
        $so_implode = "'" . implode("', '", $where_not_in) . "'";
        $data = $this->db->query("SELECT * FROM t_penjualan WHERE noso LIKE '%$query%' AND m_status='1' AND noso NOT IN ($so_implode)")->result_array();
        echo json_encode($data);
    }
    
    public function get_detail_so(){
        $id = $this->input->post('id');
        $data['penjualan'] = $this->main_model->getMaster('t_penjualan', $like=array(), $where=array('id'=>$id));
        $data['customer'] = $this->main_model->getMaster('m_customer', $like=array(), $where=array('no_ktp'=>$data['penjualan'][0]['ktp']));
        $data['terima_motor'] = $this->main_model->getMaster('penerimaan_motor', $like=array(), $where=array('nomesin'=>$data['penjualan'][0]['nomsn']));
        $data['master_motor'] = $this->main_model->getMaster('m_motor', $like=array(), $where=array('tipe_motor'=>$data['terima_motor'][0]['tipe']));
        $data['master_harga_motor'] = $this->main_model->getMaster('t_harga_motor', $like=array(), $where=array('noso'=>$data['penjualan'][0]['noso']));
        echo json_encode($data);
    }
    
}
