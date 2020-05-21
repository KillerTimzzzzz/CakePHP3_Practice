<?php
namespace App\Controller;

use App\Controller\CustomAppController;

class ResponseController extends CustomAppController {

    public function initialize() {
        parent::initialize();
        $this->autoRender = false;
    }

    public function index(){
        $testArray = [
            "Test1" => "TestValue1",
            "Test2" => "TestValue2"
        ];
        $this->response->withHeader('X-Extra', 'My header');
        $this->response->withStringBody(json_encode($testArray));

//         return $this->response;
    }
}