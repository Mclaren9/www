<?php if (!defined('THINK_PATH')) exit();?><html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
</head>
<body>
  <table border=1 cellpadding=0 cellspacing=0 width="100%" >
      <tr>
            <td colspan="27" align="center">
             <!-- <h2 align="center">数据表</h2> -->
             数据表
           </td>
      </tr>
      <tr>
        <td style='width:54pt' align="center">Id</td>
        <td style='width:54pt' align="center">Location</td>
        <td style='width:54pt' align="center">Model</td>
        <td style='width:54pt' align="center">*S/N</td>
        <td style='width:54pt' align="center">PCName</td>
        <td style='width:54pt' align="center">Computer-Type</td>
        <td style='width:54pt' align="center">Purhase Date</td>
        <td style='width:54pt' align="center">Replace Date</td>
        <td style='width:54pt' align="center">BU Code</td>
        <td style='width:54pt' align="center">BU Description</td>
        <td style='width:54pt' align="center">OS</td>
        <td style='width:54pt' align="center">Office</td>
        <td style='width:54pt' align="center">Snow</td>
        <td style='width:54pt' align="center">Monitor</td>
        <td style='width:54pt' align="center">E-Name</td>
        <td style='width:54pt' align="center">Staff</td>
        <td style='width:54pt' align="center">Dept</td>
        <td style='width:54pt' align="center">Cityray</td>
        <td style='width:54pt' align="center">C-Name</td>
        <td style='width:54pt' align="center">Job-Title</td>
        <td style='width:54pt' align="center">AD Account</td>
        <td style='width:54pt' align="center">Work Location</td>
        <td style='width:54pt' align="center">N+1</td>
        <td style='width:54pt' align="center">SBU/BL</td>
        <td style='width:54pt' align="center">Job Family</td>
        <td style='width:54pt' align="center">PO NO</td>
        <td style='width:54pt' align="center">AFI NO</td>
        <td style='width:54pt' align="center">Remark</td>
        <!-- <td style='width:54pt' align="center">时间</td> -->
     </tr>
     <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td align="center"><?php echo ($vo["Id"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["Location"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["Model"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["SN"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["PCName"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["ComputerType"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["PurchaseDate"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["ReplaceDate"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["BUCode"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["BUDescription"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["OS"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["Office"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["Snow"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["Monitor"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["EName"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["Staff"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["Dept"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["Cityray"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["CName"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["JobTitle"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["ADAccount"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["WorkLocation"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["N1"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["SBUBL"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["JobFamily"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["PoNo"]); ?></td>
        <td style="background-color: #00CC00;" align="center"><?php echo ($vo["AfiNo"]); ?></td>
        <td style="background-color: #00adee;" align="center"><?php echo ($vo["Remark"]); ?></td>
        <!-- <td style="background-color: #00adee;" align="center"><?php echo ($vo["time"]); ?></td> -->
     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
 </table>
 </body>
 </html>