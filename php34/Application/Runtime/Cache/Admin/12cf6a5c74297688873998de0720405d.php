<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/php34/Public/Admin/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/php34/Public/Admin/Styles/main.css" rel="stylesheet" type="text/css" />
<link href="/php34/Public/datepicker/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="/php34/Public/datepicker/jquery-1.7.2.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/php34/Public/datepicker/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/php34/Public/datepicker/datepicker_zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="/php34/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/php34/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/php34/Public/ueditor/lang/zh-cn/zh-cn.js"></script>

</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo $_page_btn_link; ?>"><?php echo $_page_btn_name; ?></a></span>
    <span class="action-span1"><a href="#">管理中心</a></span>
    <span id="search_id" class="action-span1"> - <?php echo $_page_title; ?> </span>
    <div style="clear:both"></div>
</h1>

<!-- 页面中的内容 -->

<!-- 搜索 -->
<div class="form-div search_form_div">
    <form method="GET" name="search_form">
		<p>
			商品名称：
	   		<input type="text" name="goods_name" size="30" value="<?php echo I('get.goods_name'); ?>" />
		</p>
		<p>
			主分类的id：
	   		<input type="text" name="cat_id" size="30" value="<?php echo I('get.cat_id'); ?>" />
		</p>
		<p>
			品牌的id：
	   		<input type="text" name="brand_id" size="30" value="<?php echo I('get.brand_id'); ?>" />
		</p>
		<p>
			本店价：
	   		从 <input id="shop_pricefrom" type="text" name="shop_pricefrom" size="15" value="<?php echo I('get.shop_pricefrom'); ?>" /> 
		    到 <input id="shop_priceto" type="text" name="shop_priceto" size="15" value="<?php echo I('get.shop_priceto'); ?>" />
		</p>
		<p>
			是否热卖：
			<input type="radio" value="-1" name="is_hot" <?php if(I('get.is_hot', -1) == -1) echo 'checked="checked"'; ?> /> 全部 
			<input type="radio" value="1" name="is_hot" <?php if(I('get.is_hot', -1) == '1') echo 'checked="checked"'; ?> /> 是 
			<input type="radio" value="0" name="is_hot" <?php if(I('get.is_hot', -1) == '0') echo 'checked="checked"'; ?> /> 否 
		</p>
		<p>
			是否新品：
			<input type="radio" value="-1" name="is_new" <?php if(I('get.is_new', -1) == -1) echo 'checked="checked"'; ?> /> 全部 
			<input type="radio" value="1" name="is_new" <?php if(I('get.is_new', -1) == '1') echo 'checked="checked"'; ?> /> 是 
			<input type="radio" value="0" name="is_new" <?php if(I('get.is_new', -1) == '0') echo 'checked="checked"'; ?> /> 否 
		</p>
		<p>
			是否精品：
			<input type="radio" value="-1" name="is_best" <?php if(I('get.is_best', -1) == -1) echo 'checked="checked"'; ?> /> 全部 
			<input type="radio" value="1" name="is_best" <?php if(I('get.is_best', -1) == '1') echo 'checked="checked"'; ?> /> 是 
			<input type="radio" value="0" name="is_best" <?php if(I('get.is_best', -1) == '0') echo 'checked="checked"'; ?> /> 否 
		</p>
		<p>
			是否上架：
			<input type="radio" value="-1" name="is_on_sale" <?php if(I('get.is_on_sale', -1) == -1) echo 'checked="checked"'; ?> /> 全部 
			<input type="radio" value="1" name="is_on_sale" <?php if(I('get.is_on_sale', -1) == '1') echo 'checked="checked"'; ?> /> 上架 
			<input type="radio" value="0" name="is_on_sale" <?php if(I('get.is_on_sale', -1) == '0') echo 'checked="checked"'; ?> /> 下架 
		</p>
		<p>
			商品类型id：
	   		<input type="text" name="type_id" size="30" value="<?php echo I('get.type_id'); ?>" />
		</p>
		<p>
			添加时间：
	   		从 <input id="addtimefrom" type="text" name="addtimefrom" size="15" value="<?php echo I('get.addtimefrom'); ?>" /> 
		    到 <input id="addtimeto" type="text" name="addtimeto" size="15" value="<?php echo I('get.addtimeto'); ?>" />
		</p>
		<p><input type="submit" value=" 搜索 " class="button" /></p>
    </form>
</div>
<!-- 列表 -->
<div class="list-div" id="listDiv">
	<table cellpadding="3" cellspacing="1">
    	<tr>
            <th >商品名称</th>
            <th >市场价</th>
            <th >本店价</th>
            <th >logo</th>
            <th >热卖</th>
            <th >新品</th>
            <th >精品</th>
            <th >上架</th>
            <th >库存量</th>
            <th >排序</th>
			<th width="150">操作</th>
        </tr>
		<?php foreach ($data as $k => $v): ?>            
			<tr class="tron">
				<td><?php echo $v['goods_name']; ?></td>
				<td><?php echo $v['market_price']; ?></td>
				<td><?php echo $v['shop_price']; ?></td>
				<td><?php showImage($v['sm_logo'], 50); ?></td>
				<td><?php echo $v['is_hot']==1?'是':'否'; ?></td>
				<td><?php echo $v['is_new']==1?'是':'否'; ?></td>
				<td><?php echo $v['is_best']==1?'是':'否'; ?></td>
				<td><?php echo $v['is_on_sale']==1?'上架':'下架'; ?></td>
				<td><?php echo $v['gn']; ?></td>
				<td><?php echo $v['sort_num']; ?></td>
		        <td align="center">
		        	<a href="<?php echo U('goods_number?id='.$v['id'].'&p='.I('get.p')); ?>" title="库存">库存</a> |
		        	<a href="<?php echo U('edit?id='.$v['id'].'&p='.I('get.p')); ?>" title="编辑">编辑</a> |
	                <a href="<?php echo U('recycle?id='.$v['id'].'&p='.I('get.p')); ?>" onclick="return confirm('确定要放入回收站吗？');" title="放入回收站">放入回收站</a> 
		        </td>
	        </tr>
        <?php endforeach; ?> 
		<?php if(preg_match('/\d/', $page)): ?>  
        <tr><td align="right" nowrap="true" colspan="11" height="30"><?php echo $page; ?></td></tr> 
        <?php endif; ?> 
	</table>
</div>
<script>
$('#addtimefrom').datepicker(); $('#addtimeto').datepicker(); </script>

<div id="footer">php34</div>
</body>
</html>

<script type="text/javascript" charset="utf-8" src="/php34/Public/Admin/Js/tron.js"></script>