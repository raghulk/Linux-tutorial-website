<?php
require('Persistence.php');

$db = new Persistence();
$added = $db->add_comment($_POST);

if($added) {
  header( 'Location: comments.php' );
}
else {
  header( 'Location: comments.php?error=Your comment was not posted due to errors in your form submission' );
}
?>