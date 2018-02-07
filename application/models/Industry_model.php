<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 23/01/2018
 * Time: 1:59
 */


class Industry_model extends CI_Model {


    public function get_industry() {

        $query = $this->db->get('industries');
        return $query->num_rows();


    }



}