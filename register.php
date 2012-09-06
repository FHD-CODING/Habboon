
<!DOCTYPE html>

<html>
<META HTTP-EQUIV="refresh" CONTENT="4;URL=/index">

<head>

	<title>{hotelname} - {slogan}</title>

	<link rel="stylesheet" href="app/tpl/skins/{skin}/css/frontpage.css" />

	<link rel="icon" type="image/png" href="img/roc.ico">

	<script src="http://code.jquery.com/jquery-latest.js"></script>

	<script type="text/javascript" src="app/tpl/skins/{skin}/js/frontpage.js"></script>

	
</head>
<?php if(isset($template->form->error)) { echo '<div id="message">'.$template->form->error.'</div>'; } ?>


<body>

	<div class="barline">

		<a href="#">

			<span class="joinnow">Registreer</span>

			<!--span class="logo"></span-->

			<span class="online">{online} User(s) Online!</span>

		</a>

		<div class="content">

			<div class="column">

				<h3>Registreer</h3><br>
				<font color="white">Registreer hier op {hotelname}</font><br><br>


				<a href="#"><span class="facebookConnect">

					Facebook (binnekort)

				</span></a>

			</div>

			<form action="register" method="post" href="/me">

				<div class="column">

					<input type="text" name="reg_username" id="register" placeholder="{hotelname} naam" value="<?php echo $template->form->reg_username; ?>"/>

					<input type="text" name="reg_email" placeholder="Je Email" id="register" value="<?php echo $template->form->reg_email; ?>"/>

					

					<div class="proceed">Volgende</div>

				</div>

				<div class="column">

					<input type="password" placeholder="Wachtwoord" name="reg_password" id="register"/>

					<input type="password" placeholder="Herhaal wachtwoord" name="reg_rep_password" id="register"/>
					
					<input type="password" name="reg_seckey" placeholder="Beveiligins code" id="register"/>


					<input type="submit" name="register" id="button" value="Registreer"/>

				</div>

			</form>

			<div class="hideColumn">

			</div>

		</div>

	</div>

	<div class="wrapper">

		<div class="header">

			<div class="login">

				<div class="loginheader">

					<h2>Registreer</h2>

					

				</div>

				<form action="index" method="post">

					<input type="text" placeholder="Gebruikersnaam" name="log_username" id="username"/>

					<input type="password" placeholder="Wachtwoord" name="log_password" id="password"/>

					<button  type="submit" name="login" id="button" value="Login">Log in</button>

				</form>

			</div>

		</div>

		<div class="welcomeText">

			{hotelname}... Maak fun, doe mee en val op!

		</div>



		<div id="slider">

		    <div id="buttons">

		    	<a class="selected">0</a>

				<a>1</a>

		    	<a>2</a>

		    	<a>3</a>

		    </div>



			<div class="article" style="background-image: url('img/news/voodoo.png');">

			    <div class="article-content">

			        <div class="title">Get the Voodoo Doll..</div>

			        <div class="body">Be one of the first 2000 registered!</div>

			    </div>

				<!--div class="link">

					<a href="##">Read More <span class="arrow">è</span></a>

				</div-->

			</div>



			<div class="article" style="background-image: url('img/news/pixels.png'); display:none ">

			    <div class="article-content">

			        <div class="title">Pixels? Why?</div>

			        <div class="body">Furniture is now bought with pixels!</div>

			    </div>

				<!--div class="link">

					<a href="##">Read More <span class="arrow">è</span></a>

				</div-->

			</div>



			<div class="article" style="background-image: url('img/news/facebook.png'); display:none ">

			    <div class="article-content">

			        <div class="title">Facebook connect</div>

			        <div class="body">Quickly register and play!</div>

			    </div>

				<!--div class="link">

					<a href="##">Read More <span class="arrow">è</span></a>

				</div-->

			</div>



			<div class="article" style="background-image: url('img/news/cinema_promo.png'); display:none ">

			    <div class="article-content">

			        <div class="title">We'll be back soon!!</div>

			        <div class="body">Registration and Login coming soon!</div>

			    </div>

				<!--div class="link">

					<a href="##">Read More <span class="arrow">è</span></a>

				</div-->

			</div>

		</div>



		<div class="stream">

			<h3>Welkom!</h3>

			<div class="stream-content">

				<div class="story">

					retroplace.nl ;)

					

				</div>

				

			</div>

		</div>

				

		<div class="adContainer">

			<center><span>&copy; {hotelname} Alle rechten voorbehouden. <br><br><font color='gray' size='2'>&copy; RevCMS | Style by Habboon |  | 2012</font></span></center>
			

		</div>

		

		<div class="footer">

		

		</div>

	</div>

</body>

</html>