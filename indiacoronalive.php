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
                    <th class="text-capitalize">Last Updated Date/Time</th>
                    <th  class="text-capitalize">State</th>
                    <th class="text-capitalize">Confirmed</th>
                    <th class="text-capitalize">Active</th>
                    <th class="text-capitalize">Recovered</th>
                    <th class="text-capitalize">Deaths</th>

                </tr>

                <?php 
                    $data = file_get_contents('https://api.covid19india.org/data.json');
                    $coronadatas = json_decode($data, true);

                    $statecount = count($coronadatas['statewise']);

                    $i=1;
                    while($i < $statecount){
                        ?>

                        <tr>
                            <td><?php echo $coronadatas['statewise'][$i]['lastupdatedtime'] . "<br>";?></td>
                            <td><?php echo $coronadatas['statewise'][$i]['state'] . "<br>";?></td>
                            <td><?php echo $coronadatas['statewise'][$i]['confirmed'] . "<br>";?></td>
                            <td><?php echo $coronadatas['statewise'][$i]['active'] . "<br>";?></td>
                            <td><?php echo $coronadatas['statewise'][$i]['recovered'] . "<br>";?></td>
                            <td><?php echo $coronadatas['statewise'][$i]['deaths'] . "<br>";?></td>
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


        function fetch(){
            $.get("https://api.covid19api.com/summary",
                function (data){
                    var tbval = document.getElementById('tbval');

                    for(var i=1; i<(data['Countries'].length); i++){
                        var x = tbval.insertRow();
                        x.insertCell(0);

                        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                        tbval.rows[i].cells[0].style.background = '#7a4a91';
                        tbval.rows[i].cells[0].style.color = '#fff';

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