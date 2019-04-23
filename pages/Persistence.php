<?php
date_default_timezone_set('America/New_York');

if(isset($_SESSION['name'])){
  $welcome = $_SESSION['name'];
}else{
    $welcome = '';
}

class Persistence {
  
  private $data = array();

  /**
   * Is the consntructor for the Persistence class
   */ 
  function __construct() {
//    session_start();
    
    if( isset($_SESSION['blog_comments']) == true ){
      $this->data = $_SESSION['blog_comments'];
    }
  }
  
  /**
   * Get all comments for the given post.
   */
  function get_comments($comment_post_ID) {
      require '../../../../dbConnect.inc';
      $sql = "Select * from Comments";
      $res=$mysqli->query($sql);
      if($res->num_rows> 0){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
			$records[]=$rowHolder;
		  }
//          var_dump($records);
      $max=sizeof($records);
    for ($i = 0; $i< $max; $i++ ) {
      $comments[] = array(
     'comment_author' => $records[$i]['Name'],
     'email' => $records[$i]['Email'],
     'comment' => $records[$i]['Comment'],
     'comment_post_ID' => '1',
     'date' => $records[$i]['Date']);
    }
    return $comments;
      }
  }
  
  /**
   * Store the comment.
   */
  function add_comment($vars) {
      require '../../../../dbConnect.inc';
      $auth=$vars['comment_author'];
      $mail=$vars['email'];
      $comm=$vars['comment'];
      $dt = date('r');
      $stmt=$mysqli->prepare("INSERT INTO Comments(Name, Email, Comment, Date) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $auth, $mail, $comm, $dt);
    
    if($stmt->execute())
    {
        echo "New record added successfully";
        return true;
    }
    else{
        echo "Error in adding data";
        return false;
    }
  }
  
}

?>