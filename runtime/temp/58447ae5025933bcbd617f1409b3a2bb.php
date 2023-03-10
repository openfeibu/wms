<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:49:"D:\WWW\demo\public/../app/view\customer\edit.html";i:1514978668;}*/ ?>
	<!-- Imported scripts on this page -->
<!-- 	<script src="/static/js/jquery-validate/jquery.validate.min.js"></script>
	<link rel="stylesheet" href="/static/css/xenon-forms.css"> -->




<form class="validate edit_from" novalidate="novalidate">

	<div class="row">
		<div class="col-md-6">
			
			<div class="form-group">
				<label for="field-1" class="control-label">客户编号</label>
				<input type="hidden" name="id" value="<?php echo $info['id']; ?>">
				<input type="text" class="form-control" name="sn" placeholder="客户编号" value="<?php echo $info['sn']; ?>" disabled="disabled">
			</div>	
			
		</div>
		
		<div class="col-md-6">
			
			<div class="form-group">
				<label for="field-2" class="control-label">客户名称</label>
				<input type="text" class="form-control" name="name" placeholder="客户名称" value="<?php echo $info['name']; ?>">
			</div>	
		
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			
			<div class="form-group">
				<label for="field-3" class="control-label">客户地址</label>	
				<input type="text" class="form-control" name="address" placeholder="客户地址" value="<?php echo $info['address']; ?>">
			</div>	
			
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			
			<div class="form-group">
				<label for="field-1" class="control-label">联系人</label>
				
				<input type="text" class="form-control" name="contact" placeholder="联系人" value="<?php echo $info['contact']; ?>">
			</div>	
			
		</div>
		
		<div class="col-md-6">
			
			<div class="form-group">
				<label for="field-2" class="control-label">手机号</label>
				
				<input type="text" class="form-control" name="phone" placeholder="手机号"  value="<?php echo $info['phone']; ?>">
			</div>	
		
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			
			<div class="form-group">
				<label for="field-1" class="control-label">邮箱</label>
				
				<input type="text" class="form-control" name="email" placeholder="邮箱" value="<?php echo $info['email']; ?>">
			</div>	
			
		</div>
		
		<div class="col-md-6">
			
			<div class="form-group">
				<label for="field-2" class="control-label">传真</label>
				
				<input type="text" class="form-control" name="fax" placeholder="传真" value="<?php echo $info['fax']; ?>">
			</div>	
		
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			
			<div class="form-group">
                <label class="control-label">客户状态</label>
                <select class="form-control" name="status">
                    <option value="0" <?php if($info['status'] == '0'): ?> selected="selected" <?php endif; ?> >正常</option>
                    <option value="1" <?php if($info['status'] == '1'): ?> selected="selected" <?php endif; ?> >废弃</option>
                </select>  
			</div>	
		
		</div> 
    </div>


	<div class="row">
		<div class="col-md-12">
			<div class="form-group no-margin">
				<label for="field-7" class="control-label">备注</label>
				
				<textarea class="form-control autogrow" name="desc" placeholder="备注" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 50px;"><?php echo $info['desc']; ?></textarea>
			</div>	
		</div>
	</div>

	
</form>