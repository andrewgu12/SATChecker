// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

function searchTests() {
	document.body.style.cursor = "wait";
	var test = document.getElementById("test");
	var testValue = test.options[test.selectedIndex].value;
	var test = document.getElementById("test");
	var testValue = test.options[test.selectedIndex].value;

	$.post (
		"search.php", 
		{'firstName' : firstNameValue, 'lastName' : lastNameValue, 'grade' : gradeValue },
		function(data) {
			document.getElementById("searchOutput").innerHTML=data;
			document.body.style.cursor="auto";
		}
	);
}