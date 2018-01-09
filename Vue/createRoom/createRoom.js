function formulaireScript() {

    var php = '<?php echo genTypeMenu(); ?>';

    var htmldata = '<form>Nom<br><input type=\'text\'' +
    'name=\'Nom\'><br><select>'+
    php +
    '</select><br></form>';
    //document.body.appendChild(form);

    var e = document.createElement('div');
    e.innerHTML = htmldata;
    document.body.appendChild(e);
}
