<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 25/01/2018
 * Time: 2:56
 */

class Customer_model extends CI_Model {

    public function send_view($data) {

        $query = $this->db->insert('customer_details',$data);
        return $query;

    }

    public function get_customers() {

        $query = $this->db->get('customer_details');
        return $query->result();
    }

    public function get_all_customer(){

        $query = $this->db->query('SELECT * FROM customer_details');
        return $query->num_rows();

    }
}