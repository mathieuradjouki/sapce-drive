var add = document.getElementById("add");
var newServices = document.getElementById("FormNewNosServices");
var upadate = document.getElementById('update');
var updateServices = document.getElementById('FormUpdateNosServices');

add.addEventListener("click",(e)=>{changeDisplay(newServices)});
update.addEventListener("click", (e)=>{changeDisplay(updateServices)});
// La fonction {changeDisplay(newServices)} est placé dans une fonction anonyme function(e)
function changeDisplay(e){
  e.style.display = "block";
}
