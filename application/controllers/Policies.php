<?php
/**
 * Created For NVS Dashboard.
 * User: omardev
 * Date: 23/01/2018
 */

class Policies extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

        /*
     * Administrative Smart Plan One
     * Administrative Smart Plan Two
     * Create Policy for Administrative Smart Plan One
     * Create Policy for Administrative Smart Plan Two
         * Update Policy for Administrative Smart Plan One
         *  Update Policy for Administrative Smart Plan Two
         *
     *  */

    public function admin_policy1(){

        $data['get_admin1'] = $this->Policy_model->get_admin_policy1();
        $data['main_view'] = "policies/admin_policy1";
        $this->load->view('templates/main', $data);
    }

    public function admin_policy2(){

        $data['get_admin2'] = $this->Policy_model->get_admin_policy2();
        $data['main_view'] = "policies/admin_policy2";
        $this->load->view('templates/main', $data);
    }

    public function create_admin_policy1(){

            $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
            $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
            $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
            $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
            $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
            $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

            if($this->form_validation->run() === FALSE) {
                $data = array(

                    'errors' => validation_errors()
                );

                $this->session->set_flashdata($data);

                $data['main_view'] = "policies/create_admin_policy1";
                $this->load->view('templates/main', $data);
            } else {

                $data = array(
                    'policy_name'     => $this->input->post('policy_name'),
                    'policy_price'    => $this->input->post('policy_price'),
                    'sum_insured'     => $this->input->post('policy_sum'),
                    'rate'            => $this->input->post('policy_rate'),
                    'perils_rate_1_3' => $this->input->post('policy_perils3'),
                    'perils_rate_1_4' => $this->input->post('policy_perils4')
                );

                if($this->Policy_model->create_admin1($data)) {

                    $this->session->set_flashdata('created', 'Policy has been created');
                    redirect('create_admin_policy1');
                }


            }
    }

    public function create_admin_policy2(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_admin_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_admin2($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_admin_policy2');
            }
        }
    }

<<<<<<< HEAD
    public function update_admin_policy1($id){
=======
    public function update_admin_policy1($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394


        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_admin1($id);
            $data['main_view'] = "policies/update_admin_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_admin1($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('admin_policy1');
            }
        }
    }

<<<<<<< HEAD
    public function update_admin_policy2($id){
=======
    public function update_admin_policy2($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394


        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_admin2($id);
            $data['main_view'] = "policies/update_admin_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_admin2($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('admin_policy2');
            }
        }
    }

    public function delete_admin_policy1($id = 1){

            if($this->Policy_model->delete_admin1($id)) {

                $this->session->set_flashdata('deleted', 'Policy has been deleted');
                redirect('admin_policy1');
            }
    }

    public function delete_admin_policy2($id = 1){

        if($this->Policy_model->delete_admin2($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('admin_policy2');
        }
    }




    /*
   * accommodation Smart Plan One
   * accommodation Smart Plan Two
  * Create Policy for accommodation Smart Plan One
 * Create Policy for accommodation Smart Plan Two
     * Update Policy for accommodation Smart Plan One
     * Update Policy for accommodation Smart Plan Two
 */

    public function accommodation_policy1(){

        $data['get_accommodation1'] = $this->Policy_model->get_accommodation_policy1();
        $data['main_view'] = "policies/accommodation_policy1";
        $this->load->view('templates/main', $data);
    }

    public function accommodation_policy2(){

        $data['get_accommodation2'] = $this->Policy_model->get_accommodation_policy2();
        $data['main_view'] = "policies/accommodation_policy2";
        $this->load->view('templates/main', $data);
    }

    public function create_accommodation_policy1(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_accommodation_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_accommodation_1($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_accommodation_policy1');
            }
        }
    }

    public function create_accommodation_policy2(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_accommodation_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_accommodation_2($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_accommodation_policy2');
            }
        }
    }

    public function update_accommodation_policy1($id = 1){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_accommodation1($id);
            $data['main_view'] = "policies/update_accommodation_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_accommodation1($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('accommodation_policy1');
            }
        }
    }
<<<<<<< HEAD
    public function update_accommodation_policy2($id){
=======
    public function update_accommodation_policy2($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_accommodation2($id);
            $data['main_view'] = "policies/update_accommodation_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_accommodation2($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('accommodation_policy2');
            }
        }
    }

    public function delete_accommodation_policy1($id = 1){

        if($this->Policy_model->delete_accommodation1($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('accommodation_policy1');
        }
    }

    public function delete_accommodation_policy2($id = 1){

        if($this->Policy_model->delete_accommodation2($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('accommodation_policy2');
        }
    }


    /*
   * retail Smart Plan One
   * retail Smart Plan Two
     * Create Policy for retail Smart Plan One
     * Create Policy for retail Smart Plan Two
     * Update Policy for retail Smart Plan One
     * Update Policy for retail Smart Plan Two
   *  */

    public function retail_policy1(){

        $data['get_retail1'] = $this->Policy_model->get_retail_policy1();
        $data['main_view'] = "policies/retail_policy1";
        $this->load->view('templates/main', $data);
    }

    public function retail_policy2(){

        $data['get_retail2'] = $this->Policy_model->get_retail_policy2();
        $data['main_view'] = "policies/retail_policy2";
        $this->load->view('templates/main', $data);
    }

    public function create_retail_policy1(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_retail_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_retail_1($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_retail_policy1');
            }
        }
    }

    public function create_retail_policy2(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_retail_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_retail_1($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_retail_policy2');
            }
        }
    }

