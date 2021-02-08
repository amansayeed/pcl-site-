jQuery(window).scroll(function(){
if($(this).scrollTop() > 80)
{
jQuery(".header").addClass('animate')
jQuery(".header").animate(
{
backgroundColor:'rgba(255,255,255,0.9)'
},50);
jQuery(".header").attr("title","")
}
jQuery(".header").attr("title","")
});
jQuery(window).scroll(function(){
if($(this).scrollTop() < 80)
{
jQuery(".header").removeClass('animate')
jQuery(".header").animate(
{
backgroundColor:'rgba(0,0,0,0)'
},50);
jQuery(".header").attr("title","")
}
});
function selectvelue()
{
if(jQuery("#dropvelue").css("display")=="none")
{
jQuery("#dropvelue").slideDown(100)
}
else
{
jQuery("#dropvelue").slideUp(100)
}
}
<!--mobile link start-->
jQuery(document).ready(function()
{
jQuery(".nav ul li").mouseover(function()
{
jQuery("#blueback").show()
})
jQuery(".nav ul li").mouseout(function()
{
jQuery("#blueback").hide()
})
jQuery(".hideblock").mouseover(function()
{
jQuery("#blueback").hide()
})
})
<!--mobile link close-->
<!--document ready start-->
jQuery(document).ready(
function()
{
<!--drop menu start-->
jQuery(".animate1").mouseover(
function()
{
if(jQuery(".header").attr("title")=="")	
{	
jQuery(".header").addClass('animate1')
}
});
jQuery(".animate1").mouseleave(
function()
{
jQuery(".header").removeClass('animate1')
});
<!--drop menu close-->
<!--banner start-->
setInterval(
function()
{
var windowwidth=jQuery(window).width();
if(windowwidth>1500)
{
var windowheight=jQuery(window).height();
var bannerheight=jQuery(".home-banner").height();
var toolsheight=jQuery(".mainrow").innerHeight();
var bannerheight=windowheight-toolsheight;
var middletext=jQuery(".home-banner .middletext").height();
var middlespace=bannerheight-middletext;
var middlespace1=middlespace/2
jQuery(".home-banner").css("height",bannerheight+"px")
jQuery(".home-banner .middletext").css("margin-top",middlespace1+70+"px")
}
if(windowwidth<1500)
{
var windowheight=jQuery(window).height();
var bannerheight=jQuery(".home-banner").height();
var middletext=jQuery(".home-banner .middletext").height();
var middlespace=windowheight-middletext;
var middlespace1=middlespace/2
jQuery(".home-banner").css("height",windowheight+"px")
jQuery(".home-banner .middletext").css("margin-top",middlespace1+70+"px")
}
if(windowwidth<1000)
{
var windowheight=jQuery(window).height();
var bannerheight=jQuery(".home-banner").height();
var middletext=jQuery(".home-banner .middletext").height();
var middlespace=windowheight-middletext;
var middlespace1=middlespace/2
jQuery(".home-banner").css("height","100%")
}
},100
)
<!--banner close-->
<!--droparrow start-->
jQuery(".down img").click(
function()
{
var windowwidth=jQuery(window).width();	
var bannerheight=jQuery(".home-banner").height();	
var toolsheight=jQuery(".tools").height();
var location=bannerheight+toolsheight;
if(windowwidth>1370)
{
jQuery("html, body").animate({scrollTop:location-90+"px"},800)	
}
if(windowwidth<1370)
{
jQuery("html, body").animate({scrollTop:bannerheight-80+"px"},800)	
}
})
<!--droparrow close-->
});
$(document).ready(function(){
$('#slider').bxSlider({
auto: true,
autoControls: false,
pause: 6000
});
$('#slider1').bxSlider({
auto: true,
autoControls: false,
pause: 6000
});
$('#slider2').bxSlider({
auto: true,
autoControls: false,
pause: 6000
});
});
$(document).ready(function(){
<!--dropmenu start-->
jQuery(".header .menu .nav ul li span").click(
function()
{
var menuid = jQuery(this).attr("id");
if(jQuery("#"+menuid).next("ol").css("display")=="none")	
{
jQuery(".header .menu .nav ul li span").html("+")
jQuery(this).html("-")
jQuery(".header .menu .nav ul li ol").slideUp(600)
jQuery("#"+menuid).next("ol").slideDown(600)
}
else
{
jQuery(".header .menu .nav ul li ol").slideUp(600)
jQuery(".header .menu .nav ul li span").html("+")
}
}
)
jQuery(".header .menu .nav ul li ol ul li").click(
function()
{
var submenuid = jQuery(this).attr("id");
if(jQuery("#"+submenuid).find("ul").css("display")=="none")	
{
jQuery(".header .menu .nav ul li ol ul li strong").html("+")	
jQuery(".header .menu .nav ul li ol ul li ul").slideUp(600)
jQuery("#"+submenuid).find("ul").slideDown(600)
jQuery("#"+submenuid).children("strong").html("-")
}
else
{
jQuery(".header .menu .nav ul li ol ul li ul").slideUp(600)
jQuery(".header .menu .nav ul li ol ul li strong").html("+")
}
}
)
<!--dropmenu close-->
}); 
<!--mobile link start-->
function mobilelink()
{
if(jQuery(".header .menu").attr("name")=="menu")
{
jQuery(".header .menu").slideDown(400);
jQuery(".mobile-icon ul li").eq(1).css("display","none");
jQuery(".mobile-icon").addClass("active");
jQuery(".header").css("position","absolute")
jQuery(".header .menu").attr("name","menu1")
}
else
{
jQuery(".header .menu").attr("name","menu")	
jQuery(".header .menu").slideUp(400);		
jQuery(".mobile-icon").removeClass("active");
jQuery(".mobile-icon ul li").eq(1).css("display","block");
jQuery(".header").css("position","fixed")
}
}
<!--mobile link close-->
<!--Resize function start-->
$(document).ready(function(){
$('.videobox .leftbox img').click(function(e){
$('.mask-opening').show();
$('.modal-opening').css({'transform':'scale(1)','transition':'all 0.5s'});
});
$('.close-opening').click(function(e){
$('.mask-opening').hide();
$('.modal-opening').css({'transform':'scale(0)','transition':'all 0.5s'});
});
});
<!--Resize function close-->



