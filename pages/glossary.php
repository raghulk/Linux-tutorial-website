<?php 
session_start();
session_name("login");

if(isset($_SESSION['name'])){
    $welcome = $_SESSION['name'];
}else{
    $welcome = '';
}

    $title = "Glossary";
    $content ="content";
    $filename = "glossary.php";
    $prefix ="../"; 
    $styleFile ="glossary.css";
    $script ="mobile-responsive-touch.js";

    include "../head.php"; 
?>
        <!-- begin of body  part -->
        <div class="body">
            <div class="body_title">
                <div class="body-title-header">
                        Glossary
                        <hr size=3 color="#054b7f">
                </div>
                <div class="body_content">
                    <!-- table part -->
                    <br>
                    <table>
                        <tr>
                            <th style="position: relative;">
                                COMMAND</th>
                            <th>FUNCTION</th>
                        </tr>
                        <tr>
                            <td>cd</td>
                            <td>change directory</td>
                        </tr>
                        <tr>
                            <td>pwd</td>
                            <td>print working directory</td>
                        </tr>
                        <tr>
                            <td>ls</td>
                            <td>list</td>
                        </tr>
                        <tr>
                            <td>mkdir [name] </td>
                            <td>Makes a directory or file group name [name]</td>
                        </tr>
                        <tr>
                            <td>mv [file1] [filen]</td>
                            <td>move [file1] to directory [filen]</td>
                        </tr>
                        <tr>
                            <td>cp [file1] [directory]/[file2]</td>
                            <td>copies [file1] into [file2] in directory [directory]. </td>
                        </tr>
                        <tr>
                            <td>rmdir</td>
                            <td>Removes or erases empty directory.</td>
                        </tr>
                        <tr>
                            <td>pushd [name]</td>
                            <td>Pushes from the working directory to the directory [name] keeping the sequence of directories in a buffer for `popd'. </td>
                        </tr>
                        <tr>
                            <td>popd</td>
                            <td> Pops back up to the prior directory, if `pushd' was used before.</td>
                        </tr>
                    </table><!-- end table part -->
                </div>
            </div>
        </div><!-- end of body part -->
        

    <?php include "../foot.php" ?>