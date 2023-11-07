// document.getElementById("buttonEmail").addEventListener("click", function() { getEmailVerification(); });

/* Food Calorie */

var from = "dimithrachirath@gmail.com";

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        // Typical action to be performed when the document is ready:
        // document.getElementById("demo").innerHTML = xhttp.responseText;
        // alert(this.responseText);

        // var x = JSON.parse(this.responseText);
        alert(this.responseText);
        // document.getElementById('emailstatus').innerHTML = x[0].status;
        // document.getElementById('reasonstatus').innerHTML = x[0].reason;
    }

};
xhttp.open("GET", "https://validect-email-verification-v1.p.rapidapi.com/v1/verify?email=dimithrachirath@gmail.com");
xhttp.setRequestHeader("x-rapidapi-host", "validect-email-verification-v1.p.rapidapi.com");
xhttp.setRequestHeader("x-rapidapi-key", "63ad00d3edmsh008aecf1befe320p1a3376jsn54c1f963d922");
xhttp.send();