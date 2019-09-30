<?php 
	trait newsModel{
		public function modelNewsDetail(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//---
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_news where id=:id");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("id"=>$id));
			//lay mot ban ghi
			$result = $query->fetch();
			return $result;
			//---
		}
		public function modelOtherNews($category_id){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//---
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_news where category_id=:category_id and id < :id limit 0,4");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("category_id"=>$category_id,"id"=>$id));
			//lay mot ban ghi
			$result = $query->fetchAll();
			return $result;
			//---
		}
	}
 ?>