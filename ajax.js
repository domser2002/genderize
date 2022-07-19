// document.addEventListener("DOMContentLoaded",function(){
//     $.ajax({
//         url: 'myFunctions.php',
//         type: 'post',
//         data: { "callFunc1": "1"},
//         success: function(response) { console.log(response); }
//     });
// })
function ajaxcall()
{
// (B1) GET FORM DATA
  var data = new FormData(document.getElementById("form"));
 
  // (B2) AJAX CALL
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "api.php");
  xhr.onload = function () {
    let result=document.getElementById("result");
    result.textContent=this.response;
  };
  xhr.send(data);
  return false;

}