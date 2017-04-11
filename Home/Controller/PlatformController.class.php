<?php
	namespace Home\Controller;
	use Think\Controller;

	class PlatformController extends CheckController {

		private function isEvent($user,$classId){ //判断系统中是否存在特殊事件（event_list表中有记录)
			$eventList = D('EventList');
			return  $eventList -> isStuEvent($user["uid"]) || $eventList -> isClassEvent($classId);
			//有任何相关特殊事件返回1，否则返回0
				//$this->redirect('Home');  //!!!!!!!此处跳转！！！！！！！
		}
		public function info(){
			$this -> display();
		}

	    public function index(){
			$user = session('user_auth');
			$this -> assign('user',$user);

			$classes = D('ClassesAccountsRelation');
			$classInfo = $classes -> findClassesId($user["uid"]);
			$classId = $classInfo['class_id'];

			//dump($user);
			//dump($classInfo);
			//echo "###".$classId;

			if (!isset($classId)) $classId = 0;  // 数据库返回NULL 利用isset判断最佳

			if ($this ->isEvent($user,$classId)){
				$this->redirect('Home/index'); //有事件则跳转，！！重定向注意指定操作名
			}
			else {
				$this -> display(); //否则正常显示
			}
		}

	}
