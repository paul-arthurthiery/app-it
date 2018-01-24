function setMeanTemperatures(tempArray){
  i= 0;
  foreach (temperature in tempArray){
    $(".sensor-value").get(i).text(temperature);
  }
}

$(document).ready(
  var roomArray = " <?php echo $roomArray ?> ";
  var ajaxRequest = $.get({
    url : "../../Modele/apartement.php",
    data : {"sensorDataRequest" : "true", "$roomArray" : roomArray},
    success : setMeanTemperatures(data);
  });
  console.log("sensor data git gotten")
)
