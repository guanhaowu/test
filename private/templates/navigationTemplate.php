<?php /* Nav area */ ?>
<div id="wrapper">
	<div id="nav">
		<ul class="nav">
			<li>
				<h2>Navigation</h2>
				<ul class="sub-nav">
					<li id="menuItem1" class="mainMenu"><a href="<?php echo URL; ?>index.php">Home</a></li>
			<?php 
                if(isset($_SESSION['username']) && !empty($_SESSION['username'])){ 
            ?>
					<li id="menuItem3" class="userMenu"><a href="<?php echo URL; ?>dashboard.php">Dashboard</a></li>
					<li id="menuItem4" class="userMenu"><a href="<?php echo URL; ?>profile.php">Profile</a></li>
					<li id="menuItem5" class="userMenu"><a href="<?php echo URL; ?>logout.php">Logout</a></li>
			<?php 
                }else{
			?>
					<li id="menuItem6" class="userMenu"><a href="<?php echo URL; ?>signup.php">Signup</a></li>
					<li id="menuItem7" class="userMenu"><a href="<?php echo URL; ?>login.php">Login</a></li>
			<?php
                }
			?>
					
				</ul>
			</li>
		</ul>
		<ul class="nav">
			<li>
				<h2>Snippets</h2>
				<ul class= "sub-nav">
					<li id="snippetsItem1" class="snippetsMenu">
						<a href="<?php echo URL; ?>calculator.php">Calculator</a>
					</li>
					<li id="snippetsItem2" class="snippetsMenu">
						<a href="<?php echo URL; ?>scoping.php">Scope</a>
					</li>
					<li id="snippetsItem3" class="snippetsMenu">
						<a href="<?php echo URL; ?>database.php">Database</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<?php /* content area */ ?>
