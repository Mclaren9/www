<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8" />
        <title>BVCMS</title>
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        
        <style>
            /** {font-family:arial}*/
            /*修改表格第一行居中问题*/
            #td_center{
                text-align: center;
            }

            /*修改备注样式*/
            #remark{
                position: relative;
                top: -191px;
            }

            /*修改主页超链接的样式*/
            #home:link {
                text-decoration: none;
            }
            #home:visited {
                text-decoration: none;
            }
            #home:hover {
                text-decoration: none;
            }
            #home:active {
                text-decoration: none;
            }
        </style>

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
        
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        
        <!--JS脚本代码-->
        <script type="text/javascript">
            $('.dropdown-toggle').dropdown()
        </script>
        <script>
//      	回到顶部代码
        	function toTop(){
        		window.scroll(0,0);        
        	}
        	
        	function toBottom(){
        		window.scroll(0,99999);
        	}
        	
            function tijiao(){
                var modal = document.getElementById('modal_form');
                modal.submit();
            }

            function sub(){
                var form_search=document.getElementById('search');
                form_search.submit();
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

            //双击变色
            function change_color(){
                var tr=document.getElementsByTagName('tr');
                for(var i=0;i<tr.length;i++){
                    if(tr[i].style.background=='red'){
                        tr[i].style.background='';
                    }
                }
            }
        </script>
        <script type="text/javascript">
            function delete_form(){
                var del_form = document.getElementById('delete_form');
                // var msg = '确定删除此记录吗？';
                // if(confirm(msg) == true){
                //     return true;
                // }else{
                //     return false;
                // }
                var name=prompt("请输入密码：");
                if(name == 'MyASIP@55w0rd'){
                    return true;
                }else{
                    alert('密码错误');
                    return false;
                }
            }
		window.onload = function(){
			addListen();
		}
        </script>
    </head>
    <!--<body onload='addListen()'>-->
	<!--<body onload="window.scrollTo(0,document.body.scrollHeight)">-->
        
        
        <!--删除密码确认框-->
        <!-- <div class="modal fade" tabindex="-1" role="dialog" id="ConfirmAdminPassword">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body&hellip;</p>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div> -->
        <!--ADD INFO页面模态框-->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">PC Info.</h4>
                    </div>
                    
                    <!-- 中间部分 -->
                    <div class="container-fluid">

                        <!-- <div class="row">                            -->
                            <!--<div class="text-center text-nowrap"><h3 style="color: #8020ff;">此处显示电脑名</h3></div>-->  
                            <!-- <h2 class="text-nowrap text-center">
                                <span class="label label-success"><?php echo ($data_1); ?></span>
                                <span class="label label-primary"><?php echo ($data_2); ?></span>
                                <span class="label label-default"><?php echo ($data_3); ?></span>
                                <span class="label label-warning"><?php echo ($data_4); ?></span>
                                <span class="label label-danger"><?php echo ($data_5); ?></span>
                            </h2>
                        </div> -->
                        <div class="row">
                            <h2 class="text-nowrap text-center">
                                <span class="label label-success">New Computer</span>
                            </h2>
                        </div>

                        <!--<hr class="feature-divider">-->
                        <div class="row">
                            <form action="__URL__/add" method="post" id="modal_form">
                            <!--***********************电脑信息**********************-->
                            <div class="col-md-12">

                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right"><span style="color: red;">* PC Name</span>:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="pcname">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right"><span style="color: red;">* Location</span>:</h4>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="location">
                                          <option>SHA04</option>
                                          <option>SHA05</option>
                                          <option>SHA09</option>
                                          <option>SHA02</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Model:</h4>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="model">
                                          <option>Lenovo X1</option>
                                          <option>Lenovo X270</option>
                                          <option>Lenovo X260</option>
                                          <option>Lenovo X240</option>
                                          <option>Lenovo L470</option>
                                          <option>Lenovo L460</option>
                                          <option>Lenovo L440</option>
                                          <option>Lenovo M700</option>
                                          <option>Lenovo M710</option>
                                          <option>Lenovo M73</option>
                                          <option>Lenovo M72</option>
                                          <option>Dell E5430</option>
                                          <option>Dell E5420</option>
                                          <option>Dell E5440</option>
                                          <option>Dell E6230</option>
                                          <option>Dell E7240</option>
                                          <option>Dell 390</option>
                                          <option>Dell 3010</option>
                                          <option>HP 2810MT</option>
                                          <option>HP 4331S</option>
                                          <option>HP 6000</option>
                                          <option>HP 7100MT</option>
                                          <option>HP DX2060</option>
                                          <option>HP DX2310</option>
                                          <option>HP DX2710</option>
                                          <option>HP DX7510</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right"><span style="color: red;">* S/N</span>:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="sn">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-nowrap"><span style="color: red;">* Computer-Type</span>: </h4>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="computertype" id="inlineRadio_1" value="Laptop">Laptop
                                        </label>
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="computertype" id="inlineRadio_2" value="Desktop">Desktop
                                        </label>
                                    </div>
                                </div>
                                <hr class="feature-divider">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-nowrap">Purchase Date:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="purchasedate" placeholder="yyyy-mm-dd">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-nowrap">Replace Date:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="replacedate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right"><span style="color: red;">* BU Code</span>:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="bucode">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-nowrap">BU Description:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="budescription">
                                    </div>
                                </div>
                                <hr class="feature-divider">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right"><span style="color: red;">* OS</span>: </h4>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="os" id="inlineRadio1" value="XP">XP
                                        </label>
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="os" id="inlineRadio1" value="Win 7">Win 7
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Office: </h4>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="office" id="inlineRadio1" value="Office">Office
                                        </label>
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="office" id="inlineRadio1" value="WPS">WPS
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Snow: </h4>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="snow" id="inlineRadio1" value="Yes">Yes
                                        </label>
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="snow" id="inlineRadio1" value="No">No
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Monitor: </h4>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="monitor" id="inlineRadio1" value="Yes">Yes
                                        </label>
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="monitor" id="inlineRadio1" value="No">No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--***************用户信息***************-->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">E-Name:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="ename">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Staff:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="staff">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Dept:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <select class="form-control" name="dept">
                                            <option>请选择部门</option>
                                            <option>Admin</option>
                                            <option>BD</option>
                                            <option>CS</option>
                                            <option>Executive Management</option>
                                            <option>Fin-BC</option>
                                            <option>Fin-SSC</option>
                                            <option>GC Marketing</option>
                                            <option>HR</option>
                                            <option>IT</option>
                                            <option>KAM</option>
                                            <option>Management</option>
                                            <option>Marketing</option>
                                            <option>MKT</option>              
                                            <option>New Project</option>
                                            <option>Operational Certification</option>
                                            <option>Partnership</option>
                                            <option>Pre-Shipment Inspection</option>
                                            <option>QHSE</option>
                                            <option>Sales-Marketing</option>
                                            <option>TC</option>
                                            <option>Technical Support</option>
                                            <option>Test-EMC</option>
                                            <option>Test</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Cityray:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="cityray">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">C-Name:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="cname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Job Title:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="jobtitle">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">AD Account:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="adaccount" placeholder="eg: asi\xxxxx">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-nowrap text-center">Work Location:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <select class="form-control" name="worklocation">
                                          <option>选择工作地址</option>
                                          <option>广州 Guangzhou</option>
                                          <option>上海 Shanghai</option>
                                          <option>青岛 Qingdao</option>
                                          <option>温州 Wenzhou</option>
                                          <option>宁波 Ningbo</option>
                                          <option>慈溪 Cixi</option>
                                          <option>南京 Nanjing</option>
                                          <option>合肥 Hefei</option>
                                          <option>永康 Yongkang</option>
                                          <option>厦门 Xiamen</option>
                                          <option>顺德 Shunde</option>
                                          <option>苏州 Suzhou</option>
                                          <option>深圳 Shenzhen</option>
                                          <option>黄岩 Huangyan</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">N+1:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="n1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">SBU/BL:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <select class="form-control" name="sbubl">
                                            <option>选择SBU</option>
                                            <option>Admin</option>
                                            <option>Analytical</option>
                                            <option>EE-Auto</option>
                                            <option>EE-CG</option>
                                            <option>EE-PRG</option>
                                            <option>EE-ROHS</option>
                                            <option>FIN</option>
                                            <option>FIN-BC</option>
                                            <option>HR</option>
                                            <option>IT</option>
                                            <option>MKT</option>
                                            <option>NB-Site</option>
                                            <option>QA</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Job Family:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="jobfamily">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Asset NO.:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="AssetNo">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Bar Code:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="BarCode">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Remark:</h4>
                                    </div>
                                    <div class="col-md-8" "form-group">
                                        <textarea class="form-control" rows="3" name="remark"></textarea> 
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            </form>
                        </div>



                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                          <button type="button" class="btn btn-primary" onclick="tijiao()" id="tijiao">Save changes</button>
                        </div>
                    </div>
                    <!-- 中间部分 -->



                </div>
            </div>
        </div>
        
    











        <div class="container">
            
                
            <!--页眉logo区域-->
            <div class="row">
                <div class="page-header">
                            <a href="__URL__/index" id="home"><h1><span class="label label-default">BV Computer Management System</span><small> ASI-Shanghai</small></h1></a>
                </div>
            </div>
            
            
            <!--功能图标按钮区域-->
            <div class="row">
                    <div class="col-md-2">
                        <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="modal" data-target=".bs-example-modal-lg">Add</button>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <button class="btn btn-lg btn-danger btn-block" type="button">Instruction</button>
                    </div>
            </div>
            <hr class="feature-divider"><!--分割线-->
            <div class="row">
                <div class="col-md-5">
                <form action="__URL__/search" method="post" id="search">
                    <div class="btn-group col-md-5">
                        <!-- <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        选择关键字
                        <span class="caret"></span>
                        </button> -->
                        <!-- <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        </ul> -->
                        <select class="form-control" name="search_key">
                            <option>选择搜索关键字</option>
                            <option>PC Name</option>
                            <option>S/N</option>
                            <option>PC Model</option>
                            <option>User Name</option>
                            <option>BU Code</option>
                            <option>Location</option>
                            <option>Dept.</option>
                            <option>Staff</option>
                        </select>

                    </div>
                    
                    <div class="input-group col-md-7">
                        <input type="text" class="form-control" name="search_data">
                        <span class="input-group-btn" onclick="sub()">
                          <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" ></span></button>
                        </span>
                    </div><!-- /input-group -->
                </form>
                </div>
                <div class="col-md-4 col-md-offset-3">
                        <div class="btn-group">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">请选择排序方式 <span class="caret"></span></button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="__URL__/order/order_data/time">按添加时间</a></li>
                            <li><a href="__URL__/order/order_data/Dept">按部门</a></li>
                            <li><a href="__URL__/order/order_data/BUCode">按BU-Code</a></li>
                            <li><a href="__URL__/order/order_data/Status">按Status</a></li>
                          </ul>
                        </div>
                        <button type="button" class="btn btn-primary">Inport</button><!--导入按钮-->
                        <a href="__URL__/export"><button type="button" class="btn btn-primary">Export</button></a><!--导出按钮-->
                        </div>
                </div>
            </div>
            <div class="row"></div>

            <div class="row"></div>
        
            <br/><br/>


        <!-- 显示表格 -->
        <!--border="2" align="center" width="1200"-->
            <div class="row">
                <table class="table table-bordered table-hover">
                <tr>
                    <th id="td_center">ID</th> 
                    <th id="td_center">Status</th>
                    <th id="td_center">PC Type</th>
                    <th id="td_center">PC Name</th>
                    <th id="td_center">E-Name</th>
                    <th id="td_center">BU Code</th>
                    <th id="td_center">Dept.</th>
                    <th id="td_center">Serial NO.</th>
                    <th id="td_center">Model</th>
                    <th id="td_center">Location</th>
                    <th id="td_center" colspan='2'>Action</th>
                </tr>
            </div>

        </div>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" ondblclick="change_color()" name='tr[]'>
                <!-- <td><input type="checkbox" name="che[]"></td> -->
                <!-- <td><?php echo (date('Y/m/d H:i:s',$vo["time"])); ?></td> -->
                <td><?php echo ($vo["Id"]); ?></td>
                <!-- <td><?php echo ($vo["Status"]); ?></td> -->
                <?php if($vo["Status"] == 'InUse'): ?><td><font color="red"><b>InUse</b></font></td>
                <?php elseif($vo["Status"] == 'Scrapped'): ?>
                    <td><font color="gray"><b>Scrapped</b></font></td>
                <?php else: ?>
                    <td><font color="green"><b>Spare</b></font><?php endif; ?>
                <td><?php echo ($vo["ComputerType"]); ?></td>
                <td><?php echo ($vo["PCName"]); ?></td>
                <td><?php echo ($vo["EName"]); ?></td>
                <td><?php echo ($vo["BUCode"]); ?></td>
                <td><?php echo ($vo["Dept"]); ?></td>
                <td><?php echo ($vo["SN"]); ?></td>
                <td><?php echo ($vo["Model"]); ?></td>
                <td><?php echo ($vo["Location"]); ?></td>
                <td id="td_center" data-toggle="modal" data-target="#ModifyInfoPage">
                    <a href="__URL__/modify/id/<?php echo ($vo["Id"]); ?>">
                        <button class="btn btn-xs">
                            <span class="glyphicon glyphicon-pencil" style="color:blueviolet;"></span>
                        </button>
                    </a>
                </td>
                <!--<td id="td_center" data-toggle="modal" data-target="#WarningPage"><a href="__URL__/delete/id/<?php echo ($vo["Id"]); ?>"><button class="btn btn-xs"><span class="glyphicon glyphicon-remove" style="color: red;"></span></button></a></td>-->
                <td id="td_center" data-toggle="modal" data-target="#ConfirmAdminPassword">
                    <a href="__URL__/delete/id/<?php echo ($vo["Id"]); ?>" onclick="javascript:return delete_form()">
                        <button class="btn btn-xs">
                            <span class="glyphicon glyphicon-remove" style="color: red;"></span>
                        </button>
                    </a>
                </td>
                <!-- <td><?php echo ($vo["Remark"]); ?></td> -->
                <!-- <td><a href="__URL__/delete/id/<?php echo ($vo["Id"]); ?>">删除</a>|<a href="__URL__/modify/id/<?php echo ($vo["Id"]); ?>">修改</a>|<a href="__URL__/look/id/<?php echo ($vo["Id"]); ?>">查看</a></td> -->
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
            <div class="row">
            	<hr class="feature-divider"><!--分割线-->
            	<p class="text-center">Copyright © 2017 Jarvan Liu All rights reserved</p>
            </div>
            
            <div id="toTop" onclick="toTop()" style="position: fixed;top: 400px;right: 30px;cursor:pointer">
       			<img src="__PUBLIC__/images/BackToTop.png" style="width: 40px;height: 40px;" alt="back to top" title="Back To Top"/>
            </div>
            
            <div id="toBottom" onclick="toBottom()" style="position: fixed;top: 470px;right: 30px;cursor:pointer">
       			<img src="__PUBLIC__/images/BackToBottom.png" style="width: 40px;height: 40px;" alt="back to top" title="Back To Bottom"/>
            </div>
            
    </body>
</html>