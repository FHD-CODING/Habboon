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
		
		<div class="Option"><a href="/logout">Log uit</a></div>

	</div>



<div class="HotelNavigation">

	<div class="Option"><a href="/client">Enter Hotel</a></div>

</div>





		



		
					<div class="Left">
		    <?php
                        $GetRanks = mysql_query("SELECT id,name FROM ranks WHERE id > 5 ORDER BY id DESC");
                        while($Ranks = mysql_fetch_assoc($GetRanks))
                        {
                            echo "<div class=\"ContentBox\"><div class=\"BoxHeader\" id=\"blue\"><center>{$Ranks['name']}s</center></div><div class=\"BoxContent\"><p>";
                            $GetUsers = mysql_query("SELECT username,motto,rank,last_online,online,look FROM users WHERE rank = {$Ranks['id']}");
                            while($Users = mysql_fetch_assoc($GetUsers))
                            {
                                if($Users['online'] == 1){ $OnlineStatus = "<font color=\"darkgreen\"><b>Online</b></font>"; } else { $OnlineStatus = "<font color=\"darkred\"><b>Offline</b></font>"; }
                                echo "<img style=\"position:left;margin-top:-30px;margin-right:5px;\" src=\"http://www.habbo.com/habbo-imaging/avatarimage?figure={$Users['look']}&action=wav&direction=2&head_direction=3&gesture=srp&size=l\">"
                                    ."<p style=\"margin-left:80px;margin-top:20px;\">Naam: <strong>{$Users['username']}</strong><br>Motto: <strong>{$Users['motto']}</strong><br></strong>Email: <strong>{email}</strong><br><small>Last Online: ". date("D, d F Y H:i (P)", $Users['last_online']) ."</small></p>"
                                    ."<p style=\"float:right;margin-top:-30px;margin-right:5px;\">{$OnlineStatus}</p><br><br><br>";
                            }
                            echo "</p></div></div>";
                        }
                    ?>

					</div>



		<div class="footer">

			&copy; FHD Alle rechten aan deze awesome gast voorbehouden!.

	

        </div>



	</div>

</body>

</html>