$(document).ready(function()
{
	checkFirstTimeVisit();
})

function checkFirstTimeVisit(){
	var firstTime = localStorage.getItem("typing tutor - first time");
	if(!firstTime) {
    	localStorage.setItem("typing tutor - first time","1");
    	alert('Welcome to visit our website the first time');
	}
}