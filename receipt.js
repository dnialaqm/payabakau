function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
	
		var date = document.contactForm.date.value;	
   		var time = document.contactForm.time.value;
		var package = document.contactForm.package.value;	
	


    
	// Defining error variables with a default value
    var  dateErr = timeErr = packageErr = true;
    
 
	    // Validate date
    if(date == "") {
        printError("dateErr", "Please enter Date");
    } 
		    // Validate date
    if(time == "") {
        printError("timeErr", "Please enter Time(Morning/Noon/Evening)");
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
    if(( dateErr || timeErr|| packageErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var receipt = "----Receipt---- " +
                          "\nDate: " + date + 
                          "\nTime: " + time + 
		                  "\nPackage: " + package + 
		                  "\nTotal Price is RM" + total ;

        // Display input data in a dialog box before submitting the form
        alert(receipt);
    }
};