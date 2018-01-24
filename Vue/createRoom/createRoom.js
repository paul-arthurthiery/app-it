$(document).ready(function(){
var max_fields = 10;
var add_input_button = $('.add_input_button');
var field_wrapper = $('.field_wrapper');
var new_field_html = '<div id="selector">'+document.getElementById("dropdown").innerHTML + '<a href="javascript:void(0);" class="remove_input_button" title="Remove field"><i class="fas fa-minus-circle fa-lg" height="20" width="20"></i></a></div>';
var input_count = 1;
// Add button dynamically
$(add_input_button).click(function(){
if(input_count < max_fields){
input_count++;
$(field_wrapper).append(new_field_html);
}
});
// Remove dynamically added button
$(field_wrapper).on('click', '.remove_input_button', function(e){
e.preventDefault();
$(this).parent('div').remove();
input_count--;
});
});
