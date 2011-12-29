<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/inc/jpa_classes/Consts.class.php';
		
	class portfolio implements  Consts
	{
		private	$db;
	  	private $query		= array();
	  	private $result;
	  	private $result_row;
	  	
	  	function construct($db_name) 
	  	{
	  		//[TODO] create mysqli object
	  		$this->db	=	new mysqli(Consts::db_host, Consts::db_user, Consts::pass, $db_name);
	  	}
	  	
	  	/* {{{ portfolio::fetch_info(puzzle_id)
	  	 * fetch information of one portfolio and make an array
	  	 */
	  	function fetch_info($puzzle_id,$db_name)
	  	{
	  		$this->db	=	new mysqli(Consts::db_host, Consts::db_user, Consts::db_pass, $db_name);
	  		//[TODO] select from portfolio table where puzzle_id = puzzle_id
	  		$this->query	=	'';
	  		$this->query[]	=	'SELECT * FROM portfolio WHERE `puzzle_id` = "';
	  		$this->query[]	=	$puzzle_id;
	  		$this->query[]	=	'"';
	  		$this->result	=	$this->db->query(implode('',$this->query));
	  		if($this->result->num_rows == 0) return false;
	  		//[TODO] make info array
	  	
	  		$this->result_row	=	$this->result->fetch_array();
	  		$info		=	array();
	  		$info[]		=	'/portfolio/images/'.$puzzle_id.'.jpg';
	  		$info[]		=	$this->result_row['site_url'];
	  		$info[]		=	$this->result_row['name'];
	  		$info[]		=	Date('y/m/d',$this->result_row['end']);
	  		$info[]		=	$this->result_row['description'];
	  		$info[]		=	$this->result_row['price'];
	  		$info[]		=	$this->result_row['department'];
	  		$info[]		=	$this->result_row['pack'];
	  		//[TODO] return array 
	  		return $info;
	  	}
	}
?>