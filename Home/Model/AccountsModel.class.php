<?php

	namespace Home\Model;
	use Think\Model;
		
	class AccountsModel extends Model{
		protected $teableName = 'accounts';
		//This is not a nuccessary setting.Only used if the database name is different.
		
		public function userLogin($username,$userpass){
			// equal as : $Accounts = new \Home\Model\AccountsModel();
			$isRegUser = $this->where("acc_Name='%s'",$username,$userpass)->find();
			
			// $Accounts here is a recordset.$data is a array.
			$isCorrectPassword = $this->where("acc_Name='%s' and acc_Password='%s'",$username,$userpass)->find();
			
			if (is_null($isRegUser))
				$Status = 1;  // User not Exists
			else
				if (is_null($isCorrectPassword))
					$Status = 2;  // Password incorrect
				else
				{
					$this -> setSession($isCorrectPassword);  // login
					$Status = 0;
					//$this -> success('login', 'Home/Test');
				}
			
			return $Status;
		}
		

		private function setSession($user){			
	        /* record and set the SESSION(only) & COOKIES(not yet) */
	        $auth = array(
	            'uid'             => $user['acc_id'],
	            'username'        => $user['acc_name'],
				'userrealname'    => $user['acc_realname'],
	            'last_login_time' => NOW_TIME,
	        );
	
	        session('user_auth', $auth);
			session('user_auth_sign', $user['acc_id']);
			

	    }		
	}
	
