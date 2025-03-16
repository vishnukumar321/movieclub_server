<nav class="navbar1">
		<div class="navdiv1">
			<div class="logo1"><a href="/index.php"><h2>Movieclub</h2></a> </div>
			<ul class="ul1">
				<li class="li"><a href="/index.php">Home</a></li>
				<li class="li"><a href="/index.php#card-slider">Movies</a></li>
				<li class="li"><a href="/index.php#category">Category</a></li>
				<?php
				if(isset($_SESSION['token'])){
					?>
					<button><a class="pro" href="/profile.php" ><img class="profile" src="https://cdn-icons-png.flaticon.com/512/1361/1361913.png" alt="no"></a></button>
					
					<?php
				}else{
					?>
					<button class="button2"><a href="/login.php">Login</a></button>
					<button class="button2"><a href="/signup.php">SignUp</a></button>
					<?php
				}
				?>
				
			</ul>
		</div>
	</nav>