<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use Think\Controller;

/**
 * 前台公共控制器
 * 为防止多分组Controller名称冲突，公共Controller名称统一使用分组名称
 */
class CheckController extends Controller {

	/* 空操作，用于输出404页面 */
	public function _empty(){
		$this->redirect('Index');
	}


   protected function _initialize(){
        $this -> login();
    }

	/* 用户登录检测 */
    public function login(){
		/* 用户登录检测 */
        $this -> is_login() || $this->error('您尚未登录或登录超时，请登录！','/Home/Index');

   	}

	public static function is_login(){
        $user = session('user_auth');

        if (empty($user)) {
            return 0;
        } else {
           return $user["uid"];
        }
    }

    public function logout(){
		session('user_auth', null);
		session('user_auth_sign', null);
        $this->success("登出成功",'/Home/Index');
	}

}
