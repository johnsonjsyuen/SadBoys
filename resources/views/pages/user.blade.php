@extends('master')

@section('Content')

<div class="container ">
		    <div class="row">
		    	        <div class="col-md-10 col-md-offset-1 help">
		            		<h1 class="text-center">My Account</h1>
		    			</div>
		    </div>

		    <div class="row">
		    	<div class="col-md-10 col-md-offset-1">
		    		<h2>General</h2>
		    	</div>
		    </div>

		    <div class="row">
		    	<div class="col-md-10 col-md-offset-1">
		    		<h2>Personalisation</h2>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-md-10 col-md-offset-2">
		    		<h4>Username</h4>
		    		<h4>Change Theme</h4>
		    <div class="row">
		    	<div class="col-md-10 col-md-offset-3">
		    		<button type="button" id="PastelGreenButton" onclick="PastelGreenFunction()">Pastel Green</button>
		    		<button type="button" id="SkyBlueButton" onclick="SkyBlueFunction()">Sky Blue</button>
		    		<button type="button" id="ClassicButton" onclick="ClassicFunction()">Classic</button>

		    	</div>
		    </div>


		    		<h4>Measurement System</h4>
		    		<h4>BMI and Calorie Records</h4>
		    	</div>
		    </div>




		    <div class="row">
		    	<div class="col-md-10 col-md-offset-1">
		    		<h2>Security</h2>
		    	</div>
		    </div>


		</div>

		<script>
    $(document).ready(function(){
    $("#PastelGreenButton").click(function(){
        $("h2, h4, p").addClass("PastelGreen");
        $("h1").addClass("PastelGreen2")
    });
});
</script>

<script>
function PastelGreenFunction() {
    document.body.style.backgroundColor = "#98FB98";
    // document.getElementsByTagName("h1").style.color = "#3CB371";
}
</script>

<style>
.PastelGreen {
	color: #3CB371;
}
.PastelGreen2 {
	color: #2E8B57;
}

</style>

	<!-- Sky Blue Function and Style -->


<script>
    $(document).ready(function(){
    $("#SkyBlueButton").click(function(){
        $("h2, h4, p").addClass("SkyBlue");
        $("h1").addClass("SkyBlue2")
    });
});
</script>

<script>
function SkyBlueFunction() {
    document.body.style.backgroundColor = "#B0C4DE";
}
</script>

<style>
.SkyBlue {
	color: #ADD8E6;
}
.SkyBlue2 {
	color: #6495ED;
}

</style>


	<!-- Classic Function and Style -->


<script>
    $(document).ready(function(){
    $("#ClassicButton").click(function(){
        $("h2, h4, p").addClass("Classic");
        $("h1").addClass("Classic2")
    });
});
</script>

<script>
function ClassicFunction() {
    document.body.style.backgroundColor = "#DCDCDC";

}
</script>

<style>
.Classic {
	color: #000000;
}
.Clasic2 {
	color: #000000;
}

</style>

@endsection

@stop