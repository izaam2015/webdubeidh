<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Plazas_beca extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Plazas_beca_model');
    } 

    /*
     * Listing of plazas_becas
     */
    function index()
    {
        $data['plazas_becas'] = $this->Plazas_beca_model->get_all_plazas_becas();
        
        $data['_view'] = 'plazas_beca/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new plazas_beca
     */
    /*function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('plaza_cantidad','Plaza Cantidad','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'beca_id' => $this->input->post('beca_id'),
				'convocatoria_id' => $this->input->post('convocatoria_id'),
				'plaza_cantidad' => $this->input->post('plaza_cantidad'),
            );
            
            $plazas_beca_id = $this->Plazas_beca_model->add_plazas_beca($params);
            redirect('plazas_beca/index');
        }
        else
        {
			$this->load->model('Beca_model');
			$data['all_beca'] = $this->Beca_model->get_all_beca();

			$this->load->model('Convocatorium_model');
			$data['all_convocatoria'] = $this->Convocatorium_model->get_all_convocatoria();
            
            $data['_view'] = 'plazas_beca/add';
            $this->load->view('layouts/main',$data);
        }
    }*/

    /*
     * Editing a plazas_beca
     */
    /*function edit($plaza_id)
    {   
        // check if the plazas_beca exists before trying to edit it
        $data['plazas_beca'] = $this->Plazas_beca_model->get_plazas_beca($plaza_id);
        
        if(isset($data['plazas_beca']['plaza_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('plaza_cantidad','Plaza Cantidad','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'beca_id' => $this->input->post('beca_id'),
					'convocatoria_id' => $this->input->post('convocatoria_id'),
					'plaza_cantidad' => $this->input->post('plaza_cantidad'),
                );

                $this->Plazas_beca_model->update_plazas_beca($plaza_id,$params);            
                redirect('plazas_beca/index');
            }
            else
            {
				$this->load->model('Beca_model');
				$data['all_beca'] = $this->Beca_model->get_all_beca();

				$this->load->model('Convocatorium_model');
				$data['all_convocatoria'] = $this->Convocatorium_model->get_all_convocatoria();

                $data['_view'] = 'plazas_beca/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The plazas_beca you are trying to edit does not exist.');
    }*/

    /*
     * Deleting plazas_beca
     */
    /*function remove($plaza_id)
    {
        $plazas_beca = $this->Plazas_beca_model->get_plazas_beca($plaza_id);

        // check if the plazas_beca exists before trying to delete it
        if(isset($plazas_beca['plaza_id']))
        {
            $this->Plazas_beca_model->delete_plazas_beca($plaza_id);
            redirect('plazas_beca/index');
        }
        else
            show_error('The plazas_beca you are trying to delete does not exist.');
    }*/
    
}