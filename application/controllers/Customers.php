<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 25/01/2018
 * Time: 2:48
 */


class Customers extends CI_Controller {



    public function view_customer() {

        $data['customers'] = $this->Customer_model->get_customers();
        $data['main_view'] = "pages/customer";
        $this->load->view('templates/main' , $data);


    }


}