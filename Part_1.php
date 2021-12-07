




<html>
        <header>
                <nav></nav>
        </header>
        <style>

                body{
                        text-align: center;
                        background-image: url("https://wallpapersmug.com/large/7e3336/mars-space-surface-planet-4k-8k.jpg");
                        background-size:auto;

                }


                div{
                        background-color: white;
                        background: rgb(188,213,228, 0.2);
                        margin-top: 200px;
                        margin-left: 550px;
                        margin-right: 550px;
                        margin-bottom: 10px;
                        
                }

                .column {
                        float: left;
                        width: 33.33%;
                        padding: 15px;
                }

                img { 
                        border-radius: 8px;
                }

                h2 {
                        font-family:garamond,serif;

                }      

                form {
                font-family:garamond,serif;
                }

                input {
                opacity: 0.5;
                }

                input:hover {
                opacity: 1.0;
                }
        </style>


        <body>
                <title>Mars Rover</title>
                        <div>
                        
                                <p style="text-align:center;font-family:georgia,garamond,serif;font-size:46px;font-style:italic;" input type="refresh"> The Mars Rover</p>


                                <form method = "POST" action = "Part_1.php">
                                <style>

                                </style>

                                <h2> Choose a Year </h2>

                                <input class= "check" type="checkbox" id="2016" name="2016" value="2016"/>2016
                                <input class= "check" type="checkbox" id="2017" name="2017" value="2017"/>2017
                                <input class= "check" type="checkbox" id="2018" name="2018" value="2018"/>2018
                                <input class= "check" type="checkbox" id="2019" name="2019" value="2019"/>2019
                                <input class= "check" type="checkbox" id="2020" name="2020" value="2020"/>2020



                                <h2> Choose a Camera </h2>
                                <input type="checkbox" id="FHAZ" name="FHAZ" value="FHAZ" onclick="Valid_Selection">FHAZ
                                <input type="checkbox" id="RHAZ" name="RHAZ" value="RHAZ" onclick="Valid_Selection">RHAZ
                                <input type="checkbox" id="NAVCAM" name="NAVCAM" value="NAVCAM" onclick="Valid_Selection">NAVCAM

                                <br>
                                <br>
                                <input type="Submit" value="Submit">

                                

                        
                        </div>
                </form>

        </body>
</html>





<?php

if(isset($_POST['FHAZ'])){
        $Camera = "FHAZ";
                if(isset($_POST['2016'])){
                        $date = "2016-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2017'])){
                        $date = "2017-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2018'])){
                        $date = "2018-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2019'])){
                        $date = "2019-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2020'])){
                        $date = "2020-01-01";
                        include 'APIcollector.php';
                }
}



if(isset($_POST['NAVCAM'])){
        $Camera = "NAVCAM";
                if(isset($_POST['2016'])){
                        $date = "2016-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2017'])){
                        $date = "2017-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2018'])){
                        $date = "2018-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2019'])){
                        $date = "2019-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2020'])){
                        $date = "2020-01-01";
                        include 'APIcollector.php';
                }
}



if(isset($_POST['RHAZ'])){
        $Camera = "RHAZ";
                if(isset($_POST['2016'])){
                        $date = "2016-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2017'])){
                        $date = "2017-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2018'])){
                        $date = "2018-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2019'])){
                        $date = "2019-01-01";
                        include 'APIcollector.php';
                }
                if(isset($_POST['2020'])){
                        $date = "2020-01-01";
                        include 'APIcollector.php';
                }
}
?>