<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Database_model extends CI_Model
{
    public function select($table, $column = '*', $where = '', $limit = '', $offset = 0, $order = '')
    {
        if ($where != '') {
            $this->db->where($where);
        }
        if ($order != '') {
            $this->db->order_by($order);
        }
        if ($limit != '') {
            $this->db->limit($limit, $offset);
        }
        if ($column == '*') {
            $result = $this->db->get($table);
        } else if ($column != '*') {
            $this->db->select($column);
            $result = $this->db->get($table);
        }
        return $result->result_array();
    }

    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
}


/* End of file Database_model.php and path /application/models/Database_model.php */