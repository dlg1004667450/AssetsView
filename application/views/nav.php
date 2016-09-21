<!-- navbar -->
<div class="container">
			<div class="navbar navbar-default">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <?php echo anchor("Dashboard/index","Assets",array("class"=>"brand"));?>
						<div class="nav-collapse">
							<ul class="nav">
								<li class="<?php echo $cur_title[0];?>">
									<?php echo anchor("Dashboard/index","Dashboard","");?>
								</li>
								<li class="<?php echo $cur_title[3];?>">
									<?php echo anchor("Topology/index","Network Topology","");?>
								</li>
								<li class="<?php echo $cur_title[8];?>">
									<?php echo anchor("Dashboard/logout","Logout","");?>
								</li>
							</ul>
							<form class="navbar-search pull-left" action="">
								<input type="text" class="search-query span2" placeholder="Search" />
							</form>
							
							<ul class="nav pull-right">
								<li class="dropdown">
									<a href="help.htm" class="dropdown-toggle" data-toggle="dropdown">Your Account <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li>
											<?php echo anchor("Account/profile","Profile","");?>
										</li>
										<li>
											<?php echo anchor("Settings/index","Settings","");?>
										</li>
										<li>
											<?php echo anchor("Dashboard/help","Help","");?>
										</li>
										<li class="divider">
										</li>
										<li class="nav-header">
											Logout
										</li>
										<li>
											<?php echo anchor("Dashboard/logout","Logout","");?>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<!-- /navbar -->