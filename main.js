/*======= Initial Variables =========*/
/* scrollTimer is a Timer that will call the updateMenu() after 2000ms */
var scrollTimer = setTimeout(updateMenuSizes, 1000);

/* Array where the different section ids are saved */
var sections = new Array('home', 'about', 'portfolio', 'blog', 'contact');

/* Array for the current section frequencies*/
var SF = new Array ();
//Initialize it
initSF();

/* Variable with the current maximum frequency */
var MF = 0;

/* Icon size limits*/
var imgMax = 63;
var imgMin = 40;


/*======= Main loop =========*/
$(document).ready(
    // This function is called when the DOM is ready
    function(){    
        // Every time we scroll, we clear the scrollTimer
        $(window).scroll(function(e) {clearTimeout(scrollTimer); scrollTimer = setTimeout(updateMenuSizes, 2000);
         //   $("nav").fadeIn(3000);
        });
       
    
       $(".logo").hover(function(){


            }, function(){

          
        }); 
   
    }



);

function testScroll(ev){
    if(window.pageYOffset>500   ){
        // $(".logo").css("height", "100").css("width","100");
        //  $("nav ul").hide().fadeTo('slow', 1);

        //     // $("nav ul").css("display", "flex").fadeIn('slow');
            // $("nav").css("background", "white").fadeIn('slow');
    }
    if(window.pageYOffset>300 && window.pageYOffset<501){
         // $(".logo").css("height", "400").css("width","400");
         // $("nav ul").fadeTo('slow', 0 );
    }
}
$(window).scroll(testScroll);



/*======= Functions =========*/

/* Initializes the section frequencies array SF */
function initSF() {
    for (i = 0; i < sections.length; i++) {
        SF[sections[i]] = 0;
    }
}

$("nav").hover(function(){
    alert("hi");
    }, function(){
    $(this).css("background-color", "pink");
});



/* Returns true if current scroll position is in identifier section, and false otherwise */
function isInSection(identifier, scrollPosition){
    var section = $("#" + identifier);
    if (scrollPosition >= section.position().top && scrollPosition <= (section.position().top + section.outerHeight())){
        return true;
    }
    return false;
}

/* Increment frequency for section, and update MF if necessary */
function refreshMF(identifier) {
    SF[identifier]++;
    if (SF[identifier] > MF) {
        MF = SF[identifier];
    }
}

/* Resizes Icon size according to given forula */
function modifyIconSize(identifier) {
    var newSize = (SF[identifier] / MF) * (imgMax - imgMin) + imgMin;
    $('#' + identifier + "-icon").css('width', newSize + "px");
}

/* Main function that updates the menu sizes */
function updateMenuSizes() {
    // Get center position of the current viewport
    var currentScrollPosition = $(window).scrollTop() + ($( window ).height()/2) + $('#menu').height();
    
    // Iterate through sections to check if MF changed
    for (i=0; i < sections.length; i++){
        if (isInSection(sections[i], currentScrollPosition)){
            refreshMF(sections[i]);
        }
    }
    
    // Iterate sections and change to new sizes
    for (i = 0; i < sections.length; i++) {
        modifyIconSize(sections[i]);
    }
    
    // Re-start scrollTimer
    clearTimeout(scrollTimer);
    scrollTimer = setTimeout(updateMenuSizes, 2000);
}





