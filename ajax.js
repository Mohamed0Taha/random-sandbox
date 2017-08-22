
$(document).ready(function(){
$("#submit").click(function(){
var first = $("#first").val();
var second = $("#second").val();


var dataString = 'first='+ first + '&second='+ second;
if(first==''||second=='')
{
alert("Please Fill The numbers");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajax_2.php",
data: dataString,
cache: false,
success: function(result){
document.getElementById("content").innerHTML = result
}
});
}
return false;
});
});