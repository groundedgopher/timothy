<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<title>Old Hat Project</title>

</head>

<body>


<div class="container">
	<div id="topGameMenu"> <!--Top Score Boxes-->
		<a href="#"><img src="images/topImages/1.png"></a>
		<a href="#" id="game1" data-gameNumber="1"><img src="images/topImages/2.png"></a>
		<a href="#" id="game2" data-gameNumber="2"><img src="images/topImages/3.png"></a>
		<a href="#" id="game3" data-gameNumber="3"><img src="images/topImages/4.png"></a>
		<a href="#" id="game4" data-gameNumber="4"><img src="images/topImages/5.png"></a>
		<a href="#" id="game5" data-gameNumber="5"><img src="images/topImages/6.png"></a>
		<a href="#" id="game6" data-gameNumber="6"><img src="images/topImages/7.png"></a>
		<a href="#" id="game7" data-gameNumber="7"><img src="images/topImages/8.png"></a>
		<a href="#" id="game8" data-gameNumber="8"><img src="images/topImages/9.png"></a>
		<a href="#" id="game9" data-gameNumber="9"><img src="images/topImages/10.png"></a>
		<a href="#" id="game10" data-gameNumber="10"><img src="images/topImages/11.png"></a>
		<a href="#" id="game11" data-gameNumber="11"><img src="images/topImages/12.png"></a>
	</div>
	<div id="headerTexts">
		<div>
			<img src="images/Title.png" id="titleImg">
		</div>
		<div id="footballLine">
			<img class="bracket left" src="images/leftBracket.png">
			<img class="football" src="images/footballWord.png">

			<div>
				<img class="bracket right" src="images/rightBracket.png">
				<a href="https://twitter.com/share" class="twitter-share-button"><img id="tweet" src="images/Tweet.png"></a>
				<a href="https://www.facebook.com/SDSUJacks.Football/"><img id="like" src="images/Like.png"></a>
			</div>
		</div>
		<div id="ringBellLine">
			<img src="images/Gameday.png">
			<img src="images/ringBellLogo.png">
			<img src="images/Central.png">
			<img id="bottomBracket" src="images/bottomBrackets.png">
		</div>
	</div>
	<!--end headerTexts Div -->
	<div id="mainContent"><!--Section is replaced with gameContent on click of game-->
		<div class="middleText">
			<p>IT'S TIME TO RING THE BELL, JACKRABBIT FANS! THIS IS YOUR DESTINATION FOR ALL THINGS RELATED TO </p>

			<p>GAMEDAY IN JACKRABBIT NATION! CHOOSE A GAME FROM THE TOP BAR FOR GAME TIMES, TICKET INFORMATION,</p>

			<p>LIVE STATS, AND MORE! AS YOU PREPARE FOR YOUR TRIP TO COUGHLIN-ALUMNI STADIUM OR IF YOU ARE FOLLOW-</p>

			<p>ING THE JACKS FROM HOME, VISIT THIS PAGE OFTEN FOR ALL THINGS JACKRABBIT!</p>
			<img src="images/bottomLine.png">
		</div>
		<div id="frontVideo">
			<iframe width="525" height="315" src="https://www.youtube.com/embed/yTTb89asIws" frameborder="0"
					allowfullscreen></iframe>
		</div>
		<img id="video" src="images/videoPlain.png" onmouseover="this.src='images/videoHover.png';"
			 onmouseout="this.src='images/videoPlain.png';"/>
		<img id="logo" src="images/SDState-Logo.png">

		<div id="buttonImageGroup">
			<a href="#"><img class="buttonImage" src="images/Upload.png"></a>
			<a href="#"><img class="buttonImage" src="images/Enter.png"></a>
			<a href="#"><img class="buttonImageRight" src="images/Winner.png"></a>
		</div>
		<div>
			<img id="tickerImage" src="images/Ticker.png">

			<div class='marquee'>
				<div class='marquee-text'>
					IT'S TIME TO RING THE BELL, JACKRABBIT FANS! THIS IS YOUR DESTINATION FOR ALL THINGS RELATED TO
					GAMEDAY!
				</div>
			</div>
		</div>
	</div>
	<!--end main content div -->
	<div id="gameContent"><!--replaces main content with single game score and dates-->
		<a id="mainPageNav"><<< Main Page</a>

		<div><!--values are brought in with ajax-->
			<p id="homeScore"></p>

			<p id="homeInitials">SDSU</p>
		</div>
		<div>
			<p id="visitorScore"></p>

			<p id="visitorInitials"></p>
		</div>
		<div>
			<p id="gameDay"></p>
			<a href="#" id="prevGame" data-prevGame=""><<< PREVIOUS GAME</a>
			<a href="#" id="nextGame" data-nextGame="">NEXT GAME >>></a>
		</div>
		<div id="gameVideo">
			<iframe width="298" height="177" src="https://www.youtube.com/embed/gmEEQhuNMLE" frameborder="0"
					allowfullscreen></iframe>
		</div>
		<img src="images/gamesBG.png">
	</div>
	<!--end game content-->
	<div id="bellGroup"><!--section with the bell you can ring-->
		<img src="images/rabbitCounter.png">
		<img id="bellBG" src="images/bellBG.png">
		<img id="ringBell" src="images/Bell.png">

		<div id="numberOfRings"></div>
		<img id="helpUs" src="images/helpRingBell.png">
	</div>
	<div id="bottomStuff" class="text-center">
		<div class="col-xs-4">
			<img id="calendars" src="images/Calendars.png">
		</div>
		<div class="col-xs-4">
			<img id="rabbit" src="images/Rabbit.png">
		</div>
		<div class="col-xs-4">
			<img id="hat" src="images/Hat.png">
		</div>
	</div>
	<div id="yellowBar">
		<img src="images/bottomBar.png">
		<a href="#"><img id="wallPapers" src="images/Wallpapers.png"></a>
		<a href="#"><img id="tickets" src="images/Tickets.png"></a>
		<a href="#"><img id="merchandise" src="images/Merchandise.png"></a>
	</div>
</div>

<div id="footerPos">
	<div class="container">
		<?php require_once('footer.php'); ?>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
		crossorigin="anonymous"></script>
<script src="js/frontPageJS.js" type="text/javascript" language="javascript" charset="utf-8"></script>

<!--this is a copy paste function from the twitter website for tweeting a URL -->
<!--<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>-->
<script>bellRings('get')</script>
</body>
</html>
