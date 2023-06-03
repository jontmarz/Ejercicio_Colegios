<?php
require_once "./model/model.php";

class Controller {
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function handleRequest()
    {
        if (isset($_POST['add_school'])) {
            $this->addSchool();
        } else if (isset($_POST['add_student'])) {
            $this->addStudent();
        } else {
            $this->showForm();
        }
    }

    private function showForm()
    {
        $schools = $this->model->getSchools();
        include "./views/view.php";
    }

    private function addSchool()
    {
        $school_name = $_POST['school_name'];
        $address = $_POST['address'];
        $neighborhood = $_POST['neighborhood'];

        $this->model->addSchool($school_name, $address, $neighborhood);
        
        
        header("Location: index.php");
        echo "El colegio se ha agregado exitosamente";
        die();

    }

    private function AddStudent()
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $school_related = $_POST['school_related'];

        $this->model->addStudent($first_name, $last_name, $address, $school_related);

        echo "El estudiante se ha agregado exitosamente";
        
        header("Location: index.php");
        die();
    }
}