

@extends('master')

@section('Content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<div class="container tools">
    <div class="row">

        <div class="col-md-12">
            <div class="row">
                <h2>Daily Calorie Calculator</h2>
            </div>
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    <form method="put">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <div class="input-group" data-validate="number">
                                <input type="text" class="form-control" name="age" id="age" placeholder="(Years)" required>
                                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex">Sex</label>
                            <div class="input-group" data-toggle="buttons">
                                <label class="btn btn-default active"><input type="radio" name="sex" value="male" checked="checked">Male</label>
                                <label class="btn btn-default"><input type="radio" name="sex" value="female">Female</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Weight(lbs)</label>
                            <div class="input-group" data-validate="number">
                                <input type="text" class="form-control" name="weight" id="weight" placeholder="(lbs)" required>
                                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hieght(inches)</label>
                            <div class="input-group" data-validate="number">
                                <input type="text" class="form-control" name="inches" id="inches" placeholder="(inches)" required>
                                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Activity Level</label>
                            <div class="input-group">
                                <select class="form-control" name="activity_level" id="activity_level" required>
                                    <option value="">Select an Acitivity Level</option>
                                    <option value="no">Little to no exercise</option>
                                    <option value="light">Light exercise (1−3 days per week)</option>
                                    <option value="moderate">Moderate exercise (3−5 days per week)</option>
                                    <option value="heavy">Heavy exercise (6−7 days per week)</option>
                                    <option value="extreme">Very heavy exercise (twice per day, extra heavy workouts)</option>
                                </select>
                                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Choose Goal:</label>
                            <div class="input-group">
                                <select class="form-control" name="gain_loss_amount" id="gain_loss_amount" required>
                                    <option value="">Select a Goal</option>
                                    <option value="-1000">Lose 2 Pounds per Week</option>
                                    <option value="-750">Lose 1.5 Pounds per Week</option>
                                    <option value="-500">Lose 1 Pounds per Week</option>
                                    <option value="-250">Lose 0.5 Pounds per Week</option>
                                    <option value="0">Stay the Same Weight</option>
                                    <option value="250">Gain 0.5 Pound per Week</option>
                                    <option value="500">Gain 1 Pound per Week</option>
                                    <option value="750">Gain 1.5 Pounds per Week</option>
                                    <option value="1000">Gain 2 Pounds per Week</option>
                                </select>
                                <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                            </div>
                            <div class="form-group">
                             <div id="dc_results" class="alert alert-success" style="display: none">
                              <h4>Estimated Daily Calories:<strong><span id="calAmount"></span></strong></h4>
                          </div>
                      </div>
                      <div class="form-group">
                         <div class="modal-footer">
                            <button class="btn btn-danger" onclick="resetForm();">Reset</button>
                            <button type="button" id="calculate" name="calculate" class="btn btn-primary" onclick="calcDailyCals();">Calculate</button>
                        </div>
                    </div>
                    <div class="form-group">
                       <div class ="modal-footer" id="recommendations" style="display: none">    
                        <h5><strong>Click Below for Recommendations!<strong></h5>
                        <button class="btn btn-primary" onclick="findDiets();">Diets</button>
                        <button class="btn btn-primary" onclick="findWorkouts()">Workouts</button>
                    </div>
                </div>
            </div>
        </div>  
    </form>   
</div>
</div>


</div>
<div class="col-md-12">
            <div class="row">
                        <h2 align="center">BMI Calculator</h2>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-offset-5 col-sm-2">
                            
                                
                                <div class="form-group">
                                    <label for="Weight">Weight</label>
                                    <div class="input-group" data-validate="number">
                                        <span class ="input-group-addon"><button id="WeightButton"></button></span>

                                        <input type="number" class="form-control" name="Weight" id="Weight" placeholder="(kilograms)" required>
 
                                    </div>
                                </div>
                        </div>
                    
                    </div>


                    <div class="row">
                        <div class="col-sm-offset-5 col-sm-2">
                            <form method="put">
                                <div class="form-group">
                                    <label for="Height">Height</label>

                                    <div class="input-group" data-validate="number">
                                         <span class ="input-group-addon"><button id="HeightButton"></button></span>
                                        <input type="number" class="form-control" name="Height" id="Height" placeholder="(cm)" required>

                                    </div>
                                </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-offset-6 col-sm-2">
                            <button type="button" onclick="BMIclick();" id="Calculate">Calculate</button>
                            </div>
                    </div>

                    <br>
    
                            <div class="row">
                                            <div class="col-sm-offset-5 col-sm-2">
                                                <div id="BMI1"></div>
                                </div>
                            </div>

                    <br>
                                        <div class="row">
                        <div class="col-sm-offset-6 col-sm-2">
                            <button id="Clear">Clear</button>
                            </div>
                    </div>


                    </div>
        </div>
</div>

</div>

<script>
     var Weight = "";
    var Height = "";
    var BMI = $("#BMI1");
    BMI.text("0");

    // $("#Clear").click(function(){
    //     Weight = "";
    //     Height = "";
    //     BMI = "";
    //     // if ($(this).attr("id") === "clearall") {
    //     //     newnumber = "";
    //     // }
    // });


    function BMIclick(){
        Weight = $('#Weight').val();
        Height = $('#Height').val();
        calculate(Weight, Height)
    };

    function calculate(weight, height){
        weight = parseInt(weight,10);
        height = parseInt(height,10);
        var result;
        result = Math.round(weight * 10000/ (height * height));
        // result = (parseInt(Weight, 10) * 100 / (parseInt(Height,10)*parseInt(Height,10))).toString(10);
        result = result.toString(10);
        BMI.html(result);

    };

    </script>



<script>
//var disable== ("calculate");
//song.attr('disabled', true);
//$("#calculate").attr('disabled', true);
//document.getElementById("calculate").disabled = true;
$(document).ready(function() {//$("#calculate").attr('disabled', true);
    console.log('reeeeeeeeee');

    $('.input-group input[required], .input-group textarea[required], .input-group select[required]').on('keyup, change', function() {
        var $group = $(this).closest('.input-group'),
        $addon = $group.find('.input-group-addon'),
        $icon = $addon.find('span'),
        state = false;

        if (!$group.data('validate')) {
            state = $(this).val() ? true : false;  
        }else if ($group.data('validate') == "email") {
            state = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($(this).val())
        }else if($group.data('validate') == 'phone') {
            state = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test($(this).val())
            a++;
        }else if ($group.data('validate') == "length") {
            state = $(this).val().length >= $group.data('length') ? true : false;
        }else if ($group.data('validate') == "number") {
            state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());
        }
        if (state) {
            $addon.removeClass('danger');
            $addon.addClass('success');
            $icon.attr('class', 'glyphicon glyphicon-ok');
        }else{
            $addon.removeClass('success');
            $addon.addClass('danger');
            $icon.attr('class', 'glyphicon glyphicon-remove');    
        } 
    });

});


