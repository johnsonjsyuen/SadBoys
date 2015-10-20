@extends('master')

@section('Content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>

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

<script>
    $("#logoIMG").attr("src","../img/logo.svg");
</script>
    <link href="../css/reset.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">
    <link href="../css/shadowbox.css" rel="stylesheet">
    <link href="../css/hover-min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>

    <link href="../css/index.css" rel="stylesheet">

<link href="../css/blockLanding.css" rel="stylesheet">
    <link href="../css/blockCVD.css" rel="stylesheet">
    <link href="../css/blockFacts.css" rel="stylesheet">
    <link href="../css/blockRisks.css" rel="stylesheet">
    <link href="../css/blockLifestyle.css" rel="stylesheet">
    <link href="../css/blockLower.css" rel="stylesheet">
    <link href="../css/blockRegister.css" rel="stylesheet">
    <link href="../css/contact.css" rel="stylesheet">
    <link href="../css/about.css" rel="stylesheet">
    <link href="../css/help.css" rel="stylesheet">
    <link href="../css/recipes.css" rel="stylesheet">
    <link href="../css/tools.css" rel="stylesheet">
    <link href="../css/accountpage.css" rel="stylesheet">

<div id="account" class="container login">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" role="form">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>



                    <div class="input-group">
                      <div class="checkbox">
                        <label>
                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                      </label>
                  </div>
              </div>


              <div style="margin-top:10px" class="form-group">
                <!-- Button -->

                <div class="col-sm-12 controls">
                  <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                  <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

              </div>
          </div>


          <div class="form-group">
            <div class="col-md-12 control">
                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                    Don't have an account! 
                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                        Sign Up Here
                    </a>
                </div>
            </div>
        </div>    
    </form>     



</div>                     
</div>  
</div>
<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Sign Up</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
        </div>  
        <div class="panel-body" >
            <form id="signupform" class="form-horizontal" role="form">

                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>



                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="icode" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <!-- Button -->                                        
                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                        <span style="margin-left:8px;">or</span>  
                    </div>
                </div>

                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                    </div>                                           
                </div>
            </form>
        </div>
    </div>
</div> 
</div>



@endsection

@stop




