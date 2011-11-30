<?php

	class Login implements Consts
	  {
	  	private	$db;
	  	private $query		= array();
	  	private $result;
	  	private $result_row;
	  	
	  	function construct() {}
	  	
	  	/* {{{ proto new doLogin(string $username, string $password, string $login_db, string $login_table)
		  	Checks login credentials and creates a session if those were valid. */
		function doLogin($username, $password, $login_db, $login_table)
		  {
			$username	= strtolower($username);
			$password	= sha1(md5($password) . self::pass_shared_secret);
			
			
			// TODO: Check whether the desired username is locked.
			// Query the password of the user from the database.
			$this->db		= new mysqli(self::db_host, self::db_user, self::db_pass, $login_db);
			
			$this->query[]	= 'SELECT `id`, `password` FROM `';
			$this->query[]	= $login_table;
			$this->query[]	= '` WHERE `username`="';
			$this->query[]	= $username;
			$this->query[]	= '";';
			
			$this->result	= $this->db->query(implode('', $this->query));
			
			
			// Check whether such a username found in database.
			if($this->result->num_rows)
			  {
				$this->result_row	= $this->result->fetch_array();
				
				// Check whether both passwords are the same.
				if($this->result_row['password'] == $password)
				  {
					// Login!
					$buffer	= $this->regSession($this->result_row['id'], $username);
				  }
				else
				  {
					// Wrong password!
					$buffer	= $this->wrongPass($this->result_row['id']);
				  }
				$this->result->free();
			  }
			else
			  {
				// No such username found!
				$buffer	= $this->genError();
			  }
			return $buffer;
		  }
		/* }}} */
		
		
		/* {{{ proto Login::regSession(int $id, string $username)
			Makes new session and puts credentials and a login flag in it. */
		function regSession($id, $username)
		  {
			if(! session_id())
			  {
				session_start() or die('Can not start session!');
			  }
			session_regenerate_id();
			
			$_SESSION['user_id']	= $id;
			$_SESSION['username']	= $username;
			$_SESSION['logged_in']	= true;
			
			return true;
		  }
		/* }}} */
		
		
		/* {{{ proto Login::wrongPass(int $id)
			Adds a failed attempt and lock the account if necessary. */
		function wrongPass($id)
		  {
			// TODO
			return $this->genError();
		  }
		/* }}} */
		
		
		/* {{{ proto Login::wrongUser(string $username)
			Just do something to stop dumping username list. */
		function genError()
		  {
			return 'Sorry, we do not recognize the combination of the username and password you entered.';
		  }
		/* }}} */
	  }