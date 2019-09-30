<?php 
	
	include "models/backend/loginModel.php";
	class loginController extends Controller{
		use loginModel;
		public function index(){
			$this->renderHTML("views/backend/login.php");
		}

		public function login(){
			$data = $this->model_login();

			if(isset($data->email)){
				$_SESSION["email"] = $data->email;
			}
			 header("location:index.php?area=backend");
		}
	}
 ?>