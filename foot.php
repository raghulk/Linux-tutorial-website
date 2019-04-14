
<footer>
        <p>&copy; BaseCamp Unix</p>
        <p>This site created for ISTE 240 Web and Mobile II.</p>
        <p id ="modified"><?php
        if (file_exists($filename)) {
            echo "Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
        }?>
    </p>
</footer>
</body>


<script src ="<?php echo $prefix; ?>assets/js/<?php echo $script; ?>"></script>


</html>