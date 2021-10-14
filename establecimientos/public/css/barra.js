  
// sidebar toggle
const btnToggle = document.querySelector('.toggle-btn');

btnToggle.addEventListener('click', function () {
  console.log('click')
  document.getElementById('sidebar').classList.toggle('active');
  console.log(document.getElementById('sidebar'))
});
var redondo = $(".redondo");

// agrego la clase blur a todos los 'ítem' que NO sea al que le se le esta aplicando el evento 'hover'
redondo.hover(function() {
  redondo.not($(this)).addClass('blur');
// al perder el foco, retiro la clase a todos los 'item'
}, function() {
  redondo.removeClass('blur');
});
