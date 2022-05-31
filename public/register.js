var input = document.getElementById("password");
var warning = document.getElementById("warn");
warn.style.display = "none";
warn.innerHTML = "CapsLock включен!";
warn.style.color = "orange";
warning.style.marginLeft = "17px"
input.addEventListener("keyup", function(event) {
    if (event.getModifierState("CapsLock")) {
        warning.style.display = "block";
    } else {
        warning.style.display = "none"
    }
})

function isUpper(symbol) {
    return((symbol >= 'A' && symbol <= 'Z') || (symbol >= 'А' && symbol <= 'Я'))
}

function isLower(symbol) {
    return((symbol >= 'a' && symbol <= 'z') || (symbol >= 'а' && symbol <= 'я'))
}

function isDigit(symbol) {
    return(symbol >= '0' && symbol <= '9')
}

function passwordComplexityCheck() {
    var passwordString = document.getElementById('password').value;

    let password = {
        upperCase : false,
        lowerCase : false,
        digits : false,
        lengthOf10 : false,
        specialSymbols : false
    }
    password.result = function() {
        return(password.upperCase + password.lowerCase + password.digits + password.lengthOf10 + password.specialSymbols)
    }

    var n = passwordString.length;
    for(let i = 0; i < n; i++) {
        if(isUpper(passwordString[i])) password.upperCase = true;
        else if(isLower(passwordString[i])) password.lowerCase = true;
        else if(isDigit(passwordString[i])) password.digits = true;
        else password.specialSymbols = true;
    }
    if(n > 9) password.lengthOf10 = true;

    var complexity = password.result();
    var indicator = document.getElementById('passwordIndicator');
    var status = document.getElementById('passwordStatus')
    switch(complexity) {
        case 1:
            indicator.style.width = "5%";
            indicator.style.backgroundColor = "red";
            status.style.color = "red";
            status.innerHTML = "Слабый";
            break;
        case 2:
            indicator.style.width = "20%";
            indicator.style.backgroundColor = "orange";
            status.style.color = "orange";
            status.innerHTML = "Ненадёжный";
            break;
        case 3:
            indicator.style.width = "45%"
            indicator.style.backgroundColor = "#e1e729";
            status.style.color = "#e1e729";
            status.innerHTML = "Средний";
            break;
        case 4:
            indicator.style.width = "72%";
            indicator.style.backgroundColor = "#76ff00b5";
            status.style.color = "#76ff00b5";
            status.innerHTML = "Хороший";
            break;
        case 5:
            indicator.style.width = "100%";
            indicator.style.backgroundColor = "#00ff00a6";
            status.style.color = "#00ff00a6";
            status.innerHTML = "Надёжный";
            break;
        default:
            indicator.style.width = "0%"
            indicator.style.backgroundColor = "#919191";
            status.style.color = "#919191";
            status.innerHTML = "Нет пароля";
            break;
    }
}

function showPassword(action) {
    if(action == 1) pass.type = "text"
    else pass.type = "password"
}

function showInfo(action) {
    if(action == 1) popup.classList.toggle("show")
    else popup.classList.toggle("show")
}

var popup = document.getElementById("myPopup");
popup.style.fontSize = "14px";
popup.innerHTML = "Пароль может содержать: 1)строчные буквы 2)заглавные буквы 3)цифры 4)специальные символы (! @ # $ % ^ &) 5)до 25 символов";
function radioCheck(state) {
    if(state == 1){
        document.getElementById('woman').checked = false
    }
    else {
        document.getElementById('man').checked = false
    }
}

$('#name').on('input', function() {
    $(this).val($(this).val().replace(/[1234567890!@#$%^&*()_"'`~/|=<>?.,\\№;:*+\][{}]/, ''))
});
