<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Beca extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Beca_model');
        if ($this->session->userdata('logged_in')) {
            $this->session_data = $this->session->userdata('logged_in');
        }else {
            redirect('', 'refresh');
        }
    }
    private function acceso($id_rol){
        $rolusuario = $this->session_data['rol'];
        if($rolusuario[$id_rol-1]['rolusuario_asignado'] == 1){
            return true;
        }else{
            $data['_view'] = 'login/mensajeacceso';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Listing of beca
     */
    function index()
    {
        if($this->acceso(1)) {
            $data['beca'] = $this->Beca_model->get_all_beca();

            $data['_view'] = 'beca/index';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Adding a new beca
     */
    function add()
    {
        if($this->acceso(2)) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('beca_nombre','Beca Nombre','required');
            if($this->form_validation->run())
            {
                $estado = 1;
                $params = array(
                    'estado_id' => $estado,
                    'beca_nombre' => $this->input->post('beca_nombre'),
                    'beca_descripcion' => $this->input->post('beca_descripcion'),
                    'beca_contrato' => $this->input->post('beca_contrato'),
                    'beca_repseguimiento' => $this->input->post('beca_repseguimiento'),
                );

                $beca_id = $this->Beca_model->add_beca($params);
                redirect('beca/index');
            }
            else
            {
                /*$this->load->model('Estado_model');
                $data['all_estado'] = $this->Estado_model->get_all_estado();
                */
                $data['_view'] = 'beca/add';
                $this->load->view('layouts/main',$data);
            }
        }
    }  

    /*
     * Editing a beca
     */
    function edit($beca_id)
    {
        if($this->acceso(3)) {
            // check if the beca exists before trying to edit it
            $data['beca'] = $this->Beca_model->get_beca($beca_id);

            if(isset($data['beca']['beca_id']))
            {
                $this->load->library('form_validation');

                            $this->form_validation->set_rules('beca_nombre','Beca Nombre','required');

                            if($this->form_validation->run())     
                {   
                    $params = array(
                                            'estado_id' => $this->input->post('estado_id'),
                                            'beca_nombre' => $this->input->post('beca_nombre'),
                                            'beca_descripcion' => $this->input->post('beca_descripcion'),
                                            'beca_contrato' => $this->input->post('beca_contrato'),
                                            'beca_repseguimiento' => $this->input->post('beca_repseguimiento'),
                    );

                    $this->Beca_model->update_beca($beca_id,$params);            
                    redirect('beca/index');
                }
                else
                {
                    $estado = 1;
                    $this->load->model('Estado_model');
                    $data['all_estado'] = $this->Estado_model->get_tipo_estado($estado);

                    $data['_view'] = 'beca/edit';
                    $this->load->view('layouts/main',$data);
                }
            }
            else
                show_error('The beca you are trying to edit does not exist.');
        }
    }

    /*
     * Deleting beca
     */
    /*function remove($beca_id)
    {
        $beca = $this->Beca_model->get_beca($beca_id);

        // check if the beca exists before trying to delete it
        if(isset($beca['beca_id']))
        {
            $this->Beca_model->delete_beca($beca_id);
            redirect('beca/index');
        }
        else
            show_error('The beca you are trying to delete does not exist.');
    }*/
    
}