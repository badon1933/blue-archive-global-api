<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('api_model');
  }

  public function get_students($student_id = null)
  {
    $data['student'] = $this->api_model->get_students($student_id);
    $this->_response($data);
  }

  private function _response($data)
  {
    $response = [
      'response' => '200',
      'message' => 'OK',
      'data' => $data
    ];

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
  }
}
