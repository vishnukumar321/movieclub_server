<?php
include_once "lib/load.php";
if(isset($_SESSION['token'])){
    if(isset($_GET['k'])){
        if($_GET['k']){
            $video=$_GET['k'];
            $video=movie::get_movie($video);
    
        ?>
        <style>
        .watching{
            width: 100%;
            height: auto;
        }
        .video{
            padding-top: 75px;
        }
    </style>
    <div class="watching">
        <div class="video"><?php echo $video; ?></div>
    
    </div>
        <?php
        get_file("2nd_slider");
        get_file("3rd_cards");
        }else{
            header("Location: /index.php");
        }
        
    }else{
        header("Location: /index.php");
    }
}else{
    header("Location: /checking.php");
}
?>
