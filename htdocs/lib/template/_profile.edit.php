<?php
include_once "lib/load.php";
$result=false;
$profile=false;
$edit= new user($_SESSION['username']);
if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['gender']) ){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $a=$edit->setname($name);
  $b=$edit->setemail($email);
  $c=$edit->setphone($phone);
  $d=$edit->setgender($gender);
  if($a and $b and $c and $d){
    $profile=true;
  }
  $result=true;
}
if($result){
  if($profile){
    header('location: /profile.php');
  }else{
    echo "error";
  }
}else{
  ?>
<div class="login">
<center>
<form action="profile.edit.php" method="post">
  <table class="table">
    <tr>
      <td class="si"><h1>Edit Profile</h1></td>
    </tr>
    
      <tr>
      <td><input name="name" class="te" type="text" placeholder="Username" value="<?php echo $edit->getname(); ?>" required autocomplete="off"></td>
    </tr>
    <tr>
      <td><input name="email" class="te" type="email" placeholder="Email" value="<?php echo $edit->getemail(); ?>" required autocomplete="off"></td>
    </tr>
      <tr>
      <td><input name="phone" maxlength="10" minlength="10" class="te" value="<?php echo $edit->getphone(); ?>" type="tel" placeholder="Phone No" required autocomplete="off"></td>
    </tr>
    <tr colspan="2">
      <td><b>Gender</b>&ensp;:&ensp;Male&ensp;  <input name="gender" class="ra"  type="radio" placeholder="Email" value="male" required autocomplete="off">
      Female&ensp;<input name="gender" class="ra"  type="radio" placeholder="Email" value="female" required autocomplete="off"></td>
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

    