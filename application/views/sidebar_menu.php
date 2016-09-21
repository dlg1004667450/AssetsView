<div class="row">
				<div class="span2">
					<div class="well" style="padding: 8px 0;">
						<ul class="nav nav-list">
							<li class="nav-header">
								Assets&View
							</li>
							<li class="<?php echo $cur_title[0];?>">
							<?php echo anchor("Dashboard/index","<i class='icon-home'></i> Dashboard","");?>
							</li>
							<li class="<?php echo $cur_title[1];?>">
								<?php echo anchor("Assets/index","<i class='icon-th-large'></i> Assets","");?>
							</li>
							<li class="<?php echo $cur_title[2];?>">
								<?php echo anchor("Service/index","<i class='icon-adjust'></i> Services","");?>
							</li>
							<li class="<?php echo $cur_title[3];?>">
								<?php echo anchor("Topology/index","<i class='icon-eye-open'></i> Network Topology","");?>
							</li>
							<li class="<?php echo $cur_title[4];?>">
								<?php echo anchor("Assetscan/index","<i class='icon-search'></i> Assets Scan","");?>
							</li>
							<li class="<?php echo $cur_title[5];?>">
								<?php echo anchor("Search/index","<i class='icon-list-alt'></i> Search","");?>
							</li>
							<li class="nav-header">
								Your Account
							</li>
							<li class="<?php echo $cur_title[6];?>">
								<?php echo anchor("Account/profile","<i class='icon-user'></i> Profile","");?>
							</li>
							<li class="<?php echo $cur_title[7];?>">
								<?php echo anchor("Settings/index","<i class='icon-cog'></i> Settings","");?>
							</li>
							<li class="divider">
							</li>
							<li class="<?php echo $cur_title[8];?>">
								<?php echo anchor("Dashboard/help","<i class='icon-info-sign'></i> Help","");?>
							</li>
						</ul>
					</div>
				</div>
