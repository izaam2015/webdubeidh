<?php

class Verificar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('login_model');
        $this->load->model('rol_model');
    }

    function index()
    {
        $username = $this->input->post('username');
        $clave = $this->input->post('password');

        $result = $this->login_model->login2($username,$clave );
        
        if ($result) {
            if ($result->tipousuario_id == 1 or $result->tipousuario_id == 2 ) {
                $this->load->model('Rol_usuario_model');
                $this->load->model('Tipo_usuario_model');
                $thumb = "thumb_default.jpg";
                if ($result->usuario_imagen <> null && $result->usuario_imagen <> "") {
                    $thumb = "thumb_".$result->usuario_imagen;
                    //$thumb = $this->foto_thumb($result->usuario_imagen);
                }
                $rolusuario = $this->Rol_usuario_model->getall_rolusuario($result->tipousuario_id);
                $tipousuario_nombre = $this->Tipo_usuario_model->get_tipousuario_nombre($result->tipousuario_id);
                $sess_array = array(
                    'usuario_login' => $result->usuario_login,
                    'usuario_id' => $result->usuario_id,
                    'usuario_nombre' => $result->usuario_nombre,
                    'estado_id' => $result->estado_id,
                    'tipousuario_id' => $result->tipousuario_id,
                    'tipousuario_descripcion' => $tipousuario_nombre,
                    'usuario_imagen' => $result->usuario_imagen,
                    'usuario_email' => $result->usuario_email,
                    'usuario_clave' => $result->usuario_clave,
                    'thumb' => $thumb,
                    'rol' => $rolusuario
                );
                
                $this->session->set_userdata('logged_in', $sess_array);
                $session_data = $this->session->userdata('logged_in');
                
                if ($session_data['tipousuario_id'] == 1) {// admin page
                    redirect('admin/dashb'); 
                }else{  // En caso de otro usuario no administrador 
                    redirect('admin/dashb/index_user'); 
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">USUARIO no es valido' . $result . '</div>');
                redirect('login');
            }

        }
        else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">USUARIO o CONTRASE??A no son validos' . $result . '</div>');
            redirect('login');
        }

        // }
    }
    
    public function logout()
    {
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);

        $this->session->set_flashdata('msg', 'Successfully Logout');
        redirect('');
    }
    
    public function check_user($username, $clave)
    {
        $result = $this->login_model->login2($username,$clave );

        if($result){
            echo 'success';
        } else { echo '';}
    }

    public function do_login($username, $clave, $token)
    {
        if($token=='mbUdgZWkgqyODuHFVDlsFIZOPkBzuiBI'){
            $result = $this->login_model->login2($username,$clave);
            if($result){
                if ($result->tipousuario_id == 1 or $result->tipousuario_id == 2 or $result->tipousuario_id == 3 or $result->tipousuario_id == 4 or $result->tipousuario_id == 5 or $result->tipousuario_id == 6) {
                    $this->load->model('Rol_usuario_model');
                    $this->load->model('Tipo_usuario_model');
                    $thumb = "default_thumb.jpg";
                    if ($result->usuario_imagen <> null) {
                        $thumb = "thumb_".$result->usuario_imagen;
                        //$thumb = $this->foto_thumb($result->usuario_imagen);
                    }
                    $rolusuario = $this->Rol_usuario_model->getall_rolusuario($result->tipousuario_id);
                    $tipousuario_nombre = $this->Tipo_usuario_model->get_tipousuario_nombre($result->tipousuario_id);
                    $sess_array = array(
                        'usuario_login' => $result->usuario_login,
                        'usuario_id' => $result->usuario_id,
                        'usuario_nombre' => $result->usuario_nombre,
                        'estado_id' => $result->estado_id,
                        'tipousuario_id' => $result->tipousuario_id,
                        'tipousuario_descripcion' => $tipousuario_nombre,
                        'usuario_imagen' => $result->usuario_imagen,
                        'usuario_email' => $result->usuario_email,
                        'usuario_clave' => $result->usuario_clave,
                        'thumb' => $thumb,
                        'rol' => $rolusuario,
                        'codigo' => $this->get_codigo_empresa()
                    );
                    
                    $this->session->set_userdata('logged_in', $sess_array);
                    $session_data = $this->session->userdata('logged_in');

                    if ($session_data['tipousuario_id'] == 1) { // admin page
                        redirect('admin/dashb');
                    } elseif($session_data['tipousuario_id'] == 5) {
                        $this->load->model('Cliente_model');
                        $cliente_id = $this->cliente_model->get_cliente_from_ci($session_data['usuario_login']);
                        redirect('detalle_serv/kardexserviciocliente/'.$cliente_id);
                    }

                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">USUARIO invalido,' . $result . '</div>');
                    redirect('login');
                }
            }
        }
    }
}

?>