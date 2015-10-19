

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
            <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                <h3 class="text-center">Tired of balancing the stresses of uni and looking after your body?</h3>

                <h1 class="text-center">We give you the answers so you don't fail a heart exam.</h1>
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
            <div class="row wow fadeInRight">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-4">
                        <a target="_blank" href="http://www.nhlbi.nih.gov/health/health-topics/topics/cad"><img class="hvr-pulse" src="img/heart1.svg"></a>
                        <h3 class="text-center">Coronary Heart Disease</h3>
                        <p class="text-center">Coronary heart disease is a disease in which a waxy sub- stance called plaque (plak) builds up inside the coronary arteries.</p>

                    </div>
                    <div class="col-md-4">
                        <a href="http://consumer.healthday.com/senior-citizen-information-31/misc-aging-news-10/better-diet-exercise-can-cut-heart-failure-risk-in-half-701031.html" target="_blank"><img class="hvr-pulse" src="img/heart2.svg"></a>
                        <h3 class="text-center">Heart Failure</h3>
                        <p class="text-center">Heart failure occurs when the heart is unable to pump suffi- ciently to maintain blood flow to meet the body’s needs</p>

                    </div>
                    <div class="col-md-4">
                        <a href="http://research.omicsgroup.org/index.php/Cardiomyopathy" target="_blank"><img class="hvr-pulse" src="img/heart3.svg"></a>
                        <h3 class="text-center">Cardiomyopathy</h3>
                        <p class="text-center">Cardiomyopathy is the measurable deterioration for any reason of the ability of the myocardium (the heart muscle) to contract, usually leading to heart failure.</p>

                    </div>
                </div>
            </div>

            <div class="row wow fadeInLeft">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-4">
                        <a href="http://www.betterhealth.vic.gov.au/bhcv2/bhcarticles.nsf/pages/Birth_defects_heart_abnormalities" target="_blank"><img class="hvr-pulse" src="img/heart4.svg"></a>
                        <h3 class="text-center">Congenital Heart Disease</h3>
                        <p class="text-center">Congenital heart defect (CHD), also known as a congenital heart anomaly or congenital heart disease, is a problem in the structure of the heart that is present at birth.</p>

                    </div>
                    <div class="col-md-4">
                        <a href="http://www.betterhealth.vic.gov.au/bhcv2/bhcarticles.nsf/pages/Peripheral_vascular_disease" target="_blank"><img class="hvr-pulse" src="img/heart5.svg"></a>
                        <h3 class="text-center">Peripheral Vein Disease</h3>
                        <p class="text-center">Peripheral vascular disease (PVD)is a narrowing of the arteries other than those that supply the heart or the brain.</p>

                    </div>
                    <div class="col-md-4">
                        <a href="http://www.hbotnova.com/resources/post_stroke/Walker_Reversal_of_Residual_Stroke_Symptoms_Using_HBOT_1996.pdf" target="_blank"><img class="hvr-pulse" src="img/heart6.svg"></a>
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
            <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                <h2 class="text-center">Cardiovascular Disease Facts</h2>
            </div>
            <div id="sectionFacts" class="col-md-10 col-md-offset-1">
                <div class="row wow fadeInRight">
                    <div class="col-md-6">
                        <a href="http://www.who.int/mediacentre/factsheets/fs317/en/" target="_blank"><img class="hvr-grow-rotate" src="img/heartfact1.svg"></a>
                        <h3 class="text-center">Heart disease is the #1 cause of death worldwide.</h3>

                    </div>
                    <div class="col-md-6">
                        <a href="http://www.heartfoundation.org.au/information-for-professionals/data-and-statistics/Pages/default.aspx" target="_blank"><img class="hvr-grow-rotate" src="img/heartfact2.svg"></a>
                        <h3 class="text-center">Cardiovascular disease kills one Australian every 12 minutes.</h3>
                    </div>

                </div>

                <div class="row wow fadeInLeft">
                    <div class="col-md-4">
                        <a href="http://www.heartfoundation.org.au/information-for-professionals/data-and-statistics/Pages/default.aspx" target="_blank"><img class="hvr-grow-rotate" src="img/heartfact3.svg"></a>
                        <h3 class="text-center">Cardiovascular disease affects one in six Australians or 3.72 million.</h3>

                    </div>
                    <div class="col-md-4">
                        <a href="http://www.aihw.gov.au/publication-detail/?id=10737418510&tab=2" target="_blank"><img class="hvr-grow-rotate" src="img/heartfact4.svg"></a>
                        <h3 class="text-center">Cardiovascular disease cost the government about $5.9 billion in 2004–05.</h3>
                    </div>
                    <div class="col-md-4">
                        <a href="http://www.heartfoundation.org.au/information-for-professionals/data-and-statistics/Pages/default.aspx" target="_blank"><img class="hvr-grow-rotate" src="img/heartfact5.svg"></a>
                        <h3 class="text-center">Cardiovascular disease claimed the lives of 43,603 Australians (30% of all deaths) in 2013.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blockRisks" >
        <div class="container">
            <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                <h2 class="text-center">Risk Factors</h2>
            </div>
            <div id="sectionRisks" class="col-md-10 col-md-offset-1">
                <div class="row wow fadeInRight">
                    <div class="col-md-6">
                        <a href="http://www.betterhealth.vic.gov.au/bhcv2/bhcarticles.nsf/pages/Congestive_heart_failure_(CHF)?open" target="_blank"><img class="hvr-buzz" src="img/heartrisk1.svg"></a>
                        <h3 class="text-center">High Blood pressure</h3>
                        <p class="text-center">3/4 of people with chronic heart failure have high blood pressure.</p>

                    </div>
                    <div class="col-md-6">
                        <a href="http://www.betterhealth.vic.gov.au/bhcv2/bhcarticles.nsf/pages/Heart_disease_when_you're_fit_and_healthy?open" target="_blank"><img class="hvr-buzz" src="img/heartrisk2.svg"></a>
                        <h3 class="text-center">High Cholesterol</h3>
                        <p class="text-center">People with high cholesterol are 2x more likely to develop heart disease</p>

                    </div>

                </div>

                <div class="row wow fadeInLeft">
                    <div class="col-md-4">
                        <a href="http://www.world-heart-federation.org/cardiovascular-health/cardiovascular-disease-risk-factors/diabetes/" target="_blank"><img class="hvr-buzz" src="img/heartrisk3.svg"></a>
                        <h3 class="text-center">Diabetes</h3>
                        <p class="text-center">People with diabetes are 2x as likely to develop heart disease.</p>

                    </div><div class="col-md-4">
                        <a href="http://www.nppd.com/assets/energyinsight/january_february2015_article4.pdf" target="_blank"><img class="hvr-buzz" src="img/heartrisk4.svg"></a>
                        <h3 class="text-center">Despression</h3>
                        <p class="text-center">People with depression are 25-40% more likely to die from heart disease</p>

                    </div><div class="col-md-4">
                        <a href="https://stanfordhealthcare.org/medical-conditions/healthy-living/obesity.html" target="_blank"><img class="hvr-buzz" src="img/heartrisk5.svg"></a>
                        <h3 class="text-center">Obesity</h3>
                        <p class="text-center">Coronary artery disease is present 10x more often in people who are obese</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blockLifestyle" >
        <div class="container">
            <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                <h2 class="text-center">You're at risk if you...</h2>
            </div>
            <div id="sectionLifestyle" class="col-md-10 col-md-offset-1">
                <div class="row wow fadeInRight">
                    <div class="col-md-6">
                        <a href="http://www.cdc.gov/tobacco/basic_information/health_effects/heart_disease/" target="_blank"><img class="hvr-skew" src="img/heartlifestyle1.svg"></a>
                        <h3 class="text-center">Smoke</h3>
                        <p class="text-center">People who smoke are 2-4x as likely to develop heart disease.</p>

                    </div>
                    <div class="col-md-6">
                        <a href="http://www.world-heart-federation.org/cardiovascular-health/cardiovascular-disease-risk-factors/" target="_blank"><img class="hvr-skew" src="img/heartlifestyle2.svg"></a>
                        <h3 class="text-center">Eat a poor diet</h3>
                        <p class="text-center">People with a diet high in saturated fat are 30% more likely to devlop heart disease</p>

                    </div>

                </div>

                <div class="row wow fadeInLeft">
                    <div class="col-md-6">
                        <a href="http://www.betterhealth.vic.gov.au/bhcv2/bhcarticles.nsf/pages/Heart_disease_when_you're_fit_and_healthy?open" target="_blank"><img class="hvr-skew" src="img/heartlifestyle3.svg"></a>
                        <h3 class="text-center">Don’t Exercise</h3>
                        <p class="text-center">People who don’t exercise are 50% more likely to develop heart disease</p>

                    </div>
                    <div class="col-md-6">
                        <a href="http://www.knowyourlimits.info/know%E2%80%A6-effects-alcohol" target="_blank"><img class="hvr-skew" src="img/heartlifestyle4.svg"></a>
                        <h3 class="text-center">Drink Alcohol Excessively</h3>
                        <p class="text-center">People who binge drink or drink heavily are 2x more likely to have a fatal heart attack.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blockLower" >
        <div class="container-fluid">
            <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                <h2 class="text-center">How do I lower my risk?</h2>
            </div>
            <div id="sectionLower" class="col-md-10 col-md-offset-1">
                <div class="row wow fadeInRight">
                    <div class="col-md-3">
                        <a href="http://www.nhlbi.nih.gov/health/health-topics/topics/hdw/atrisk" target="_blank"><img class="hvr-wobble-vertical" src="img/prevention1.svg"></a>
                        <h3 class="text-center">Quit Smoking</h3>
                        <p class="text-center">If you smoke, you are more than twice as likely to have a heart attack as nonsmokers, and you’re much more likely to die if you do have a heart attack.</p>

                    </div>
                    <div class="col-md-3">
                        <a href="http://www.nhlbi.nih.gov/health/resources/heart/heart-cholesterol-hbc-what-html" target="_blank"><img class="hvr-wobble-vertical" src="img/prevention2.svg"></a>
                        <h3 class="text-center">Improve cholesterol levels</h3>
                        <p class="text-center">You're more likely to get heart disease if you have: Total cholesterol level over 200, HDL ("good") cholesterol level under 40, LDL ("bad") cholesterol level over 160, Triglycerides over 150</p>

                    </div>
                    <div class="col-md-3">
                        <a href="http://www.heart.org/HEARTORG/Conditions/HighBloodPressure/UnderstandYourRiskforHighBloodPressure/Understand-Your-Risk-for-High-Blood-Pressure_UCM_002052_Article.jsp#.ViT0XhOqqko" target="_blank"><img class="hvr-wobble-vertical" src="img/prevention3.svg"></a>
                        <h3 class="text-center">Control High Blood Pressure</h3>
                        <p class="text-center">More than 50 million people in the U.S. have hypertension, or high blood pressure, making it the most common heart disease risk factor. Exercise and healthy eating help. Some people may need medicine to control their blood pressure, too.</p>

                    </div>
                    <div class="col-md-3">
                        <a href="http://www.betterhealth.vic.gov.au/bhcv2/bhcarticles.nsf/pages/healthy_ageing_stay_physically_active?open" target="_blank"><img class="hvr-wobble-vertical" src="img/prevention4.svg"></a>
                        <h3 class="text-center">Get Active</h3>
                        <p class="text-center">People who don't exercise are more likely to get heart disease, and die from it, than people who are active. Check with your doctor before starting a new exercise program, especially if you aren't active now. They can tell you what you can do.</p>

                    </div>

                </div>

                <div class="row wow fadeInLeft">
                    <div class="col-md-3">
                        <a href="https://www.pritikin.com/healthiest-diet/pritikin-eating-plan" target="_blank"><img class="hvr-wobble-vertical" src="img/prevention5.svg"></a>
                        <h3 class="text-center">Follow a heart-healthy diet</h3>
                        <p class="text-center">Eat foods that are low in fat and cholesterol. Just about everyone should eat more fruits, vegetables, whole grains, beans, nuts, legumes, and other plant-based foods. The fiber is good for your cholesterol, and you'll get vitamins the natural way, from foods.</p>

                    </div>
                    <div class="col-md-3">
                        <a href="http://www.betterhealth.vic.gov.au/bhcv2/bhcarticles.nsf/pages/Heart_disease_your_risk-factors_explained?open" target="_blank"><img class="hvr-wobble-vertical" src="img/prevention6.svg"></a>
                        <h3 class="text-center">Get to a healthy weight</h3>
                        <p class="text-center">Losing extra weight is good for your heart. It can also help you lower high blood pressure and manage diabetes.</p>

                    </div>
                    <div class="col-md-3">
                        <a href="http://www.niddk.nih.gov/health-information/health-topics/Diabetes/diabetes-heart-disease-stroke/Pages/index.aspx" target="_blank"><img class="hvr-wobble-vertical" src="img/prevention7.svg"></a>
                        <h3 class="text-center">Control Diabetes</h3>
                        <p class="text-center">Diabetes makes heart disease more likely. Many people who have diabetes don't know it. Get tested and get treated.</p>

                    </div>
                    <div class="col-md-3">
                        <a href="http://kidshealth.org/teen/your_mind/emotions/deal_with_anger.html" target="_blank"><img class="hvr-wobble-vertical" src="img/prevention8.svg"></a>
                        <h3 class="text-center">Manage Stress and Anger</h3>
                        <p class="text-center">Everyone has stress, and it's normal to get angry now and then. When stress and anger flare up, especially if it happens a lot, that's a problem. Managing your stress and handling your anger in healthy ways puts you back in charge.</p>

                    </div>
                </div>
            </div>
        </div>

        <div id="blockRegister" >
            <div class="container">
                <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                    <h2 class="text-center">Seem a bit overwhelming?</h2>
                    <h3 class="text-center">Let us sort out your health plan so you can focus on your studies!</h2>

                </div>
                <div id="sectionRegister" class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp">
                            <a href="/tools" target="_blank"><img class="hvr-grow" src="img/weHelp.svg"></a>
                            <h3 class="text-center">Body Mass Index Calculator and Statistics</h3>
                            <p class="text-center">We can help you track and monitor your BMI as you progress towards your healthier you so that you can seamlessly look back and see how far you’ve come!</p>

                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.25s">
                            <a href="/tools" target="_blank"><img class="hvr-grow" src="img/weHelp2.svg"></a>
                            <h3 class="text-center">Calorie counter and Healthy Eating Tips</h3>
                            <p class="text-center">Our easy to follow healthy eating tips and simple to use calorie counter can help you to watch what you put into your body so your heart can healthily output 100%!</p>

                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                            <a href="/recipes" target="_blank"><img class="hvr-grow" src="img/weHelp3.svg"></a>
                            <h3 class="text-center">Minimise lifestyle risks and Maximise social life</h3>
                            <p class="text-center">We can provide you with the latest techniques in reducing your lifestyle risks like smoking and excessie drinking, and connect you with a network of similarly minded people trying to give their heart and bodies a new start!</p>

                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="1s">
                        <button class="btn btn-info btn-lg btn-block"><a href="auth/login" style="color: #fff;">Register</a></button>
                    </div>
                </div>
            </div>
        </div>
@endsection

@stop