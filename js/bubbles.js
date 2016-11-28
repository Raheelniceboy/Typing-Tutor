$(function() {
    var typing = false;
    var start = 0;
    var timer = 0;
    var current = 0;
    var done = false;
    var alphabet = "abcdefghijklmnopqrstuvwxyz"
    window.onkeydown = function(event) {
        if (!typing) {
            typing = true;
            start = (new Date).getTime();
            setInterval(setTime, 1000);
        }
        switch (event.keyCode) {
            case 32:
            case 222:
            case 9:
            case 8:
                event.preventDefault();
            default:
                break;
        }
    }
    $(document).keypress(function(event) {
        var ch = String.fromCharCode(event.which);
        console.log(ch);
        if (ch == alphabet.charAt(current)) {
            $("#" + alphabet.charAt(current)).addClass("invisible");
            if (current == 25) {
                // success
                done = true;
                var message = "You finished this game in " + $("#timer-text").text() + "!";
                $("#modal-message").text(message);
                $("#modal-success").modal("show");
            }
            else {
                 $("#" + alphabet.charAt(current + 1)).addClass("current");
                 current++;
            }
        }
    });


    function pad ( val ) { return val > 9 ? val : "0" + val; }
    function setTime () {
        if (!done) {
            timer = (new Date).getTime();
            $("#timer-minutes").text(pad(Math.round((timer-start) / 1000 / 60)));
            $("#timer-seconds").text(pad(Math.round((timer-start) / 1000 % 60)));
            $("#cpm").text(Math.round(current / ((timer-start)/1000) * 60));
        }
    }
})