To use header and footer:

Add at the beginning of your document, add the following code with variables correctly filled out.

    <?php 
        //what you'd put in the title tag
        $title = "Page title";
        //content tag
        $content ="content";
        //IMPORTANT: put whatever prefix will give you the relative path back to the root (same level as index). So if you're in the pages folder, your prefix will be "../". If you're at root (index), leave this an empty string "" 
        $prefix ="../"; 
        //If your page needs a file that is different from the general style.css that will have uniform things like headings, body text, color, etc, add its file name ONLY here (with css extension). No need for the whole path.
        $styleFile ="style2.css";
        //If your page uses javascript, put the file name ONLY here. It will insert it into the footer. If you don't have a script, use "script.js" as a default. (it'll throw an error if nothing's there)
        $script ="script.js";
    
        //IMPORTANT: make sure the path to this is correct (head is in the root)
        include "../head.php";
        
    ?>
    
    clean version without notes for copying: 
        <?php 
            $title = "Page title";
            $content ="content";
            $prefix ="../"; 
            $styleFile ="style2.css";
            $script ="pageScript.js";

            include "../head.php";
        
        ?>
    
    (I may have to add more variables to this as time goes on.)
    
    Add that code at the very beginning of the document. The head.php file will insert the header and open the body tag to insert the nav bar. DO NOT USE A SECOND BODY TAG. Just continue coding as if you've just written the nav bar and are moving to h1 or whatever's next. 
    
    At the end of your file, you DON'T need to close your body or html tag. Just include: 
    
        <?php include "(correct path to)/foot.php" ?>
        
    This will add any scripts before closing the HTML. Eventually, it'll also contain universal footer content like contact and links.
    
    Ask me (Christine) if you have any questions or issues with this.