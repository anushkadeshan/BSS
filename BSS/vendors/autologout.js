
  idleTime = 0;
$(document).ready(function() {

    var idleInterval = setInterval("timerIncrement()", 2000); // 1 minute //60000
    $(this).mousemove(function(e) {
        idleTime = 0;
    });
    $(this).keypress(function(e) {
        idleTime = 0;
    });

});

function timerIncrement() {

    idleTime = idleTime + 1;

    if (idleTime >= 5) {
        window.location =  'base_url/Login_controller/Logout2';
    }
}