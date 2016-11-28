$(function() {
    $("#modal-intro").modal("show");

    var lowercase = "abcdefghijklmnopqrstuvwxyz";
    var alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var alphanumeric = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    var characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890,./;'[]`";
    var morecharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890,./;'[]`~!@#$%^&*()_+{}:<>?|";

    var typing = false;
    var level = 1;
    var time = 10;
    var start = 0;
    var timer = 0;
    var timerId = 0;

    $("#text-input").focus();

    startLevel();
    window.onkeydown = function(event) {
        if (!typing) {
            start = (new Date).getTime();
            typing = true;
        }
        switch (event.keyCode) {
            case 32, 222, 9:
                event.preventDefault();
                break;
        }
    }
    
    $("#game-form").on("submit", function(e) {
        e.preventDefault();
        if ($("#text-input").val() == $("#text-game").text()) {
            level++;
            startLevel();
        }
        else {
            gameOver();
        }
    });

    function startLevel() {
        var selected = lowercase;
        var num = 5;
        var txt = "";
        clearInterval(timerId);
        if (level >= 1 && level <= 5) {
            num = getRandomInt(3, 8);
            time = Math.round((3 - (level-1) * 0.1) * num);
        }
        else if (level >=6 && level <= 10) {
            num = getRandomInt(5, 10);
            selected = alphabet;
            time = Math.round((3 - (level-6) * 0.1) * num);
        }
        else if (level >= 11 && level <= 20) {
            num = getRandomInt(8, 15);
            selected = alphanumeric;
            time = Math.round((2 - (level-10) * 0.1) * num);
        }
        else if (level >= 21 && level <= 30) {
            num = getRandomInt(14, 20);
            selected = characters;
            time = Math.round((2 - (level-20) * 0.1) * num);
        }
        else {
            num = getRandomInt(17, 25);
            selected = morecharacters;
            time = Math.round(0.6 * num);
        }
        for (var i=0; i<num; i++) {
            txt += selected.charAt(getRandomInt(0, selected.length));
        }
        $("#level").text(level);
        $("#text-input").val("");
        $("#text-input").focus();
        $("#text-game").text(txt);
        $("#timer").text(time);
        start = (new Date).getTime();
        timerId = setInterval(setTime, 1000);
    }

    function setTime() {
        if (typing) {
            timer = (new Date).getTime();
            elapsed = Math.round((timer - start) / 1000)
            $("#timer").text(time - elapsed);
            if (time - elapsed == 0) {
                gameOver();
            }
        }
    }

    function gameOver() {
        typing = false;
        $("#modal-message").text("You reached level " + level + "!");
        $("#modal-over").modal("show");
    }

// Returns a random integer between min (included) and max (excluded)
// Using Math.round() will give you a non-uniform distribution!
    function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min)) + min;
    }
})