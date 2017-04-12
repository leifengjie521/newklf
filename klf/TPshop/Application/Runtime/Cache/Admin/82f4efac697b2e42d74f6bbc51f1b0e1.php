<?php if (!defined('THINK_PATH')) exit();?>
	<h2 class="contentTitle">添加用户</h2>

	<div class="pageContent">
		<form method="post" action="<?php echo U('Admin/addAction');?>?callbackType=closeCurrent" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
			<div class="pageFormContent nowrap" layoutH="97" >
				<dl>
					<dt>用户名：</dt>
					<dd>
						<input type="text" name="name" maxlength="20" class="required" />
						
					</dd>
				</dl>
				<dl>
					<dt>密码：</dt>
					<dd>
						<input type="text" name="pass" maxlength="20" class="required" />
						
					</dd>
				</dl>
				<dl>
					<dt>权限：</dt>
					<dd>
						<input type="text" name="quanxian" maxlength="20" class="required" />
						
					</dd>
				</dl>
				<dl>
					<dt>分类：</dt>
					<dd>
						<input type="text" name="fenlei" maxlength="20" class="required" />
						
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