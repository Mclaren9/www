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
        <td style='width:54pt' align="center">id</td>
        <td style='width:54pt' align="center">Order NO.</td>
        <td style='width:54pt' align="center">Customer Name</td>
        <td style='width:54pt' align="center">Recipients</td>
        <td style='width:54pt' align="center">Mobile</td>
        <td style='width:54pt' align="center">Address</td>
        <td style='width:54pt' align="center">Generality</td>
        <td style='width:54pt' align="center">BU</td>
        <td style='width:54pt' align="center">OfferPrice</td>
        <td style='width:54pt' align="center">NetPrice</td>
        <td style='width:54pt' align="center">addCustomerTime</td>
        <td style='width:54pt' align="center">addExpressTime</td>
        <!-- <td style='width:54pt' align="center">Sales</td> -->
        <!-- <td style='width:54pt' align="center">PE</td> -->
        <td style='width:54pt' align="center">Invoice</td>
        <td style='width:54pt' align="center">InvoiceDate</td>
        <td style='width:54pt' align="center">ExpressNumber</td>
        <td style='width:54pt' align="center">ExpressDate</td>
        <td style='width:54pt' align="center">ContactDate</td>
        <td style='width:54pt' align="center">PayDate</td>
        <td style='width:54pt' align="center">CustomerPaymentCycle</td>
        <td style='width:54pt' align="center">Status</td>
        <td style='width:54pt' align="center">Remark</td>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["id"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["case_number"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["customer"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["recipients"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["mobile"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["address"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["generality"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["BU"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["OfferPrice"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["NetPrice"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo (date("Y/m/d H:i:s", $vo["addCustomerTime"])); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php if($vo["addExpressTime"] != ''): echo (date("Y/m/d H:i:s", $vo["addExpressTime"])); else: ?>--<?php endif; ?></td>
            <!-- <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["Sales"]); ?></td> -->
            <!-- <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["PE"]); ?></td> -->
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["invoice"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["invoice_date"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["express_number"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["express_date"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["contact_date"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["pay_date"]); ?></td>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["customer_payment_cycle"]); ?></td>
            <!-- <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["status"]); ?></td> -->
            <?php if($vo["status"] == Processing): ?><td style="color:red;background-color:lightblue" align="center"><b><?php echo ($vo["status"]); ?></b></td>
                                <?php else: ?>
                                    <td style="color:green;background-color:lightblue" align="center"><b><?php echo ($vo["status"]); ?></b></td><?php endif; ?>
            <td style="background-color: #FFFFFF;" align="center"><?php echo ($vo["remark"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>