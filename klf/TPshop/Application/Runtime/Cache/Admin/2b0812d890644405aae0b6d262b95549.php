<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="<?php echo U('Tijianone/lists');?>">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}" />
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" />
	<input type="hidden" name="username" value="<?php echo ($username); ?>" />
	<input type="hidden" name="orderField" value="${param.orderField}" />

</form>


<div class="pageHeader">
	<form onsubmit="return navTabSearch(this);" action="<?php echo U('Tijianone/lists');?>" method="post">
	<div class="searchBar">
		<!--<ul class="searchContent">
			<li>
				<label>我的客户：</label>
				<input type="text"/>
			</li>
			<li>
			<select class="combox" name="province">
				<option value="">所有省市</option>
				<option value="北京">北京</option>
				<option value="上海">上海</option>
				<option value="天津">天津</option>
				<option value="重庆">重庆</option>
				<option value="广东">广东</option>
			</select>
			</li>
		</ul>
		-->
		<!-- <table class="searchContent">
			<tr>
				<td>
					搜索客户：<input type="text" name="username" value="<?php echo ($username); ?>"/>
				</td>
			</tr>
		</table>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
				
			</ul>
		</div> -->
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="<?php echo U('Tijianone/add');?>" target="dialog" mask="true" width="300" height="450"><span>添加</span></a></li>
			<li><a class="edit" href="<?php echo U('Tijianone/edit');?>?uid={sid_user}" target="dialog" width="300" height="450"><span>修改</span></a></li>
			<li><a class="delete" href="<?php echo U('Tijianone/del');?>?uid={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138" >
		<thead>
			<tr>
				<th width="80"></th>
				<th width="150">项目名称：</th>
				<th width="150">价格:</th>
				<th width="150">服务内容：</th>
				<th width="150">创建时间：</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($listsa)): foreach($listsa as $key=>$vo): ?><tr target="sid_user" rel="<?php echo ($vo["id"]); ?>">
					
					<td></td>
					<td><?php echo ($vo["name"]); ?></td>
					<td><?php echo ($vo["price"]); ?></td>
					<td><?php echo ($vo["content"]); ?></td>
					<td><?php echo ($vo["create_time"]); ?></td>
				</tr><?php endforeach; endif; ?>
			
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value=""><?php echo ($numPerPage); ?></option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<span>条，共<?php echo ($totalCount); ?>条</span>
		</div>

		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="<?php echo ($pageNumShown); ?>" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>