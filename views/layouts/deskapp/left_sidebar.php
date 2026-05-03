<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="<?=$logo?>" alt="" class="dark-logo" style="height:100%" />
				<img src="<?=$logo?>" alt="" class="light-logo"  style="height:100%"/>
				<span style="color:#000">
					<?=$app_name?>
				</span>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				<?php
					menus();
				?>
				</ul>
				
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>