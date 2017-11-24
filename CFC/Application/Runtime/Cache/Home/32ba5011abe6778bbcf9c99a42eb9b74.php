<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<!--头文件以及JS文件-->
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="/CFC/Public/bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
		<link rel="stylesheet" href="/CFC/Public/bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="/CFC/Public/bootstrap/js/jquery.js"></script>
        
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="/CFC/Public/bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!--时间选择器相关包开始-->
		<script src="/CFC/Public/datepicker/datepicker_zh-cn.js"></script>
		<script src="/CFC/Public/datepicker/jquery-1.7.2.min.js"></script>
		<script src="/CFC/Public/datepicker/jquery-ui-1.9.2.custom.min.js"></script>
		<script src=""></script>
		<link rel="stylesheet" href="/CFC/Public/datepicker/jquery-ui-1.9.2.custom.min.css">
		<style>
			textarea{ 
				outline:none;
				resize:none;
			}
		</style>
		<!--时间选择器相关包结束-->
	</head>
	
	
	<!--代码开始-->
	<body>
		<div class="jumbotron">
			<div class="container">
				<h1><span class="label label-default">CFC Payment Tracking System</span></h1>
				<p>...</p>
				<p><a class="btn btn-success btn-lg" role="button">New Tracking</a><a class="btn btn-success btn-lg" role="button" id="sp11"></a></p>	
			</div>
		</div>
			
		<!--主体容器-->
		<div class="container">
				
				<!--CS开单行开始-->
				
				<!--CS开单行结束  --> 
				
				<div class="row">
					<h1>New Order</h1>
				</div>
				<!-- ----------------------客户信息开始--------------------------------- -->
				<form action="/CFC/index.php/Home/Index/AddCustomerInfor" method="post" id="form1">
					<hr class="feature-divider">
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
								  <span class="input-group-addon">*案件号码</span>
								  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="case_number" value="">
								  <span class="input-group-addon">C</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon" id="">请选择总类</span>
									<select class="form-control" name="generality">
										<option value="请选择总类">请选择总类</option>
										<option value="RS">RS</option>
										<option value="RT">RT</option>
										<option value="MT">MT</option>
										<option value="PT">PT</option>
										<option value="EMC">EMC</option>
										<option value="EMC-TJ">EMC-TJ</option>
									</select>
								</div>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
								  <span class="input-group-addon">*客户名称</span>
								  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="customer">
								  <span class="input-group-addon">C</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon" id="">请选择BU</span>
									<select class="form-control" name="BU">
										<option value="请选择BU">请选择BU</option>
										<option value="528115">528115</option>
										<option value="528116">528116</option>
										<option value="528117">528117</option>
										<option value="528118">528118</option>
										<option value="528235">528235</option>
										<option value="528234">528234</option>
										<option value="528135">528135</option>
									</select>
								</div>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
								  <span class="input-group-addon">*收件人</span>
								  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="recipients">
								  <span class="input-group-addon">C</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
								  <span class="input-group-addon">Offer Price (¥)</span>
								  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="OfferPrice" onblur="setNetPrice()">
								  <span class="input-group-addon">C</span>
								</div>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-6">
								<div class="input-group">
								  <span class="input-group-addon">电话/手机</span>
								  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="mobile">
								  <span class="input-group-addon">C</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
								  <span class="input-group-addon">Net &nbsp;Price (¥)</span>
								  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="NetPrice">
								  <span class="input-group-addon">C</span>
								</div>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-6">
								<textarea class="form-control" rows="1" placeholder="请填写收件地址..." name="address"></textarea>
							</div>

							<div class="col-md-3">
								<div class="input-group">
									<span class="input-group-addon" id="">请选择Sales</span>
									<select class="form-control" name="Sales">
										<option value="请选择Sales">请选择Sales</option>
										<option value="Bob XU">Bob XU</option>
										<option value="Chris GAN">Chris GAN</option>
										<option value="Chris Mao">Chris Mao</option>
										<option value="Elva QIU">Elva QIU</option>
										<option value="Felix WEI">Felix WEI</option>
										<option value="Frank YU">Frank YU</option>
										<option value="Garrick ZHU">Garrick ZHU</option>
										<option value="Gavin WANG">Gavin WANG</option>
										<option value="James GUAN">James GUAN</option>
										<option value="Joyce WANG">Joyce WANG</option>
										<option value="Joye GUO">Joye GUO</option>
										<option value="Judy SUN">Judy SUN</option>
										<option value="Ken ZHU">Ken ZHU</option>
										<option value="King KONG">Minming KONG</option>
										<option value="King SUN">King SUN</option>
										<option value="Leo TAN">Leo TAN</option>
										<option value="Lixin ZHANG">Lixin ZHANG</option>
										<option value="Sara JIA">Sara JIA</option>
										<option value="Wenhao TAO">Wenhao TAO</option>
										<option value="Wesley LIN">Wesley LIN</option>
										<option value="Wilma WU">Wilma WU</option>
										<option value="Xiaoyue ZHUO">Xiaoyue ZHUO</option>
										<option value="Xuelun HAN">Xuelun HAN</option>										
										<option value="Yu FU">Yu FU</option>										
										<option value="Zoe GU">Zoe GU</option>										
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="input-group">
									<span class="input-group-addon" id="">请选择PE</span>
									<select class="form-control" name="PE">
										<option value="请选择PE">请选择PE</option>
										<option value="Aeolus NI">Aeolus NI</option>
				                        <option value="Aimee LIANG">Aimee LIANG</option>
				                        <option value="Changbo XIAO">Changbo XIAO</option>
				                        <option value="David-CJ WANG">David WANG</option>
				                        <option value="Jundong CAO">Jundong CAO</option>
				                        <option value="Millie MIAO">Millie MIAO</option>
				                        <option value="Shuohong GU">Shuohong GU</option>
				                        <option value="Timber WANG">Timber WANG</option>
				                        <option value="Tiny ZHANG">Tiny ZHANG</option>
									</select>
								</div>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-6">
								<textarea class="form-control" rows="1" placeholder="Remark" name="remark1"></textarea>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-6">
								<input class="btn btn-success btn-lg" type="submit" value="Submit" onclick="sub1()">
							</div>
						</div>
				</form>
				<!-- ----------------------客户信息结束--------------------------------- -->


				<!-- ----------------------快递信息开始--------------------------------- -->
				<form action="/CFC/index.php/Home/Index/AddExpressInfor" method="post" id="form2">
				<hr class="feature-divider">
					<div class="row">					
						<div class="col-md-6">
							<div class="input-group">
							  <span class="input-group-addon">*发票号码</span>
							  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="invoice">
							  <span class="input-group-addon">F</span>
							</div>
						</div>						
					</div>
					<br />
					<div class="row">					
						<div class="col-md-6">
							<div class="input-group">
							  <span class="input-group-addon">*开票日期</span>
							  <input type="text" id="st1" class="form-control" aria-label="Amount (to the nearest dollar)" name="invoice_date">
							  <span class="input-group-addon">F</span>
							</div>
						</div>						
					</div>
					<br />
					<div class="row">					
						<div class="col-md-6">
							<div class="input-group">
							  <span class="input-group-addon">*快递单号</span>
							  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="express_number">
							  <span class="input-group-addon">F</span>
							</div>
						</div>						
					</div>
					<br />
					<div class="row">					
						<div class="col-md-6">
							<div class="input-group">
							  <span class="input-group-addon">*寄件日期</span>
							  <input type="text" id="st2" class="form-control" aria-label="Amount (to the nearest dollar)" name="express_date">
							  <span class="input-group-addon">F</span>
							</div>
						</div>						
					</div>
					<br />
					<div class="row">
						<div class="col-md-6">
							<input class="btn btn-warning btn-lg" type="submit" value="Update" onclick="sub2()">
						</div>
					</div>
				</form>
				<!-- ----------------------快递信息结束--------------------------------- -->

				<!-- ----------------------追踪日志开始--------------------------------- -->
				<form action="/CFC/index.php/Home/Index/AddTrackLog" method="post" id="form3">
				<hr class="feature-divider">
					<div class="row">					
						<div class="col-md-6">
							<div class="input-group">
							  <span class="input-group-addon">联系日期</span>
							  <input type="text" id="st3" class="form-control" aria-label="Amount (to the nearest dollar)" name="contact_date">
							  <span class="input-group-addon">C</span>
							</div>
						</div>						
					</div>
					<br />
					<div class="row">					
						<div class="col-md-6">
							<div class="input-group">
							  <span class="input-group-addon">预计付款日期</span>
							  <input type="text" id="st4" class="form-control" aria-label="Amount (to the nearest dollar)" name="pay_date">
							  <span class="input-group-addon">C</span>
							</div>
						</div>						
					</div>
					<br />
					<div class="row">					
						<div class="col-md-6">
							<div class="input-group">
							  <span class="input-group-addon">客户付款周期（天）</span>
							  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="customer_payment_cycle">
							  <span class="input-group-addon">C</span>
							</div>
						</div>						
					</div>
					<br />


					<div class="row">
						<div class="col-md-6 form-group">
							<textarea class="form-control" placeholder="Remark" name="remark3"></textarea>
						</div>
					</div>
					<br />
					<div class="row">
						<div class="col-md-6">
							<input class="btn btn-primary btn-lg" type="submit" value="Save" onclick="sub3()">
						</div>
					</div>
				</form>
				<!-- ----------------------追踪日志结束--------------------------------- -->


				<hr class="feature-divider">					
						<div class="row">							
							<div class="col-md-6 form-group">
								<fieldset id="fi"><textarea class="form-control" id="text">Last modified by XXX on 2017-10-23 23:05:18</textarea></fieldset>
							</div>												
							<div class="col-md-6">
								<input class="btn btn-danger btn-lg" type="submit" value="Close" onclick="tishi()">
							</div>
						</div>							
				<br />					
					
				<hr class="feature-divider">
			</div><!--主体容器结束-->	
			
			<!--页脚-->
		<hr class="feature-divider">
		<p class="text-center">Copyright © 2017 Jarvan Liu All rights reserved</p><!--页脚结束-->
			
			
	</body>
	

