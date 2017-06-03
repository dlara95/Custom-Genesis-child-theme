<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://use.typekit.net/cli7hsu.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>




<script type="text/javascript">

jQuery(document).ready(function($) {
    $(window).on('scroll', function() { //OnScroll, invoke
    var scrollTop = $(window).scrollTop();
   var distance = $('body').offset().top;

  var difference = distance - scrollTop;
 console.log('Diferencia', Math.abs(difference));
    if(Math.abs(difference) > 40) { 
       //If the current scroll position is more than 100, add class
        $( "header.site-header" ).addClass("fixed");
        $("header.site-header .wrap").css({"padding": "7px 0"});
    } else {
        //Else remove it
        $( "header.site-header" ).removeClass("fixed");
          $("header.site-header .wrap").css({"padding": "20px 0"});
    }
});
});



</script>



