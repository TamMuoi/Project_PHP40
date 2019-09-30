<?php 
	include "models/frontend/mainModel.php";
	class hotproductController extends Controller{
		use mainModel;
		public function index(){
			//lay danh sach san pham noi bat
			$hotproduct = $this->hotproduct();//ham nay trong model
			
			// $allproduct = $this->allproduct();
			// // $allproduct = $this->allproduct();
			$this->renderHTML("views/frontend/hotproductView.php",array("hotproduct"=>$hotproduct));
		}
	}
 ?>