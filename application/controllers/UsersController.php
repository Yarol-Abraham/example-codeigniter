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

	public function get($id) // get for id
	{   
        
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET') return json_output(400,array('status' => 400,'message' => 'No.'));
        $response = $this->UsersModel->get($id);
        
        if(empty($response))
        {
            return json_output(200, array("fail" => 0));
        }

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
        $inputJSON = file_get_contents('php://input');
        $data = json_decode($inputJSON, true);
        $response = $this->UsersModel->create($data['nombre'],$data['correo'], $data['password_user']);
        if($response['status'] == 400) return json_output(400,array('status' => 200,'message' => 'No.'));
        
        json_output($response['status'],array('status' => 200,'message' => $response['message']));
	}

    public function update()
    {
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT') return json_output(400,array('status' => 400,'message' => 'Bad request.'));
        $params = file_get_contents('php://input');
        $data = json_decode($params, true);
        debugin($data);
        $response = $this->UsersModel->update($data['nombre'],$data['correo'], $_GET['id']);
        if($response['status'] == 400) return json_output(400,array('status' => 200,'message' => 'No.'));
        
        json_output($response['status'],array('status' => 200,'message' => $response['message']));
		
    }

    public function delete()
    {
        $method = $_SERVER['REQUEST_METHOD'];
		if($method != 'DELETE') return json_output(400,array('status' => 400,'message' => 'Bad request.'));
        $response = $this->UsersModel->delete($_GET['id']);
        if($response['status'] == 400) return json_output(400,array('status' => 200,'message' => 'No.'));
        
        json_output($response['status'],array('status' => 200,'message' => $response['message']));
    }
}
