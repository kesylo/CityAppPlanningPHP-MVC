<?php

class Planning{
    private $db;

    /**
     * Planning constructor.
     */
    public function __construct()
    {
        // instantiate db connection
        $this->db = new Database;
    }

    public function getPlannings(){
        $this->db->query("SELECT * FROM planning");

        return $this->db->resultSet();
    }


}
