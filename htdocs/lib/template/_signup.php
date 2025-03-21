<?php
include_once "lib/load.php";
if(isset($_SESSION['token'])){
  header('location: /index.php');
}
$error = false;
$result=false;
$signup=false;
if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['password'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $pass=$_POST['password'];
  $check=user::checking($name);
  if(!$check){
    $signup=user::signup($name,$email,$phone,$pass);
  }
  $result=true;
}
if($result){
  if($signup){
    // header('location: /index.php');
    $_SESSION['token']=true;
    header('location: /index.php');
  }else{
    $error = true;
  }
}
  ?>
    <div class="login">
<center>
<form action="signup.php" method="post">
  <table class="table">
    <tr>
      <td class="si"><h1>Sigh Up</h1></td>
    </tr>
    
      <tr>
      <td><input name="name" class="te" type="text" maxlength="23" placeholder="Username" required autocomplete="off"></td>
    </tr>
    <tr>
      <td><input name="email" class="te" maxlength="24" type="email" placeholder="Email" required autocomplete="off"></td>
    </tr>
      <tr>
      <td><input name="phone" class="te" maxlength="10" minlength="10" type="tel" placeholder="Phone No" required autocomplete="off"></td>
    </tr>
    <tr>
      <td><input name="password" class="te" type="Password" placeholder="Password" required required minlength="6" autocomplete="new-password" ></td>
    </tr>
    <?php
    if($error){
      ?>
      <tr>
      <center>
      <td><p >This Username is unavailable</p></td>
      </center>
    </tr>
      <?php
    }
    ?>
    <tr>
      <td><input class="sub" type="submit"></td>
    </tr>
  </table>
</form>
</center>
</div>
  