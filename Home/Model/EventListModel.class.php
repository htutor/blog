<?php

	namespace Home\Model;
	use Think\Model;
		
	class EventListModel extends Model{
	    protected $teableName = 'event_list';

        public function isStuEvent($accId){ //用户是否有关联事件
			//SELECT COUNT(*) FROM `think_event_list` WHERE eve_ClasS_Id = 3120101 AND eve_Acc_Id IS NULL
			$res = $this->where('eve_acc_Id = %d AND eve_Class_Id IS NULL ',$accId)->count();
			
			return $res;
		}

        public function isClassEvent($classId){//是否关联事件
            $res = $this->where('eve_Class_Id = %d AND eve_Acc_Id IS NULL ',$classId)->count();
			
			return $res;
        }
	}