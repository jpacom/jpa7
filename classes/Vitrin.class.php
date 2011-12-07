<?php
	// Vitrin class by J.P.A.
	// (C) 2011
	// 
	// Makes a list of items avalible to select.

	class Vitrin
	  {
		public $title;
		public $description;
		public $price;
		public $usage;
		public $discount;
		public $image_url;
		
		
		private $current_item;	// Store the item number(order_id) user selected. - default must be the last row of db!
		private $current_page;	// Store the page number user is using. - default is 1.
		private $page_number;
		private $pagination;	// a boolean = if the user using paging. **-> must store in sessions.
		private $page_lenght;	// a integer = max number of items in a page.	>> this is not changing in vitrin life cycle.
		private $page_count;	// a integer = the max number of pages.			>> this is not changing in vitrin life cycle.
		private $db_name;		// The database name which vitrin is using.		>> this is not changing in vitrin life cycle.
		private $query;		  // the query to used for manipulate db.
		private $result;
		private $result_now;
		private $item_start;
		private $item_end;
		
		
		// [TODO] item teyp to respond as object
		
		// Configuration functions
		/* {{{ proto new Vitrin(string db_name [, bool pagination [, int page_length [, int current_page]]] [, int current_item])
			Build Vitrin. */
		function __construct($db_name, $pagination = false, $page_length = 10, $current_page = 1, $current_item = 0)
		  {	
		  
		  	$db =	new MySQLi(Consts::db_host, Consts::db_user, Consts::db_pass, $db_name);
			// [TODO] get informations from db.
			$this->current_item;
			$this->query =	"SELECT COUNT(*) AS c, MAX(order_id) AS max, MIN(order_id) AS min FROM items";
			$this->result	= $this->db->query($this->query);
			
			// Update variables
		    $this->current_item	= $current_item;
			$this->current_page	= $current_page;
			$this->pagination	  = $pagination;
			$this->db_name		 = $db_name;
			$this->page_lenght	 = $page_length;
			if($this->result->num_rows)
			  {
				$this->result_row  =	$this->result->fetch_array();
	     		$this->page_number =	($this->result_now['c'] % $page_length == 0)? round($this->result_now['c'] / $page_length) : round($this->result_now['c'] / $page_length)+1;
				
				$this->item_start	  = ($this->current_page - 1) * $this->page_lenght+1;
				$this->item_end 		= $this->current_item * $this->page_lenght;
			  }
			  else
			 {
				 $this->item_start  = $this->result_now['min'];
				 $this->item_end 	= $this->result_now['max'];
			 }
			
			
			
			
			// [TODO] $this->page_count = max number of page can be exists.
			// [TODO] store pagination & currents in sessions.
		  }
		/* }}} */
		  
		function __distruct()
		  {
		  }
		
		// Selecting item functions
		/* {{{ proto Vitrin::nextItem()
			Go and load next item. */
		function nextItem()
		  {
			$db =	new MySQLi(Consts::db_host, Consts::db_user, Consts::db_pass, $db_name);
			if($this->pagination)
			{	
				$this->query =	"SELECT * FROM items WHERE order_id>'".$this->current_item."'";	
			}
			// [TODO] connenct to db.
		
			// [TODO] get informations from db.
			$this->query =	"SELECT * FROM items WHERE order_id>'".$this->current_item."'";
			$this->result	= $this->db->query($this->query);
			// [TODO] update $this->... variables.
			if($this->result->num_rows)
			  {
				$this->result_now	= $this->result->fetch_array();
				$this->current_item =	$this->result_now['id'];
				$this->description =	$this->result_now['description'];
				$this->price =	$this->result_now['price'];
				$this->usage =	$this->result_now['usage'];
				$this->discount =	$this->result_now['discount'];
				$this->image_url =	$this->result_now['image_url'];
			  }
			// [TODO] update currents.
		  }
		/* }}} */
		  
		/* {{{ proto Vitrin::preItem()
			Go and load previus item. */
		function preItem()
		  {
			// [TODO] connenct to db.
			$db =	new MySQLi(Consts::db_host, Consts::db_user, Consts::db_pass, $db_name);
			// [TODO] get informations from db.
			$this->current_item--;
			$this->query =	"SELECT * FROM items where id='".$this->current_item."'";
			$this->result	= $this->db->query(implode('', $this->query));
			// [TODO] update $this->... variables.
			if($this->result->num_rows)
			  {
				$this->result_row	= $this->result->fetch_array();
				$this->description =	$this->result_now['description'];
				$this->price =	$this->result_now['price'];
				$this->usage =	$this->result_now['usage'];
				$this->discount =	$this->result_now['discount'];
				$this->image_url =	$this->result_now['image_url'];
			  }
			// [TODO] update currents.
		  }
		/* }}} */
		  
		/* {{{ proto Vitrin::goItem(int item)
			Go and load selected item. */
		function goItem($item)
		  {
			// [TODO] connenct to db.
			// [TODO] get informations from db.
			// [TODO] update $this->... variables.
			// [TODO] update currents.
		  }
		/* }}} */
		  
		// Selecting page functions
		/* {{{ proto Vitrin::nextPage()
			Prepair variables for loading next page. */
		function nextPage()
		  {
			// [TODO] connenct to db.
			// [TODO] get informations from db.
			// [TODO] update $this->... variables.
			// [TODO] update currents.
		  }
		/* }}} */
		  
		/* {{{ proto Vitrin::prePage()
			Prepair variables for loading previus page. */
		function prePage()
		  {
			// [TODO] connenct to db.
			// [TODO] get informations from db.
			// [TODO] update $this->... variables.
			// [TODO] update currents.
		  }
		/* }}} */
		
		/* {{{ proto Vitrin::goPage(int page)
			Prepair variables for loading selected page. */
		function goPage($page)
		  {
			// [TODO] connenct to db.
			// [TODO] get informations from db.
			// [TODO] update $this->... variables.
			// [TODO] update currents.
		  }
		/* }}} */
		
	  }
	
?>