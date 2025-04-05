<?php
include_once "lib/load.php";
$domain=get_conf("domain");

?>
<!-- partial:index.partial.html -->
 <div class="catr">
    <h2>Popular Movies</h2>
 </div>
<div class="card-slider" id="card-slider">
<div class="card">
    <a href='<?php echo $domain;?>Marco'>
      <h3 class="title">Marco</h3>

      <div class="image">
        <img src="https://d229kpbsb5jevy.cloudfront.net/sony4/videoasset_images/blitz_assets/1090468630/landscapeThumb/1739412975751_MARCO_Landscape_Thumb.jpg" alt="Small succulent with long, spikey leaves in a mug-like planter.">
      </div>
    </a>

    <span class="description">2025 | Malayalam | Action | 2h 21m
</span>

   
  </div>
  <a href='<?php echo $domain;?>Greenland'>
  <div class="card">
    
      <h3 class="title">Greenland</h3>

      <div class="image">
        <img src="https://li-img-cdn-lb.lionsgateplay.com/LionsgateIndia/GREENLANDY2020MEN/GREENLANDY2020MEN-lgi-landscape-hero-main-1920x1080-DMHEL.jpg" alt="Small succulent with long, spikey leaves in a mug-like planter.">
      </div>
 

    <span class="description">2020 | English | Action, sci-fi | 1h 54m
</span>

   
  </div>
  </a>

  <div class="card">
    <a href='<?php echo $domain;?>Tabaah'>
      <h2 class="title">Tabaah</h2>

      <div class="image">
        <img src="https://images.chaupal.tv/021053e6c566951d36c068cddd73a8ad/021053e6c566951d36c068cddd73a8ad" alt="Small succulent with long, spikey leaves in a mug-like planter.">
      </div>
    </a>

    <p class="description">2024 | Punjabi | Drama, Romance | 1h 47m
    </p>

    
  </div>
<div class="card">
    <a href='<?php echo $domain;?>Dawshom Awbotaar'>
      <h3 class="title">Dawshom Awbotaar</h3>

      <div class="image">
        <img src="https://legacy.asset.viewlift.com/7fa0ea9a-9799-4417-99f5-cbb5343c551d/images/2024/02/12/1707737525310_da_1280x720_16x9Images.jpg" alt="Small succulent with long, spikey leaves in a mug-like planter.">
      </div>

    <span class="description">2023 | Bengali | Crime Thriller | 2h 31m
</span>

</a>
  </div>
  <div class="card">
    <a href='<?php echo $domain;?>Khoj'>
      <h3 class="title">Khoj</h3>

      <div class="image">
        <img src="https://legacy.asset.viewlift.com/7fa0ea9a-9799-4417-99f5-cbb5343c551d/images/0f/9f/4fee95ee4d4ab309f608155e354b/1568460758251_khoj_16x9Images.jpg" alt="Small succulent with long, spikey leaves in a mug-like planter.">
      </div>
    </a>

    <span class="description">2017 | Bengali | mystery | 1h 55m
</span>

   
  </div>
  <div class="card">
    <a href='<?php echo $domain;?>Pariah'>
      <h3 class="title">Pariah</h3>

      <div class="image">
        <img src="https://legacy.asset.viewlift.com/7fa0ea9a-9799-4417-99f5-cbb5343c551d/images/2024/12/20/1734672616971_pariah_poster_1280x720111_16x9Images.png" alt="Small succulent with long, spikey leaves in a mug-like planter.">
      </div>
    </a>

    <span class="description">2024 | Bengali | action_thriller | 2h 15m
</span>

    
  </div>

  

  
  <div class="card">
    <!-- Notice that both the image and the product title are in the same link. This can massively reduce the number of redundant tabstops on a page with lots of products, creating a better UX for keyboard-only and screen reader users. -->
    <a href='<?php echo $domain;?>Ek Hazaaron Mein… Meri Behna Hai'>
      <h3 class="title">Ek Hazaaron Mein… Meri Behna Hai</h3>

      <!-- This image has a descriptive alt attribute, so it helps to place it after the heading in the DOM. Flexbox is used to place it above the heading visually (see the CSS tab to see how). -->
      <div class="image">
        <img src="https://d229kpbsb5jevy.cloudfront.net/sony4/videoasset_images/ehmmbh_hindi_21june_landscape_thumb.jpg" alt="Small succulent with long, spikey leaves in a mug-like planter.">
      </div>
    </a>

    <span class="description">Hindi | 2h 12m  | 2023</span>

    <!-- The badge is placed right next to prices so its read out by screen readers in a more logical way. -->

    <!-- Star icons don't convey anything to screen readers on their own, so we need to provide screen-reader-only text with their meaning. -->

  </div>
  
  <div class="card">
    <a href='<?php echo $domain;?>Vashikaran'>
      <h3 class="title">Vashikaran
      </h3>

      <div class="image">
        <img src="https://images.chaupal.tv/6ca965623a31dbfbce47ff46e4690267/6ca965623a31dbfbce47ff46e4690267" alt="Small succulent with long, spikey leaves in a mug-like planter.">
      </div>
    </a>

    <span class="description">2024 | Hindi | Drama, Horror | 0h 45m
</span>

    
  </div>
  <div class="card">
    <a href='<?php echo $domain;?>Lootera'>
      <h3 class="title">Lootera</h3>

      <div class="image">
        <img src="https://d388d59m61mm0v.cloudfront.net/hungama1/c/1/294/e54/15061818/15061818_1280x720.jpg" alt="Small succulent with long, spikey leaves in a mug-like planter.">
      </div>
    </a>

    <span class="description">2013 | Hindi | Drama | 2h 17m
</span>

   
  </div>
  
</div>
