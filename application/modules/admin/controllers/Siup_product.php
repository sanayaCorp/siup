<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siup_product extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siup_product_model');
        $this->load->library(array('form_validation','form_builder'));
    }

    public function index()
    {
        $crud = $this->generate_crud('siup_product');
        $crud->columns('id_product', 'desc', 'id_kemasan');
        $this->unset_crud_fields('added_by', 'changed_by','last_modified');

        // only webmaster and admin can change member groups
        if ($crud->getState()=='list' || $this->ion_auth->in_group(array('webmaster', 'admin')))
        {
            //    $crud->set_relation_n_n('id_kemasan', 'siup_kemasan', 'siup_kemasan', 'id_kemasan', 'desc');
        }

        // only webmaster and admin can reset user password
        if ($this->ion_auth->in_group(array('webmaster', 'admin')))
        {
                $crud->add_action('Add Kemasan', '', 'admin/siup_kemasan/', 'fa fa-repeat');
        }
		
		$crud->set_relation('id_kemasan','siup_kemasan','desc');
        // disable direct create / delete Frontend User
        //$crud->unset_add();
        //$crud->unset_delete();

        $this->mTitle = 'Data Product';
        $this->render_crud();
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
    	$form = $this->form_builder->create_form();
    	
    	if($form->validate()) {
			// passed validation
			$id_product = $this->input->post('id_product');
			$desc = $this->input->post('desc');
			$id_kemasan = $this->input->post('kemasan');
			
			// [IMPORTANT] override database tables to update Frontend Users instead of Admin Users
			/*$this->ion_auth_model->tables = array(
				'users'				=> 'users',
				'groups'			=> 'groups',
				'users_groups'		=> 'users_groups',
				'login_attempts'	=> 'login_attempts',
			);

			// proceed to create user
			$user_id = $this->ion_auth->register($identity, $password, $email, $additional_data, $groups);			
			if ($user_id)
			{
				// success
				$messages = $this->ion_auth->messages();
				$this->system_message->set_success($messages);

				// directly activate user
				$this->ion_auth->activate($user_id);
			}
			else
			{
				// failed
				$errors = $this->ion_auth->errors();
				$this->system_message->set_error($errors);
			}*/
			
			$data = array(           
	    		'id_product' => set_value('id_product'),
	    		'desc' => set_value('desc'),
	    		'id_kemasan' => set_value('id_kemasan'),
	    		'changed_by' => set_value('changed_by'),
	    		'added_by' => set_value('added_by'),
	    		'last_modified' => set_value('last_modified'),
	    	);
	    	
			$product = $this->Siup_product_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
			refresh();
		}

		// get list of Frontend kemasan
		$this->load->model('Siup_kemasan_model', 'kemasan');
		$this->mViewData['kemasan'] = $this->kemasan->get_all();
		
		$this->mTitle = 'Create Product';

		$this->mViewData['form'] = $form;
		$this->render('product/create');
					
        /*$data = array(
            'button' => 'Create',
            'action' => site_url('siup_product/create_action'),
	    'id_product' => set_value('id_product'),
	    'desc' => set_value('desc'),
	    'id_kemasan' => set_value('id_kemasan'),
	    'changed_by' => set_value('changed_by'),
	    'added_by' => set_value('added_by'),
	    'last_modified' => set_value('last_modified'),
	);
        $this->load->view('siup_product_form', $data);*/
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