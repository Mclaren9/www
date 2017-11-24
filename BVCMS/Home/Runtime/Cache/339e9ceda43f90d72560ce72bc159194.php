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
            #remark {
                position: absolute;
                left: 15px;
                top:10px;
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
    function tijiao(){
        var modal = document.getElementById('modal_form');
        modal.submit();
    }
    function back(){
		window.location = '__URL__/index';
	}
</script>
<body>
     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" onclick="back()"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">PC Info.</h4>
                    </div>
                    
                    <!-- 中间部分 -->
                    <div class="container-fluid">

                        <div class="row">                          
                            <!--<div class="text-center text-nowrap"><h3 style="color: #8020ff;">此处显示电脑名</h3></div>-->  
                            <h2 class="text-nowrap text-center">
                                <span class="label label-success"><?php echo ($data_1); ?></span>
                                <span class="label label-primary"><?php echo ($data_2); ?></span>
                                <span class="label label-default"><?php echo ($data_3); ?></span>
                                <span class="label label-warning"><?php echo ($data_4); ?></span>
                                <span class="label label-danger"><?php echo ($data_5); ?></span>
                            </h2>
                        </div>
                        <!-- <div class="row">
                            <h2 class="text-nowrap text-center">
                                <span class="label label-primary">新电脑</span>
                            </h2>
                        </div> -->

                        <!--<hr class="feature-divider">-->
                        <div class="row">
                            <form action="__URL__/save/id/<?php echo ($data["Id"]); ?>" method="post" id="modal_form">
                            <!--***********************电脑信息**********************-->
                            <div class="col-md-12">
                            
                            <div class="col-md-6">
                            	<div class="row">
                            		<div class="col-md-4">
                                        <h4 class="text-right"><span style="color: red;">* PC Name</span>:</h4>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="pcname" value="<?php echo ($data_5); ?>">                                                             
                                    </div>
                            	</div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right"><span style="color: red;">* Location</span>:</h4>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="location" id="select_location">
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
                                        <select class="form-control" name="model" id="select_model">
                                          <option>Lenovo X1</option>
                                          <option>Lenovo X270</option>
                                          <option>Lenovo X260</option>
                                          <option>Lenovo X240</option>
                                          <option>Lenovo L470</option>
                                          <option>Lenovo L460</option>
                                          <option>Lenovo L440</option>
                                          <option>Lenovo M710</option>
                                          <option>Lenovo M700</option>
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
                                          <option>HP 6200</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right"><span style="color: red;">*S/N</span>:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="sn" value="<?php echo ($data["SN"]); ?>">
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
                                        <input type="text" class="form-control" name="purchasedate" placeholder="yyyy-mm-dd" value="<?php echo ($data["PurchaseDate"]); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-nowrap">Replace Date:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="replacedate" value="<?php echo ($data["ReplaceDate"]); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right"><span style="color: red;">*BU Code</span>:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="bucode" value="<?php echo ($data["BUCode"]); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-nowrap">BU Description:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="budescription" value="<?php echo ($data["BUDescription"]); ?>">
                                    </div>
                                </div>
                                <hr class="feature-divider">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right"><span style="color: red;">* OS</span>: </h4>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="os" id="os_1" value="XP">XP
                                        </label>
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="os" id="os_2" value="Win 7">Win 7
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Office: </h4>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="office" id="office_1" value="Office">Office
                                        </label>
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="office" id="office_2" value="WPS">WPS
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Snow: </h4>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="snow" id="snow_1" value="Yes">Yes
                                        </label>
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="snow" id="snow_2" value="No">No
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Monitor: </h4>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="monitor" id="monitor_1" value="Yes">Yes
                                        </label>
                                        <label class="radio-inline input-lg">
                                          <input type="radio" name="monitor" id="monitor_2" value="No">No
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
                                        <input type="text" class="form-control" name="ename" value="<?php echo ($data["EName"]); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Staff:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="staff" value="<?php echo ($data["Staff"]); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Dept:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <select class="form-control" name="dept" id="select_dept">
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
                                        <input type="text" class="form-control" name="cityray" value="<?php echo ($data["Cityray"]); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">C-Name:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="cname" value="<?php echo ($data["CName"]); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Job Title:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="jobtitle" value="<?php echo ($data["JobTitle"]); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">AD Account:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="adaccount" placeholder="eg: asi\xxxxx" value="<?php echo ($data["ADAccount"]); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-nowrap text-center">Work Location:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <select class="form-control" name="worklocation" id="select_worklocation">
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
                                        <input type="text" class="form-control" name="n1" value="<?php echo ($data["N1"]); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">SBU/BL:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <select class="form-control" name="sbubl" id="select_sbubl">
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
                                        <input type="text" class="form-control" name="jobfamily" value="<?php echo ($data["JobFamily"]); ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Asset NO.:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="AssetNo" value="<?php echo ($data["AssetNo"]); ?>">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Bar Code:</h4>
                                    </div>
                                    <div class="col-md-8" "input-group">
                                        <input type="text" class="form-control" name="BarCode" value="<?php echo ($data["BarCode"]); ?>">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-right">Remark:</h4>
                                    </div>
                                    <div class="col-md-7" "form-group">
                                        <textarea class="form-control" rows="1" name="remark" id="remark"></textarea> 
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            </form>
                        </div>



                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="back()">Cancle</button>
                          <button type="button" class="btn btn-primary" onclick="tijiao()" id="tijiao">Save changes</button>
                        </div>
                    </div>
                    <!-- 中间部分 -->



                </div>
            </div>
        </div>



            <div class="row">
                    <div class="col-md-2">
                        <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="modal" data-target=".bs-example-modal-lg" id="btn">show</button>
                    </div>
                    <div class="col-md-1"></div>
            </div>
            <script type="text/javascript">
                $(function(){
                    // $('.bs-example-modal-lg').show().attr('aria-hidden','true').addClass('in');
                    console.log('click')
                    $('#btn').click().hide();
                })
            </script>
