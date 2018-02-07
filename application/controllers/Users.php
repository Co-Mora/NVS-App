<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 25/01/2018
 * Time: 3:39
 */


class Users extends CI_Controller {


    public function register() {

        $this->form_validation->set_rules('username', '', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('password', '', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', '', 'trim|required|matches[password]');

        if($this->form_validation->run() == FALSE) {

            $data = array(
                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);
            $data['main_view']  = "users/register";
            $this->load->view('users/main', $data);

        } else{

            if($this->User_model->create_user()) {
                $message = $this->input->post('username');
                $this->session->set_flashdata('user_register', $message);
                $this->session->set_flashdata('user_registered', 'You have been registered successfully');

                redirect('home');
            }
        }

    }

    public function login() {

        $this->form_validation->set_rules('username', '', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('password', '', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', '', 'trim|required|matches[password]');

        if($this->form_validation->run() == FALSE) {

            $data = array(
                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);
            $data['main_view']  = "users/login";
            $this->load->view('users/main', $data);

        } else{

            $username = $this->input->post('username');
            $password = $this->input->post('password');


            $user_id= $this->User_model->login_users($username, $password);

            if($user_id) {

                $user_data = array(

                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => True
                );

                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'You have been login successfully');
                redirect('home');
            } else {

                $this->session->set_flashdata('failed', 'Failed Try Again');
                redirect('login');
            }
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect('login');

    }


}