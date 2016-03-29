<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siup_kemasan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siup_kemasan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'siup_kemasan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'siup_kemasan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'siup_kemasan/index.html';
            $config['first_url'] = base_url() . 'siup_kemasan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Siup_kemasan_model->total_rows($q);
        $siup_kemasan = $this->Siup_kemasan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'siup_kemasan_data' => $siup_kemasan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('siup_kemasan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Siup_kemasan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kemasan' => $row->id_kemasan,
		'desc' => $row->desc,
		'added_by' => $row->added_by,
		'changed_by' => $row->changed_by,
		'last_modified' => $row->last_modified,
	    );
            $this->load->view('siup_kemasan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('siup_kemasan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('siup_kemasan/create_action'),
	    'id_kemasan' => set_value('id_kemasan'),
	    'desc' => set_value('desc'),
	    'added_by' => set_value('added_by'),
	    'changed_by' => set_value('changed_by'),
	    'last_modified' => set_value('last_modified'),
	);
        $this->load->view('siup_kemasan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'desc' => $this->input->post('desc',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'changed_by' => $this->input->post('changed_by',TRUE),
		'last_modified' => $this->input->post('last_modified',TRUE),
	    );

            $this->Siup_kemasan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('siup_kemasan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Siup_kemasan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('siup_kemasan/update_action'),
		'id_kemasan' => set_value('id_kemasan', $row->id_kemasan),
		'desc' => set_value('desc', $row->desc),
		'added_by' => set_value('added_by', $row->added_by),
		'changed_by' => set_value('changed_by', $row->changed_by),
		'last_modified' => set_value('last_modified', $row->last_modified),
	    );
            $this->load->view('siup_kemasan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('siup_kemasan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kemasan', TRUE));
        } else {
            $data = array(
		'desc' => $this->input->post('desc',TRUE),
		'added_by' => $this->input->post('added_by',TRUE),
		'changed_by' => $this->input->post('changed_by',TRUE),
		'last_modified' => $this->input->post('last_modified',TRUE),
	    );

            $this->Siup_kemasan_model->update($this->input->post('id_kemasan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('siup_kemasan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Siup_kemasan_model->get_by_id($id);

        if ($row) {
            $this->Siup_kemasan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('siup_kemasan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('siup_kemasan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('desc', 'desc', 'trim|required');
	$this->form_validation->set_rules('added_by', 'added by', 'trim|required');
	$this->form_validation->set_rules('changed_by', 'changed by', 'trim|required');
	$this->form_validation->set_rules('last_modified', 'last modified', 'trim|required');

	$this->form_validation->set_rules('id_kemasan', 'id_kemasan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Siup_kemasan.php */
/* Location: ./application/controllers/Siup_kemasan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-03-28 17:17:20 */
/* http://harviacode.com */