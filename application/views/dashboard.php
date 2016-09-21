<div class="row">
<div class="span10">
					<h1>
						Dashboard
					</h1>
					<div class="row">
					<div class="span5">
					<div class="hero-unit">
						<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
							<div id="hostpanel" style="width: 400px;height:250px;"></div>
								<script src="<?php echo base_url('static/js/json/hostchart.js')?>"></script>
					</div>
					</div>
					<div class="span5">
					<div class="hero-unit">
						<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
							<div id="serverpanel" style="width: 400px;height:250px;"></div>
								<script src="<?php echo base_url('static/js/json/serverchart.js')?>"></script>
					
                    </div>
					</div>
					</div>
					<div class="well summary">
						<ul>
							<li>
								<a href="<?php echo base_url('Assets/index')?>" style="text-align:center"><span class="count" style="text-align:center"><?php echo $assets_count;?></span> Assets</a>
							</li>
							<li>
								<a href="<?php echo base_url('Service/index')?>" style="text-align:center"><span class="count" style="text-align:center"><?php echo $port_count;?></span> Port</a>
							</li>
							<li>
								<a href="<?php echo base_url('Service/index')?>" style="text-align:center"><span class="count" style="text-align:center"><?php echo $port_count;?></span> Service</a>
							</li>
							<li class="last">
								<a href="#" style="text-align:center"><span class="count" style="text-align:center">5</span> Vulnerabilities</a>
							</li>
						</ul>
					</div>
					<h2>
						资产列表
					</h2>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									IP地址
								</th>
								<th>
									掩码
								</th>
								<th>
									主机名称
								</th>
								<th>
									操作系统
								</th>
								<th>
									MAC地址
								</th>
								<th>
									设备厂商
								</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($asset as $key => $value): ?>
							<tr>
								<td>
									<?php echo $value['ip']; ?>
								</td>
								<td>
									<?php echo $value['mask']; ?>
								</td>
								<td>
									<?php echo $value['hostname']; ?>
								</td>
								<td>
									<?php echo $value['os_type']; ?>
								</td>
								<td>
									<?php echo $value['macascii']; ?>
								</td>
								<td>
									<?php echo $value['vendor']; ?>
								</td>
							</tr>
							 <?php endforeach ?>
						</tbody>
					</table>
					<ul class="pager">
						<li class="next">
							<?php echo anchor("Assets/index","More &rarr;","");?>
						</li>
					</ul>
				</div>
			</div>
		</div>