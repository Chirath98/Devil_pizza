//var y = document.getElementById("loclink");
document.getElementById("loclink");

//alert('Function Loaded');
window.onload = function() {
    getLocation();
}

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    // y.href = "/getloc.php?lat=" + position.coords.latitude + "&lon=" + position.coords.longitude;
    document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
    document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;

}








/*
(function onclick() {
    // set a function for each button
    setButtonFunctions();
    // fetch from each API when the page loads
    getPassword();
})();

alert('Function Loaded');

function setButtonFunctions() {
    document.getElementById('buttonGetPassword').onclick = getPassword;
}

async function getPassword() {
    await fetch("https://passwordgen.p.rapidapi.com/api/v1/hero-password", {
            "method": "GET",
            "headers": {
                "x-rapidapi-host": "passwordgen.p.rapidapi.com",
                "x-rapidapi-key": MY_API_KEY
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




fetch("https://passwordgen.p.rapidapi.com/api/v1/hero-password", {
        "method": "GET",
        "headers": {
            "x-rapidapi-host": "passwordgen.p.rapidapi.com",
            "x-rapidapi-key": "63ad00d3edmsh008aecf1befe320p1a3376jsn54c1f963d922"
        }
    })
    .then(response => response.json())
    .then(response => {
        console.log(response);

        //document.getElementById('type').innerHTML = response.type;
        document.getElementById('passwordt').innerHTML = '- ' + response.password + ' -';
    })
    .catch(err => {
        console.log(err);
    });




/* Password */
//alert('Password Copied to Clipboard');
/*
const resultEl = document.getElementById('result');
const lengthEl = document.getElementById('length');
const uppercaseEl = document.getElementById('uppercase');
const lowercaseEl = document.getElementById('lowercase');
const numbersEl = document.getElementById('numbers');
const symbolsEl = document.getElementById('symbols');
const generateEl = document.getElementById('generate');
const clipboard = document.getElementById('clipboard');

const randomFunc = {
    lower: getRandomLower,
    upper: getRandomUpper,
    number: getRandomNumber,
    symbol: getRandomSymbol
}

clipboard.addEventListener('click', () => {
    const textarea = document.createElement('textarea');
    const password = resultEl.innerText;

    if (!password) { return; }

    textarea.value = password;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    textarea.remove();
    alert('Password Copied to Clipboard');
});

generateEl.addEventListener('click', () => {
    const length = +lengthEl.value;
    const hasLower = lowercaseEl.checked;
    const hasUpper = uppercaseEl.checked;
    const hasNumber = numbersEl.checked;
    const hasSymbol = symbolsEl.checked;

    resultEl.innerText = generatePassword(hasLower, hasUpper, hasNumber, hasSymbol, length);
});

function generatePassword(lower, upper, number, symbol, length) {
    let generatedPassword = '';
    const typesCount = lower + upper + number + symbol;
    const typesArr = [{ lower }, { upper }, { number }, { symbol }].filter(item => Object.values(item)[0]);

    // Doesn't have a selected type
    if (typesCount === 0) {
        return 'Select atleast 1 option';
    }

    // create a loop
    for (let i = 0; i < length; i += typesCount) {
        typesArr.forEach(type => {
            const funcName = Object.keys(type)[0];
            generatedPassword += randomFunc[funcName]();
        });
    }

    const finalPassword = generatedPassword.slice(0, length);

    return finalPassword;
}

function getRandomLower() {
    return String.fromCharCode(Math.floor(Math.random() * 26) + 97);
}

function getRandomUpper() {
    return String.fromCharCode(Math.floor(Math.random() * 26) + 65);
}

function getRandomNumber() {
    return +String.fromCharCode(Math.floor(Math.random() * 10) + 48);
}

function getRandomSymbol() {
    const symbols = '!@#$%^&*(){}[]=<>/,.'
    return symbols[Math.floor(Math.random() * symbols.length)];
}

*/