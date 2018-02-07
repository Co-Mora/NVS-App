<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 25/01/2018
 * Time: 3:41
 */


class User_model extends CI_Model {

    public function create_user() {

        $option = array('cost' => 12);
        $encrypt_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $option);

        $data = array(
            'username'   => $this->input->post('username'),
            'password'   => $encrypt_pass
        );


        $insert_data = $this->db->insert('users', $data);
        return $insert_data;

    }

    public function login_users($username, $password) {


        $this->db->where('username', $username);

        $result = $this->db->get('users');

        $db_password = $result->row(2)->password;

        if(password_verify($password, $db_password)) {

            return $result->row(0)->id;


        } else{

            return FALSE;
        }
    }

    public function get_users() {

        $query = $this->db->get('users');
        return $query->num_rows();

    }


}