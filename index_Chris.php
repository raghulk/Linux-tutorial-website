<?php 
    $title = "Homepage";
    $content ="content";
    $prefix =""; 
    $styleFile ="index.css";
    $script ="script.js";

    include "head.php"; 
?>
<div class="logo"> 
	<figure> <img src="assets/images/MAIN-LOGO.png" alt="logo">
	</figure>
</div> <!-- end of logo-->
<div class="sections"> 
<h3> Section Header </h3>
<div id="leftSectionA"> 
<div class="sectionLogo"> 
<figure> <img class="headerImg" src="assets/images/AltLogo.png" alt="logo">
	</figure>
</div>
<p> ""some text need to make this bigger so i can see if it will wrap around and stay in its area or will if go passed it 30%"" </p>
</div>  <!-- end of leftSectionA-->
<div class="break"> 
</div> <!-- end of Break-->
<div id="midSectionA"> 
<div class="sectionLogo"> 
<figure> <img class="headerImg" src="assets/images/AltLogo.png" alt="logo">
	</figure>
</div>
<p> some text </p>
</div> <!-- end of midSectionA-->
<div class="break"> 
</div> <!-- end of Break-->
<div id="rightSectionA"> 
<div class="sectionLogo"> 
<figure> <img class="headerImg" src="assets/images/AltLogo.png" alt="logo">
	</figure>
</div>
<p> some text </p>
</div> <!-- end of rightSectionA-->
</div> <!--end of sections logo-->
<div class="tagline"> 
<h3> This is our tagline </h3>
</div> <!--end of tagline-->
<div class="moresections"> 
	<h3> Section Header </h3>
<div id="leftSectionB"> 
<p> "some text need to make this bigger so i can see if it will wrap around and stay in its area or will if go passed it 30%" </p>
</div>  <!-- end of leftSectionA-->
<div class="break"> 
</div> <!-- end of Break-->
<div id="midSectionB"> 
<p> some text </p>
</div> <!-- end of midSectionA-->
<div class="break"> 
</div> <!-- end of Break-->
<div id="rightSectionB"> 
<p> some text </p>
</div> <!-- end of rightSectionA-->
</div> <!--end of moresection 1 logo-->
<footer>
</footer>
<?php include "foot.php" ?>