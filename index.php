<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="jquery-1.7.1.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.tabs.js"></script>
	<link rel="stylesheet" href="css/demos.css">
<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	</script>
</head>
</head>
<body>
	<img class="logo" src="images/logo.png" width="180" height="180">
	<div class="Navigation">
		<div id="NavigationInside">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Gallery</a>
					<ul class="horizontal">
						<li><a href="#">Landscape</a>
							<div class="extended">
								<div class="arrow-up"></div>
								<h2>Mac Mini</h2>
								<span>Starting at $799</span>
								<img src="images/macMini.png" alt="Mac Mini"/>
								<p>Introducing the new Mac mini. Redesigned in a very big way. Mac mini is the world's most energy efficient desktop computer.</p>
								<ul class="smallNav">
									<li><a href="#">Design</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Why Mac Mini</a></li>
									<li><a href="#">Performance</a></li>
									<li><a href="#">Tech Specs</a></li>
								</ul>
							</div>
						</li>
						<li><a href="#">Portrait</a>
							<div class="extended">
								<div class="arrow-up"></div>
								<h2>Mac Pro</h2>
								<span>Starting at 2599</span>
								<img src="images/Pro.png" alt="Mac Pro"/>
								<p>The new Mac Pro. With up to 12 cores of processing power, it's the fastest Mac ever.</p>
								<ul class="smallNav">
									<li><a href="#">Design</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Why Mac Mini</a></li>
									<li><a href="#">Performance</a></li>
									<li><a href="#">Tech Specs</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="#">Contact Us</a>
					<ul class="horizontal">
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
				</li>
				<li><a href="register.php">Register</a>
				<div class="ultraNav">
						<div class="arrow-up"></div>
						<h2>Daftar Sekarang</h2>
						<img src="images/account1.png" alt="New Account" width="160" height="160"/>
						<p class="tulisan">Daftar sekarang untuk menikmati kemudahan dalam pembuatan suatu sertifikat.</p>
					</div>
				</li>
				<li><a href="#">Login</a>
					<div class="ultraNav">
					<div class="arrow-up"></div>
					<h2>Masukkan Username dan Password</h2>
						<ul class="ultra2">
							<li class="a" valign="middle">Username</li>
							<li class="a" valign="middle">Password</li>
						</ul>
						<ul class="ultra3">
							<li valign="top"><input type="text" name="username" size="20px"></li>
							<li valign="top"><input type="password" name="password" size="20px"></li>
							<li><input type="image" name="login" src="images/login.png" height="25px" width="60px"></li>
							
						</ul>
					</div>
			</ul>
		</div>
	</div>
	<br>
	<br>
	<center>
	<table class="content" border="0" width=65% style="background:url('images/gradient2.png') repeat-x; border-collapse: collapse;">
	<tr>
		<td width=25% valign="top"><img src="images/welcome.png"></td>
		<td width=100% class="date"><form class="searchform">
					<input class="searchfield" type="text" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
					<input class="searchbutton" type="button" value="Go" />
					</form></td>
	</tr>
	<tr>
		<td width=25% class="font1">Selamat Datang di <b>Automatic Certificate Generator</b>. Disini Anda bisa membuat sertifikat suatu kepanitiaan secara otomatis. Pilih desain, masukkan Nama, Instansi, dan lainnya lalu create. Mudah, Simple, dan Cepat. </td>
		<td width=100% class="tabbox" rowspan="3" valign="top"><div class="demo">

<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Nunc tincidunt</a></li>
		<li><a href="#tabs-2">Donatur</a></li>
		<li><a href="#tabs-3">About Us</a></li>
	</ul>
	<div id="tabs-1">
		<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
	</div>
	<div id="tabs-2">
		<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
	</div>
	<div id="tabs-3">
		<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
		<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
	</div>
</div>

</div><p>
	<img class="date" src="images/jam1.png" width="24" height="24" valign="middle">&nbsp;&nbsp;<b><?php
		$today = date("F j, Y, G:i a");
		echo $today;
		?></b></p>
		</td>
	</tr>
	<tr>
		<td width=25% valign="top"><img class="cer" src="images/sertifikat.png" width="350" height="207"></td>
	</tr>
	<tr>
		<td width=25% height="50" class="font1">Daftar sekarang untuk menikmati kemudahan dalam pembuatan suatu sertifikat.</td>
	</tr>
	<tr>
		<td width=25% height="90" valign="top"><center><a href="register.php"><input type="image" alt="submit" src="images/register.png" onmouseover="this.src='images/register2.png'" 
onmouseout="this.src='images/register.png'"></a></center></td>
		<td width=100% class="tabbox1" valign="top"><img src="images/tulisan.png"><br><img class="fb" src="images/fb.png" width="36" height="36" alt="Facebook">&nbsp;&nbsp;<img class="twit" src="images/twit.png" width="40" height="40">&nbsp;&nbsp;<img class="go" src="images/g+.png" width="40" height="40"></td>
	</tr>
	</table>
	<table border="0" width=65%>
	<tr>
		<td class="footer"><img src="images/footer1.png"></td>
	</tr>
	</table>
	</center>


</body>
</html>