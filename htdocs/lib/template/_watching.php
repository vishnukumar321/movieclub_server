<?php
include_once "lib/load.php";
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
    }else{
        header("Location: /index.php");
    }
    
}else{
    header("Location: /index.php");
}
?>
