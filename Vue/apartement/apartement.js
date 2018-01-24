function setMeanTemperatures(tempArray){
  i=0;
  let properArray = JSON.parse(tempArray);
  console.log(properArray);
  var pointer = $("a.sensor-value");
  for (temperature of properArray){
    console.log(temperature);
    $(pointer.get(i)).text(temperature);
    i++;
  }
}

$(document).ready(function (){
  console.log(roomArray);
  let ajaxRequest = $.get({
    url : "Modele/appartment.php",
    data : {sensorDataRequest: "true", roomArray: roomArray},
    success : function (response) {
      setMeanTemperatures(response);
    },
    error : console.log("error in ajax ")
  });
  console.log("sensor data git gotten");
})
