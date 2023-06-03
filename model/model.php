<?php

class Model {
    private $db;

    public function __construct() {
        /* $db_host = $_ENV['DB_HOST'];
        $db_username = $_ENV['DB_USERNAME'];
        $db_password = $_ENV['DB_PASSWORD'];
        $db_database = $_ENV['DB_DATABASE']; */
    
        // $this->db = new mysqli($db_host, $db_username, $db_password, $db_database);
        $this->db = new mysqli("localhost", "root", "", "colegios");
    }
    
    public function addSchool($school_name, $address, $neighborhood)
    {
        $query = "INSERT INTO t_colegios (school_name, sch_address, neighborhood) VALUES ('$school_name', '$address', '$neighborhood')";
        $this->db->query($query);
    }

    public function addStudent($first_name, $last_name, $address, $school_related)
    {
        $query = "INSERT INTO t_estudiantes (first_name, last_name, stu_address, school_related) VALUES ('$first_name', '$last_name', '$address', '$school_related')";
        $this->db->query($query);
    }

    public function getSchools()
    {
        $query = "SELECT ID, school_name FROM t_colegios";
        $result = $this->db->query($query);
        $schools = [];

        while ($row = $result->fetch_assoc()) {
            $schools[] = $row;
        }

        return $schools;
    }
}