<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Direccion_universitaria extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Direccion_universitaria_model');
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
     * Listing of direccion_universitaria
     */
    function index()
    {
        if($this->acceso(34)) {
            $data['direccion_universitaria'] = $this->Direccion_universitaria_model->get_all_direccion_universitaria();

            $data['_view'] = 'direccion_universitaria/index';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Adding a new direccion_universitaria
     */
    function add()
    {
        if($this->acceso(34)) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('direccionuniv_nombre','Direccionuniv Nombre','trim|required', array('required' => 'Este Campo no debe ser vacio'));
            if($this->form_validation->run())
            {
                $params = array(
                    'direccionuniv_nombre' => $this->input->post('direccionuniv_nombre'),
                );
                $direccion_universitaria_id = $this->Direccion_universitaria_model->add_direccion_universitaria($params);
                redirect('direccion_universitaria/index');
            }
            else
            {
                $data['_view'] = 'direccion_universitaria/add';
                $this->load->view('layouts/main',$data);
            }
        }
    }  

    /*
     * Editing a direccion_universitaria
     */
    function edit($direccionuniv_id)
    {
        if($this->acceso(34)) {
            // check if the direccion_universitaria exists before trying to edit it
            $data['direccion_universitaria'] = $this->Direccion_universitaria_model->get_direccion_universitaria($direccionuniv_id);

            if(isset($data['direccion_universitaria']['direccionuniv_id']))
            {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('direccionuniv_nombre','Direccionuniv Nombre','trim|required', array('required' => 'Este Campo no debe ser vacio'));

                            if($this->form_validation->run())     
                {   
                    $params = array(
                                            'direccionuniv_nombre' => $this->input->post('direccionuniv_nombre'),
                    );

                    $this->Direccion_universitaria_model->update_direccion_universitaria($direccionuniv_id,$params);            
                    redirect('direccion_universitaria/index');
                }
                else
                {
                    $data['_view'] = 'direccion_universitaria/edit';
                    $this->load->view('layouts/main',$data);
                }
            }
            else
                show_error('The direccion_universitaria you are trying to edit does not exist.');
        }
    } 

    /*
     * Deleting direccion_universitaria
     */
    /*function remove($direccionuniv_id)
    {
        $direccion_universitaria = $this->Direccion_universitaria_model->get_direccion_universitaria($direccionuniv_id);

        // check if the direccion_universitaria exists before trying to delete it
        if(isset($direccion_universitaria['direccionuniv_id']))
        {
            $this->Direccion_universitaria_model->delete_direccion_universitaria($direccionuniv_id);
            redirect('direccion_universitaria/index');
        }
        else
            show_error('The direccion_universitaria you are trying to delete does not exist.');
    }*/
    
}