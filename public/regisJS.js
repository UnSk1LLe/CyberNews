var form = document.getElementById('regForm');
form.style.width = "35%";
form.style.marginLeft = "32%";
form.style.marginTop = "2.5%";
form.style.borderRadius = "30px"
form.style.backgroundColor = "white"

var descr = document.getElementById('mainDescr');
descr.style.marginLeft = "38%";
descr.style.fontSize = "25px";

var gender = document.getElementById('gender');
gender.style.marginLeft = "48%";
gender.style.fontWeight = "bold";
gender.style.fontSize = "18px";
var man = document.getElementById('man');
man.style.marginLeft = "34%";
man.style.marginRight = "1%";

var woman = document.getElementById('woman');
woman.style.marginLeft = "2%";
woman.style.marginRight = "1%";

var pass = document.getElementById('password');
pass.type = "password";
pass.style.width = "78%";

var lg = document.getElementById('dLogin');
lg.style.fontWeight = "bold";
lg.style.fontSize = "18px";

var ps = document.getElementById('dPassword');
ps.style.fontWeight = "bold";
ps.style.fontSize = "18px";

var bday = document.getElementById('dBirthday');
bday.style.fontWeight = "bold";
bday.style.fontSize = "18px";

var mail = document.getElementById('dEmail');
mail.style.fontWeight = "bold";
mail.style.fontSize = "18px";

var shPass = document.getElementById('showPass');
shPass.style.width = "10%";
shPass.style.height = "55px";
shPass.style.marginLeft = "5px";
shPass.style.marginTop = "5px";
shPass.style.backgroundColor = "lightgrey"

var fn = document.getElementById('dName');
fn.style.fontWeight = "bold";
fn.style.fontSize = "18px";

var ln = document.getElementById('dSurname');
ln.style.fontWeight = "bold";
ln.style.fontSize = "18px";

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

/*$('#surname').on('input', function() {
    $(this).val($(this).val().replace(/[1234567890!@#$%^&*()_"'`~/|=<>?.,\\№;:*+\][{}]/, ''))
});*/

var em = document.getElementById('email');
em.addEventListener('input', function a() {
	var n = em.value.length;
	if(n >= 5) {
		for(var i = 0; i < n; i++) {
			/*if(em.value[i] == '@')
			{
				email.style.backgroundColor = "#e6f9ff"
				return(true)
			}*/
			if(em.value.includes('@mail.ru') || em.value.includes('@gmail.com') || em.value.includes('@astanait.edu.kz')){
				email.style.backgroundColor = "#e6f9ff"
				return(true)
			}
			}
		}
		email.style.backgroundColor = "#ff00001c"
	return(false)
})

lg.addEventListener('input', function a() {
	if(lg.length > 3 && lg.value != "test")
		return(true)
	return(false)
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

function isLeapYear() {
	let year = document.getElementById('yDate');
    return((year % 4 == 0) && (year % 100 != 0) || (year % 400 == 0));
}

function showPassword(action) {
	if(action == 1) pass.type = "text"
		else pass.type = "password"
}

function showInfo(action) {
	if(action == 1) popup.classList.toggle("show")
		else popup.classList.toggle("show")
}

function isFilled() {
	var audio = new Audio();
  audio.src = 'resourses/registrationSound.mp3';
  audio.autoplay = true;
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

// Get all elements with class="closebtn"
var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
  // When someone clicks on a close button
  close[i].onclick = function(){

    // Get the parent of <span class="closebtn"> (<div class="alert">)
    var div = this.parentElement;

    // Set the opacity of div to 0 (transparent)
    div.style.opacity = "0";

    // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}

var registrate = document.getElementById('registrate');
registrate.innerHTML = "Зарегистрироваться";
registrate.style.backgroundColor = "blue";
registrate.style.width = "34%";
registrate.style.position = "relative";
registrate.style.left = "34%";
registrate.style.borderRadius = "10px"

var st = document.getElementById('passwordStatus');
st.style.fontSize = "15px"
st.style.fontWeight = "bold"
st.style.marginLeft = "-15px"

var acc =  document.getElementById('haveAcc');
acc.style.marginLeft = "38%"

var month = document.getElementById('mDate');
month.style.height = "51px";
month.style.marginTop = "8px";
