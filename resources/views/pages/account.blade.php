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

@endsection

@stop