<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	 protected function _initialize(){
		$user = session('user_auth');
		$user_sign = session('user_auth_sign');

		if ($user_sign){
			$this->redirect("/Home/Platform");
		}

	 }

	public function index(){
		$this -> display();
    }

	public function ajaxLogin($username,$userpass){
		$Accounts = D("Accounts");
		$errStatus = $Accounts->userlogin($username,$userpass);

		$this -> ajaxReturn($errStatus);
	}
}
