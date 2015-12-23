$(document).ready(function(){
$('#example').countdown({
  date: '5/24/2016 9:00:00',
  offset: -8,
  day: 'Día',
  days: 'Días',
  hour:'Hora',
  hours:'Horas',
  minute:'Minuto',
  minutes:'Minutos',
  second:'Segundo',
  seconds:'Segundos'
  }, function () {
  alert('Done!');
});
                
$('#carouel').superslides({
        inherit_width_from: '.wide-container',
        inherit_height_from: '.wide-container'
});

});