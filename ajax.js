function ajaxcall()
{

  let data = new FormData(document.getElementById("form"));
 
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "api.php");
  xhr.onload = function () {
    let result=document.getElementById("result");
    result.textContent=this.response;
  };
  xhr.send(data);
  return false;

}