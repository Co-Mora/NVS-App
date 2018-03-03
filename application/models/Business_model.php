<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 23/01/2018
 * Time: 2:40
 */



class Business_model extends CI_Model {

    public function get_administrative() {

        $query = $this->db->get('list_administrative');
        return $query->num_rows();


    }

    public function get_accommodation() {

        $query = $this->db->get('list_accommodation');
        return $query->num_rows();


    }

    public function get_retail() {

        $query = $this->db->get('list_retail');
        return $query->num_rows();


    }

    public function get_contractor() {

        $query = $this->db->get('list_contractor');
        return $query->num_rows();


    }

    public function get_estate() {

        $query = $this->db->get('list_real_estate');
        return $query->num_rows();


    }
    public function get_event() {

        $query = $this->db->get('list_event_management');
        return $query->num_rows();


    }

    public function get_manufacturer() {

        $query = $this->db->get('list_manufacturers');
        return $query->num_rows();


    }





}