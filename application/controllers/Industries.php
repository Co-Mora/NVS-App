<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 23/01/2018
 * Time: 1:44
 */


class Industries extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

    }

    public function view_industries() {

        $data['industries'] = $this->Industry_model->get_industry();

        if(empty($data["industries"])) {

            show_404();
        }
        
        $data['main_view']  = "industries/view_industries";
        $this->load->view('templates/main', $data);

    }

}