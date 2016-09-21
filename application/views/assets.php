
				<div class="span10">
					<h1>
						Assets
					</h1>
					<ul class="breadcrumb">
						<li>
							<?php echo anchor("Dashboard/index","Dashboard","");?> <span class="divider">/</span>
						</li>
						<li class="active">
							<?php echo anchor("Assets/index","Assets","");?> <span class="divider">/</span>
						</li>
					</ul>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									ID
								</th>
								<th>
									IP地址
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
								<th>
									添加时间
								</th>
								<th text-align="center">
									操作
								</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($data as $key => $value): ?>
							<tr>
								<td>
									<?php echo $value['id']; ?>
								</td>
								<td>
									<?php echo $value['ip']; ?>
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
								<td>
									<?php echo $value['create_time']; ?>
								</td>
								<td>
									<?php echo anchor("Assets/edit/{$value['id']}",'<button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil">编辑</span></button>',"")?>
                  <a><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal-<?php echo $value['id']?>"><span class="glyphicon glyphicon-remove">删除</span></button></a>
								</td>
							</tr>
							<!-- Modal -->
            <div class="modal fade" id='myModal-<?php echo $value['id']?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h5 class="modal-title" id="myModalLabel">Assets&View</h5>
                  </div>
                  <div class="modal-body text-center">
                   确定删除资产?<p><?php echo $value['ip']?></p>
                  </div>
                  <div class="modal-footer">

                    <a href="<?php echo site_url("Assets/delete/{$value['id']}")?>"><button type="button" class="btn btn-default">确定</button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                  </div>
                </div>
              </div>
            </div>
		                <!-- Modal end-->			
						<?php endforeach ?>
						</tbody>
					</table>				
					<div class="pagination">
						<ul>
							<?php echo $this->pagination->create_links(); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>