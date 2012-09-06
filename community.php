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

	<title>Habboon - make friends, hang out, get noticed!</title>

	<link rel="stylesheet" href="app/tpl/skins/{skin}/css/home.css" />

	<link rel="icon" type="image/png" href="/img/roc.ico">

	<script src="http://code.jquery.com/jquery-latest.js"></script>

	<script type="text/javascript" src="app/tpl/skins/{skin}/js/home.js"></script>

	
</head>







<body>

	<div class="barline">

	<div class="MainNavigation">

		<div class="Option"><a href="/me">Home</a></div>

		<div class="Option"><a href="/community">Community</a></div>

		<div class="Option"><a target="_newtab" href="http://retroplace.nl">Forum</a></div>

	</div>

	<a href="#">

		<span class="online">{online} Leden online!</span>

	</a>

</div>





	<div class="wrapper">

		

	<div class="SubNavigation">

		<div class="Option"><a href="community">Community</a></div>
		
		<div class="Option"><a href="staff">Staff</a></div>

		<div class="Option"><a href="/rares">Rares</a></div>
		
		<div class="Option"><a href="/logout">Log uit</a></div>

	</div>



<div class="HotelNavigation">

	<div class="Option"><a href="/client">Enter Hotel</a></div>

</div>





		<div id="homebox">

			<div class="container" style="background-image: url('app/tpl/skins/{skin}/img/home/curtains.png');">

			    <div class="container-content">

			        <div class="title">De Rare van deze week</div>

			        <div class="body">Aarde Draak</div>

			        <div class="image"><img src="app/tpl/skins/{skin}/img/rares/earth_dragon.png" alt="Earth Dragon" /></div>

			    </div>

			</div>

		</div>



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

	Powered by Roc CF. All images are copyrighted by their respective copyright owners.

	

</div>



	</div>

</body>

</html>