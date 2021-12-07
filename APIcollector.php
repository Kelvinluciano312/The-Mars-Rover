<style>
    img {
        text-align: center;
}
</style>

<?php
$year2015 = "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?earth_date={$date}&camera={$Camera}&api_key=9Zuf0CoeDMHwIqDaZQseHxRaGgpGpId7xrAHDPGg";


// Read JSON file
$json_data = file_get_contents($year2015);

// Decode JSON data into PHP array
$response_data = json_decode($json_data,true);

$NasaImage = ($response_data["photos"][0]["img_src"])?? null;
$NasaImage1 = ($response_data["photos"][1]["img_src"])?? null;
$NasaImage2 = ($response_data["photos"][2]["img_src"])?? null;
$NasaImage3 = ($response_data["photos"][3]["img_src"])?? null;
$NasaImage4 = ($response_data["photos"][4]["img_src"])?? null;
$NasaImage5 = ($response_data["photos"][5]["img_src"])?? null;




echo"<br>";


$Pics = array(
$NasaImage,$NasaImage1,$NasaImage2,$NasaImage3,$NasaImage4,
$NasaImage5,);
foreach($Pics as $Y){

echo "<img src= $Y>";
}
?>
