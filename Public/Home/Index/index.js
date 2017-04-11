function login() {
	$.post("/Home/Index/ajaxLogin",
		{ username: $('#username').val(), userpass: $('#userpass').val() },
		function (result) {
			switch (result) {
				case 0: window.location.href = "/Home/Platform/"; break;
				case 1:
					$('#username').val('');
					$('#userpass').val('');
					$('#username').attr("placeholder", "用户名不存在");
					$('#userpass').attr("placeholder", "请输入密码");
					$('#username').focus();
					break;
				case 2:
				default:
					$('#userpass').val('');
					$('#userpass').attr("placeholder", "登陆失败，用户名或密码错");
					$('#userpass').focus();
			}
		});
}

$(document).ready(function () {
	$('#login-btn').click(function () {
		login();
	});


	$("#userpass").keydown(function (event) {
		if (event.which == 13)       //User press "enter"
			login();
	});
});
