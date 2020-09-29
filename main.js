var add = document.getElementById("add");
var newServices = document.getElementById("FormNewNosServices");

add.addEventListener("click",(e)=>{changeDisplay(newServices)});
// La fonction {changeDisplay(newServices)} est placé dans une fonction anonyme function(e)
function changeDisplay(e){
  e.style.display = "block";
}