</html>

<script>
	//	日历包
	$("#st1").datepicker({ dateFormat: "yy-mm-dd" });
	$("#st2").datepicker({ dateFormat: "yy-mm-dd" });
	$("#st3").datepicker({ dateFormat: "yy-mm-dd" });
	$("#st4").datepicker({ dateFormat: "yy-mm-dd" });
	$("#st5").datepicker({ dateFormat: "yy-mm-dd" });
	$("#st6").datepicker({ dateFormat: "yy-mm-dd" });
	$("#fi").attr("disabled", true);
	$("#sp11").html("hello");

	//	提交客户信息
	function sub1(){
		$("#form1").submit();
	}

	//	提交快递信息
	function sub2(){
		$("#form2").submit();
	}

	//	提交追踪日志
	function sub3(){
		$("#form3").submit();
	}

	//	获取登录者的权限
	var status = '<?php echo $authority?>';

	if(status == 2){
		$("#form1 input").attr('disabled', true);
		$("#form1 select").attr('disabled', true);
		$("#form1 textarea").attr('disabled', true);
		$("#form3 input").attr('disabled', true);
		$("#form3 textarea").attr('disabled', true);
	}

	if(status == 3){
		$("#form2 input").attr('disabled', true);
	}

	$("#text").html("新增信息");
	
	function tishi(){
		alert("新增订单不能关闭订单状态");
	}

	//自动获取OP价格
	function setNetPrice(){
		var OP = $('input[name="OfferPrice"]').val();
		var NP = OP/1.06;
		$('input[name="NetPrice"]').val(NP.toFixed(2));
	}
</script>