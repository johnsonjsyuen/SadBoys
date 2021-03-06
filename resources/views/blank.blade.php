<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HeartSmart</title>
    <link href="css/reset.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/shadowbox.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">



    @yield('Head')

    <link href="css/blockLanding.css" rel="stylesheet">
    <link href="css/blockCVD.css" rel="stylesheet">
    <link href="css/blockFacts.css" rel="stylesheet">
    <link href="css/blockRisks.css" rel="stylesheet">
    <link href="css/blockLifestyle.css" rel="stylesheet">
    <link href="css/blockLower.css" rel="stylesheet">
    <link href="css/blockRegister.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
    <link href="css/help.css" rel="stylesheet">

</head>
<body>
   
    @yield('Content')

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/shadowbox.js"></script>

    <script>
    $(document).ready(function(){
      wow.init();
  });

    wow = new WOW(
    {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       false,       // default
        live:         true        // default
    }
    );
    </script>


    <script>
    $('a[href*=#]:not([href=#]):not([href=#myCarousel])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            || location.hostname == this.hostname) {

            var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top - 80
            }, 500);
            return false;
        }
    }
});
    </script>

</body>
</html>