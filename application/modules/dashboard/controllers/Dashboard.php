<?php

class Dashboard extends MX_Controller {
    /*  $autoload = array(
      'helper'    => array('url', 'form'),
      'libraries' => array('email'),
      ); */

    // var $table = "t_stnk";

    public function __construct() {
        parent::__construct();
        //set breadcrumb
        $this->load->library('Auth_log');
        $this->breadcrumbs->push('Dashboard', '/home');

        $this->load->model('m_dashboard');
    }

    public function index() {
        // $stnk_selesai = $this->m_dashboard->stnk_selesai();
        $data = array(
            'count_all' => $this->m_dashboard->count_all(),
            'stnk_selesai' => $this->m_dashboard->stnk_selesai(),
            'bpkb_selesai' => $this->m_dashboard->bpkb_selesai(),
            'pembayaran_konsumen' => $this->m_dashboard->pembayaran_konsumen(),
            'tagihan_leasing' => $this->m_dashboard->tagihan_leasing()
        );
        $data['view'] = 'dashboard/main';
        $this->load->view('default', $data);
    }
    
    function list_stnk(){
        $this->load->view('dashboard/list_stnk');
    }

    function jlist_stnk() {
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

        $this->db->select('a.id,a.no_so,a.no_process,a.stnk_process_date,a.stnk_estimate_date,b.t_stnk_ktp,b.t_stnk_nama', false);
        $this->db->from('t_stnk a');
        $this->db->join('t_stnk_customer b', 'b.t_stnk_id=a.id', 'left');

        $this->db->where('a.stnk_estimate_date', date('Y-m-d'));

        if ($searchField <> NULL and $searchField <> "" and $searchField <> "all") {
            switch ($searchField) {
                case 't_stnk_ktp':
                case 't_stnk_nama':
                    $this->db->like('b.' . $searchField, $searchValue);
                    break;
                default:
                    $this->db->like('a.' . $searchField, $searchValue);
                    break;
            }
        }

        $this->db->limit($lmt);
        $this->db->offset($offset);

        if ($sort <> NULL) {
            $this->db->order_by($sort);
        } else {
            $this->db->order_by('a.id', 'desc');
        }

        $query = $this->db->get();

        $boot['rows'] = $query->result();
        $boot['total'] = $query->num_rows();

        echo json_encode($boot);
    }
    
    function list_bpkb(){
        $this->load->view('dashboard/list_bpkb');
    }
    
    function jlist_bpkb() {
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

        $this->db->select('a.id,a.no_so,a.no_process,a.bpkb_process_date,a.bpkb_estimate_date,b.t_stnk_ktp,b.t_stnk_nama', false);
        $this->db->from('t_stnk a');
        $this->db->join('t_stnk_customer b', 'b.t_stnk_id=a.id', 'left');

        $this->db->where('a.bpkb_estimate_date', date('Y-m-d'));

        if ($searchField <> NULL and $searchField <> "" and $searchField <> "all") {
            switch ($searchField) {
                case 't_stnk_ktp':
                case 't_stnk_nama':
                    $this->db->like('b.' . $searchField, $searchValue);
                    break;
                default:
                    $this->db->like('a.' . $searchField, $searchValue);
                    break;
            }
        }

        $this->db->limit($lmt);
        $this->db->offset($offset);

        if ($sort <> NULL) {
            $this->db->order_by($sort);
        } else {
            $this->db->order_by('a.id', 'desc');
        }

        $query = $this->db->get();

        $boot['rows'] = $query->result();
        $boot['total'] = $query->num_rows();

        echo json_encode($boot);
    }

}
