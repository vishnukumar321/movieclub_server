
<link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css">
<link rel="stylesheet" href="/lib/template/css/profile.css">
<!-- partial:index.partial.html -->
 <?php
 if(isset($_SESSION['token'])){
  ?>
  <div class="body">
  <div class="logout">
    <a class="sub1" href="/index.php?logout=true"><button>Logout</button></a>
  </div>
<div class="card" data-state="#about">
  <div class="card-header">
    <div class="card-cover" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRijYzOPcEyc5e179r-Q2MG_IxfzkOmY70J1w&s')"></div>
    <img class="card-avatar" src="https://cdn-icons-png.flaticon.com/512/9815/9815472.png" alt="avatar" />
    <h1 class="card-fullname">William Rocheald</h1>
    
  </div>
  <div class="edi">
  <div class="njm">
  <a href="/profile.edit.php" class="nj"><button>edit</button></a>
  </div>
  </div>
  <div class="details card-section is-active">
    <p class="sp">Name &emsp;:&emsp; vishnukumar<p>
    <p class="sp">Email &emsp;   : &emsp;vishnu@gmail.com</p>
    <p class="sp">Phone&emsp; : &emsp;7898767887</p>
    <p class="sp">DOB&emsp;&ensp; :&emsp; 27/10/2002</p>
  </div>
  <!-- <div class="card-main">
    <div class="card-section is-active" id="about">
      <div class="card-content">
        <div class="card-subtitle">ABOUT</div>
        <p class="card-desc">Whatever tattooed stumptown art party sriracha gentrify hashtag intelligentsia readymade schlitz brooklyn disrupt.
        </p>
      </div>
      
      
    </div>
    
  </div> -->
</div>

</div>
  <?php
 }else{
  header('location: /index.php');
 }
 ?>
