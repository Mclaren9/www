<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CFC Login</title>
		<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="/CFC/Public/bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
		<link rel="stylesheet" href="/CFC/Public/bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="/CFC/Public/bootstrap/js/jquery.js"></script>
        
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="/CFC/Public/bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="container">
			<div class="row" style="margin-top:120px;">
				<div class="col-md-6 col-md-offset-3">
					<div class="well col-md-10 col-md-offset-1">
						<h2>Welcome</h2>
						</br>
						<form action="/CFC/index.php/Home/Login/check_login" method="post">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
								<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" name="username" id="username">
							</div>

							<br />

							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
								<input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" name="password" id="password">
							</div>
						</form>
					</br>
					</br>
					<button type="submit" class="btn btn-primary btn-block" onclick="login()" id="login">Login</button>
				</div>
			</div>
		</div>
	</body>
</html>
<script>
	function login(){
		$("form").submit();
	}
</script>