/* Password */
document.getElementById("buttonGetPassword").addEventListener("click", function() { getPassword(); });
//alert('Function Loaded');
async function getPassword() {
    await fetch("https://passwordgen.p.rapidapi.com/api/v1/hero-password", {
            "method": "GET",
            "headers": {
                "x-rapidapi-host": "passwordgen.p.rapidapi.com",
                "x-rapidapi-key": "63ad00d3edmsh008aecf1befe320p1a3376jsn54c1f963d922"
            }
        })
        .then(response => response.json())
        .then(response => {
            console.log(response);
            document.getElementById('passwordt').innerHTML = response.password;
        })
        .catch(err => {
            console.log(err);
        });

}