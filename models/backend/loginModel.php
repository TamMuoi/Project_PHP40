<?php 

	trait loginModel{
		public function model_login(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			$password = md5($password);

			$conn = Connection::getInstance();

$query = $conn->prepare("select email from tbl_user where email=:email and password=:password");
			$query->setFetchMode(PDO::FETCH_OBJ);

			$query->execute(array("email"=>$email,"password"=>$password));
			$result = $query->fetch();
			return $result;
		}
	}
 ?>