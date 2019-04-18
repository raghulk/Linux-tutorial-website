<?php
require('Persistence.php');
session_start();
session_name("login");
    
    $title = "Comments";
    $content ="Unix Comments";
    $filename = "comments.php";
    $prefix ="../"; 
    $styleFile ="comments.css";
    $script ="script.js";

    include "../head.php"; 

$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);

//var_dump($comments);
?>

<body id="index" class="home">
			
	<section id="comments" class="body">
	
    <div id="respond">

      <h3>Leave a Comment</h3>

      <form action="post_comment.php" method="post" id="commentform">

        <label for="comment_author" class="required">Your name</label>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
        
        <label for="email" class="required">Your email</label>
        <input type="email" name="email" id="email" value="" tabindex="2" required="required">

        <label for="comment" class="required">Your message</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>

        <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
        <input name="submit" type="submit" id="submit-btn" value="Submit comment" />
        
      </form><!-- end of form -->
      
    </div><!-- end of respond div -->
	  
	  <header>
			<h2>Comments</h2>
      </header>

    <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      <li class="no-comments">Be the first to add a comment.</li>
      <?php
        if($comments)
        {    foreach ($comments as &$comment) {
          ?>
          <li><article class="hentry">	
    				<footer class="post-info">
    					<abbr class="published" title="<?php echo($comment['date']); ?>">
    						<?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
    					</abbr>

    					<address class="vcard author">
    						By <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
    					</address>
    				</footer><!-- end of footer -->

    				<div class="entry-content">
    					<p class="in-comments"><?php echo($comment['comment']); ?></p>
    				</div><!-- end of entry-content div -->
    			</article><!-- end of article hentry -->
        </li><!-- end of list item -->
          <?php
        }//end of for loop inside php
        }//end of if inside php
      ?>
		</ol><!-- end of ordered list -->
	</section><!-- end of section -->
    
    <!--PHP to include the footer with the datestamp-->
    <?php
	include '../foot.php';
    ?>

</body><!-- end of body -->
