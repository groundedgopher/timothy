/**
 * Created by tsmith on 3/2/2016.
 */
var bellSound = new Audio('COWBELL2.WAV');

/**
 * removes and add the ring class based on whether or not it already has that class
 * also sets a 1 sec timeout to give the animation time to complete after each ring
 */
$('#ringBell').click(function () {
    if (!$('#ringBell').hasClass('ring')) {
        $('#ringBell').addClass('ring');
        bellSound.play();
        setTimeout(function () {
            $('#ringBell').removeClass('ring');
        }, 1000);
    }
    bellRings('ring');
});

/**
 * @param type
 * calls the ajax that sets and gets the number of bell rings in the db
 * returns that result to the html
 */
function bellRings(type){
    $.ajax({
        url: "ringBell.php",
        data:{type: type},
        success: function (results) {
            document.getElementById("numberOfRings").innerHTML=results;
        }
    })
}

/**
 * hides and shows the game score content based on the scores clicked
 * calls the ajax that returns the values for the scores, name abbreviations, and date
 */
$(document).on('click', '#topGameMenu a', function(){
    $('#mainContent').fadeOut();
    $('#gameContent').fadeIn();
    var gameNumber = $(this).attr("data-gameNumber");
    getGameScores(gameNumber)
});

$(document).on('click', '#prevGame', function(){
    var gameNumber = $(this).attr("data-prevGame");
    getGameScores(gameNumber)
});

$(document).on('click', '#nextGame', function(){
    var gameNumber = $(this).attr("data-nextGame");
    getGameScores(gameNumber)
});

/**
 * @param gameNumber
 * ajax pulls the data of the passed in game
 * also sets the next and previous buttons to the respective game number
 */
function getGameScores(gameNumber){
    if (gameNumber > 0 && gameNumber < 12)
    {
        $.ajax({
            url: "getGameScore.php",
            data: {gameNumber: gameNumber},
            success: function (results) {
                $('#homeScore').text(results.homeScore);
                $('#visitorScore').text(results.visitorScore);
                $('#visitorInitials').text(results.abbr);
                $('#gameDay').text(results.date);
                $('#prevGame').attr('data-prevGame', parseInt(results.gameNumber) - 1);
                $('#nextGame').attr('data-nextGame', parseInt(results.gameNumber) + 1);
                console.log(results.gameNumber);
            }
        })
    }
}

//switches the content on main page based on navigation
$(document).on('click', '#mainPageNav', function(){
    $('#mainContent').fadeIn();
    $('#gameContent').fadeOut();
});

function gameContentOut(){
    $('#gameContent').hide();
}

//function for scrolling text for the ticker
var marquee = $('div.marquee');
marquee.each(function() {
    var mar = $(this),indent = mar.width();
    mar.marquee = function() {
        indent--;
        mar.css('text-indent',indent);
        if (indent < -1 * mar.children('div.marquee-text').width()) {
            indent = mar.width();
        }
    };
    mar.data('interval',setInterval(mar.marquee,1000/60));
});

//call on load so that the game content is hidden by default
gameContentOut();