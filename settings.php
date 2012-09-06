<!-- 
					© Habboon Style by Finley
       Deze stijl is officieel ge-released op www.retroplace.nl
	   Het is NIET toegestaan om dit te releasen op andere forum's
	   
	   Als je je aan deze dingen houd ben je akkoord gegaan met de algemene voorwaarden
	   
	   -FHD
	   
	   -->
<!DOCTYPE html>

<html>

<head>

	<title>{hotelname} - {slogan}</title>

	<link rel="stylesheet" href="app/tpl/skins/{skin}/css/home.css" />
	
	<link rel="stylesheet" href="app/tpl/skins/{skin}/css/frontpage.css" />

	<link rel="icon" type="image/png" href="/img/roc.ico">

	<script src="http://code.jquery.com/jquery-latest.js"></script>

	<meta name="description" content="Powered by RocCF - an open-source Coldfusion content management system by Otaku-Studios." />

	<meta name="keywords" content="roc, roccf, roc-cf, cf, coldfusion, habbo hotel, virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets, room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" />

	<script type="text/javascript" src="app/tpl/skins/{skin}/js/settings.js"></script>

</head>







<body>

	<div class="barline">

	<div class="MainNavigation">

		<div class="Option"><a href="me">Home</a></div>

		<div class="Option"><a href="community">Community</a></div>

		<div class="Option"><a action="_newtab" href="http://retroplace.nl">Forum</a></div>

	</div>

	<a href="#">

		<span class="online">{online} User(s) Online!</span>

	</a>

</div>





	<div class="wrapper">

		

	<div class="SubNavigation">

		<div class="Option"><a href="me">{username}</a></div>

		<div class="Option"><a href="settings">Instellingen</a></div>
		
		<div class="Option"><a href="logout">Log uit</a></div>

	</div>



<div class="HotelNavigation">

	<div class="Option"><a href="/client">Enter Hotel</a></div>

</div>




<div class='container'><center>


		<form method="post">

	<?php if(isset($template->form->error)) { echo '<div class="Message" style="width:558px">'.$template->form->error.'</div>'; } ?>
			<h3>Verander Je E-Mail: <input name="acc_email" type="text" id="email" placeholder="{email}"></h3><br>
			<h3>Verander Je Motto:  <input name="acc_motto" type="text" id="motto" placeholder="{motto}"></h3><br>
		<br>
			<small><font color='red'>Vul alleen je wachtwoord in als je het wilt veranderen!</font></small><br>
			<h3>Het Wachtwoord dat je nu hebt:  <input type="password" name="acc_old_password" id="password"></h3><br>
			<h3>Je nieuwe wachtwoord:  <input type="password" name="acc_new_password" id="confirm_password"></h3><br>
 <td class="center">
                                            <input type="submit" name="account" id="button" value="Update" style="margin-right:3px">
                                            <input type="button" value="Cancel" onclick="location.href='{url}/me'">
                                        </td> 
</center>


		

			
			
		</form>	
    </div>

		

		

		<div class="footer">

	&copy; {hotelname} Hotel. Alle rechten voorbehouden.

	<div class="adContainer">

		<script type="text/javascript"><!--

			google_ad_client = "ca-pub-3263345320726861";

			/* Habboon Footer */

			google_ad_slot = "8527655857";

			google_ad_width = 728;

			google_ad_height = 90;

			//-->

		</script>

		

	</div>

</div>



	</div>

</body>

</html>