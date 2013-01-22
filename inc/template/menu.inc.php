		<ul id="menu-wrapper" class="menu-hover menu-hover-text">
			<li id="home" class="menu-items menu-home-item-light-bg cursor-pointer <?php echo ((@ $this->page['name'] == 'Welcome')?('menu-home-item-light-bg-active'):('')); ?>">
				<a href="/" class="menu-items-home-links display-block-not-important">
					<span class="menu-items-text menu-items-text-hover menu-items-font"><span class="menu-items-font display-none">H</span>ome</span>
				</a>
			</li>
			<li id="services" class="menu-items menu-services-items-light-bg cursor-pointer <?php echo ((@ $this->page['name'] == 'services')?('menu-services-item-light-bg-active'):('')); ?>">
				<a href="/services" class="menu-items-middle-links display-block-not-important">
					<span class="menu-items-text menu-items-text-hover menu-items-font"><span class="menu-items-font display-none">S</span>ervices</span>
				</a>
			</li>
			<li id="online-order" class="menu-items menu-online-order-items-light-bg cursor-pointer <?php echo ((@ $this->page['name'] == 'online order')?('menu-online-order-item-light-bg-active'):('')); ?>">
				<a href="/online_order" class="menu-items-middle-links display-block-not-important">
					<span class="menu-items-text menu-items-text-hover menu-items-font"><span class="menu-items-font display-none">O</span>nline&nbsp;order</span>
				</a>
			</li>
			<li id="about" class="menu-items menu-about-items-light-bg cursor-pointer <?php echo ((@ $this->page['name'] == 'about')?('menu-about-item-light-bg-active'):('')); ?>">
				<a href="/about" class="menu-items-middle-links display-block-not-important">
					<span class="menu-items-text menu-items-text-hover menu-items-font"><span class="menu-items-font display-none">A</span>bout</span>
				</a>
			</li>
			<li id="contact" class="menu-items menu-contact-item-light-bg cursor-pointer <?php echo ((@ $this->page['name'] == 'contact')?('menu-contact-item-light-bg-active'):('')); ?>">
				<a href="/contact" class="menu-items-contact-links display-block-not-important">
					<span class="menu-items-text menu-items-text-hover menu-items-font"><span class="menu-items-font display-none">C</span>ontact</span>
				</a>
			</li>
		</ul>

