<?php 
	class controller_adv_bottom extends controller{
		public function __construct(){
			parent::__construct();
			//lay cac ban ghi co c_position=1 (hien thi ben trai)
			$arr = $this->model->fetch("select * from tbl_adv where c_position=2");
			//load view
			include "view/frontend/view_adv_bottom.php";
		}
	}
	new controller_adv_bottom();
 ?>