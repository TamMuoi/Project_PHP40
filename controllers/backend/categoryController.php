<?php 
	include "models/backend/categoryModel.php";
	class categoryController extends Controller{
		use categoryModel;
		public function __construct(){
			$this->authentication();
		}
		public function list_category(){
			$recordPerPage=4;
			$total=$this->model_total();
			$numPage=ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			//----
			//goi ham model_get() trong class userModel de lay du lieu
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/backend/list_category_news.php", array("data"=>$data,"numPage"=>$numPage));
		}
		public function edit(){
			$id=isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			//bien $formAction de dieu khien action cua the form
			$formAction="index.php?area=backend&controller=category&action=do_edit&category_id=$id";
			$record=$this->model_edit();
			//xuat dl ra view quan ham renderHTML
			$this->renderHTML("views/backend/add_edit_category_news.php",array("formAction"=>$formAction,"record"=>$record));
		}
		public function do_edit(){
			$id=isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			//goi ham model_do_edit
			$this->model_do_edit();
			//quay tro lai trang index
			header("location:index.php?area=backend&controller=category&action=list_category");
		}
		public function add(){
			//bien $formAction de dieu khien action cua the form
			$formAction="index.php?area=backend&controller=category&action=do_add";
			$this->renderHTML("views/backend/add_edit_category_news.php",array("formAction"=>$formAction));
		}
		public function do_add(){
			$this->model_do_add();
			header("location:index.php?area=backend&controller=category&action=list_category");
		}
		public function delete(){
			$id=isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["id"]:0;
			//goi ham model_do_delete
			$this->model_delete();
			//quay tro lai trang index
			header("location:index.php?area=backend&controller=category&action=list_category");
		}
	}
 ?>