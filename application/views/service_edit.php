
				<div class="span10">
					<h1>
						Service
					</h1>
					<ul class="breadcrumb">
						<li>
							<?php echo anchor("Dashboard/index","Dashboard","");?> <span class="divider">/</span>
						</li>
						<li>
							<?php echo anchor("Service/index","Service","");?> <span class="divider">/</span>
						</li>
						<li class="active">
							<?php echo anchor("Service/edit","edit","");?> <span class="divider">/</span>
						</li>
					</ul>
					<form id="edit-asset" class="form-horizontal">
						<fieldset>
							<?php foreach ($data as $key => $value);?>
							<div class="control-group">
								<label class="control-label" for="input01">ID</label>
								<div class="controls">
									<input type="text" readonly="readonly" class="input-medium" name="id" id="input01" value="<?php echo $value['id'];?>" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">IP地址</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="John Smith" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">端口号</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="John Smith" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">服务名称</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="555 555 555" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">协议</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="555 555 555" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">端口状态</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="555 555 555" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">服务版本</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="555 555 555" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">添加时间</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="john.smith@example.org" />
								</div>
							</div>	
							
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		