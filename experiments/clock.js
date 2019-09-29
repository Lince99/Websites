//https://www.elated.com/articles/creating-a-javascript-clock/
//http://www.ozhiker.com/electronics/pjmt/
//https://www.boutell.com/newfaq/creating/accounts.html
//https://www.boutell.com/newfaq/creating/sessions.html
//https://secure.php.net/manual/en/book.session.php
                
function updateClock () {
    var currentTime = new Date();
    var currentHours = currentTime.getHours();
    var currentMinutes = currentTime.getMinutes();
    var currentSeconds = currentTime.getSeconds();

    
    // Pad the minutes and seconds with leading zeros, if required
    currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
    currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

    // Choose either "AM" or "PM" as appropriate
    var timeOfDay = (currentHours < 12) ? "AM" : "PM";

    // Convert the hours component to 12-hour format if needed
    currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;

    // Convert an hours component of "0" to "12"
    currentHours = (currentHours == 0) ? 12 : 0;

    // Compose the string for display
    var currentTimeString = currentHours+":"+currentMinutes+":"+currentSeconds+" "+timeOfDay;

    // Update the time display
    document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

function sayHi() {
    alert("It's NOW and TODAY, what do you expect?");
}

function showHide(id) {
    var x = document.getElementById(id);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

