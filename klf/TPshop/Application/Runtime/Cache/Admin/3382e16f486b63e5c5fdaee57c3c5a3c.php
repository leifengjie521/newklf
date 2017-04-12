<?php if (!defined('THINK_PATH')) exit();?><h2 class="contentTitle">修改用户</h2>
<div class="pageContent">
	<form method="post" action="<?php echo U('Listinfo/editAction');?>?callbackType=closeCurrent" class="pageForm required-validate" enctype="multipart/form-data" onsubmit="return iframeCallback(this,dialogAjaxDone);">
		<div class="pageFormContent nowrap" layoutH="97">
			
			<dl>
				<dt>标题：</dt>
				<dd>
					<input type="text" name="title" maxlength="20" class="required" value="<?php echo ($result["title"]); ?>"/>
				</dd>
			</dl>
			<dl>
				<dt>内容：</dt>
				<dd>
					<input type="text" name="content" maxlength="20" class="required" value="<?php echo ($result["content"]); ?>"/>
					
				</dd>
			</dl>
			<dl>
				<dt>型号：</dt>
				<dd>
					<input type="text" name="size" maxlength="20" class="required" value="<?php echo ($result["size"]); ?>"/>
					<input type="hidden" name="id" value="<?php echo ($result["id"]); ?>"/>
				</dd>
			</dl>
			<dl>
				<dt>状态：</dt>
				<dd>
					<?php if(is_array($recommend)): foreach($recommend as $k=>$vo): ?><!-- 注意下面的name和value值的书写 -->
						<?php if(in_array(($vo["id"]), is_array($result["recommend_id"])?$result["recommend_id"]:explode(',',$result["recommend_id"]))): ?><input  checked="checked" type="checkbox" name="check[]" id="" value="<?php echo ($vo["id"]); ?>"/><?php echo ($vo["name"]); ?>
						<?php else: ?>
							<input type="checkbox" name="check[]" id="" value="<?php echo ($vo["id"]); ?>"/><?php echo ($vo["name"]); endif; endforeach; endif; ?>
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