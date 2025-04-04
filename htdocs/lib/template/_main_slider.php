<?php
include_once "lib/load.php";
if(isset($_GET['logout'])){
  session_destroy();
  header('location: /index.php');
}
$domain=get_conf("domain");


?>
<!-- partial:index.partial.html -->
<div class='body'>
<div class='main'>
  <ul class='slider'>
    
  <li class='item' style="background-image: url('https://img10.hotstar.com/image/upload/f_auto/sources/r1/cms/prod/9689/1738309499689-i')">
      <div class='content'>
        <img src="https://img10.hotstar.com/image/upload/f_auto,h_156/sources/r1/cms/prod/4834/1738309514834-t" alt="no">
        <h3 class="tex">2024 | U/A 16+ | 1h 45m | English</h3>
        <p class='description'>A "trap story" can refer to various narratives, such as a thriller where a character is ensnared in a dangerous situation, as seen in M. Night Shyamalan's film "Trap" where a father must evade capture while attending a concert with his daughter.  </p>
        <a href='<?php echo $domain;?>trap' target="_blank" class="main-link"><button><h3>Watch Now</h3></button></a>
      </div>
    </li>
    
  <li class='item' style="background-image: url('https://img10.hotstar.com/image/upload/f_auto/sources/r1/cms/prod/8118/1368118-i-50f00cbb22b3')">
      <div class='content'>
      <img src="https://img10.hotstar.com/image/upload/f_auto,h_156/sources/r1/cms/prod/8122/1368122-t-c08942346971" alt="no">
      <h3 class="tex">2018 | U/A 16+ | 2h 21m | English</h3>
      <p class='description'> Seven strangers meet at Lake Tahoe's El Royale, where everyone will have one last shot at redemption for one night before everything goes to hell.  </p>
      <a href='<?php echo $domain;?>bad times' target="_blank" class="main-link"><button><h3>Watch Now</h3></button></a>
      </div>
    </li>
    
  <li class='item' style="background-image: url('https://img10.hotstar.com/image/upload/f_auto/sources/r1/cms/prod/6659/1740565886659-i')">
      <div class='content'>
      <img src="https://img10.hotstar.com/image/upload/f_auto,h_124/sources/r1/cms/prod/5415/1740565915415-t" alt="no">
      <h3 class="tex">2024 | U/A 16+ | 2h 18m | English</h3>
        <p class='description'>A continuation of Arthur Fleck's story, where he faces a trial and the emergence of a new Joker, raising questions about his identity and the nature of the Joker persona  </p>
        <a href='<?php echo $domain;?>joker 2' target="_blank" class="main-link"><button><h3>Watch Now</h3></button></a>
      </div>
    </li>

    <li class='item' style="background-image: url('https://img10.hotstar.com/image/upload/f_auto/sources/r1/cms/prod/349/1735800490349-i')">
      <div class='content'>
      <img src="https://img10.hotstar.com/image/upload/f_auto,h_156/sources/r1/cms/prod/6525/1735800516525-t" alt="no">
      <h3 class="tex">2023 | U/A 16+ | 1h 31m | English</h3>
        <p class='description'>
        In 1985, a female American black bear died of a cocaine overdose after ingesting a duffel bag of the drug dropped by a drug smuggler in Georgia
        </p>
        <a href='<?php echo $domain;?>cocaine bear' target="_blank" class="main-link"><button><h3>Watch Now</h3></button></a>
      </div>
    </li>
    
    <li class='item' style="background-image: url('https://img10.hotstar.com/image/upload/f_auto/sources/r1/cms/prod/826/1650826-i-8f4844af31a6')">
      <div class='content'>
      <img src="https://img10.hotstar.com/image/upload/f_auto,h_156/sources/r1/cms/prod/825/1650825-t-995f2d6ff14b" alt="no">
      <h3 class="tex">2022 | U/A 16+ | 1h 59m | English</h3>
        <p class='description' style="padding-bottom:14px;">
        A high-profile murder baffles the cops when a prison inmate claims responsibility and promises more deaths.a 2022 Indian Tamil-language film, tells the story of Dr. Bhadra Thangavel, a forensic surgeon who becomes entangled in a series of mysterious murders. 
        <a href='<?php echo $domain;?>cadaver' target="_blank" class="main-link"><button><h3>Watch Now</h3></button></a>
      </div>
    </li>
    
    <li class='item' style="background-image: url('https://img10.hotstar.com/image/upload/f_auto/sources/r1/cms/prod/300/1734505170300-i')">
      <div class='content'>
      <img src="https://img10.hotstar.com/image/upload/f_auto,h_156/sources/r1/cms/prod/4301/1734505194301-t" alt="no">
      <h3 class="tex">2019 | A | 1h 56m | English</h3>
        <p class='description'>The Joker's origin story varies, but one notable version is that he was a failed comedian who adopted the Red Hood identity to support his pregnant wife, leading to his disfigurement and descent into madness.</p>
        <a href='<?php echo $domain;?>joker' target="_blank" class="main-link"><button><h3>Watch Now</h3></button></a>
      </div>
    </li>
  </ul>
  <nav class='nav'>
    <button class='btn prev' name="arrow-back-outline">←</button>
    <button class='btn next' name="arrow-forward-outline">→</button>
  </nav>
  </div>
</div>


