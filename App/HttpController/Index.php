<?php
namespace App\HttpController;

use EasySwoole\Core\Http\AbstractInterface\Controller;

class Index extends Controller {

	public function index()
	{
		$this->response()->write("hello, this is index function");
	}

	public function test()
	{
		$this->response()->write("This is test function");
	}

}


