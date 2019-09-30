<?php 
	include "models/frontend/homeModel.php";
	class homeproductController extends Controller{
		use homeModel;
		public function index(){
			//lay danh muc tin tuc
			$category = $this->modelListCategory();
			$this->renderHTML("views/frontend/homeproductView.php",array("category"=>$category));
		}
	}
 ?>