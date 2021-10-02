<?php

include_once("db_constants.php");

// CREATION OF PAGE VIEWS CLASS
class PageViews{

	public $page_id;
	public $visitor_ip;
	public $dbcon;

	function __construct(){

	//database connection by creating object of Mysqli class
		$this->dbcon = new Mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);
		if ($this->dbcon->connect_error) {
			die("Connection Failed: ".$this->dbcon->connect_error);
		}
	}

	// create new Page views
	function total_views($page_id){
		
		if($page_id === null) {

			// count total website views
		    $query = "SELECT sum(total_views) as total_views FROM pages";
		    $result=$this->dbcon->query($query);
		    
		    if($result->num_rows > 0){
		      while($row = $result->fetch_assoc()){

		        if($row['total_views'] === null){
		          return 0;
		        }else{
		          return $row['total_views'];
		        }
		      }
		    }else{
		      return "No records found!";
		    }
		  }else{
		    
		    // count specific page views
		    $query = "SELECT total_views FROM pages WHERE id='$page_id'";
		    $result=$this->dbcon->query($query);
		    
		    if($result->num_rows > 0){
		      while($row = $result->fetch_assoc()){
		        
		        if($row['total_views'] === null){
		          return 0;
		        }else{
		          return $row['total_views'];
		        }
		      }
		    }else{
		      return "Counting!";
		    }
		  }

		}

	function is_unique_view($visitor_ip, $page_id){

	  $query = "SELECT * FROM page_views WHERE visitor_ip='$visitor_ip' AND page_id='$page_id'";
	  $result=$this->dbcon->query($query);
	  
	  if($result->num_rows > 0){
	    return false;
	  }else{
	    return true;
	  }
	}

	function add_view($visitor_ip, $page_id){
		if(is_unique_view($visitor_ip, $page_id) === true){

		// insert unique visitor record for checking whether the visit is unique or not in future.
		$query = "INSERT INTO page_views (visitor_ip, page_id) VALUES ('$visitor_ip', '$page_id')";

			if($this->dbcon->query($query)){

				// At this point unique visitor record is created successfully. Now update total_views of specific page.
				$query = "UPDATE pages SET total_views = total_views + 1 WHERE id='$page_id'";

				if(!$this->dbcon->query($query)){
					echo "Error updating record: " . $this->dbcon->error;
				}
			}else{
				echo "Error inserting record: " . $this->dbcon->error;
			}
		}
	}


}

// CREATION OF MESSAGE CLASS
class Message{

	public $msgid;
	public $msgname;
	public $msgcategory;
	public $msgsubject;
	public $msgmessage;
	public $dbconn;

	function __construct(){

		//database connection by creating object of Mysqli class
		$this->dbcon = new Mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);
		if ($this->dbcon->connect_error) {
			die("Connection Failed: ".$this->dbcon->connect_error);
		}
	}

	// create new message
	function createMessage($msgname,$msgemail,$msgcategory,$msgsubject,$msgmessage){
		//write sql query
		$sql="INSERT INTO messages SET name='$msgname',email='$msgemail',category='$msgcategory',subject='$msgsubject',message='$msgmessage'";
		//run sql query by using mysqli Query()
		$result=$this->dbcon->query($sql);
		if($result){
			$msg="Your message is well received.";
		}else{
			$msg="Message failed to send.".$this->dbcon->error;
		}
		return $msg;
	}
}

?>