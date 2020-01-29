// loading screen
$(document).ready(function() {
	
	jQuery(window).on("load", function(){

        console.log('page is loaded');
    
        setTimeout(function () {
            console.log('page load has finished');   
            $('#preloader').addClass('inactive');
        }, 1000); 
    
    });

});

// questionmark one
var isclicked = false;

$("#question1").click(function(){

    if (isclicked == false){
        $('#preface').append("<div id='img1container'><img src='img/landnaarzee.png' alt='' id='image1'><button class='closebtn' id='closeImg1'></button></div>");
        isclicked = true;
    }

    $("#closeImg1").click(function(){

        if (isclicked == true){
            $('#img1container').remove();
            isclicked = false;
        }
    
    });

});

// extra numbers
$("#arrow").click(function(){

    if(isclicked == false){
        $('#extraNumbers').append("<div class='numberContainer'><div class='numbers' id='four'></div><p>Plastic dopjes</p></div><div class='numberContainer'><div class='numbers' id='five'></div><p>Plastic zakjes</p></div><div class='numberContainer'><div class='numbers' id='six'></div><p>Plastic tasjes</p></div><div class='numberContainer'><div class='numbers' id='seven'></div><p>Drinkrietjes</p></div><div class='numberContainer'><div class='numbers' id='eight'></div><p>Voedselverpakkingen</p></div><div class='numberContainer'><div class='numbers' id='nine'></div><p>Plastic deksels</p></div><div class='numberContainer'><div class='numbers' id='ten'></div><p>Schuimverpakkingen</p></div>");
        $('#arrow').addClass('arrowOpen');
        isclicked = true;
        console.log('numbers loaded');
    }else{
        $('#extraNumbers').empty();
        $('#arrow').removeClass('arrowOpen');
        isclicked = false;
        console.log('numbers removed');
    };

});