
	var link = document.getElementById("link");
	function showMenu(){
		link.style.left="0";
	}
	function hideMenu(){
		link.style.left="-200px";
	}
function get(){

		localStorage.getItem("storeData");
	document.getElementById ("openedData").innerHTML = "Details:"+ storeData +"\n" ;
}


var storeData = localStorage.getItem("storeData");

// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
		  var name = document.contactForm.name.value;
		localStorage.setItem("storeName", name);
		var ic = document.contactForm.ic.value;
		localStorage.setItem("storeIc", ic);
		var email = document.contactForm.email.value;
		localStorage.setItem("storeEmail", email);
   		var mobile = document.contactForm.mobile.value;
		localStorage.setItem("storeMobile ", mobile);
		var date = document.contactForm.date.value;	
		localStorage.setItem("storeDate ", date);
   		var time = document.contactForm.time.value;
		localStorage.setItem("storeTime", time);
		var package = document.contactForm.package.value;	
		localStorage.setItem("storePackage", package);
	


    
	// Defining error variables with a default value
    var nameErr = icErr = emailErr = mobileErr = dateErr = timeErr = packageErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
	  // Validate ic number
    if(ic == "") {
        printError("icErr", "Please enter your IC number");
    } else{
            printError("icErr", "");
            icErr = false;
        }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    
    
	    // Validate date
    if(date == "") {
        printError("dateErr", "Please enter Date");
    } else {
        var regex = /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/;
        if(regex.test(date) === false) {
            printError("dateErr", "Please enter a valid date");
        } else{
            printError("dateErr", "");
            dateErr = false;
        }
    }
	
		    // Validate date
    if(time == "") {
        printError("timeErr", "Please enter Time(Morning/Noon/Evening)");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(time) === false) {
            printError("timeErr", "Please enter a valid time(Morning/Noon/Evening)");
        } else{
            printError("timeErr", "");
            timeErr = false;
        }
    }
    // Validate package
		var total;

    if(package == "Select") {
        printError("packageErr", "Please select your package");
		 total = "130" ; 

    }
 if(package == "Free Package"){
 total = "0";
 }
 if(package == "Package A"){
 total = "130";
 }
 if(package == "Package B"){
 total = "140";
 }
 if(package == "Package C"){
 total = "125";
 }
if(package == "Package D"){
total = "235" ;  
}
if(package == "Package E"){
total = "245" ;  
} 
if(package == "Package F"){
total = "245" ;  
}  
else {
printError("packageErr", "");
packageErr = false;
}
    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || icErr || emailErr || mobileErr || dateErr || timeErr|| packageErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var receipt = "----Receipt---- " +
                          "\n Name: " + name  +
			              "\n IC Number: " + ic + 
                          "\n Email Address: " + email + 
                          "\nMobile Number: " + mobile + 
                          "\nDate: " + date + 
                          "\nTime: " + time + 
		                  "\nPackage: " + package + 
		                  "\nTotal Price is RM" + total ;
				localStorage.setItem("storeData", receipt);

        // Display input data in a dialog box before submitting the form
        alert(receipt);
    }
};