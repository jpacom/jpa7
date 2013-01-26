		<ul id="menu-wrapper" class="menu-hover menu-hover-text"><?php 
			$link = mysqli_connect(ConstsImp::db_host, ConstsImp::db_user, ConstsImp::db_pass);
			mysqli_select_db($link, ConstsImp::menu_items_db);
			$query = "SELECT `abbr` FROM `languages` WHERE `id`=" . ($language_id or 1);
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			$lang_abbr = mysqli_fetch_array($result);
			$lang_abbr = $lang_abbr['abbr'];
			$query = "SELECT * FROM `menu_items` WHERE `language_id`=" . ($language_id or 1);
			$result = mysqli_query($link, $query);
			while($line = mysqli_fetch_array($result))
			{
				?>
			<li class="menu-items menu-item-light-bg cursor-pointer <?php //echo ((@ $this->page['name'] == 'Welcome')?('menu-home-item-light-bg-active'):('')); ?>">
				<a href="<?php echo $line['link']; ?>" class="menu-items-links display-block-not-important">
					<span class="menu-items-text menu-items-text-hover menu-items-font"><?php echo $line['title'] ?></span>
				</a>
			</li><?php
			}
		?>
<!--			<li id="home" class="menu-items menu-home-item-light-bg cursor-pointer <?php echo ((@ $this->page['name'] == 'Welcome')?('menu-home-item-light-bg-active'):('')); ?>">-->
<!--				<a href="/" class="menu-items-links display-block-not-important">-->
<!--					<span class="menu-items-text menu-items-text-hover menu-items-font"><span class="menu-items-font display-none">H</span>ome</span>-->
<!--				</a>-->
<!--			</li>-->
<!--			<li id="services" class="menu-items menu-services-items-light-bg cursor-pointer <?php echo ((@ $this->page['name'] == 'services')?('menu-services-item-light-bg-active'):('')); ?>">-->
<!--				<a href="/services" class="menu-items-links display-block-not-important">-->
<!--					<span class="menu-items-text menu-items-text-hover menu-items-font"><span class="menu-items-font display-none">S</span>ervices</span>-->
<!--				</a>-->
<!--			</li>-->
<!--			<li id="online-order" class="menu-items menu-online-order-items-light-bg cursor-pointer <?php echo ((@ $this->page['name'] == 'online order')?('menu-online-order-item-light-bg-active'):('')); ?>">-->
<!--				<a href="/online_order" class="menu-items-links display-block-not-important">-->
<!--					<span class="menu-items-text menu-items-text-hover menu-items-font"><span class="menu-items-font display-none">O</span>nline&nbsp;order</span>-->
<!--				</a>-->
<!--			</li>-->
<!--			<li id="about" class="menu-items menu-about-items-light-bg cursor-pointer <?php echo ((@ $this->page['name'] == 'about')?('menu-about-item-light-bg-active'):('')); ?>">-->
<!--				<a href="/about" class="menu-items-links display-block-not-important">-->
<!--					<span class="menu-items-text menu-items-text-hover menu-items-font"><span class="menu-items-font display-none">A</span>bout</span>-->
<!--				</a>-->
<!--			</li>-->
<!--			<li id="contact" class="menu-items menu-contact-item-light-bg cursor-pointer <?php echo ((@ $this->page['name'] == 'contact')?('menu-contact-item-light-bg-active'):('')); ?>">-->
<!--				<a href="/contact" class="menu-items-links display-block-not-important">-->
<!--					<span class="menu-items-text menu-items-text-hover menu-items-font"><span class="menu-items-font display-none">C</span>ontact</span>-->
<!--				</a>-->
<!--			</li>-->
		</ul>

