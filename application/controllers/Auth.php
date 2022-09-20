<?php

class Auth extends CI_Controller {

    function __construct(){

    parent::__construct();
    $this->load->model('auth_model');


    }

    public function index(){

		$data['judul'] = 'Halaman Login';

       
        $this->load->view('login', $data);
        $this->load->view('templates/footer',$data);

    }

    public function login(){

        // $rules = $this->auth_model->rules();
        // $this->form_validation->set_rules($rules);

        // if($this->form_validation->run() == FALSE){
        //     return $this->load->view('login');
        // }

        // $username = $this->input->post('username');
        // $password = $this->input->post('password');

        // if($this->auth_model->login($username, $password)){
        //     redirect('dashboard');
            
        // } else {
        //     echo "<script> alert('Maaf, Data yang anda masukkan salah, Ulangi username dan password anda.')</script>";
        //     die(redirect('auth/login'));
        // }

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->auth_model->cek($username, $password);

        if($cek->num_rows() == 1){

            foreach($cek->result() as $data){
                $sess_data['id_user'] = $data->id_user;
                $sess_data['username'] = $data->username;
                $this->session->set_userdata($sess_data);
            }

            redirect('dashboard');

        } else {

            echo "<script> alert('Maaf, Data yang anda masukkan salah, Ulangi username dan password anda.')</script>";
            die(redirect('auth'));
        }

	}

    
    public function logout(){

    $this->auth_model->logout();
    redirect(site_url());
    }

}