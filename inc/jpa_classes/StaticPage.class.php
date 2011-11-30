<?php

	class StaticPage implements Consts
	  {
		
		// Defining variables
		private	$database;
		private	$query;
		private	$result;
		private	$result_row;
		public	$page	= array();
		
	  	/* {{{ proto new StaticPage(int $page_id [, string $page_name [, bool $body_only = false [, string $language = 'en' [, boot $auto = true[, $box_type = 1]]]]]])
	  		Builds and returns a standard static page from database. */
		function __construct($page_id = false, $page_name = false, $body_only = false, $language = 'en', $auto = true, $box_type = 1)
		  {
			// Making some variables usable for other methods in this class.
			$this->page['id']	= $page_id;
			$this->page['name']	= $page_name;
			$this->language		= $language;
			$this->box_type		= $box_type;
			
			$this->getPage();
			
			if($auto)
			  {
				if($body_only)
				  {
					// Onley return page body without header and footer.
					$this->pageBody();
				  }
				else
				  {
					// Return comlete page with header and footer.
					$this->pageHeader();
					$this->pageBody();
					$this->pageFooter();
				  }
			  }
		  }
		/* }}} */
		
		
		/* {{{ proto StaticPage::pageHeader()
			Builds and returns a standard static page pageHeader. */
		function pageHeader()
		  {
			require_once	$_SERVER["DOCUMENT_ROOT"] . '/inc/template/page_start.inc.php';
			require_once	$_SERVER["DOCUMENT_ROOT"] . '/inc/template/menu.inc.php';
			require_once	$_SERVER["DOCUMENT_ROOT"] . '/inc/template/banner.inc.php';
            require_once	$_SERVER["DOCUMENT_ROOT"] . '/inc/template/body_start.inc.php';           
		  }
		/* }}} */
		
		
		/* {{{ proto StaticPage::pageFooter()
			Builds and returns a standard static page pageFooter. */
		function pageFooter()
		  {
            require_once	$_SERVER["DOCUMENT_ROOT"] . '/inc/template/body_end.inc.php';
            require_once	$_SERVER["DOCUMENT_ROOT"] . '/inc/template/portfolio.inc.php';
            require_once	$_SERVER["DOCUMENT_ROOT"] . '/inc/template/page_end.inc.php';
		  			  }
		/* }}} */
		
		
		/* {{{ proto StaticPage::pageBody()
			Builds and returns a standard static page body. */
		function pageBody()
		  {
            require_once	$_SERVER["DOCUMENT_ROOT"] . '/inc/template/box' . $this->box_type . '_start.inc.php';
		  	echo urldecode($this->page['body']);
            require_once	$_SERVER["DOCUMENT_ROOT"] . '/inc/template/box' . $this->box_type . '_end.inc.php';
		  }
		/* }}} */
		
		
		/* {{{ proto StaticPage::getPage()
			Gets a standard static page from data base and builds $this->page. */
		function getPage()
		  {
			$this->database	= new mysqli(self::db_host, self::db_user, self::db_pass, self::static_pages_db);
			
			
			$this->query[]		= 'SELECT * FROM `statics_';
			$this->query[]		= $this->language;
			$this->query[]		= '` WHERE ';
			
			// Check whether we should search with page id or page name.
			if($this->page['id'])
			  {
			  	// Search with page id
				$this->query[]	= '`id`=';
				$this->query[]	= $this->page['id'];
			  }
			else
			  {
				//search with page name.
				$this->query[]	= '`name`="';
				$this->query[]	= $this->page['name'];
				$this->query[]	= '"';
				
			  }
			$this->query[]		= ';';
			
			
			$this->result	= $this->database->query(implode('', $this->query));
			
			// Check whether this page exists in the database.
			if(@ $this->result->num_rows)
			  {
				// Put result into $this->page.
				$this->page		= $this->result->fetch_array();
				
				// Free the mysql result.
				$this->result->free();
			  }
			else
			  {
				$this->page['id']			= false;
				$this->page['name']			= 'notfound';
				$this->page['title']		= 'Page not found!';
				$this->page['body']			= 'Sorry!<br />The page you have requested not found!<br />If you have typed url  manually please check it again<br />or try again later.';
				$this->page['description']	= 'Page not found or it has been removed.';
				$this->page['keywords']		= '';
				
			  }
		  }
		/* }}} */
	  }

?>