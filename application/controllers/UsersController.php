<?php
header('Access-Control-Allow-Origin: *');

defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        parent::__construct();
    }

	public function get() // get for id
	{   
        
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET') return json_output(400,array('status' => 400,'message' => 'No.'));
        $response = $this->UsersModel->get($_GET["id"]);
        json_output(200,$response[0]);
	}

    public function getAll() // get all
	{  
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET') return json_output(400,array('status' => 400,'message' => 'No.'));
        $response = $this->UsersModel->getAll();
        json_output(200,$response);
	}

    public function create() // create user
	{   
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'POST') return json_output(400,array('status' => 400,'message' => 'No.'));
      
        $response = $this->UsersModel->create($_POST['nombre'],$_POST['correo'], $_POST['password_user']);
        if($response['status'] == 400) return json_output(400,array('status' => 200,'message' => 'No.'));
        
        json_output($response['status'],array('status' => 200,'message' => $response['message']));
	}

    public function update()
    {
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT') return json_output(400,array('status' => 400,'message' => 'Bad request.'));
        $params = file_get_contents('php://input');
        debugin($params);
        $response = $this->UsersModel->update($_POST['nombre'],$_POST['correo'], $_GET['id']);
        if($response['status'] == 400) return json_output(400,array('status' => 200,'message' => 'No.'));
        
        json_output($response['status'],array('status' => 200,'message' => $response['message']));
		
    }
}
