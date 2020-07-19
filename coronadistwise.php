<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Live Record</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
    <?php //include 'dbcon.php'; ?>

</head>
<body >
    <nav class="navbar navbar-expand-lg nav_style bg-light p-3">
        <a class="navbar-brand pl-5" href="#">Covid-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: red;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 text-capitalize">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
                    <a class="nav-link" href="indiacoronalive.php">India Corona Live</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="coronadistwise.php">India District Wise</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact</a>
                </li>
                
            
            </ul>
            
        </div>
    </nav>


     <!------------------------------------ Latest Recordes ------------------------>

    <section class="corona_update container-fluid" >
        <div class="mb-3 pt-5 pb-5 ">
            <h3 class="text-uppercase text-center">Covid-19 Live Updates Of The INDIA</h3>
        </div>

        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th class="text-capitalize">State</th>
                    <th class="text-capitalize">Confirmed</th>
                    <th class="text-capitalize">Active</th>
                    <th class="text-capitalize">Deceased</th>
                    <th class="text-capitalize">Recovered</th>
                </tr>

                <?php 
                    $data = file_get_contents('https://api.covid19india.org/state_district_wise.json');
                    $coronadatas = json_decode($data, true);
                    foreach($coronadatas as $key => $value){ ?>
                       <tr class="col-sm-6" style="background-color: red;color: white; font-size: 20px;">
                            <td ><?php echo $key . "<br>";?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                       </tr>
                       
                       <?php  
                            foreach($value['districtData'] as $dkey => $dvalue){  ?>
                                
                            <tr>
                                <td><?php echo $dkey . "<br>";?></td>
                                <td><?php echo $dvalue['confirmed'] . "<br>";?></td>
                                <td><?php echo $dvalue['active'] . "<br>";?></td>
                                <td><?php echo $dvalue['deceased'] . "<br>";?></td>
                                <td><?php echo $dvalue['recovered'] . "<br>";?></td>

                            </tr>
                            <?php 

                            }

                        }

                        // echo'<pre'>;
                        // print_r($coronadatas);
                        // exit;
                     ?>
            </table>
        </div>
    </section>


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


        
    </script>   
</body>
</html>