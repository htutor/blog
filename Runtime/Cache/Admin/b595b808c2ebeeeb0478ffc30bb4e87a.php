<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>Login</title>
    <link rel="stylesheet" href="/Public/home/index/pintuer.css">
    <link rel="stylesheet" href="/Public/home/index/admin.css">
    <script src="/Public/home/index/jquery.js"></script>
    <script src="/Public/home/index/pintuer.js"></script>

		<script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="/Public/Home/Index/index.js"></script>
</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">
            </div>
						<div class="login-form">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>网站后台管理中心</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" id="username"  placeholder="请输入账号"  />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" id="userpass"  placeholder="请输入密码"  />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
                </div>
								<div style="padding:30px;"><input type="submit" id="login-btn" class="button button-block bg-main text-big input-big" value="登录"></div>
						</div>
					</div>

        </div>
    </div>
</div>

</body>
</html>