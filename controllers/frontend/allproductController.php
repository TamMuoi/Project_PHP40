<?php 
	include "models/frontend/mainModel.php";
	class allproductController extends Controller{
		use mainModel;
		public function index(){
		//lay danh muc tin tuc
			
			$allproduct = $this->allproduct();

			$hotproduct = $this->hotproduct();
			$this->renderHTML("views/frontend/allproductView.php",array("allproduct"=>$allproduct,"hotproduct"=>$hotproduct));
		}
	}
 ?>