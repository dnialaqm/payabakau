	const form =document.getElementById('form');
	const name =document.getElementById('name');
	const ic =document.getElementById('ic');
	const phone =document.getElementById('phone');
	const email =document.getElementById('email');
	/*
	const date =document.getElementById('date');
	const time =document.getElementById('time');
	const activity =document.getElementById('activity');
	const package =document.getElementById('package');
*/
form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
		const nameValue = name.value.trim();
		const icValue = ic.value.trim();
		const phoneValue = phone.value.trim();
		const emailValue =  email.value.trim();
	/*
		const dateValue = date.value.trim();
		const timeValue = time.value.trim();
		const activityValue = activity.value.trim();
		const packageValue = package.value.trim();
		*/
	if(nameValue === '') {
		setErrorFor(name, 'Username cannot be blank');
	} else {

		setSuccessFor(name);
	}
	
		if(icValue === '') {
		setErrorFor(ic, 'IC cannot be blank');
	} else {
		setSuccessFor(ic);
	}
		if(phoneValue === '') {
		setErrorFor(phone, 'Phone number cannot be blank');
	} else {
		setSuccessFor(phone);
	}
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	/*
		if(dateValue === '') {
		setErrorFor(date, 'Date cannot be blank');
	} else {
		setSuccessFor(date);
	}
		if(timeValue === '') {
		setErrorFor(time, 'Time cannot be blank');
	} else {
		setSuccessFor(time);
	}
	/*
	if(activityValue === '') {
		setErrorFor(activity, 'Password cannot be blank');
	} else {
		setSuccessFor(activity);
	}
	
	if(packageValue === '') {
		setErrorFor(package, 'Password cannot be blank');
	} else {
		setSuccessFor(package);
	}*/
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
	
	function data(){
		var result;
			const nameValue = name.value.trim();
		const icValue = ic.value.trim();
		const phoneValue = phone.value.trim();
		const emailValue =  email.value.trim();
		if(nameValue != null){
			document.getElementById("name1").innerHTML="Name is "+ nameValue;
		}
		if(icValue != null){
			document.getElementById("ic2").innerHTML="ic is "+ icValue;
		}
		if(phoneValue != null){
			document.getElementById("phone3").innerHTML="phone is "+ phoneValue;
		}
		if(emailValue != null){
			document.getElementById("email4").innerHTML="email is "+ emailValue;
		}
	}


// JavaScript Document