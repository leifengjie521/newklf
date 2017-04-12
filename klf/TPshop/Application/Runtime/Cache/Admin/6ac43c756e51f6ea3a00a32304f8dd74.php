<?php if (!defined('THINK_PATH')) exit();?>
<h2 class="contentTitle">添加商品</h2>
<div class="pageContent">
	<!-- <form method="post" action="<?php echo U('Listinfo/addAction');?>?callbackType=closeCurrent" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)" enctype="multipart/form-data"> -->
	<!-- 在dwz手册中 25页 文件上传form -->
	<form method="post" action="<?php echo U('Listinfo/addAction');?>?callbackType=closeCurrent" class="pageForm required-validate" enctype="multipart/form-data" onsubmit="return iframeCallback(this,dialogAjaxDone);">
		<div class="pageFormContent nowrap" layoutH="97" >
			<dl>
				<dt>选择分类：</dt>
				<dd>
					<select name="p_id">
						<option value="<?php echo ($vo["p_id"]); echo ($vo["id"]); ?>,">请选择</option>
						<?php if(is_array($result)): foreach($result as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>,"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
					</select>
				</dd>
			</dl>
			<dl>
				<dt>标题：</dt>
				<dd>
					<input type="text" name="title" maxlength="20" class="required" />
				</dd>
			</dl>
			<dl>
				<dt>内容：</dt>
				<dd>
					<input type="text" name="content" maxlength="20" class="required" />
				</dd>
			</dl>
			<dl>
				<dt>选择状态：</dt>
				<dd>
					<?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><input type="checkbox" name="check[]" value="<?php echo ($vo["id"]); ?>"/><?php echo ($vo["name"]); endforeach; endif; ?>
				</dd>
			</dl>
			<dl>
				<dt>上传文件：</dt>
				<dd>
					<input type="file" name="photo" />
				</dd>
			</dl>
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
	
</div>


<script type="text/javascript">
function customvalidXxx(element){
	if ($(element).val() == "xxx") return false;
	return true;
}
</script>