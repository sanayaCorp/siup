<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

	/*public function index()
	{
		$this->render('home');
	}*/
	function __construct()
    {
        parent::__construct();
        $this->load->model('Siup_order_model');
        $this->load->library(array('form_validation','form_builder'));
    }

    public function index()
    {
       /* $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'siup_order/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'siup_order/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'siup_order/index.html';
            $config['first_url'] = base_url() . 'siup_order/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Siup_order_model->total_rows($q);
        $siup_order = $this->Siup_order_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'siup_order_data' => $siup_order,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        */
       //$this->render('Admin');
       header('location:'.base_url().'admin/login');
    }

}
