<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siup_product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siup_product_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'siup_product/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'siup_product/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'siup_product/index.html';
            $config['first_url'] = base_url() . 'siup_product/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Siup_product_model->total_rows($q);
        $siup_product = $this->Siup_product_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'siup_product_data' => $siup_product,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('siup_product_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Siup_product_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_product' => $row->id_product,
		'desc' => $row->desc,
		'id_kemasan' => $row->id_kemasan,
		'changed_by' => $row->changed_by,
		'added_by' => $row->added_by,
		'last_modified' => $row->last_modified,
	    );
            $this->load->view('siup_product_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('siup_product'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('siup_product/create_action'),
	    'id_product' => set_value('id_product'),
	    'desc' => set_value('desc'),
	    'id_kemasan' => set_value('id_kemasan'),
	    'changed_by' => set_value('changed_by'),
	    'added_by' => set_value('added_by'),
	    'last_modified' => set_value('last_modified'),
	);
        $this->load->view('siup_product_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'desc' => $this->input->post('desc',TRUE),
		'id_kemasan' => $this->input->post('id_kemasan',TRUE),
		'changed_by' => $this->input->post('changed_by',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'last_modified' => $this->input->post('last_modified',TRUE),
	    );

            $this->Siup_product_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('siup_product'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Siup_product_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('siup_product/update_action'),
		'id_product' => set_value('id_product', $row->id_product),
		'desc' => set_value('desc', $row->desc),
		'id_kemasan' => set_value('id_kemasan', $row->id_kemasan),
		'changed_by' => set_value('changed_by', $row->changed_by),
		'added_by' => set_value('added_by', $row->added_by),
		'last_modified' => set_value('last_modified', $row->last_modified),
	    );
            $this->load->view('siup_product_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('siup_product'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_product', TRUE));
        } else {
            $data = array(
		'desc' => $this->input->post('desc',TRUE),
		'id_kemasan' => $this->input->post('id_kemasan',TRUE),
		'changed_by' => $this->input->post('changed_by',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'last_modified' => $this->input->post('last_modified',TRUE),
	    );

            $this->Siup_product_model->update($this->input->post('id_product', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('siup_product'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Siup_product_model->get_by_id($id);

        if ($row) {
            $this->Siup_product_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('siup_product'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('siup_product'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('desc', 'desc', 'trim|required');
	$this->form_validation->set_rules('id_kemasan', 'id kemasan', 'trim|required');
	$this->form_validation->set_rules('changed_by', 'changed by', 'trim|required');
	$this->form_validation->set_rules('added_by', 'added by', 'trim|required');
	$this->form_validation->set_rules('last_modified', 'last modified', 'trim|required');

	$this->form_validation->set_rules('id_product', 'id_product', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Siup_product.php */
/* Location: ./application/controllers/Siup_product.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-28 17:17:20 */
/* http://harviacode.com */