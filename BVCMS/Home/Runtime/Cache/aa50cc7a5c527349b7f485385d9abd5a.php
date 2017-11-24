<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8" />
        <title>Login</title>
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        
        <style>
        	#username{
        		height: 46px;
        	}
        </style>

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
        
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        		function login(){
        			var login_value = document.getElementById('username').value;
        			if(login_value == 'jarvan' || login_value == 'kevin' || login_value == 'albert'){
        				window.location = '__URL__/index';
        			}else{
        				alert('Wrong Password !');
        			}
        		}
        </script>
	</head>
	<body>
		<div class="container">
			<div class="row" style="margin-top:120px;">
				<div class="col-md-6 col-md-offset-3">
					<div class="well col-md-10 col-md-offset-1">
						<h2>Welcome</h2>
						</br>
						<div class="input-group input-group-lg">
						<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
						<form action="__URL__/index" method="post" id="login_form">
						<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" name="username" id="username">
						</form>
					</div>
					</br>
					<!--<div class="input-group input-group-md">
						<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" placeholder="密码" aria-describedby="sizing-addon1">
					</div>
					</br>-->
					</br>
					<button type="submit" class="btn btn-primary btn-block" onclick="login()" id="login">Login</button>
				</div>
			</div>
		</div>
	</body>
</html>