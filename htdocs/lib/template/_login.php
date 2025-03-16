<?php
include_once "lib/load.php";
$result=false;
$login=false;
if(isset($_POST['name']) and isset($_POST['password'])){
  $name=$_POST['name'];
  $pass=$_POST['password'];
  $login=user::login($name,$pass);
  $result=true;
}
if($result){
  if($login){
    unset($_SESSION['login']);
    $_SESSION['token']=true;
    header('location: /index.php');
  }else{
    ?>
    <div class="login">
<center>
<form action="login.php" method="post" autocomplete="off">
  <table class="table">
    <tr>
      <td class="si"><h1>Login</h1></td>
    </tr>
    
      <tr>
      <td><input name="name" class="te" type="text" placeholder="Username" required autocomplete="off"></td>
    </tr>
    <tr>
      <td><input name="password" class="te" type="Password" placeholder="Password" required autocomplete="new-password" ></td>
    </tr>
    <tr>
      <td><p >invalied username and password</p></td>
    </tr>
    <tr>
      <td><input class="sub" type="submit"></td>
    </tr>
  </table>
</form>
</center>
</div>
    <?php
  }
}else{
  ?>
  <div class="login">
<center>
<form action="login.php" method="post">
  <table class="table">
    <tr>
      <td class="si"><h1>Login</h1></td>
    </tr>
    
      <tr>
      <td><input name="name" class="te" type="text" placeholder="Username" required autocomplete="off"></td>
    </tr>
    <tr>
      <td><input name="password" class="te" type="Password" placeholder="Password" required autocomplete="off"></td>
    </tr>
    <tr>
      <td><input class="sub" type="submit"></td>
    </tr>
  </table>
</form>
</center>
</div>
  <?php
}
?>
