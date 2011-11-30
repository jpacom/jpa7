<?php
	// Customize class by J.P.A.
	// (C) 2011
	// 
	// Make steps for customizing itemselected.

	class Cust
	  {
		// Variables:
		public $step;					// current step of customizing -> must store in db and maybe in sessions.
		public $oreder_id;				// id of order in db to save options in.
		public $total_prices= array();	// an array of each step price and also 'grand' for grand price.
		// [TODO] public $item as item type
		
		// Functions:
		// Configuration functions
		/* {{{ proto new Cust(int current_order [, int item_id] [, int step])
			Build Cust. */
		function __construct($current_order = 0, $item_id = 0, $step = 0)
		  {
		  }
		/* }}} */
		
		function __distruct()
		  {
		  }
		  
		// internal functions (this functions is used only in this class but not private)
		/* {{{ proto Cust::saveStep(object[] option)
			Save object selected in step. */
		function saveStep($option) //$option: option to be saved
		  {
			// [TODO] find current order in db by order_id and update options in this page
			
		  }
		/* }}} */
		
		/* {{{ proto Cust::createStep(int step)
			Creat all page of step. */
		function createStep($step) //$step: step which page will load from
		  {
			// [TODO] load head
			// [TODO] createOption();
			// [TODO] load body
		  }
		/* }}} */
		  
		/* {{{ proto Cust::createOption(int step)
			Creat a option body of step. */
		function createOption($step) //$step: step which option will load from
		  {
			// [TODO] load page items by $step
			// [TODO] returns step options
		  }
		/* }}} */
		
		// Step changing function
		/* {{{ proto Cust::nextStep()
			Load next step. */
		function nextStep()
		  {
			// [TODO] update step
			// [TODO] saveStep();
			// [TODO] createStep();
		  }
		/* }}} */
		
		/* {{{ proto Cust::preStep()
			Load previous step. */
		function preStep()
		  {
			// [TODO] update step
			// [TODO] saveStep();
			// [TODO] createStep();
		  }
		/* }}} */
		
		/* {{{ proto Cust::goStep(int step)
			Load step selected. */
		function goStep($step)
		  {
			
			// [TODO] update step
			// [TODO] saveStep();
			// [TODO] createStep();
		  }
		/* }}} */
		  
		// Skip functions
		/* {{{ proto Cust::skipStep()
			Load next page without saving. */
		function skipStep()
		  {
			// [TODO] update step
			// [TODO] createStep();
		  }
		/*}}} */
		
		/* {{{ proto Cust::skipCust()
			Skip customizing. */
		function skipCust()
		  {
			// [TODO] update step
			// [TODO] saveStep()
			// [TODO] go to end step of customizing
		  }
		/* }}} */
		
		/* {{{ proto Cust::cancelOrder()
			Cancel order and delete it. */
		function cancelOrder()
		  {
			// [TODO] select order by order id from db
			// [TODO] delete order selected
		  }
		/* }}} */
		
		/* {{{ proto Cust::reCustom()
			Change options to default and re-custom. */
		function reCustom()
		  {
			// [TODO] update step
			// [TODO] update options selected by default values of item
			// [TODO] createStep();
		  }
		/* }}} */
	  }
?>
