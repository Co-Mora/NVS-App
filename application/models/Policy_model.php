<?php
/**
 * Created by PhpStorm.
 * User: omardev
 * Date: 23/01/2018
 * Time: 5:56
 */


class Policy_model extends CI_Model {

        /*
      * Administrative Smart Plan One
      * Administrative Smart Plan Two
      *  */

    public function get_admin_policy1(){

        $query = $this->db->get('administrative_plan_one');
        return $query->result();
    }

    public function get_admin_policy2(){

        $query = $this->db->get('administrative_plan_two');
        return $query->result();
    }

    public function create_admin1($data) {

        $query = $this->db->insert('administrative_plan_one', $data);
        return $query;
    }

    public function create_admin2($data) {

        $query = $this->db->insert('administrative_plan_two', $data);
        return $query;
    }


    public function get_all_admin1($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('administrative_plan_one');

        return $query->row();
    }

    public function update_admin1($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('administrative_plan_one', $data);
        return $query;

    }

    public function get_all_admin2($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('administrative_plan_two');

        return $query->row();
    }

    public function update_admin2($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('administrative_plan_two', $data);
        return $query;

    }

    public function delete_admin1($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('administrative_plan_one');
        return $query;

    }

    public function delete_admin2($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('administrative_plan_two');
        return $query;

    }

    public function get_policies1(){
        $query = $this->db->query('SELECT * FROM administrative_plan_one');
        $query_1 = $this->db->query('SELECT * FROM administrative_plan_two');
        $res1 = $query->num_rows();
        $res2 = $query_1->num_rows();
        return $res1 + $res2;
    }


    /*
  * accommodation Smart Plan One
  * accommodation Smart Plan Two
  *  */

    public function get_accommodation_policy1(){

        $query = $this->db->get('accommodation_plan_one');
        return $query->result();
    }

    public function get_accommodation_policy2(){

        $query = $this->db->get('accommodation_plan_two');
        return $query->result();
    }

    public function create_accommodation_1($data){

        $query = $this->db->insert('accommodation_plan_one', $data);
        return $query;
    }

    public function create_accommodation_2($data){

        $query = $this->db->insert('accommodation_plan_two', $data);
        return $query;
    }

    public function get_all_accommodation1($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('accommodation_plan_one');

        return $query->row();
    }

    public function update_accommodation1($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('accommodation_plan_one', $data);
        return $query;

    }

    public function get_all_accommodation2($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('accommodation_plan_two');

        return $query->row();
    }

    public function update_accommodation2($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('accommodation_plan_two', $data);
        return $query;

    }

    public function delete_accommodation1($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('accommodation_plan_one');
        return $query;

    }

    public function delete_accommodation2($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('accommodation_plan_two');
        return $query;

    }

    public function get_policies2(){
        $query = $this->db->query('SELECT * FROM accommodation_plan_one');
        $query_1 = $this->db->query('SELECT * FROM accommodation_plan_two');
        $res1 = $query->num_rows();
        $res2 = $query_1->num_rows();
        return $res1 + $res2;
    }


         /*
       * retail Smart Plan One
       * retail Smart Plan Two
       *  */

    public function get_retail_policy1(){

        $query = $this->db->get('retail_plan_one');
        return $query->result();
    }

    public function get_retail_policy2(){

        $query = $this->db->get('retail_plan_two');
        return $query->result();
    }

    public function create_retail_1($data){

        $query = $this->db->insert('retail_plan_one', $data);
        return $query;

    }

    public function create_retail_2($data){

        $query = $this->db->insert('retail_plan_two', $data);
        return $query;

    }


    public function get_all_retail1($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('retail_plan_one');

        return $query->row();
    }

    public function update_retail1($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('retail_plan_one', $data);
        return $query;

    }

    public function get_all_retail2($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('retail_plan_two');

        return $query->row();
    }

    public function update_retail2($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('retail_plan_two', $data);
        return $query;

    }

    public function delete_retail1($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('retail_plan_one');
        return $query;

    }

    public function delete_retail2($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('retail_plan_two');
        return $query;

    }

    public function get_policies3(){
        $query = $this->db->query('SELECT * FROM retail_plan_one');
        $query_1 = $this->db->query('SELECT * FROM retail_plan_two');
        $res1 = $query->num_rows();
        $res2 = $query_1->num_rows();
        return $res1 + $res2;
    }


        /*
       * Contractors Smart Plan One
       * Contractors Smart Plan Two
       *  */


    public function get_contractor_policy1(){

        $query = $this->db->get('contractor_plan_one');
        return $query->result();
    }

    public function get_contractor_policy2(){

        $query = $this->db->get('contractor_plan_two');
        return $query->result();
    }

    public function create_contractor_1($data) {

        $query = $this->db->insert('contractor_plan_one', $data);
        return $query;

    }

    public function create_contractor_2($data) {
        $query = $this->db->insert('contractor_plan_two', $data);
        return $query;

    }

    public function get_all_contractor1($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('contractor_plan_one');

        return $query->row();
    }

    public function update_contractor1($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('contractor_plan_one', $data);
        return $query;

    }

    public function get_all_contractor2($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('contractor_plan_two');

        return $query->row();
    }