<<<<<<< HEAD
    public function update_retail_policy1($id){
=======
    public function update_retail_policy1($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_retail1($id);
            $data['main_view'] = "policies/update_retail_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_retail1($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('retail_policy1');
            }
        }
    }

<<<<<<< HEAD
    public function update_retail_policy2($id){
=======
    public function update_retail_policy2($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_retail2($id);
            $data['main_view'] = "policies/update_retail_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_retail2($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('retail_policy2');
            }
        }
    }

    public function delete_retail_policy1($id = 1){

        if($this->Policy_model->delete_retail1($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('retail_policy1');
        }
    }

<<<<<<< HEAD
    public function delete_retail_policy2($id){
=======
    public function delete_retail_policy2($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        if($this->Policy_model->delete_retail2($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('retail_policy2');
        }
    }

    /*
    * Contractors Smart Plan One
    * Contractors Smart Plan Two
     * Create Policy for Contractors Smart Plan One
     * Create Policy for Contractors Smart Plan One
    *  */

    public function contractor_policy1(){

        $data['get_contractor1'] = $this->Policy_model->get_contractor_policy1();
        $data['main_view'] = "policies/contractor_policy1";
        $this->load->view('templates/main', $data);
    }

    public function contractor_policy2(){

        $data['get_contractor2'] = $this->Policy_model->get_contractor_policy2();
        $data['main_view'] = "policies/contractor_policy2";
        $this->load->view('templates/main', $data);
    }

    public function create_contractor_policy1(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_contractor_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_contractor_1($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_contractor_policy1');
            }
        }
    }

    public function create_contractor_policy2(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_contractor_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_contractor_2($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_contractor_policy2');
            }
        }
    }

<<<<<<< HEAD
    public function update_contractor_policy1($id){
=======
    public function update_contractor_policy1($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_contractor1($id);
            $data['main_view'] = "policies/update_contractor_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_contractor1($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('contractor_policy1');
            }
        }
    }

<<<<<<< HEAD
    public function update_contractor_policy2($id){
=======
    public function update_contractor_policy2($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_contractor2($id);
            $data['main_view'] = "policies/update_contractor_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_contractor2($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('contractor_policy2');
            }
        }
    }

    public function delete_contractor_policy1($id = 1){

        if($this->Policy_model->delete_contractor1($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('contractor_policy1');
        }
    }

    public function delete_contractor_policy2($id = 1){

        if($this->Policy_model->delete_contractor2($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('contractor_policy2');
        }
    }


        /*
         * Real Estate Smart Plan One
         * Real Estate Smart Plan Two
         * Create Policy for Real Estate Smart Plan One
         * Create Policy for Real Estate Smart Plan Two
         *  */

    public function estate_policy1(){

        $data['get_estate1'] = $this->Policy_model->get_estate_policy1();
        $data['main_view'] = "policies/estate_policy1";
        $this->load->view('templates/main', $data);
    }

    public function estate_policy2(){

        $data['get_estate2'] = $this->Policy_model->get_estate_policy2();
        $data['main_view'] = "policies/estate_policy2";
        $this->load->view('templates/main', $data);
    }

    public function create_estate_policy1(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_estate_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_estate_1($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_estate_policy1');
            }
        }
    }

    public function create_estate_policy2(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_estate_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_estate_2($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_estate_policy2');
            }
        }
    }

<<<<<<< HEAD
    public function update_estate_policy1($id){
=======
    public function update_estate_policy1($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_estate1($id);
            $data['main_view'] = "policies/update_estate_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_estate1($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('estate_policy1');
            }
        }
    }