function expandtable()
{
var scrollposition=jQuery(document).scrollTop();
jQuery("#buttontext").hide()
jQuery("#buttontext1").show()
jQuery(".packagedetail").slideDown(300)
}
function collapsetable()
{
var scrollposition=jQuery(document).scrollTop();
var divheight=jQuery(".packagedetail").height()
var mainheight=scrollposition-divheight
jQuery("#buttontext1").hide()
jQuery("#buttontext").show()
jQuery(".packagedetail").slideUp(300)
jQuery(document).scrollTop(mainheight);
}
function selectvelue()
{
if(jQuery("#dropvelue").css("display")=="none")
{
jQuery("#dropvelue").slideDown(100)
}
else
{
jQuery("#dropvelue").slideUp(100)
}
}
<!--scroll slider start-->
jQuery(document).ready(function() {
function scrollToAnchor(aid){
var aTag = $("div[name='"+ aid +"']");
$('html,body').animate({scrollTop: aTag.offset().top+-50+"px"},'slow');
}
$("#pricing").click(function() {
scrollToAnchor('pricing');
});
$("#form").click(function() {
scrollToAnchor('form');
});
$("#form1").click(function() {
scrollToAnchor('form');
});
$("#form2").click(function() {
scrollToAnchor('form');
});
$("#process").click(function() {
scrollToAnchor('process');
});
$("#whyus").click(function() {
scrollToAnchor('whyus');
});
});
<!--scroll slider close-->
<!--document ready start-->
/*========home page============*/
$(document).ready(function(){
if ($(window).width() < 1002) {   
$('.mobile-icon').click(function(){
$('.header .menu .nav').animate({'right':'0'});
});
$('.close-menus').click(function(){
$('.header .menu .nav').animate({'right':'-294px'});
});
$('.submenu .box').slideUp();
$('.drop-ico').click(function(){
$('.submenu .box').slideUp();
$(this).siblings('.submenu').children('.box').slideDown();
});
}
});
$(document).ready(function(){
$('.close').click(function(){
$('.block-suscribe').hide();
});
$(window).scroll(function() {
if ($(this).scrollTop() >100) { // this refers to window
$('.block-suscribe').fadeOut();
}
else{
$('.block-suscribe').fadeIn();
}
});
});
$(document).ready(function(){
$('#slider').bxSlider({
auto: true,
autoControls: false,
pause: 6000
});
$('#slider1').bxSlider({
auto: true,
autoControls: false,
pause: 6000
});
$('#slider2').bxSlider({
auto: true,
autoControls: false,
pause: 6000
});
});
$(document).ready(function(){
$('.click-scroll').click(function(){
$('html, body').animate({scrollTop:$('.tab-top2').position().top}, 'slow');
});
$('.custom-tabs2').hide();
$('.active.custom-tabs2').show();
$('.tab-top2 ul li a,.smo-packages ul li a,.panaltythreeservices li a').click(function(e){
$('.tab-top2 ul li a,.smo-packages ul li a').removeClass('active');
$(this).addClass('active');
e.preventDefault();
$('.custom-tabs2').hide();
a=$(this).attr('href');
$(a).show();
});
$('.close').click(function(){
$('.block-suscribe').hide();
});
$(window).scroll(function() {
if ($(this).scrollTop() >100) { // this refers to window
$('.block-suscribe').fadeOut();
}
else{
$('.block-suscribe').fadeIn();
}
});
/*=====portfolio page tab jquery======*/
$('.port-inner.active').show();
$('.port-tabs ul li a').click(function(e){
$('.port-tabs ul li a').removeClass('active');
$(this).addClass('active')
e.preventDefault();
portshow=$(this).attr('href');
$('.port-inner').hide();
$(portshow).show();
});
});
function accordia(allid)
{
if(jQuery("#"+allid).next(".accordion-content").css("display")=="none")
{
jQuery(".accordion-content").slideUp(300);
jQuery(".accordion-toggle").children("i").removeClass("minus");
jQuery(".accordion-toggle").children("i").addClass("plus");
jQuery("#"+allid).next(".accordion-content").slideDown(300);
jQuery("#"+allid).children("i").addClass("minus");
}
else
{
jQuery(".accordion-content").slideUp(300);	
jQuery(".accordion-toggle").children("i").removeClass("minus");
jQuery(".accordion-toggle").children("i").addClass("plus");
}	
}
$(document).ready(function(){
$('#video-one,#video-two').click(function(e){
e.preventDefault();
videourl=$(this).attr('href');
$('.mask-opening').show();
$('.modal-opening').css({'transform':'scale(1)','transition':'all 0.5s'});
$('.modal-body iframe').attr('src',videourl);
});
$('.close-opening').click(function(e){
e.preventDefault();
$('.mask-opening').hide();
$('.modal-opening').css({'transform':'scale(0)','transition':'all 0.5s'});
});
$(document).on('keydown', function ( e ) {
if ( e.keyCode === 27 ) { // ESC
$('.mask-opening,.mask-opening-two,.mask-opening-three').hide();
$('.modal-opening,.modal-opening-two,.modal-opening-three').css({'transform':'scale(0)','transition':'all 0.5s'});		
}
});
});
$(document).ready(function(){
$('.p-box-border a').click(function(e){
e.preventDefault();
imageurl=$(this).attr('href');
$('.mask-opening-two').show();
$('.modal-opening-two').css({'transform':'scale(1)','transition':'all 0.5s','-webkit-transform':'scale(1)','-webkit-transition':'all 0.5s'});
$('.modal-body-two img').attr('src',imageurl);
});
$('.close-opening-two').click(function(e){
$('.mask-opening-two').hide();
$('.modal-opening-two').css({'transform':'scale(0)','transition':'all 0.5s','-webkit-transform':'scale(0)','-webkit-transition':'all 0.5s'});
});
/*====================third popup===========*/
$('.p-up-box .box-new').click(function(e){
$('.p-up-box .box-new').css('cursor','pointer');
e.preventDefault();
$('.mask-opening-three').show();
$('.modal-opening-three').css({'transform':'scale(1)','transition':'all 0.5s','-webkit-transform':'scale(1)','-webkit-transition':'all 0.5s'});
$('.modal-body-three img').attr('src','images/rank-report-big.jpg');
});
$('.close-opening-three').click(function(e){
$('.mask-opening-three').hide();
$('.modal-opening-three').css({'transform':'scale(0)','transition':'all 0.5s','-webkit-transform':'scale(0)','-webkit-transition':'all 0.5s'});
});
$('#box-first').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/rank-report-big.jpg');
});
$('#box-two').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/google-analytics-report-big.jpg');
});
$('#box-three').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/directory-submission-report-big.jpg');
});
$('#box-four').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/press-report-big.jpg');
});
$('#box-five').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/social-bookmarking-big.jpg');
});
$('#box-six').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/article-submission-report-b.jpg');
});
$('#bx-one').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/rank_report_big.jpg?iframe');
});
$('#bx-two').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/google-analytics-report-big.jpg?iframe');
});
$('#bx-three').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/directory_submission_big.jpg?iframe');
});
$('#bx-four').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/press_report_big.jpg?iframe');
});
$('#bx-five').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/social_bookmarking_big.jpg?iframe');
});
$('#bx-six').click(function(e){
e.preventDefault();
$('.modal-body-three img').attr('src','https://cdn.pagetraffic.in/images/article_submission_big.jpg?iframe');
});
/*=======================thisrd popup=============*/
$('.price-doller').click(function(){
$(this).css({'background':'#4a5967','color':'#fff'});
$('.price-rupee').css({'background':'#efede8','color':'#4a5967'});	
$('.fa-usd').css({'background':'#ffffff','color':'#4a5967'});	
$('.fa-gbp').css({'background':'#01898a','color':'#fff'});	
$('.dolar').text('$');
$('.two-nine-nine').text('299');
$('.four-nine-nine').text('499');
$('.six-nine-nine').text('699');
$('.nine-four-nine').text('949');
$('.one-three-four-nine').text('1349');
$('.one-nine-nine').text('199');
$('.nine-nine').text('99');
});
$('.price-rupee').click(function(){
$(this).css({'background':'#4a5967','color':'#fff'});
$('.price-doller').css({'background':'#efede8','color':'#4a5967'});	
$('.dolar').text('£');
$('.fa-usd').css({'background':'#01898a','color':'#fff'});	
$('.fa-gbp').css({'background':'#ffffff','color':'#4a5967'});
$('.two-nine-nine').text('230');
$('.four-nine-nine').text('380');
$('.six-nine-nine').text('535');
$('.nine-four-nine').text('725');
$('.one-three-four-nine').text('1030');
$('.one-nine-nine').text('150');
$('.nine-nine').text('75');
});
jQuery("#map-one").mousedown(
function()
{
jQuery("#map-one").fadeOut(300);
});
jQuery(".usa-map-wrapper").mouseleave(
function()
{
jQuery("#map-one").fadeIn(300)	
});
jQuery("#map-two").mousedown(
function()
{
jQuery("#map-two").fadeOut(300);
});
jQuery(".delhi-map").mouseleave(
function()
{
jQuery("#map-two").fadeIn(300);
});
jQuery("#map-three").mousedown(
function()
{
jQuery("#map-three").fadeOut(300);
});
jQuery(".mumbai-map").mouseleave(
function()
{
jQuery("#map-three").fadeIn(300);	
});
jQuery("#map-four,#map-five").mousedown(function(){
jQuery("#map-four,#map-five").fadeOut(300);
});
jQuery(".frame-box").mouseleave(
function()
{
jQuery("#map-four,#map-five").fadeIn(300);	
});
$(document).ready(function(){
//Check to see if the window is top if not then display button
$(window).scroll(function(){
if ($(this).scrollTop() > 120) {
$('.top').fadeIn();
} else {
$('.top').fadeOut();
}
});
//Click event to scroll to top
$('.top').click(function(){
$('html, body').animate({scrollTop : 0},800);
return false;
});
});
});


