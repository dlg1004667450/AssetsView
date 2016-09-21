
				<div class="span10">
					<h1>
						Edit Your Profile
					</h1>
					<form id="edit-profile" class="form-horizontal" method="post" action="<?php echo site_url('Account/updateuser')?>">
						<fieldset>	
							<?php foreach ($data as $key => $value);?>
							<legend>Your Profile</legend>
							<div class="control-group">
								<label class="control-label" for="input01">Username</label>
								<div class="controls">
									<input type="text" readonly="readonly" class="input-xlarge" name="username" id="input01" value="<?php echo $_SESSION['username']?>" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Password</label>
								<div class="controls">
									<input type="password" readonly="readonly" class="input-xlarge" name="password" id="input01" value="<?php echo $value['user_passwd'];?>" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Email</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" name="email" value="<?php echo $value['user_mail'];?>" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Phone</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" name="phone" value="<?php echo $value['user_tel'];?>" />
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="optionsCheckbox">Account Enable</label>
								<div class="controls">
									<input type="checkbox" id="optionsCheckbox" name="enable" value="<?php echo $value['user_enable'];?>" checked="checked" />
								</div>
							</div>						
							<div class="form-actions">
								<button type="submit" name='subimit' value="subimit" class="btn btn-primary">Save</button> <button class="btn" name='subimit' value="cancel">Cancel</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		
