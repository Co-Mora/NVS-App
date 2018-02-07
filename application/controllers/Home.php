<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 23/01/2018
 * Time: 12:28
 */

class Home extends CI_Controller {


    public function __construct()
    {
        parent::__construct();

    }


    public function view($page = 'main') {

        if(!file_exists(APPPATH . 'views/templates/'. $page. '.php')) {

            show_404();

        }
        $data['industries'] = $this->Industry_model->get_industry();
        $data['administrative'] = $this->Business_model->get_administrative();
        $data['accommodation'] = $this->Business_model->get_accommodation();
        $data['retail'] = $this->Business_model->get_retail();
        $data['contractor'] = $this->Business_model->get_contractor();
        $data['estate'] = $this->Business_model->get_estate();
        $data['event'] = $this->Business_model->get_event();
        $data['manufacturer'] = $this->Business_model->get_manufacturer();
        $data['policy1'] = $this->Policy_model->get_policies1();
        $data['policy2'] = $this->Policy_model->get_policies2();
        $data['policy3'] = $this->Policy_model->get_policies3();
        $data['policy4'] = $this->Policy_model->get_policies4();
        $data['policy5'] = $this->Policy_model->get_policies5();
        $data['policy6'] = $this->Policy_model->get_policies6();
        $data['policy7'] = $this->Policy_model->get_policies7();
        $data['get_customers'] = $this->Customer_model->get_all_customer();
        $data['get_users'] = $this->User_model->get_users();

        $data['main_view'] = "pages/dashboard";
        $this->load->view('templates/main' , $data);


    }


}