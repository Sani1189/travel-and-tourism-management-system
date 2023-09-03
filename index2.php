<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>

    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="weather-container">
        <img class="weather-image" src="photos/weather.jpg" alt="Weather Image">

        <div class="weather-wrapper">
            <div class="weather-card">
                <div class="weather-row">
                    <form method="post">
                        <input class="city-input" type="text" name="city" placeholder="Enter the City">
                        <label for="submit"><i class="fa-solid fa-arrow-right-to-bracket"></i></label>
                        <input class="submit-btn" id="submit" name="submit" type="submit" value="View">
                    </form>
                </div>
                <?php
                

                if(isset($_POST['submit'])){
                   $city=$_POST['city'];

                   $climate=json_decode(file_get_contents('https://api.openweathermap.org/data/2.5/forecast?q='.$city.'&APPID=8cdaaab52e54b340b47b6d48143bd1bc&units=metric'));

                   $match=explode(" ",$climate->list[0]->dt_txt);
                   $part=$match[0];

            echo   '</div>
                   <div class="row2">
                       <div class="col1">
                           <p>'.floor($climate->list[0]->main->temp).'</p>
                           <p>°C</p>
                       </div>
                       <div class="col2">
                           <div class="row1">
                                <p>'.$climate->list[0]->weather[0]->main.'</p>
                           </div>
                           <div class="row2">
                                <p>Feels like - '.$climate->list[0]->main->feels_like.'°</p>
                                <p>Max Temp - '.$climate->list[0]->main->temp_max.'°</p>
                                <p>Min Temp - '.$climate->list[0]->main->temp_min.'°</p>
                           </div>
                       </div>
                       <div class="col3">
                           <div class="row">
                                <p>Wind speed - '.$climate->list[0]->wind->speed.' m/s</p>
                                <p>Visibility - '.$climate->list[0]->visibility.' m</p>
                                <p>Humidity - '.$climate->list[0]->main->humidity.' %</p>
                           </div>
                       </div>
                   </div>
       
                   <div class="row3">
                       <div class="card2">
                           <p class="row1">'.date('l', strtotime($part)).'</p>
                           <p class="row2">';
                           
                           if($climate->list[0]->weather[0]->main=="Rain"){
                              echo '<i class="fa-solid fa-cloud-rain"></i>';
                           }
                           else if($climate->list[0]->weather[0]->main=="Clear"){
                                  echo '<i class="fa-regular fa-sun"></i>';
                           }
                           else{
                               echo '<i class="fa-solid fa-cloud"></i>';
                           }
                           
                           
                    echo  '</p>
                           <p class="row3">'.floor($climate->list[0]->main->temp).'°</p>
                       </div>';

                        for($i=1;$i<sizeof($climate->list);$i++){
                        $match=explode(" ",$climate->list[$i]->dt_txt);
                        $part2=$match[0];
                         if($part!=$part2){
                         
                    echo   '<div class="card2">
                            <p class="row1">'.date('l', strtotime($part2)).'</p>
                            <p class="row2">';
                            
                            if($climate->list[$i]->weather[0]->main=="Rain"){
                               echo '<i class="fa-solid fa-cloud-rain"></i>';
                            }
                            else if($climate->list[$i]->weather[0]->main=="Clear"){
                                   echo '<i class="fa-regular fa-sun"></i>';
                            }
                            else{
                                echo '<i class="fa-solid fa-cloud"></i>';
                            }
                            
                            
                     echo  '</p>
                            <p class="row3">'.floor($climate->list[$i]->main->temp).'°</p>
                        </div>';

                         }
                         $match=explode(" ",$climate->list[$i]->dt_txt);
                         $part=$match[0];
                      }
                       


            echo    '</div>
       
               </div>
               </div>';
                }

            ?>

              
            </div>
        </div>
    </div>
    
</body>
</html>