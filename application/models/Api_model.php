<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api_model extends CI_Model
{
  public function get_students($student_id = null)
  {
    if ($student_id) {
      $result = $this->db->get_where('student', ['id' => $student_id])->row_array();
    } else {
      $result = $this->db->get('student')->result_array();
    }

    return $result;
  }
}
