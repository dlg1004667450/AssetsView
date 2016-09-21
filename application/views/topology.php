
				<div class="span9">
					<h1>
						Network Topology
					</h1>
					<ul class="breadcrumb">
						<li>
							<?php echo anchor("Dashboard/index","Dashboard","");?> <span class="divider">/</span>
						</li>
						<li class="active">
							<?php echo anchor("Topology/index/","Network Topology","");?> <span class="divider">/</span>
						</li>
					</ul>
					<div class="row">
						<div class="span9">
							<div class="hero-unit">
						    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
							<div id="topopanel" style="width: 780px;height:550px;"></div>
								<script src="<?php echo base_url('static/js/json/toporelation.js')?>"></script>
					
                    </div>
						</div>
				</div>
			</div>
		</div>