    public function update_contractor2($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('contractor_plan_two', $data);
        return $query;

    }

    public function delete_contractor1($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('contractor_plan_one');
        return $query;

    }

    public function delete_contractor2($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('contractor_plan_two');
        return $query;

    }

    public function get_policies4(){
        $query = $this->db->query('SELECT * FROM contractor_plan_one');
        $query_1 = $this->db->query('SELECT * FROM contractor_plan_two');
        $res1 = $query->num_rows();
        $res2 = $query_1->num_rows();
        return $res1 + $res2;
    }


        /*
        * Real Estate Smart Plan One
        * Real Estate Smart Plan Two
        *  */

    public function get_estate_policy1() {

        $query = $this->db->get('real_estate_plan_one');
        return $query->result();


    }

    public function get_estate_policy2() {

        $query = $this->db->get('real_estate_plan_two');
        return $query->result();
    }

    public function create_estate_1($data) {

        $query = $this->db->insert('real_estate_plan_one', $data);
        return $query;

    }

    public function create_estate_2($data) {

        $query = $this->db->insert('real_estate_plan_two', $data);
        return $query;

    }

    public function get_all_estate1($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('real_estate_plan_one');

        return $query->row();
    }

    public function update_estate1($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('real_estate_plan_one', $data);
        return $query;

    }

    public function get_all_estate2($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('real_estate_plan_two');

        return $query->row();
    }

    public function update_estate2($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('real_estate_plan_two', $data);
        return $query;

    }

    public function delete_estate1($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('real_estate_plan_one');
        return $query;

    }

    public function delete_estate2($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('real_estate_plan_two');
        return $query;

    }

    public function get_policies5(){
        $query = $this->db->query('SELECT * FROM real_estate_plan_one');
        $query_1 = $this->db->query('SELECT * FROM real_estate_plan_two');
        $res1 = $query->num_rows();
        $res2 = $query_1->num_rows();
        return $res1 + $res2;
    }


    /*
     * EVENT MANAGEMENT INDUSTRY Smart Plan One
     * EVENT MANAGEMENT INDUSTRY	 Smart Plan Two
     *  */

    public function get_event_policy1() {

        $query = $this->db->get('event_management_plan_one');
        return $query->result();
    }

    public function get_event_policy2() {

        $query = $this->db->get('event_management_plan_two');
        return $query->result();
    }

    public function create_event_1($data) {

        $query = $this->db->insert('event_management_plan_one', $data);
        return $query;

    }

    public function create_event_2($data) {

        $query = $this->db->insert('event_management_plan_two', $data);
        return $query;

    }

    public function get_all_event1($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('event_management_plan_one');

        return $query->row();
    }

    public function update_event1($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('event_management_plan_one', $data);
        return $query;

    }

    public function get_all_event2($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('event_management_plan_two');

        return $query->row();
    }

    public function update_event2($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('event_management_plan_two', $data);
        return $query;

    }

    public function delete_event_policy1($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('event_management_plan_one');
        return $query;

    }

    public function delete_event_policy2($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('event_management_plan_two');
        return $query;

    }

    public function get_policies6(){
        $query = $this->db->query('SELECT * FROM event_management_plan_one');
        $query_1 = $this->db->query('SELECT * FROM event_management_plan_two');
        $res1 = $query->num_rows();
        $res2 = $query_1->num_rows();
        return $res1 + $res2;
    }


    /*
     * manufacturer Smart Plan One
     * manufacturer Smart Plan Two
     *  */

    public function get_manufacturer_policy1() {

        $query = $this->db->get('manufacturers_plan_one');
        return $query->result();
    }

    public function get_manufacturer_policy2() {

        $query = $this->db->get('manufacturers_plan_two');
        return $query->result();
    }

    public function create_manufacturer_1($data) {

        $query = $this->db->insert('manufacturers_plan_one', $data);
        return $query;
    }

    public function create_manufacturer_2($data) {

        $query = $this->db->insert('manufacturers_plan_two', $data);
        return $query;
    }

    public function get_all_manufacturer1($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('manufacturers_plan_one');

        return $query->row();
    }

    public function update_manufacturer1($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('manufacturers_plan_one', $data);
        return $query;

    }

    public function get_all_manufacturer2($id){

        $this->db->where(array('id' => $id));
        $query = $this->db->get('manufacturers_plan_two');

        return $query->row();
    }

    public function update_manufacturer2($id, $data) {

        $this->db->where(array('id' => $id));
        $query = $this->db->update('manufacturers_plan_two', $data);
        return $query;

    }


    public function delete_manufacturer1($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('manufacturers_plan_one');
        return $query;

    }

    public function delete_manufacturer2($id) {

        $this->db->where(array('id' => $id));
        $query = $this->db->delete('manufacturers_plan_two');
        return $query;

    }

    public function get_policies7(){
        $query = $this->db->query('SELECT * FROM manufacturers_plan_one');
        $query_1 = $this->db->query('SELECT * FROM manufacturers_plan_two');
        $res1 = $query->num_rows();
        $res2 = $query_1->num_rows();
        return $res1 + $res2;
    }


}

