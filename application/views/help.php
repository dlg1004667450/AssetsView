
				<div class="span9">
					<h1>
						Help
					</h1>
					<ul class="breadcrumb">
						<li>
							<?php echo anchor("Dashboard/index","Dashboard","");?> <span class="divider">/</span>
						</li>
						<li class="active">
							<?php echo anchor("Dashboard/help","Help","");?> <span class="divider">/</span>
						</li>

					</ul>
					<div class="row">
						<div class="span7">
							<p><strong>Assets View</strong> 资产发现、网络拓扑管理系统采用PHP+MYSQL开发，资产扫描部分采用C语言基于<em>SNMP.</em>协议以及nmap实现网络资产拓扑发现, 可对网络设备资产进行扫描、发现、管理，并对设备开发端口、服务、漏洞信息(后续会添加漏洞扫描功能)进行管理,采用Echarts对资产进行可视化展示，并对网络拓扑进行可视化展示、操作！.</p>
							<p><img src="<?php echo base_url('static/img/tmp/screenshot1.png')?>" alt="Assets View Dashboard" /></p>
							<h3>关于作者</h3>
							<ol>
							   <li><a href="https://cryin.github.io/">Cryin'</a></li>
							   <li><a href="https://hardyguo.github.io/">Hardy</a></li>
							</ol>
							<h3>使用帮助</h3>
							<p>Assets View资产发现、网络拓扑管理系统共包含两个功能模块，如下:</p>
							<ul>
							   <li>资产管理、网络拓扑可视化展示、操作.</li>
							   <li>设备资产、网络拓扑发现.</li>
							</ul>
							<p><img src="<?php echo base_url('static/img/tmp/topology.png')?>" alt="Network Topology" /></p>
							<p>用户可先在Assets View资产发现、网络拓扑管理系统中使用Assets Scan模块创建任务,程序会调用后端C模块采用SNMP及nmap进行资产扫描、网络拓扑发现。并将数据存入mysql数据库。前端程序会对数据进行同步并展示到页面中。用户可以可以通过资产和服务管理功能对资产进行编辑、删除等管理操作</p>
							<p><img src="<?php echo base_url('static/img/tmp/assets.png')?>" alt="assets" /></p>
							<p>目前php端展示与C后端资产发现模块在同步开发当中，并未合并到一起。后续计划持续开发中....</p>
							<ul>
							   <li>网络拓扑展示优化、可视化操作管理.</li>
							   <li>PHP调用C端网络拓扑发现接口.</li>
							   <li>资产搜索功能.</li>
							   <li>手动添加资产.</li>
							   <li>漏洞扫描模块.</li>
							</ul>
						</div>
						<div class="span2">
							<ul class="nav nav-list">
								<li class="nav-header">
									About Author
								</li>
								<li>
									<a href="https://cryin.github.io/">Cryin'</a>
								</li>
								<li>
									<a href="https://hardyguo.github.io/">Hardy</a>
								</li>
								<li class="nav-header">
									Project Site
								</li>
								<li>
									<a href="https://github.com/Cryin/AssetsView">Project Home Page</a>
								</li>
							</ul>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>