/*  function b(a){
        var b=$("#gain_loss_amount");
        b.empty();$.each(a,function(a,c){
            var d={value:c};
            0===c&&(d.selected="selected");
            b.append($("<option></option>").attr(d).text(a))
        })}
        var a={"Lose 2 Pounds per Week":-1000,"Lose 1.5 Pounds per Week":-750,"Lose 1 Pounds per Week":-500,"Lose 0.5 Pounds per Week":-250,"Stay the Same Weight":0,"Gain 0.5 Pound per Week":250,"Gain 1 Pound per Week":500,"Gain 1.5 Pounds per Week":750,"Gain 2 Pounds per Week":1E3},
        var c={"Lose 1 Kg per Week":-1100,"Lose 0.75 Kg per Week":-825,"Lose 0.5 Kg per Week":-550,"Lose 0.25 Kg per Week":-275,"Stay the Same Weight":0,"Gain 0.25 Kg per Week":275,"Gain 0.5 Kg per Week":550,"Gain 0.75 Kg per Week":825,"Gain 1 Kg per Week":1100};
            });
*/

/* function validateDailyCalsValues(b){
    var a="";$.isNumeric($("#age").val())||(a+="Age value must be a number\n");
    $.isNumeric($("#weight").val())||(a+="Weight value must be a number\n");
    $.isNumeric($("#inches").val())||(a=a+(b?"Feet ":"Height ")+"value must be a number\n");
//    (!$("activity_level").val())(a="balls")
//  var c=$("#inches").val();b&&(!$.isNumeric(c)&&!(12>parseFloat(c)))&&(a+="Inches value must be a number less than 12\n");
    return a
}
*/
function calcDailyCals(){
    //var b="standard"===$("input[name='units']:checked").val(),
//    a=validateDailyCalsValues(b);
//  if(a)alert(a);
    //if(state)alert("Fill in all values");
//  if(a)alert("Fill in all fields!");
//  else{
    var a=parseFloat($("#weight").val());
    b=(a*=0.453592);
        //var c=parseFloat($("#feet_cm").val());
        var c=parseFloat($("#inches").val());
        b=(c=2.54*c);
        var d=parseFloat($("#age").val()),e=$("input[name='sex']:checked").val(),b=$("#activity_level").val(),
        a="male"==e?88.362+13.397*a+4.799*c-5.677*d:447.593+9.247*a+3.098*c-4.33*d;
        "no"===b?a*=1.2:"light"===b?a*=1.375:"moderate"===b?a*=1.55:"heavy"===b?a*=1.725:"extreme"===b&&(a*=1.9);
        a=Math.round(a+parseInt($("#gain_loss_amount").val()));
        $("#calAmount").text(500<a?a:0);
        $("#dc_results").show();
        //if(a>0)
         //   $("#recommendations").show();

}//}

function resetForm(){
    $(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
    $(':checkbox, :radio').prop('checked', false);
    location.reload(); 
}




</script>
@endsection

@stop