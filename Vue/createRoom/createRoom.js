var numberSensors = 1;

function formulaireScript() {
  numberSensors++;
    var e = document.createElement('div');
    e.innerHTML = "<form>Nom<br><input type='text' name='name'" +
    numberSensors +
    "><br>" +
    "<select name='type" +
    numberSensors+
    "'>" +
    document.getElementById('typeMenu').innerHTML +
    "</select><br></form>";

    document.body.appendChild(e);
}
