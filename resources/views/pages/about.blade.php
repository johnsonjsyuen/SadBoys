

@extends('master')

@section('Content')
    <div class="container about">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 ">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="text-center wow fadeInUp">About</h1>

                    <img class="about__logo wow fadeInUp" src="img/logo.svg">
                    <h4 class="text-center wow fadeInUp">HeartSmart is a website for students, by students, with one aim: to provide accurate and up to date information on Cardiovascular diseases and their lifestyle risk factors.</h4>
                    <p class="text-center wow fadeInUp">HeartSmart aims to help you to understand your lifestyle choices, set health goals and track your progress until those goals are met.</p>
                    <p class="text-center wow fadeInUp">This website is designed to help you live HeartSmart!</p>
                </div>
            </div>
            <br>
            <div class="col-md-10 col-md-offset-1">
                <hr>
                <br>
                <h2 class="text-center wow fadeInUp">The Team</h2>
                <br>
                <div class="col-md-4 wow fadeInRight">
                    <img class="about__profile img-circle" src="img/mack.jpg">
                    <h4 class="text-center">Mackenzie Etherington</h4>
                    <p class="text-center">METH2787</p class="text-center">
                    <p class="text-center">Design</p class="text-center">
                </div>
                <div class="col-md-4 wow fadeInRight">
                    <img class="about__profile img-circle" src="img/john.jpg">
                    <h4 class="text-center">Johnson Yuen</h4>
                    <p class="text-center">JYUE1654</p class="text-center">
                    <p class="text-center">Backend</p class="text-center">
                </div>
                <div class="col-md-4 wow fadeInRight">
                    <img class="about__profile img-circle" src="img/david.jpg">
                    <h4 class="text-center">David Ho</h4>
                    <p class="text-center">DAHO3477</p class="text-center">
                    <p class="text-center">Content</p class="text-center">
                </div>
                <div class="col-md-4 wow fadeInRight  col-md-offset-2">
                    <img class="about__profile img-circle" src="img/leighton.jpg">
                    <h4 class="text-center">Leighton Lam</h4>
                    <p class="text-center">LLAM9787</p class="text-center">
                    <p class="text-center">Copywriter</p class="text-center">
                </div>
                <div class="col-md-4 wow fadeInRight">
                    <img class="about__profile img-circle" src="img/chloe.jpg">
                    <h4 class="text-center">Chloe King, </h4>
                    <p class="text-center">CKIN1111</p class="text-center">
                    <p class="text-center">Content Editor</p class="text-center">
                </div>
            </div>
            <iframe width="420" height="315" src=https://www.youtube.com/watch?v=kriK_DX2Ouk" frameborder="0" allowfullscreen></iframe>

            
                
            <!--     <button id="btn" onclick="toggle_visibility('fitness')">NSFW</button>
                <div id="fitness" style="display:none"><iframe width="420" height="315" src="https://www.youtube.com/embed/3Mg0yIbYorg" frameborder="0" allowfullscreen></iframe>
                </div>

          -->



        </div>





            <script type="text/javascript">
                    function toggle_visibility(id) {
                        var e = document.getElementById(id);
                        if(e.style.display == 'block')
                            e.style.display = 'none';
                        else
                            e.style.display = 'block';
                    }

        </script>



@endsection

@stop