<?PHP
    if ($_POST[submit]){
        $i = true;
        $result = array(
            0 => $_POST['question1'],
            1 => $_POST['question2'],
            2 => $_POST['question3'],
            3 => $_POST['question4'],
            4 => $_POST['question5'],
            5 => $_POST['question6'],
            6 => $_POST['question7'],
            7 => $_POST['question8'],
            8 => $_POST['question9'],
            9 => $_POST['question10'],
            10 => $_POST['question11']
        );
        $ac = array_count_values($result);
        if($ac['1'] < 4){
            $ec = "The lifestyle is bad for your health, and you are facing with hidden health risks. Therefore, we suggest you that for the sake of your health, please adjust your lifestyle as soon as possible!<a href='#'> rigidter now!</a> Let's make a health plan according to your own conditions.";
        }elseif($ac['1'] < 8){
            $ec = "Although not ideal, you are still very attractive. So we suggest you adjust your lifestyle! Our website has provided you with professional tips!";
        }else {
            $ec = "Great! Please keep it!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>HeartSmart</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/blockLanding.css" rel="stylesheet">
  <link href="css/blockCVD.css" rel="stylesheet">
  <link href="css/blockFacts.css" rel="stylesheet">
  <link href="css/blockRisks.css" rel="stylesheet">
  <link href="css/blockLifestyle.css" rel="stylesheet">
  <link href="css/blockLower.css" rel="stylesheet">
  <link href="css/blockRegister.css" rel="stylesheet">



</head>
<body>
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand navbar-brand-centered"><img src="img/logo.svg"></div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-brand-centered">
      <ul class="nav navbar-nav">
        <li><a href="#">CVD</a></li>
        <li><a href="#">Risk Factors</a></li>
        <li><a href="#">Prevention</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">About</a></li>
        <li><a href="#">Tools</a></li>
        <li><a href="#">Register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <form action="" method="post">
 <?PHP if($i)echo "<!--"; ?>
    <div id="blockLifestyle" >
        <div class="container-fluid">
            <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                <h2 class="text-center"></h2>
            </div>
            <div id="sectionLifestyle" class="col-md-10 col-md-offset-1">
                <h1 class="text-center">Let's begin to test your heath quality test ! please answer the follower question honestly.Don't be cheating :)</h1>
                <h3 class="text-center">&nbsp;</h3>

                <div class="row wow fadeInRight" style="padding-right: 50px;">
                    <div class="col-md-6">
                        <img src="img/heartrisk2.svg">
                        <h4 class="text-center">Do you eat at least three meals a day, including a fixed breakfast?</h4>
                        <p class="text-center">
                            <div class="radio text-center">
                                <label>
                                    <input type="radio" name="question1" id="question1" value="1" checked>
                                    <img src="img/yes.png" />
                                </label>
                                <label>
                                    <input type="radio" name="question1" id="question1" value="0" checked>
                                    <img src="img/no.png" />
                                </label>
                            </div>
                        </p>
                    </div>
                    <div class="col-md-6" style="padding-left: 50px;">
                        <img src="img/prevention5.svg">
                        <h4 class="text-center">Does your daily diet contain 20-30 grams of fiber (rich in fruits, vegetables, grains and soy foods)?</h4>
                        <p class="text-center">
                            <div class="radio text-center">
                                <label>
                                    <input type="radio" name="question2" id="question2" value="1" checked>
                                    <img src="img/yes.png" />
                                </label>
                                <label>
                                    <input type="radio" name="question2" id="question2" value="0" checked>
                                    <img src="img/no.png" />
                                </label>
                            </div>
                        </p>
                    </div>
                </div>

                <div class="row wow fadeInLeft">
                    <div class="col-md-6" style="padding-right: 50px;">
                        <img src="img/prevention1.svg">
                        <h4 class="text-center">Do you refuse to smoke or smoke passively?</h4>
                        <p class="text-center">
                            <div class="radio text-center">
                                <label>
                                    <input type="radio" name="question3" id="question3" value="1" checked>
                                    <img src="img/yes.png" />
                                </label>
                                <label>
                                    <input type="radio" name="question3" id="question3" value="0" checked>
                                    <img src="img/no.png" />
                                </label>
                            </div>
                        </p>
                    </div>
                    <div class="col-md-6" style="padding-left: 50px;">
                        <img src="img/prevention4.svg">
                        <h4 class="text-center">Do you have three times a week of aerobic exercise for at least 20 to 30 minutes each time?</h4>
                        <p class="text-center">
                            <div class="radio text-center">
                                <label>
                                    <input type="radio" name="question4" id="question4" value="1" checked>
                                    <img src="img/yes.png" />
                                </label>
                                <label>
                                    <input type="radio" name="question4" id="question4" value="0" checked>
                                    <img src="img/no.png" />
                                </label>
                            </div>
                        </p>
                    </div>
                </div>
                <h3 class="text-center"><a href="#blockLower">Continue...</a></h3>
            </div>
        </div>
    </div>

    <div id="blockLower" >
        <div class="container-fluid">
            <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                <h2 class="text-center">Also,we need to know your life habits.</h2>
            </div>
            <div id="sectionLower" class="col-md-10 col-md-offset-1">
                <div class="row wow fadeInRight">
                    <div class="col-md-6" style="padding-right: 50px;">
                        <img src="img/heartfact5.svg">
                        <h4 class="text-center">Does your training include the part aiming at improving cardiovascular function, strength enhancement and flexibility increase?</h4>
                        <p class="text-center">
                            <div class="radio text-center">
                                <label>
                                    <input type="radio" name="question5" id="question5" value="1" checked>
                                    <img src="img/yes.png" />
                                </label>
                                <label>
                                    <input type="radio" name="question5" id="question5" value="0" checked>
                                    <img src="img/no.png" />
                                </label>
                            </div>
                        </p>
                    </div>
                    <div class="col-md-6" style="padding-left: 50px;">
                        <img src="img/heartfact2.svg">
                        <h4 class="text-center">Do you have enough sleep every day? (Seven hours or more)</h4>
                        <p class="text-center">
                            <div class="radio text-center">
                                <label>
                                    <input type="radio" name="question6" id="question6" value="1" checked>
                                    <img src="img/yes.png" />
                                </label>
                                <label>
                                    <input type="radio" name="question6" id="question6" value="0" checked>
                                    <img src="img/no.png" />
                                </label>
                            </div>
                        </p>
                    </div>
                </div>

                <div class="row wow fadeInLeft">
                    <div class="col-md-6">
                        <img src="img/heartrisk4.svg">
                        <h4 class="text-center">Can you bear the pressure in your life, especially the pressure from the interpersonal relationship at work?</h4>
                        <p class="text-center">
                            <div class="radio text-center">
                                <label>
                                    <input type="radio" name="question7" id="question7" value="1" checked>
                                    <img src="img/yes.png" />
                                </label>
                                <label>
                                    <input type="radio" name="question7" id="question7" value="0" checked>
                                    <img src="img/no.png" />
                                </label>
                            </div>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="img/prevention8.svg">
                        <h4 class="text-center">Do you have the symptom of hair falling off when getting up in the morning?</h4>
                        <p class="text-center">
                            <div class="radio text-center">
                                <label>
                                    <input type="radio" name="question8" id="question8" value="1" checked>
                                    <img src="img/yes.png" />
                                </label>
                                <label>
                                    <input type="radio" name="question8" id="question8" value="0" checked>
                                    <img src="img/no.png" />
                                </label>
                            </div>
                        </p>
                    </div>
                </div>
                <h3 class="text-center"><a href="#blockRegister">Continue...</a></h3>
            </div>
        </div>
    </div>

    <div id="blockLower" >
        <div id="blockRegister" >
            <div class="container">
                <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                    <h2 class="text-center">Wow,last three question here!keep going guys!</h2>
                    <h3 class="text-center">&nbsp;</h3>

                </div>
                <div id="sectionRegister" class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp">
                            <img src="img/heartlifestyle4.svg">
                            <h4 class="text-center">Do you drink in a moderate way, less than five times a week?</h4>
                            <p class="text-center">
                                <div class="radio text-center">
                                    <label>
                                        <input type="radio" name="question9" id="question9" value="1" checked>
                                        <img src="img/yes.png" />
                                    </label>
                                    <label>
                                        <input type="radio" name="question9" id="question9" value="0" checked>
                                        <img src="img/no.png" />
                                    </label>
                                </div>
                            </p>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.25s">
                            <img src="img/heart3.svg">
                            <h4 class="text-center">You are not a person to be easily angered.</h4>
                            <p class="text-center">
                                <div class="radio text-center">
                                    <label>
                                        <input type="radio" name="question10" id="question10" value="1" checked>
                                        <img src="img/yes.png" />
                                    </label>
                                    <label>
                                        <input type="radio" name="question10" id="question10" value="0" checked>
                                        <img src="img/no.png" />
                                    </label>
                                </div>
                            </p>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                            <img src="img/prevention3.svg">
                            <h4 class="text-center">Do you have ever conducted a body check in the recent year?</h4>
                            <p class="text-center">
                            <div class="radio text-center">
                                <label>
                                    <input type="radio" name="question11" id="question11" value="1" checked>
                                    <img src="img/yes.png" />
                                </label>
                                <label>
                                    <input type="radio" name="question11" id="question11" value="0" checked>
                                    <img src="img/no.png" />
                                </label>
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="1s">
                        <input type="submit" class="btn btn-info btn-lg btn-block" name="submit" value="Good! Submit"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?PHP if($i){echo "-->";}else{echo "<!--";} ?>

     <div id="blockLower" >
         <div class="container-fluid">
             <div class="col-md-10 col-md-offset-1 wow fadeInUp">
             </div>
             <div id="sectionLower" class="col-md-10 col-md-offset-1">
                 <div class="row wow fadeInRight">
                     <div class="col-md-12" style="margin-top: 200px;">
                         <h1 class="text-center"><?PHP echo $ec; ?></h1>
                     </div>
                     <h3 class="text-center"><a href="index.php">back...</a></h3>
                 </div>
             </div>
     </div>
    <?PHP if(!$i)echo "-->"; ?>

 </form>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
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