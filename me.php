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

	<link rel="icon" type="image/png" href="app/tpl/skins/{skin}/img/roc.ico">

	<script src="http://code.jquery.com/jquery-latest.js"></script>

	<script type="text/javascript" src="app/tpl/skins/{skin}/js/home.js"></script>

	<meta name="description" content="Powered by RocCF - an open-source Coldfusion content management system by Otaku-Studios." />

	<meta name="keywords" content="roc, roccf, roc-cf, cf, coldfusion, habbo hotel, virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets, room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" />

</head>







<body>

	<div class="barline">

	<div class="MainNavigation">

		<div class="Option"><a href="/me">Home</a></div>

		<div class="Option"><a href="/community">Community</a></div>

		<div class="Option"><a target="_newtab" href="http://retroplace.nl">Forum</a></div>

	</div>

	<a href="#">
	    

		<span class="online">{online} User(s) Online!</span>
		
		

	</a>

</div>





	<div class="wrapper">

		

	<div class="SubNavigation">

		<div class="Option"><a href="me">{username}</a></div>

		<div class="Option"><a href="settings">Instellingen</a></div>
		
		<div class="Option"><font color="red">{housekeeping}</font></div>
		
		<div class="Option"><a href="logout">Log uit</a></div>

	</div>



<div class="HotelNavigation">
    
	
 


	<div class="Option"><a target="_newtab" href="/client">Enter Hotel</a></div>

</div>





		<div id="homebox">

			<div class="container" style="background-image: url('app/tpl/skins/{skin}/img/home/curtains.png');">

			    <div class="container-content">

			    	

			        <div class="avatar"><img src="http://www.habbo.com/habbo-imaging/avatarimage?figure={figure}&direction=2&head_direction=3&action=crr=6&gesture=sml" alt="{username}" /></div>

			        <div class="title">{username}</div>
					
					

			        <div class="body">{motto}</div>

			        <div class="info">
					

			        	<div class="credits">{coins}</div>

			        	<div class="pixels">{activitypoints}</div>

			        </div>

			        

			    </div>

			</div>

		</div>

                                        <!-- Oke, dit is het nieuws. Ik heb hier extra geen nieuws van gemaakt omdat je dit eigelijk als
											"klein berichtje" moest zien-->

		<div id="slider">

		    <div id="buttons">

		    	<a class="selected">0</a>

				<a>1</a>

		    	<a>2</a>

		    	<a>3</a>

		    </div>



			<div class="article" style="background-image: url('app/tpl/skins/{skin}/img/news/voodoo.png');">

			    <div class="article-content">

			        <div class="title"></div>

			        <div class="body"><a href="index.php?url=news&id={newsID-1}">{newsTitle-1} &raquo;</a></div>

			    </div>

				
			</div>



			<div class="article" style="background-image: url('app/tpl/skins/{skin}/img/news/pixels.png'); display:none ">

			    <div class="article-content">

			        <div class="title"></div>

			        <div class="body"><a href="index.php?url=news&id={newsID-2}">{newsTitle-2} &raquo;</a></div>

			    </div>


			</div>



			<div class="article" style="background-image: url('app/tpl/skins/{skin}/img/news/facebook.png'); display:none ">

			    <div class="article-content">

			        <div class="title">Facebook connect</div>

			        <div class="body"><a href="index.php?url=news&id={newsID-3}">{newsTitle-3} &raquo;</a></div>

			    </div>

				<!--div class="link">

					<a href="##">Read More <span class="arrow">è</span></a>

				</div-->

			</div>



			<div class="article" style="background-image: url('app/tpl/skins/{skin}/img/news/cinema_promo.png'); display:none ">

			    <div class="article-content">

			        <div class="title">Meer nieuws!</div>

			        <div class="body"><a href="index.php?url=news&id={newsID-4}">{newsTitle-4} &raquo;</a></div>

			    </div>

				<!--div class="link">

					<a href="##">Read More <span class="arrow">è</span></a>

				</div-->

			</div>

		</div>




		<div class="footer">

	&copy; {hotelname} Hotel. Alle rechten voorbehouden. 

	<div class="adContainer">

		

		

	</div>

</div>



	</div>

</body>

</html>