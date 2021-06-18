<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Database_model extends CI_Model
{
    public function select($table, $order = '', $column = '*', $where = '', $limit = '', $offset = 0, $join = '')
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

    public function delete($table, $where)
    {
        $this->db->where($where);
        return $this->db->delete($table);
    }

    public function edit($table, $where, $set)
    {
        $this->db->set($set);
        $this->db->where($where);
        return $this->db->update($table);
    }

    public function call_sp($name)
    {
        $sql = "CALL $name()";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        $query->next_result();
        $query->free_result();
        return $result;
    }

    public function custom_query($sql)
    {
        return $this->db->query($sql)->result_array();
    }
}


/* End of file Database_model.php and path /application/models/Database_model.php */