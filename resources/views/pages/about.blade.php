

@extends('master')

@section('Content')
    <div id="blockCVD" class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                HeartSmart is a website for students, by students, with one aim:
                <br>

                to provide accurate and up to date information on Cardiovascular diseases and their lifestyle risk factors.
                <br>
                <br>
                HeartSmart aims to help you to understand your lifestyle choices, set health goals and track your progress until those goals are met.
                <br>
                <br>This website is designed to help you live HeartSmart!

                <br>
                <br>
                <button id="btn" onclick="toggle_visibility('fitness')">NSFW</button>
                <div id="fitness" style="display:none"><iframe width="420" height="315" src="https://www.youtube.com/embed/3Mg0yIbYorg" frameborder="0" allowfullscreen></iframe>
                </div>

                    <br>
                <br>
                <h3>The Team</h3>
                <br>
                <br>Mackenzie Etherington, METH2787, Design
                <br>
                <br>Johnson Yuen, JYUE1654, Backend
                <br>
                <br>David Ho, DAHO3477, Content
                <br>
                <br>Leighton Lam, LLAM9787, Copywriter
                <br>
                <br>Chloe King, Content Editor

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