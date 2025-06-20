<?php

namespace App\Models;

class Taxes_model extends Crud_model
{

    protected $table = null;

    public function __construct()
    {
        $this->table = 'taxes';
        parent::__construct($this->table);
    }

    public function get_details($options = [])
    {
        $taxes_table = $this->db->prefixTable('taxes');
        $where       = "";
        $id          = $this->_get_clean_value($options, "id");
        if ($id) {
            $where = " AND $taxes_table.id=$id";
        }

        $sql = "SELECT $taxes_table.*
        FROM $taxes_table
        WHERE $taxes_table.deleted=0 $where";
        return $this->db->query($sql);
    }
}
