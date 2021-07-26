function refresh(){
  var t = 1000; // rafraîchissement en millisecondes
  setTimeout('showDate()',t)
}

function showDate() {
  var date = new Date()
  var h = date.getHours();
  var m = date.getMinutes();
  var s = date.getSeconds();
  if( h < 10 ){ h = '0' + h; }
  if( m < 10 ){ m = '0' + m; }
  if( s < 10 ){ s = '0' + s; }
  var time = h + 'h : ' + m + 'mn : ' + s + 's'
  document.getElementById('horloge').innerHTML = time;
  refresh();
}