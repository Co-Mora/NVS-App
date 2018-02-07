<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 26/01/2018
 * Time: 12:53*/



class Front extends CI_Controller {


    public function view() {


        $this->form_validation->set_rules('username', '', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('email', '', 'trim|valid_email');
        $this->form_validation->set_rules('phone', '', 'trim|required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('industries', '', 'required');
        $this->form_validation->set_rules('numbers', '', 'required');


        if($this->form_validation->run() == FALSE) {

            $data = array(
                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);
            $data['main_view'] = "front_template/index";
            $this->load->view('front_template/main', $data);




        } else {



            $industry = $this->input->post('industries');
            $number= $this->input-> post('numbers');
            if($industry === 'data-display' && $number === 'data-display') {
                redirect('view');
                $this->session->set_flashdata('not_selected', "You Didn't Select Your Industry Field And Number of Employees");
            } else if($industry === 'admin' && $number === 'one_to_five') {

                $data['admin1'] = $this->Policy_model->get_admin_policy1();
                $data['main_view'] = "front_template/admin_policy1";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'admin' && $number === 'six_to_ten') {

                $data['admin2'] = $this->Policy_model->get_admin_policy2();
                $data['main_view'] = "front_template/admin_policy2";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'food' && $number === 'one_to_five') {

                $data['food1'] = $this->Policy_model->get_accommodation_policy1();
                $data['main_view'] = "front_template/food_policy1";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'food' && $number === 'six_to_ten') {

                $data['food2'] = $this->Policy_model->get_accommodation_policy2();
                $data['main_view'] = "front_template/food_policy2";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'retail' && $number === 'one_to_five') {

                $data['retail1'] = $this->Policy_model->get_retail_policy1();
                $data['main_view'] = "front_template/retail_policy1";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'retail' && $number === 'six_to_ten') {

                $data['retail2'] = $this->Policy_model->get_retail_policy2();
                $data['main_view'] = "front_template/retail_policy2";
                $this->load->view('front_template/main', $data);

            }  else if($industry === 'real_estate' && $number === 'one_to_five') {

                $data['estate1'] = $this->Policy_model->get_estate_policy1();
                $data['main_view'] = "front_template/estate_policy1";
                $this->load->view('front_template/main', $data);

            }  else if($industry === 'real_estate' && $number === 'six_to_ten') {

                $data['estate2'] = $this->Policy_model->get_estate_policy2();
                $data['main_view'] = "front_template/estate_policy2";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'contractor' && $number === 'one_to_five') {

                $data['contractor1'] = $this->Policy_model->get_contractor_policy1();
                $data['main_view'] = "front_template/contractor_policy1";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'contractor' && $number === 'six_to_ten') {

                $data['contractor2'] = $this->Policy_model->get_contractor_policy2();
                $data['main_view'] = "front_template/contractor_policy2";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'event' && $number === 'one_to_five') {

                $data['event1'] = $this->Policy_model->get_event_policy1();
                $data['main_view'] = "front_template/event_policy1";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'event' && $number === 'six_to_ten') {

                $data['event2'] = $this->Policy_model->get_event_policy2();
                $data['main_view'] = "front_template/event_policy2";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'manufacturer' && $number === 'one_to_five') {

                $data['manufacturer1'] = $this->Policy_model->get_manufacturer_policy1();
                $data['main_view'] = "front_template/manufacturer_policy1";
                $this->load->view('front_template/main', $data);

            } else if($industry === 'manufacturer' && $number === 'six_to_ten') {

                $data['manufacturer2'] = $this->Policy_model->get_manufacturer_policy2();
                $data['main_view'] = "front_template/manufacturer_policy2";
                $this->load->view('front_template/main', $data);

            }


        }


    }





}