<<<<<<< HEAD
    public function update_estate_policy2($id){
=======
    public function update_estate_policy2($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_estate2($id);
            $data['main_view'] = "policies/update_estate_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_estate2($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('estate_policy2');
            }
        }
    }

    public function delete_estate_policy1($id = 1){

        if($this->Policy_model->delete_estate1($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('estate_policy1');
        }
    }

    public function delete_estate_policy2($id = 1){

        if($this->Policy_model->delete_estate2($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('estate_policy2');
        }
    }

        /*
        * EVENT MANAGEMENT INDUSTRY Smart Plan One
        * EVENT MANAGEMENT INDUSTRY	 Smart Plan Two
         * Create Policy for EVENT MANAGEMENT INDUSTRY Smart Plan One
         * Create Policy for EVENT MANAGEMENT INDUSTRY Smart Plan Two
        *  */

    public function event_policy1(){

        $data['get_event1'] = $this->Policy_model->get_event_policy1();
        $data['main_view']  = "policies/event_policy1";
        $this->load->view('templates/main', $data);
    }

    public function event_policy2(){

        $data['get_event2'] = $this->Policy_model->get_event_policy2();
        $data['main_view']  = "policies/event_policy2";
        $this->load->view('templates/main', $data);
    }


    public function create_event_policy1(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_event_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_event_1($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_event_policy1');
            }
        }
    }

    public function create_event_policy2(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_event_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_event_2($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_event_policy2');
            }
        }
    }

<<<<<<< HEAD
    public function update_event_policy1($id){
=======
    public function update_event_policy1($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_event1($id);
            $data['main_view'] = "policies/update_event_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_event1($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('event_policy1');
            }
        }
    }

<<<<<<< HEAD
    public function update_event_policy2($id){
=======
    public function update_event_policy2($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_event2($id);
            $data['main_view'] = "policies/update_event_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_event2($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('event_policy2');
            }
        }
    }

    public function delete_event_policy1($id = 1){

        if($this->Policy_model->delete_event1($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('event_policy1');
        }
    }

    public function delete_event_policy2($id = 1){

        if($this->Policy_model->delete_event2($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('event_policy2');
        }
    }


    /*
     * manufacturer Smart Plan One
     * manufacturer Smart Plan Two
     * Create Policy for manufacturer Smart Plan One
     * Create Policy for manufacturer Smart Plan Two
     *
     *  */

    public function manufacturer_policy1(){

        $data['get_manufacturer1'] = $this->Policy_model->get_manufacturer_policy1();
        $data['main_view']  = "policies/manufacturer_policy1";
        $this->load->view('templates/main', $data);
    }

    public function manufacturer_policy2(){

        $data['get_manufacturer2'] = $this->Policy_model->get_manufacturer_policy2();
        $data['main_view']  = "policies/manufacturer_policy2";
        $this->load->view('templates/main', $data);
    }


    public function create_manufacturer_policy1(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_manufacturer_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_manufacturer_1($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_manufacturer_policy1');
            }
        }
    }

    public function create_manufacturer_policy2(){

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            $data['main_view'] = "policies/create_manufacturer_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->create_manufacturer_2($data)) {

                $this->session->set_flashdata('created', 'Policy has been created');
                redirect('create_manufacturer_policy2');
            }
        }
    }


<<<<<<< HEAD
    public function update_manufacturer_policy1($id){
=======
    public function update_manufacturer_policy1($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_manufacturer1($id);
            $data['main_view'] = "policies/update_manufacturer_policy1";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_manufacturer1($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('manufacturer_policy1');
            }
        }
    }
<<<<<<< HEAD
    public function update_manufacturer_policy2($id){
=======
    public function update_manufacturer_policy2($id = 1){
>>>>>>> 73f1ead0c708f2468416e063af6839e26b986394

        $this->form_validation->set_rules('policy_name', 'Policy Name', 'trim|required');
        $this->form_validation->set_rules('policy_price', 'Policy Price', 'trim|required');
        $this->form_validation->set_rules('policy_sum', 'Sum Insured', 'trim|required');
        $this->form_validation->set_rules('policy_rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('policy_perils3', 'Perils Rate 1 To 3', 'trim|required');
        $this->form_validation->set_rules('policy_perils4', 'Perils Rate 1 To 4', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data = array(

                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);

            $data['get'] = $this->Policy_model->get_all_manufacturer2($id);
            $data['main_view'] = "policies/update_manufacturer_policy2";
            $this->load->view('templates/main', $data);

        } else {

            $data = array(
                'policy_name'     => $this->input->post('policy_name'),
                'policy_price'    => $this->input->post('policy_price'),
                'sum_insured'     => $this->input->post('policy_sum'),
                'rate'            => $this->input->post('policy_rate'),
                'perils_rate_1_3' => $this->input->post('policy_perils3'),
                'perils_rate_1_4' => $this->input->post('policy_perils4')
            );

            if($this->Policy_model->update_manufacturer2($id, $data)) {

                $this->session->set_flashdata('updated', 'Policy has been updated');
                redirect('manufacturer_policy2');
            }
        }
    }

    public function delete_manufacturer_policy1($id = 1){

        if($this->Policy_model->delete_manufacturer1($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('manufacturer_policy1');
        }
    }

    public function delete_manufacturer_policy2($id = 1){

        if($this->Policy_model->delete_manufacturer2($id)) {

            $this->session->set_flashdata('deleted', 'Policy has been deleted');
            redirect('manufacturer_policy2');
        }
    }

}