/*career js start*/

function workgallery(allimageurl,allimageheading)
{
var allimage=jQuery("#"+allimageurl).attr("src")
var allimagehead=jQuery("#"+allimageheading).html()
jQuery("#maingalleryview").attr("src",allimage)
jQuery("#maingalleryviewheading").html(allimagehead)
}


function seochart()
{

jQuery("#precent").html("30%")
jQuery("#teamname").html("SEO Specialist")
$('.chartrow').fadeOut(300,function() {
$('.chartrow').css("background-position","0px 0px")
$('.chartrow').fadeIn(300);
});

}

function designer()
{
jQuery("#precent").html("17%")
jQuery("#teamname").html("Web Designer")
$('.chartrow').fadeOut(300,function() {
$('.chartrow').css("background-position","-372px -335px")
$('.chartrow').fadeIn(300);
});


}

function code()
{
jQuery("#precent").html("23%")
jQuery("#teamname").html("Web Developer")

$('.chartrow').fadeOut(300,function() {
$('.chartrow').css("background-position","left -335px")
$('.chartrow').fadeIn(300);
});


}

function content()
{
jQuery("#precent").html("20%")
jQuery("#teamname").html("Content Writer")

$('.chartrow').fadeOut(300,function() {
$('.chartrow').css("background-position","-723px -1px")
$('.chartrow').fadeIn(300);
});


}

