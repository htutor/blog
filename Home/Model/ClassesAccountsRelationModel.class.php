<?php

	namespace Home\Model;
	use Think\Model;
		
	class ClassesAccountsRelationModel extends Model{
		//classes_accounts_relation
	    protected $teableName = 'classes_accounts_relation';

		 public function findClassesId($accId){ //用户是否有关联事件
			//SELECT class_Id FROM think_classes_accounts_relation WHERE acc_Id = 257
			$res = $this->where('acc_Id = %d',$accId)->find();
			return $res;
		}
	}