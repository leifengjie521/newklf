<?php if (!defined('THINK_PATH')) exit();?><h2 class="contentTitle">修改用户</h2>
<div class="pageContent">
	<form method="post" action="<?php echo U('Fuwu/editAction');?>?callbackType=closeCurrent" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
		<div class="pageFormContent nowrap" layoutH="97" >
				<dl>
					<dt>科室名称：</dt>
					<dd>
						<select name="p_id">
							<option value="<?php echo ($vo["p_id"]); echo ($vo["id"]); ?>,">请选择</option>
							<?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><option value="<?php echo ($vo["keshi"]); ?>"><?php echo ($vo["keshi"]); ?></option><?php endforeach; endif; ?>
						</select>
					</dd>
				</dl>
				<dl>
					<dt>服务名称：</dt>
					<dd>
						<input type="text" name="name_keshi" maxlength="20" class="required" value="<?php echo ($info["name_keshi"]); ?>" />
						
					</dd>
				</dl>
				<dl>
					<dt>价格：</dt>
					<dd>
						<input type="text" name="how_much" maxlength="20" class="required" value="<?php echo ($info["how_much"]); ?>" />
						<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>"/>
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