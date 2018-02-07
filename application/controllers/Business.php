<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 23/01/2018
 * Time: 2:27
 */


class Business extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return object
     */
    public function administrative() {

        $data['administrative'] = $this->Business_model->get_administrative();
        if(empty($data['administrative'])) {

            show_404();

        }

        $data['main_view'] = "business/administrative";
        $this->load->view('templates/main', $data);

    }


    public function accommodation() {

        $data['accommodation'] = $this->Business_model->get_accommodation();

        $data['main_view'] = "business/accommodation";
        $this->load->view('templates/main', $data);

    }


    public function retail() {

        $data['retail'] = $this->Business_model->get_retail();
        $data['main_view'] = "business/retail";
        $this->load->view('templates/main', $data);

    }

    public function contractor() {

        $data['contractor'] = $this->Business_model->get_contractor();
        $data['main_view'] = "business/contractor";
        $this->load->view('templates/main', $data);

    }

    public function estate() {

        $data['estate'] = $this->Business_model->get_estate();
        $data['main_view'] = "business/estate";
        $this->load->view('templates/main', $data);

    }

    public function event() {

        $data['event'] = $this->Business_model->get_event();
        $data['main_view'] = "business/event";
        $this->load->view('templates/main', $data);

    }
    public function manufacturer() {

        $data['manufacturer'] = $this->Business_model->get_manufacturer();
        $data['main_view'] = "business/manufacturer";
        $this->load->view('templates/main', $data);

    }
}