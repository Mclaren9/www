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
		<style>
			th{
				text-align: center;
			}
		</style>
		<script>
			//双击变色
            function change_color(){
                var tr=document.getElementsByTagName('tr');
                for(var i=0;i<tr.length;i++){
                    if(tr[i].style.background=='red'){
                        tr[i].style.background='';
                    }
                }
            }
            
            //单击表格某一行，背景色变色
            function addListen(){
                var  arrTrs = document.getElementsByTagName('tr');
                for(var i=0;i<arrTrs.length;i++){
                    var ss = arrTrs[i];
                    if(arrTrs[i].addEventListener){
                        arrTrs[i].addEventListener('click',setTable);
                    }else{
                        arrTrs[i].attachEvent("onclick",setTable);
                    }
                }
            }

            function setTable(evt){
                var  arrTrs = document.getElementsByTagName('tr');
                for(var i=0;i<arrTrs.length;i++){
                    arrTrs[i].style.background='';
                }
                evt.target.parentNode.style.background='#87ceff';
            }

			function search(){
				$("#form_search").submit();
			}

			function delete_form(){
				var del_form = document.getElementById('delete_form');
				// var msg = '确定删除此记录吗？';
				// if(confirm(msg) == true){
				//     return true;
				// }else{
				//     return false;
				// }
//				var user = '<?php echo session("name"); ?>';
//				$.ajax({
//					type:'get',
//					url:'/CFC/index.php/Home/Index/ajax/user'+user,
//					dataType:'json',
//					success:function(data){
//
//					}
//				});
				var name=prompt("请输入密码：");
				if(name == 'admin'){
					return true;
				}else{
					alert('密码错误');
					return false;
				}
			}
		</script>
	</head>
	
	
	<!--代码开始-->
	<body onload='addListen()'>
		<div class="jumbotron">
			<div class="container">
				<h1><span class="label label-default">CFC Payment Tracking System</span></h1>
				<p class="text-right"><?php echo (session('name')); ?><a href="/CFC/index.php/Home/Index/loginout">退出</a></p>
				<p><a class="btn btn-primary btn-lg" href="/CFC/index.php/Home/Index/AddNewOrder" role="button" target="_blank">Add New</a></p>
			</div>
		</div>
			
		<!--主体容器-->
		<div class="container">
				<hr class="feature-divider">
				<!--search框行开始-->
				<div class="row">
					<div class="col-md-4">
						<form action="/CFC/index.php/Home/Index/index" id="form_search" method="post">
						<div class="input-group">
								<input type="text" class="form-control" placeholder="Please enter order number" id="search_content" value="" name="search">
								<span class="input-group-btn" onclick="search()">
								  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" ></span></button>
								</span>
	                    </div>
						</form>
					</div>
									
                    <!--<div class="col-md-3 col-md-offset-5">
                    	<div class="dropdown">
						  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						    Sort by
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						    <li><a href="/CFC/index.php/Home/Index/index/condition/time">Date</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="/CFC/index.php/Home/Index/index/condition/Sales">Sales</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="/CFC/index.php/Home/Index/index/condition/action">CS</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="/CFC/index.php/Home/Index/index/condition/TBD">TBD</a></li>
						  </ul>
						</div>
						<a href="/CFC/index.php/Home/Index/export"><button type="button" class="btn btn-primary">Export</button></a>
                    </div>
                </div> -->
                	
                	<div class="col-md-3 col-md-offset-5">
                        <div class="btn-group">
	                        <div class="btn-group">
	                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">请选择排序方式 <span class="caret"></span></button>
	                          <ul class="dropdown-menu" role="menu">
	                            <li><a href="/CFC/index.php/Home/Index/index/condition/addCustomerTime">Date</a></li>
	                            <li><a href="/CFC/index.php/Home/Index/index/condition/Sales">Sales</a></li>
	                            <li><a href="/CFC/index.php/Home/Index/index/condition/action">CS</a></li>
	                            <li><a href="/CFC/index.php/Home/Index/index/condition/TBD">TBD</a></li>
	                          </ul>
	                        </div>
                        	
                        	<a href="/CFC/index.php/Home/Index/export"><button type="button" class="btn btn-primary">Export</button></a><!--导出按钮-->
                        </div>
                </div>
                	
                <!--search框行结束  --> 
				
				<hr class="feature-divider">				
				<p>
					<table class="table table-bordered table-hover">
						<tr align="center">
							<th>ID</th>
							<th>Status</th>
							<th>Order No.</th>
							<th>Customer Name</th>
							<th>Classification</th><!--总类-->
							<th>BU Code</th>
							<th>Offer Price</th>
							<th>CreateTime</th>
							<th>ExpressTime</th>
							<th>ExpressNo.</th>
							<th>CS</th>
							<th id="td_center" colspan='2'>Action</th>
						</tr>
						<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" onclick="addListen()">
								<td><?php echo ($vo["id"]); ?></td>
								<?php if($vo["status"] == Processing): ?><td style="color:red"><b><?php echo ($vo["status"]); ?></b></td>
								<?php else: ?>
									<td style="color:green"><b><?php echo ($vo["status"]); ?></b></td><?php endif; ?>
								<td><?php echo ($vo["case_number"]); ?></td>
								<td><?php echo ($vo["customer"]); ?></td>
								<td><?php echo ($vo["generality"]); ?></td>
								<td><?php echo ($vo["BU"]); ?></td>
								<td><?php echo ($vo["OfferPrice"]); ?></td>
								<td><?php echo (date("Y/m/d H:i:s",$vo["addCustomerTime"])); ?></td>
								<td><?php if($vo["addExpressTime"] != ''): echo (date("Y/m/d H:i:s",$vo["addExpressTime"])); else: ?>--<?php endif; ?></td>
								<td><?php echo ($vo["express_number"]); ?></td>
								<td><?php echo ($vo["action"]); ?></td>
								<td>
									<a href="/CFC/index.php/Home/Index/modify/id/<?php echo ($vo["id"]); ?>">
										<button class="btn btn-xs">
											<span class="glyphicon glyphicon-edit" style="color:blueviolet;"></span>
										</button>
									</a>
								</td>
								<td>
									<a href="/CFC/index.php/Home/Index/delete/id/<?php echo ($vo["id"]); ?>" onclick="javascript:return delete_form()">
										<button class="btn btn-xs">
											<span class="glyphicon glyphicon-remove" style="color:red;"></span>
										</button>
									</a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table>
				</p>
				<hr class="feature-divider">
			</div><!--主体容器结束-->	
			
			<!--页脚-->
		<hr class="feature-divider">
		<p class="text-center">Copyright © 2017 Jarvan Liu All rights reserved</p><!--页脚结束-->
	</body>
</html>
<script>

</script>