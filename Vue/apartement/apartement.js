function setMeanTemperatures(tempArray){
  i=0;
  console.log(tempArray);
  let properArray = JSON.parse(tempArray);
  var pointer = $("a.sensor-value");
  for (temperature of properArray){
    $(pointer.get(i)).text("Température moyenne : " + temperature);
    i++;
  };

  while ( pointer.get(i) != null) {
    $(pointer.get(i)).text("Aucune valeur à afficher");
    i++;
  }
  console.log("all done");
}

$(document).ready(function (){
  console.log(roomArray);
  let ajaxRequest = $.get({
    url : "Modele/appartment.php",
    data : {sensorDataRequest: "true", roomArray: roomArray},
    success : function (response) {
      console.log(response);
      setMeanTemperatures(response);
    },
    error : console.log("error in ajax ")
  });

})
