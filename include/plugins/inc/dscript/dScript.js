/*

     _ ____            _       _   
  __| / ___|  ___ _ __(_)_ __ | |_ 
 / _` \___ \ / __| '__| | '_ \| __|
| (_| |___) | (__| |  | | |_) | |_ 
 \__,_|____/ \___|_|  |_| .__/ \__|
                        |_|        

~ Version: 0.01a Peach Soup
~ Developed by MastaCoder
~ Under MIT License :)

*/

// DSCRIPT VARIABLES AND SHORTCUTS //
// ------------------------------- //

//dScript Information API
var dScript_API = "0.01a;Peach Soup;Alpha";

//dScript Shortcuts
var d = document; //Shortcut for document.
var c = console; //Shortcut for console.
var a = alert; //Shortcut for alert();
var p = prompt; //Shortcut for prompt();
var m = Math; //Shortcut for Math.
var db = document.body; //Shortcut for document.body.

//Variables required for some functions
var doc_body = document.body.innerHTML; //Gets the document.body innerHTML on load
var doc_title = document.title; //Gets the document.title on load
var dScript_fadeSpeed = 1.00; //Required for some functions
var dScript_fadeSpeed_ = 0.00 //Required for some functions

//dScript command to check install and information
function dScript() {
	var dScript_API_Split = dScript_API.split(";");
	console.warn("dScript information:");
	console.log("Version: " + dScript_API_Split[0]);
	console.log("Build: " + dScript_API_Split[1]);
	console.log("Base: " + dScript_API_Split[2]);
}

//Required for dScript to show errors
function dScript_error(string) {
	console.error("dScript Error: " + string);
}

// DSCRIPT FUNCTIONS AND INFORMATION //
// --------------------------------- //

// ------ DOCUMENT FUNCTIONS ------- //

var dd = {

	//Commmand to change document innerHTML
	html: function(data) {
		document.body.innerHTML = data;
	},

	//Command to change document background color
	color: function(color) {
		document.body.style.backgroundColor = color;
	},

	//Command to catch document innerHTML under doc_body
	checkpoint: function() {
		doc_body = document.body.innerHTML;
	},

	//Command to reset document data to what is stored in the variables
	reset: function() {
		document.body.innerHTML = doc_body;
		document.title = doc_title;
	},

	//Clear the document.body innerHTML
	clear: function() {
		document.body.innerHTML = "";
	},

	//Changes the document.location
	location: function(url) {
		document.location = url;
	},

	//Changes the document.title
	title: function(string) {
		document.title = string;
	},

	//Reloads the webpage
	reload: function() {
		document.location.reload();
	}
}

// ------ ITEM_CHANGE FUNCTIONS ------- //

var di = {

	//Command to change element innerHTML
	html: function(id, data) {
		document.getElementById(id).innerHTML = data;
	},

	//Command to change element href
	href: function(id, data) {
		document.getElementById(id).href = data;
	},

	//Command to change element value
	value: function(id, data) {
		document.getElementById(id).value = data;
	},

	//Command to change element color
	color: function(id, color) {
		document.getElementById(id).style.color = color;
	},

	//Command to change element color
	src: function(id, string) {
		document.getElementById(id).src = string;
	},

	//Command to change element color
	display: function(id, value) {
		document.getElementById(id).style.display = value;
	},

	//Command to replace character(s) in a string
	replace: function(string, data, new_data) {
		string.replace(data, new_data);
	},

	//Splits a string by a character into an array
	split: function(string, characters) {
		return string.split(characters);
	},

	//Changes an elements width
	width: function(id, value) {
		document.getElementById(id).style.width = value;
	},

	//Get element width
	height: function(id, value) {
		document.getElementById(id).style.height;
	}

}

// ------ CONSOLE FUNCTIONS ------- //

//Log to the console, short form
function cl(string) {
	console.log(string);
}

//Log to the console under a warning, short form
function cw(string) {
	console.warn(string);
}

//Log to the console under a error, short form
function ce(string) {
	console.error(string);
}

//Clears the console. However, doesn't seem to work on some browsers
function cc() {
	console.clear();
}

//Makes the console push a number ascending by 1, starting at 1.
function ccount(string) {
	console.count(string);
}

// ------ DSCRIPT FUNCTIONS ------- //

//All these function will need dScript written before them. eg. dScipt.ranInt(1, 3);
var dScript = {

	//Generates a random number between a set of numbers
	ranInt: function(min, max) {
		var mM = [min, max];
	    if (min == max) { return min; }
	    if (min < 0 || max < 0){ dScript_error("Invalid integer"); return; }
	    if (min > max) { mM.reverse(); }
	    return mM[0] + Math.floor(Math.random()*(mM[1]-mM[0]+1));
	},

	//Selects a random value in an array
	ranArr: function(array) {
		var ds_ = Math.floor(Math.random()*array.length);
		return array[ds_];
	},

	//Generates a random string to your length
	ranStr: function(integer) {
		//Error catch
		if (integer > 0) {} else { dScript_error("Invalid integer"); return 0; }
		//End of Error catch

		var dScript_randomString = "";
		var dScript_characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		for (var dScript_i = 0; dScript_i < integer; dScript_i++)
		dScript_randomString += dScript_characters.charAt(Math.floor(Math.random() * dScript_characters.length));
		return dScript_randomString;
	},

	//Shows an 'are you sure' message when user clicks to leave page
	leaveRequest: function(string) {
		function goodbye(e) {
	        if(!e) e = window.event;
		        e.cancelBubble = true;
		        e.returnValue = string;
		        if (e.stopPropagation) {
			        e.stopPropagation();
			        e.preventDefault();
		        }
	        }
	    window.onbeforeunload=goodbye; 
	},

	//Fades out element at the amount of seconds desired (integer is the speed)
	fadeOut: function(id, integer) {
		//Error catch
		if (integer > 0) {} else { dScript_error("Invalid integer"); return 0; }
		//End of Error catch

		if (dScript_fadeSpeed > 0) {
			setTimeout(function() {
				dScript_fadeSpeed = dScript_fadeSpeed - 0.01;
				document.getElementById(id).style.opacity = dScript_fadeSpeed;
			}, integer);
			setTimeout(function() {
				fFadeOut(id, integer);
			}, integer);
		} else {
			dScript_fadeSpeed = 1.00;
		}
	},

	//Fades in element at the amount of seconds desired (integer is the speed)
	fadeIn: function(id, integer) {
		//Error catch
		if (integer > 0) {} else { dScript_error("Invalid integer"); return 0; }
		//End of Error catch

		if (dScript_fadeSpeed_ < 1) {
			setTimeout(function(){
				dScript_fadeSpeed_ = dScript_fadeSpeed_ + 0.01;
				document.getElementById(id).style.opacity = dScript_fadeSpeed_;
			}, integer);
			setTimeout(function(){
				fFadeIn(id, integer);
			}, integer);
		} else {
			dScript_fadeSpeed_ = 0.00;
		}
	},


	//Gets and stores the ?string= after URL and splits the = into array
	getSearch: function() {
		if (document.location.search.length > 0) {
			return document.location.search.split("&");
		}
	},

	//Log a message a specific number of times in the console
	consoleSpam: function(string, integer) {
		//Error catch
		if (integer > 0) {} else { dScript_error("Invalid integer"); return 0; }
		//End of Error catch

		var dScript_variable = 1;
		logMessage();
		function logMessage() {
			if (dScript_variable <= integer) {
				console.log(string);
				dScript_variable = dScript_variable + 1;
				logMessage();
			}
		}
	}
};

//End of script