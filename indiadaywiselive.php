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


     <!------------------------------------ Latest Recordes ------------------------>

    <section class="corona_update container-fluid" >
        <div class="mb-3 pt-5 pb-5 ">
            <h3 class="text-uppercase text-center">Covid-19 Live Updates Of The INDIA Daywise Data</h3>
        </div>

        <div class="table-responsive" >
            <table class="table text-center" id="tbl">

            <?php 

                $jsons_datas = file_get_contents('https://api.covid19india.org/data.json');
                $daydata = json_decode($jsons_datas, true);
                $totalrecords = count($daydata['cases_time_series']);

                $i = 0;

                while($i < $totalrecords){
            ?>
                <tr>
                    <th class="text-left">Date & Month</th>
                    <th  colspan="6"></th>
                </tr>
                <tr>
                    <td colspan="6" class="text-left"><?php echo $daydata['cases_time_series'][$i]['date'] ?></td>
                </tr>
                <tr class="text-capitalize text-white">
                    <th style="color:#000;background: #008aff">Total Confirmed</th>
                    <th style="color:#000;background: #c02424;">Daily Confirmed</th>
                    <th style="color:#000;background: #a7a700;">Daily Cases</th>
                    <th style="color:#000;background: #036f03;">Total Recovered</th>
                    <th style="color:#000;background: #ff2f2f;">Total Cases</th>
                </tr>
                <tr class="mb-5">
                    <td style="color:#000;background: #008aff"><?php echo $daydata['cases_time_series'][$i]['totalconfirmed'] . "<br>";?></td>
                    <td style="color:#000;background: #c02424;"><?php echo $daydata['cases_time_series'][$i]['dailyconfirmed'] . "<br>";?></td>
                    <td style="color:#000;background: #a7a700;"><?php echo $daydata['cases_time_series'][$i]['dailyrecovered'] . "<br>";?></td>
                    <td style="color:#000;background: #036f03;"><?php echo $daydata['cases_time_series'][$i]['totalrecovered'] . "<br>";?></td>
                    <td style="color:#000;background: #ff2f2f;"><?php echo $daydata['cases_time_series'][$i]['totaldeceased'] . "<br>";?></td>
                </tr>
                <?php
                    $i++;
                }
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