function account()
{
jQuery("#precent").html("10%")
jQuery("#teamname").html("Account Manager")

$('.chartrow').fadeOut(300,function() {
$('.chartrow').css("background-position","-371px -1px")
$('.chartrow').fadeIn(300);
});


}

function malechart()

{
jQuery("#pprecent").html("60%")
jQuery("#pteamname").html("Men")
$('.people').fadeOut(300,function() {
$('.people').css("background-position","-723px -654px")
$('.people').fadeIn(300);
});
}

function femalechart()
{
jQuery("#pprecent").html("40%")
jQuery("#pteamname").html("Women")
$('.people').fadeOut(300,function() {
$('.people').css("background-position","-724px -335px")
$('.people').fadeIn(300);
});
}


function teachart()
{
jQuery("#funprecent").html("148")
jQuery("#funteamname").html("Tea Consumed")
$('.fun').fadeOut(300,function() {
$('.fun').css("background-position","-372px -1895px")
$('.fun').fadeIn(300);
});
}

function cofeechart()
{
jQuery("#funprecent").html("203")
jQuery("#funteamname").html("Coffee Consumed")
$('.fun').fadeOut(300,function() {
$('.fun').css("background-position","-1px -1895px")
$('.fun').fadeIn(300);
});
}

function posterchart()
{
jQuery("#funprecent").html("22")
jQuery("#funteamname").html("Posters on Wall")
$('.fun').fadeOut(300,function() {
$('.fun').css("background-position","-1px -2194px")
$('.fun').fadeIn(300);
});
}


