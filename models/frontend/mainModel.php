<?php 
	trait mainModel{
		public function hotproduct(){
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product where hotproduct=1 order by id desc limit 0,10");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;

		}

		// san pham moi
		public function newproduct(){
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product order by id desc limit 0,10");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}

		// Tin tức
		public function newsproduct(){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_news order by id desc limit 0,4");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}

		public function allproduct(){
		  	$conn = Connection::getInstance();
		  	$query = $conn->prepare("select * from tbl_product order by id desc");
		  	$query->setFetchMode(PDO::FETCH_OBJ);
		  	$query->execute();
		  	$result = $query->fetchAll();
		 	return $result;
		 }
	}
 ?>