<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Comision_postulante extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Comision_postulante_model');
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
     * Listing of comision_postulante
     */
    function index()
    {
        if($this->acceso(42)) {
            $data['comision_postulante'] = $this->Comision_postulante_model->get_all_comision_postulante();

            $data['_view'] = 'comision_postulante/index';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Adding a new comision_postulante
     */
    function add()
    {
        if($this->acceso(43)) {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'postulante_id' => $this->input->post('postulante_id'),
                    'comision_id' => $this->input->post('comision_id'),
                );

                $comision_postulante_id = $this->Comision_postulante_model->add_comision_postulante($params);
                redirect('comision_postulante/index');
            }
            else
            {
                $this->load->model('Postulante_model');
                $data['all_postulante'] = $this->Postulante_model->get_all_postulante_estudiante();

                $this->load->model('Comision_model');
                $data['all_comision'] = $this->Comision_model->get_all_comision();

                $data['_view'] = 'comision_postulante/add';
                $this->load->view('layouts/main',$data);
            }
        }
    }  

    /*
     * Editing a comision_postulante
     */
    function edit($comisionpost_id)
    {
        if($this->acceso(44)) {
            // check if the comision_postulante exists before trying to edit it
            $data['comision_postulante'] = $this->Comision_postulante_model->get_comision_postulante($comisionpost_id);

            if(isset($data['comision_postulante']['comisionpost_id']))
            {
                if(isset($_POST) && count($_POST) > 0)     
                {   
                    $params = array(
                        'postulante_id' => $this->input->post('postulante_id'),
                        'comision_id' => $this->input->post('comision_id'),
                    );

                    $this->Comision_postulante_model->update_comision_postulante($comisionpost_id,$params);            
                    redirect('comision_postulante/index');
                }
                else
                {
                    $this->load->model('Postulante_model');
                    $data['all_postulante'] = $this->Postulante_model->get_all_postulante_estudiante();

                    $this->load->model('Comision_model');
                    $data['all_comision'] = $this->Comision_model->get_all_comision();

                    $data['_view'] = 'comision_postulante/edit';
                    $this->load->view('layouts/main',$data);
                }
            }
            else
                show_error('The comision_postulante you are trying to edit does not exist.');
        }
    } 

    /*
     * Deleting comision_postulante
     */
    /*function remove($comisionpost_id)
    {
        $comision_postulante = $this->Comision_postulante_model->get_comision_postulante($comisionpost_id);

        // check if the comision_postulante exists before trying to delete it
        if(isset($comision_postulante['comisionpost_id']))
        {
            $this->Comision_postulante_model->delete_comision_postulante($comisionpost_id);
            redirect('comision_postulante/index');
        }
        else
            show_error('The comision_postulante you are trying to delete does not exist.');
    }*/
}