@extends('master')
@section('Head')
<link href="css/game.css" rel="stylesheet">

@endsection

@section('Content')
<br>
<br>
<br>
<br>
<br>
<br>

<h1>Heart Smart Quiz</h1>
<p>1) Do you eat at least three meals a day, including a fixed breakfast?</p>



        <div class="answer" id="panel1" style="display:none">Awesome!</div>
        <button id="btn" onclick="toggle_visibility('panel1')">Yes</button>



        <div class="answer" id="panel2" style="display:none">You have room for improvement!</div>
        <button id="btn" onclick="toggle_visibility('panel2')">Sometimes</button>

<div class="answer" id="panel3" style="display:none">Please consider changing your habits</div>
<button id="btn" onclick="toggle_visibility('panel3')">No</button>



<p>2) Does your daily diet contain 20-30 grams of fiber (rich in fruits, vegetables, grains and soy foods)?</p>



<div class="answer" id="panel4" style="display:none">Awesome!</div>
<button id="btn" onclick="toggle_visibility('panel4')">Yes</button>



<div class="answer" id="panel5" style="display:none">Please consider eating more fruit and veg</div>
<button id="btn" onclick="toggle_visibility('panel5')">Less than 20-30grams</button>

<div class="answer" id="panel6" style="display:none">Please report to the emergency room!</div>
<button id="btn" onclick="toggle_visibility('panel6')">Nothing</button>



<p>3) Do smoke or smoke passively?</p>



<div class="answer" id="panel7" style="display:none">Please consider smoking less and ultimately quitting</div>
<button id="btn" onclick="toggle_visibility('panel7')">Yes I smoke</button>



<div class="answer" id="panel8" style="display:none">Please consider lifestyle changes to reduce your exposure</div>
<button id="btn" onclick="toggle_visibility('panel8')">Yes I smoke passively</button>

<div class="answer" id="panel9" style="display:none">Awesome!</div>
<button id="btn" onclick="toggle_visibility('panel9')">No</button>



<p>4) How much exercise do you do per week?</p>



<div class="answer" id="panel10" style="display:none">Please consider increasing it to 3 times a week, 20-30 minutes</div>
<button id="btn" onclick="toggle_visibility('panel10')">2 times a week</button>

<div class="answer" id="panel11" style="display:none">Please consider increasing it to 3 times a week, 20-30 minutes</div>
<button id="btn" onclick="toggle_visibility('panel11')">1 times a week</button>
<div class="answer" id="panel12" style="display:none">Please consider increasing it to 3 times a week, 20-30 minutes</div>
<button id="btn" onclick="toggle_visibility('panel12')">Never!</button>
<div class="answer" id="panel13" style="display:none">Awesome!</div>
<button id="btn" onclick="toggle_visibility('panel13')">Yes</button>


<p>5) Do you have enough sleep every day? </p>



<div class="answer" id="panel14" style="display:none">Excellent, more would improve your health</div>
<button id="btn" onclick="toggle_visibility('panel14')">7 hours on average</button>



<div class="answer" id="panel15" style="display:none">Excellent</div>
<button id="btn" onclick="toggle_visibility('panel15')">8 hours on average</button>

<div class="answer" id="panel16" style="display:none">Please consider sleeping more as it is one of the easiest changes to improve your health</div>
<button id="btn" onclick="toggle_visibility('panel16')">less than 7 hours</button>





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