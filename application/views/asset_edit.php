
				<div class="span10">
					<h1>
						Assets
					</h1>
					<ul class="breadcrumb">
						<li>
							<?php echo anchor("Dashboard/index","Dashboard","");?> <span class="divider">/</span>
						</li>
						<li>
							<?php echo anchor("Assets/index","Assets","");?> <span class="divider">/</span>
						</li>
						<li class="active">
							<?php echo anchor("Assets/edit","edit","");?> <span class="divider">/</span>
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
								<label class="control-label" for="input01">资产编号</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="John Smith" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">资产名称</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="John Smith" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">IP地址</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="555 555 555" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">子网掩码</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="555 555 555" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">主机名称</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="555 555 555" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">MAC地址</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="555 555 555" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">操作系统</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="john.smith@example.org" />
								</div>
							</div>	
							<div class="control-group">
								<label class="control-label" for="input01">资产类型</label>
								<div class="controls">
									<select class="input-medium">
      									<option value="1" selected="selected">主机</option>
      									<option value="2">服务器</option>
      									<option value="3">打印机</option>
      									<option value="4">传真机</option>
      									<option value="5">二层交换机</option>
      									<option value="6">三层交换机</option>
      									<option value="7">路由器</option>
      									<option value="8">防火墙</option>
      									<option value="9">集线器</option>
      									<option value="10">无线路由</option>
      									<option value="99">未知设备</option>
    								</select>
								</div>
							</div>							
							<div class="control-group">
								<label class="control-label" for="textarea">描述</label>
								<div class="controls">
									<textarea class="input-xlarge" id="textarea" rows="4">Web technology junkie who writes innovative and bestselling technical books. Also enjoys Sunday bicycle rides and all "good" comedy.</textarea>
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
		