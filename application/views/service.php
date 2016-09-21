
				<div class="span10">
					<h1>
						Service
					</h1>
					<ul class="breadcrumb">
						<li>
							<?php echo anchor("Dashboard/index","Dashboard","");?> <span class="divider">/</span>
						</li>
						<li class="active">
							<?php echo anchor("Service/index","Services","");?> <span class="divider">/</span>
						</li>
					</ul>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">
									ID
								</th>
								<th class="text-center">
									IP
								</th>
								<th class="text-center">
									端口
								</th>
								<th class="text-center">
									服务
								</th>
								<th class="text-center">
									协议
								</th>
								<th class="text-center">
									状态
								</th>
								<th class="text-center">
									服务版本
								</th>
								<th class="text-center">
									添加时间
								</th>
								<th class="text-center">
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
									<?php echo $value['port']; ?>
								</td>
								<td>
									<?php echo $value['service']; ?>
								</td>
								<td>
									<?php echo $value['protocol']; ?>
								</td>
								<td>
									<?php echo $value['status']; ?>
								</td>
								<td>
									<?php echo $value['version']; ?>
								</td>
								<td>
									<?php echo $value['create_time']; ?>
								</td>
								<td>
									<?php echo anchor("Service/edit/{$value['id']}",'<button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil">编辑</span></button>',"")?>
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
                   确定删除服务?<p><?php echo $value['service']?></p>
                  </div>
                  <div class="modal-footer">

                    <a href="<?php echo site_url("Service/delete/{$value['id']}")?>"><button type="button" class="btn btn-default">确定</button></a>
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