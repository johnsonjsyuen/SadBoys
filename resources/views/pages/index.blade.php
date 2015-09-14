

@extends('master')

@section('Head')


<link href="css/blockLanding.css" rel="stylesheet">
<link href="css/blockCVD.css" rel="stylesheet">
<link href="css/blockFacts.css" rel="stylesheet">
<link href="css/blockRisks.css" rel="stylesheet">
<link href="css/blockLifestyle.css" rel="stylesheet">
<link href="css/blockLower.css" rel="stylesheet">
<link href="css/blockRegister.css" rel="stylesheet">
@endsection

@section('Content')

    <div id="blockLanding">
        <div id="tagline" >
            <div class="col-md-10 col-md-offset-1">
                <h3 class="text-center text-white">Tired of balancing the tresses of uni and looking after your body?</h3>
                <h1 class="text-center text-white">We give you the answers so you don't fail a heart exam.</h1>
            </div>
        </div>
    </div>

    <div id="blockCVD" class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center">What is Cardiovascular Disease?</h2>
                <h3 class="text-center">Cardiovascular disease (CVD) is a collective term for diseases of the heart and blood vessels.</h3>
                <h3 class="text-center">The term commonly includes diseases such as:</h3>
            </div>
        </div>

        <div id="sectionDiseases">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-4">
                        <img src="img/heart1.svg">
                        <h3 class="text-center">Coronary Heart Disease</h3>
                        <p class="text-center">Coronary heart disease is a disease in which a waxy sub- stance called plaque (plak) builds up inside the coronary arteries.</p>

                    </div>
                    <div class="col-md-4">
                        <img src="img/heart2.svg">
                        <h3 class="text-center">Heart Failure</h3>
                        <p class="text-center">Heart failure occurs when the heart is unable to pump suffi- ciently to maintain blood flow to meet the body’s needs</p>

                    </div>
                    <div class="col-md-4">
                        <img src="img/heart3.svg">
                        <h3 class="text-center">Cardiomyopathy</h3>
                        <p class="text-center">Cardiomyopathy is the measurable deterioration for any reason of the ability of the myocardium (the heart muscle) to contract, usually leading to heart failure.</p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-4">
                        <img src="img/heart4.svg">
                        <h3 class="text-center">Congenital Heart Disease</h3>
                        <p class="text-center">Congenital heart defect (CHD), also known as a congenital heart anomaly or congenital heart disease, is a problem in the structure of the heart that is present at birth.</p>

                    </div>
                    <div class="col-md-4">
                        <img src="img/heart5.svg">
                        <h3 class="text-center">Peripheral Vein Disease</h3>
                        <p class="text-center">Peripheral vascular disease (PVD)is a narrowing of the arteries other than those that supply the heart or the brain.</p>

                    </div>
                    <div class="col-md-4">
                        <img src="img/heart6.svg">
                        <h3 class="text-center">Stroke</h3>
                        <p class="text-center">Stroke, also known as cerebrovascular accident (CVA), cere- brovascular insult (CVI), or brain attack, is when poor blood flow to the brain results in cell death.</p>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="text-center">Many of these conditions can be life-threatening.</h2>
                </div>
            </div>
        </div>
    </div>

    <div id="blockFacts" >
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center">Cardiovascular Disease Facts</h2>
            </div>
            <div id="sectionFacts" class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/heartfact1.svg">
                        <h3 class="text-center">Heart disease is the #1 cause of death worldwide.</h3>

                    </div>
                    <div class="col-md-6">
                        <img src="img/heartfact2.svg">
                        <h3 class="text-center">Cardiovascular disease kills one Australian every 12 minutes.</h3>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="img/heartfact3.svg">
                        <h3 class="text-center">Cardiovascular disease affects one in six Australians or 3.72 million.</h3>

                    </div>
                    <div class="col-md-4">
                        <img src="img/heartfact4.svg">
                        <h3 class="text-center">Cardiovascular disease cost the government about $5.9 billion in 2004–05.</h3>
                    </div>
                    <div class="col-md-4">
                        <img src="img/heartfact5.svg">
                        <h3 class="text-center">Cardiovascular disease claimed the lives of 43,603 Australians (30% of all deaths) in 2013.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blockRisks" >
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center">Risk Factors</h2>
            </div>
            <div id="sectionRisks" class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/heartrisk1.svg">
                        <h3 class="text-center">High Blood pressure</h3>
                        <p class="text-center">3/4 of people with chronic heart failure have high blood pressure.</p>

                    </div>
                    <div class="col-md-6">
                        <img src="img/heartrisk2.svg">
                        <h3 class="text-center">High Cholesterol</h3>
                        <p class="text-center">CPeople with high cholesterol are 2x more likely to develop heart disease</p>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="img/heartrisk3.svg">
                        <h3 class="text-center">Diabetes</h3>
                        <p class="text-center">People with diabetes are 2x as likely to develop heart disease.</p>

                    </div><div class="col-md-4">
                        <img src="img/heartrisk4.svg">
                        <h3 class="text-center">Despression</h3>
                        <p class="text-center">People with depression are 25-40% more likely to die from heart disease</p>

                    </div><div class="col-md-4">
                        <img src="img/heartrisk5.svg">
                        <h3 class="text-center">Obesity</h3>
                        <p class="text-center">Coronary artery disease is present 10x more often in people who are obese</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blockLifestyle" >
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center">You're at risk if you...</h2>
            </div>
            <div id="sectionLifestyle" class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/heartlifestyle1.svg">
                        <h3 class="text-center">Smoke</h3>
                        <p class="text-center">People who smoke are 2-4x as likely to develop heart disease.</p>

                    </div>
                    <div class="col-md-6">
                        <img src="img/heartlifestyle2.svg">
                        <h3 class="text-center">Eat a poor diet</h3>
                        <p class="text-center">People with a diet high in saturated fat are 30% more likely to devlop heart disease</p>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <img src="img/heartlifestyle3.svg">
                        <h3 class="text-center">Don’t Exercise</h3>
                        <p class="text-center">People who don’t exercise are 50% more likely to develop heart disease</p>

                    </div>
                    <div class="col-md-6">
                        <img src="img/heartlifestyle4.svg">
                        <h3 class="text-center">Drink Alcohol Excessively</h3>
                        <p class="text-center">People who binge drink or drink heavily are 2x more likely to have a fatal heart attack.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blockLower" >
        <div class="container-fluid">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center">How do I lower my risk?</h2>
            </div>
            <div id="sectionLower" class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/prevention1.svg">
                        <h3 class="text-center">Quit Smoking</h3>
                        <p class="text-center">If you smoke, you are more than twice as likely to have a heart attack as nonsmokers, and you’re much more likely to die if you do have a heart attack.</p>

                    </div>
                    <div class="col-md-3">
                        <img src="img/prevention2.svg">
                        <h3 class="text-center">Improve cholesterol levels</h3>
                        <p class="text-center">If you smoke, you are more than twice as likely to have a heart attack as nonsmokers, and you’re much more likely to die if you do have a heart attack.</p>

                    </div>
                    <div class="col-md-3">
                        <img src="img/prevention3.svg">
                        <h3 class="text-center">Control High Blood Pressure</h3>
                        <p class="text-center">If you smoke, you are more than twice as likely to have a heart attack as nonsmokers, and you’re much more likely to die if you do have a heart attack.</p>

                    </div>
                    <div class="col-md-3">
                        <img src="img/prevention4.svg">
                        <h3 class="text-center">Get Active</h3>
                        <p class="text-center">If you smoke, you are more than twice as likely to have a heart attack as nonsmokers, and you’re much more likely to die if you do have a heart attack.</p>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <img src="img/prevention5.svg">
                        <h3 class="text-center">Follow a heart-healthy diet</h3>
                        <p class="text-center">If you smoke, you are more than twice as likely to have a heart attack as nonsmokers, and you’re much more likely to die if you do have a heart attack.</p>

                    </div>
                    <div class="col-md-3">
                        <img src="img/prevention6.svg">
                        <h3 class="text-center">Get to a healthy weight</h3>
                        <p class="text-center">If you smoke, you are more than twice as likely to have a heart attack as nonsmokers, and you’re much more likely to die if you do have a heart attack.</p>

                    </div>
                    <div class="col-md-3">
                        <img src="img/prevention7.svg">
                        <h3 class="text-center">Control Diabetes</h3>
                        <p class="text-center">If you smoke, you are more than twice as likely to have a heart attack as nonsmokers, and you’re much more likely to die if you do have a heart attack.</p>

                    </div>
                    <div class="col-md-3">
                        <img src="img/prevention8.svg">
                        <h3 class="text-center">Manage Stress&Anger</h3>
                        <p class="text-center">If you smoke, you are more than twice as likely to have a heart attack as nonsmokers, and you’re much more likely to die if you do have a heart attack.</p>

                    </div>
                </div>
            </div>
        </div>

        <div id="blockRegister" >
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="text-center">Seem a bit overwhelming?</h2>
                    <h3 class="text-center">Let us sort out your health plan so you can focus on your studies!</h2>

                </div>
                <div id="sectionRegister" class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/weHelp.svg">
                            <h3 class="text-center">Body Mass Index Calculator and Statistics</h3>
                            <p class="text-center">We can help you track and monitor your BMI as you progress towards your healthier you so that you can seamlessly look back and see how far you’ve come!</p>

                        </div>
                        <div class="col-md-4">
                            <img src="img/weHelp2.svg">
                            <h3 class="text-center">Calorie counter and Healthy Eating Tips</h3>
                            <p class="text-center">Our easy to follow healthy eating tips and simple to use calorie counter can help you to watch what you put into your body so your heart can healthily output 100%!</p>

                        </div>
                        <div class="col-md-4">
                            <img src="img/weHelp3.svg">
                            <h3 class="text-center">Minimise lifestyle risks and Maximise social life</h3>
                            <p class="text-center">We can provide you with the latest techniques in reducing your lifestyle risks like smoking and excessie drinking, and connect you with a network of similarly minded people trying to give their heart and bodies a new start!</p>

                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <button class="btn btn-info btn-lg btn-block">Register</button>
                    </div>
                </div>
            </div>
        </div>
@endsection

@stop