</body>
</html>


<script>
    window.onload=function(){
        // 修改location的默认值
        var location = "<?php echo ($data["Location"]); ?>";
        var selectLocation = document.getElementById("select_location");
        for(var i = 0; i<selectLocation.length; i++){
            if(selectLocation.options[i].value == location){
                selectLocation.options[i].selected = 'true';
                console.log(selectLocation);
                break;
            }
        }
        

        // 修改model的默认值
        var model = "<?php echo ($data["Model"]); ?>";
        var select_model = document.getElementById("select_model");
        for(var i = 0; i<select_model.length; i++){
            if(select_model.options[i].value == model){
                select_model.options[i].selected = 'true';
                break;
            }
        }
        
        // 修改ComputerType的默认值
        var computertype = "<?php echo ($data["ComputerType"]); ?>";
        console.log(computertype);
        var computertype_1 = document.getElementById('inlineRadio_1');
        var computertype_2 = document.getElementById('inlineRadio_2');
        if(computertype == 'Laptop'){
            computertype_1.checked = 'checked';
        }else if(computertype == 'Desktop'){
            computertype_2.checked = 'checked';
        }

        // 修改OS的默认值
        var os = "<?php echo ($data["OS"]); ?>";
        var os_1 = document.getElementById('os_1');
        var os_2 = document.getElementById('os_2');
        if(os == 'XP'){
            os_1.checked = "checked";
        }else{
            os_2.checked = 'checked';
        }

        // 修改Office的默认值
        var office = "<?php echo ($data["Office"]); ?>";
        var office_1 = document.getElementById('office_1');
        var office_2 = document.getElementById('office_2');
        if(office == 'Office'){
            office_1.checked = "checked";
        }else{
            office_2.checked = 'checked';
        }

        // 修改Snow的默认值
        var snow = "<?php echo ($data["Snow"]); ?>";
        var snow_1 = document.getElementById('snow_1');
        var snow_2 = document.getElementById('snow_2');
        if(snow == 'Yes'){
            snow_1.checked = "checked";
        }else{
            snow_2.checked = 'checked';
        }

        // 修改Monitor的默认值
        var monitor = "<?php echo ($data["Monitor"]); ?>";
        var monitor_1 = document.getElementById('monitor_1');
        var monitor_2 = document.getElementById('monitor_2');
        if(monitor == 'Yes'){
            monitor_1.checked = "checked";
        }else{
            monitor_2.checked = 'checked';
        }

        // 修改dept默认值
        var dept = "<?php echo ($data["Dept"]); ?>";
        var select_dept = document.getElementById("select_dept");
        for(var i = 0; i<select_dept.length; i++){
            if(select_dept.options[i].value == dept){
                select_dept.options[i].selected = 'true';
                break;
            }
        }

        // 修改worklocation的默认值
        var worklocation = "<?php echo ($data["WorkLocation"]); ?>";
        var select_worklocation = document.getElementById("select_worklocation");
        for(var i = 0; i<select_worklocation.length; i++){
            if(select_worklocation.options[i].value == worklocation){
                select_worklocation.options[i].selected = 'true';
                break;
            }
        }

        // 修改sbubl的默认值
        var sbubl = "<?php echo ($data["SBUBL"]); ?>";
        var select_sbubl = document.getElementById("select_sbubl");
        for(var i = 0; i<select_sbubl.length; i++){
            if(select_sbubl.options[i].value == sbubl){
                select_sbubl.options[i].selected = 'true';
                break;
            }
        }

        // 修改remark的默认值
        var remark = document.getElementById('remark');
        remark.value = "<?php echo ($data["Remark"]); ?>";
    }
</script>