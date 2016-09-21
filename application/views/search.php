
				<div class="span9">
					<h1>
						Search
					</h1>
					<ul class="breadcrumb">
						<li>
							<?php echo anchor("Dashboard/index","Dashboard","");?> <span class="divider">/</span>
						</li>
						<li class="active">
							<?php echo anchor("Search/index","Search","");?> <span class="divider">/</span>
						</li>
					</ul>
					<div class="alert alert-info">
				 		<button type="button" class="close" data-dismiss="alert">×</button>
						<h4>
							提示!
						</h4> 仅支持搜索ip、hostname、service、操作系统类型.
					</div>

					<div class="container">
        <div class="row" style="min-height: 420px; overflow: hidden;">
            <div class="span2">
            </div>
            <div class="span5">
                <form class="form-search form-inline">
                    <input class="input-xlarge search-query" id="searchinput" type="text" placeholder="搜索@host #service ~ip ">
                    <button class="btn" type="button">搜索</button>
                </form>
            </div>

        </div>
    </div>

					
				</div>
			</div>
		</div>
		