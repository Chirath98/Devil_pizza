document.getElementById("buttonCalorie").addEventListener("click", function() { getFoodCalorie(); });

/* Food Calorie */
async function getFoodCalorie() {
    var from = document.getElementById('inputFoodname').value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === this.DONE) {
            // Typical action to be performed when the document is ready:
            // document.getElementById("demo").innerHTML = xhttp.responseText;
            // alert(this.responseText);
            var x = JSON.parse(this.responseText);
            alert(Object);
            document.getElementById('name').innerHTML = "Food Name: " + x[0].name;
            document.getElementById('calories').innerHTML = "Calories: " + x[0].calories + "cal";
            document.getElementById('fat_total').innerHTML = "Total fat: " + x[0].fat_total_g + "g";
            document.getElementById('protein').innerHTML = "Protein: " + x[0].protein_g + "g";

        }
    };
    xhttp.open("GET", "https://nutrition-by-api-ninjas.p.rapidapi.com/v1/nutrition?query=" + from);
    xhttp.setRequestHeader("x-rapidapi-host", "nutrition-by-api-ninjas.p.rapidapi.com");
    xhttp.setRequestHeader("x-rapidapi-key", "63ad00d3edmsh008aecf1befe320p1a3376jsn54c1f963d922");
    xhttp.send();
}

/*
document.getElementById('name').innerHTML = x[0].name + " " + x[1].name;
document.getElementById('calories').innerHTML = x[0].calories + " " + x[1].calories;
document.getElementById('fat_total').innerHTML = x[0].fat_total_g + " " + x[1].fat_total_g;
document.getElementById('protein').innerHTML = x[0].protein_g + " " + x[1].protein_g;

*/