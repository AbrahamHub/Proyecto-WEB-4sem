// sidebar toggle
const btnToggle = document.querySelector('.toggle-btn');

btnToggle.addEventListener('click', function () {
  console.log('clik')
  document.getElementById('mm').classList.toggle('active');
  console.log(document.getElementById('mm'))
});
function abrirv(){
  document.getElementById("subirar").style.display="block";

}
function cerv(){
  document.getElementById("subirar").style.display="none";

}
