<?php if (!defined('THINK_PATH')) exit();?>
	<h2 class="contentTitle">添加用户</h2>

	<div class="pageContent">
		<form method="post" action="<?php echo U('Caiwu/addAction');?>?callbackType=closeCurrent" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
				<div class="pageFormContent nowrap" layoutH="97" >
				<dl>
					<dt>科室：</dt>
					<dd>
						<input type="text" name="keshi" maxlength="20" class="required" />
						
					</dd>
				</dl>
				<dl>
					<dt>客户：</dt>
					<dd>
						<input type="text" name="name" maxlength="20" class="required" />
						
					</dd>
				</dl>
				<dl>
					<dt>服务：</dt>
					<dd>
						<input type="text" name="content" maxlength="20" class="required" />
						
					</dd>
				</dl>
				<dl>
					<dt>其他</dt>
					<dd>
						<input type="text" name="others" maxlength="20" class="required" />
						
					</dd>
				</dl>
				<dl>
					<dt>价格：</dt>
					<dd>
						<input type="text" name="pay_number" maxlength="20" class="required" />
						
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