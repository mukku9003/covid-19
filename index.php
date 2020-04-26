<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
    <?php include 'dbcon.php'; ?>

        

</head>
<body onload="fetch()">
    <nav class="navbar navbar-expand-lg nav_style bg-light p-3">
        <a class="navbar-brand pl-5" href="#">Covid-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background: #9d9f0030;">
            <span class="navbar-toggler-icon" style="background: #7a66cf;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 text-capitalize">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#sympid">Symptoms</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#preventid">prevention</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="coronamap.html">Corona Map</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="indiadaywiselive.php">India Daywise Live</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="indiacoronalive.php">India Corona Live</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact</a>
                </li>
                
            
            </ul>
            
        </div>
    </nav>

    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/eksath1.png" width="300" height="300">
                </div>
            </div>

            <div class="col-lg-7 col-md-7 col-12 order-lg-1 order-1">
                <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Let's stay Safe & Fight Together Against C<span class="corona_rot"><img src="images/corona-min.png" width="80" height="80"></span>vid-19 </h1>
                </div>
            </div>
        </div>
    </div>


    <!------------------------------------ Latest Recordes ------------------------>

    <section class="corona_update container-fluid" >
        <div class="mb-3">
            <h3 class="text-uppercase text-center">Covid-19 Live Updates Of The World</h3>
        </div>

        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th>Country</th>
                    <th>Total Confirmed</th>
                    <th>Total Recovered</th>
                    <th>Total Deaths</th>
                    <th>New Confirmed</th>
                    <th>New Recovered</th>
                    <th>New Deaths</th>

                </tr>
            </table>
        </div>
        <!-- <div class="d-flex justify-content-around align-items-center count_style" style="display:none;">
            <div > 
                <h1 class="count">1,524,266</h1> 
                <p>Passengers Screend At Airport </p>
            </div>

            <div > 
                <h1 class="count">512</h1> 
                <p>Active Covid-19 Cases* </p>
            </div>

            <div > 
                <h1 class="count">40</h1> 
                <p>cured/discharged cases </p>
            </div>

            <div > 
                <h1 class="count">9</h1> 
                <p>Death Cases </p>
            </div>
        </div> -->
    </section>


    <!---------------------------About Section--------------------- -->
    <div class="container-fluid sub_section pt-5 pb-5 " id="aboutid"> 
        <div class="section_header text-center mb-5 mt-4">
            <h1>About Covid-19</h1>
        </div>

        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
            <img src="images/corona.jpg" class="img-fluid"  >
            </div>

            <div class="col-lg-6 col-md-6 col-12">
            <h2>What is COVID-19 (Corona-Virus)</h2>
            <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
            </p>
            <p>
            The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 
            The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
            </p>

            </div>
        </div>
    </div>


    <!-- corona symptoms -->

    <div class="container-fluid  pt-5 pb-5 " id="sympid"> 
        <div class="section_header text-center mb-5 mt-4">
            <h1>Coronavirus Symptoms</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/cough.png" class="img-fluid" width="120" height="120">
                    <figcaption>Cough</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/r_n.png" class="img-fluid" width="120" height="120">
                    <figcaption>runny nose</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/fever.png" class="img-fluid" width="120" height="120">
                    <figcaption>Fever</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/cold.png" class="img-fluid" width="120" height="120">
                    <figcaption>Cold</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/tired.png" class="img-fluid" width="120" height="120">
                    <figcaption>tiredness</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/breathing1.png" class="img-fluid" width="120" height="120">
                    <figcaption>difficulty breathing(severe cases)</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>


     <!-- corona Prevention -->

    <div class="container-fluid sub_section  pt-5 pb-5 " id="preventid"> 
        <div class="section_header text-center mb-5 mt-4">
            <h1>6 Steps Prevention Against Coronavirus</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/hand-wash.png" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Washing your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/facemask.png" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Cover your mouth and nose with a cloth face cover when around others</p>
                        </div>
                    </div>
                   
                </div>


                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/avoid.png" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Put distance between yourself and other people.
                            Avoid close contact with people who are sick.
                            Stay home as much as possible.
                            </p>
                        </div>
                    </div>
                   
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/stay-home.png" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay home and self-isolate from others in the household if u feel unwell.</p>
                        </div>
                    </div>
                   
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/news.png" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay informed by wathing news & follow the recommended practices.</p>
                        </div>
                    </div>
                   
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/fevercold.jpg" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>If you have fever, cough and difficulty breathing, seek medical care early.</p>
                        </div>
                    </div>
                   
                </div>

                
            </div>
        </div>


        <!-- contact us  -->

        <div class="container-fluid sub_section  pt-5 pb-5 " id="contactid"> 
            <div class="section_header text-center mb-5 mt-4">
                <h1>Contact Us</h1>
            </div>

            <div class="container" > 
                <div class="row" > 
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <form action="" method="POST">

                        <div class="form-group">
                                <label>Username</label>
                                <input type="username" class="form-control" name="username" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label >Mobile </label>
                                <input type="number" class="form-control" name="mobile" placeholder="mobile no">
                            </div>
                            <div class="form-group">
                                <label >Email </label>
                                <input type="email" class="form-control" name="email" placeholder="name@example.com">
                            </div>

                            <div class="form-group">
                                <label >Select Symptoms </label><br>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasymptoms[]" value="cold">
                                    <label class="custom-control-label" for="customcheckbox1">cold</label>
                                </div>

                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasymptoms[]" value="fever">
                                    <label class="custom-control-label" for="customcheckbox2">fever</label>
                                </div>

                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasymptoms[]" value="breath">
                                    <label class="custom-control-label" for="customcheckbox3">difficulty in breathing</label>
                                </div>

                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasymptoms[]" value="tired">
                                    <label class="custom-control-label" for="customcheckbox4">feeling week</label>
                                </div>
                                
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" name="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form> 
                    </div> 
                </div>      
            </div>
        </div>

        <!-- scroll top -->
        <div class="container scrolltop float-right pr-5">
            <i class="fa fa-arrow-up" onclick="topFun()" id="scBtn"></i>
        </div>

        <!-- footer -->

        <footer class="mt-5">
            <div class="footer_style text-white text-center container-fluid">
                <p> Copyright by MukeshCreation @2019-2020</p>
            </div>
        </footer>

    <script type="text/javascript">

    $('.count').counterUp({
        delay: 10,
        time:3000
    })


        mybutton = document.getElementById("scBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction(){
            if(document.body.scrollTop > 100 || document.documentElement.scrollTop> 100){
                mybutton.style.display = "block";

            } else {
                mybutton.style.display = "none";
                

            }
            
        }

        function topFun(){
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }


        function fetch(){
            $.get("https://api.covid19api.com/summary",
                function (data){
                    var tbval = document.getElementById('tbval');

                    for(var i=1; i<(data['Countries'].length); i++){
                        var x = tbval.insertRow();
                        x.insertCell(0);

                        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                        tbval.rows[i].cells[0].style.background = '#fff';
                        tbval.rows[i].cells[0].style.color = '#000';

                        x.insertCell(1);

                        tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                        tbval.rows[i].cells[1].style.background = '#fff';

                        x.insertCell(2);

                        tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                        tbval.rows[i].cells[2].style.background = '#fff';

                        x.insertCell(3);
                        tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                        tbval.rows[i].cells[3].style.background = '#fff';

                        x.insertCell(4);
                        tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                        tbval.rows[i].cells[4].style.background = '#fff';

                        x.insertCell(5);
                        tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                        tbval.rows[i].cells[5].style.background = '#fff';

                        x.insertCell(6);
                        tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                        tbval.rows[i].cells[6].style.background = '#fff';

                    }
                    
                }
            
            )
        }
    </script>   
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];

    $email = $_POST['email'];
    $coronasymptoms = $_POST['coronasymptoms'];
    $message = $_POST['message'];

    $symp = '';

    foreach($coronasymptoms as $sympts){
        $symp .= $sympts.",";
    }

    $insert = "insert into oc_contactus(username, email, mobile, symptoms, message) VALUES( '$username', '$email', '$mobile', '$symp', '$message' )";
    $query = mysqli_query($con, $insert);
    
    if($query){
        ?>
        <script>
            alert("Insert successful");
        </script>
        <?php
    } else {
        ?>
    
        <script>
            alert("No Insert");
        </script>
        <?php
    }

}

?>