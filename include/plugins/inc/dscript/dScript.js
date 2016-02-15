/*

~ Version: 0.01a Apple Cake
~ Developed by MastaCoder
~ Under MIT License :)

*/

/*dScript API*/
var dScript_API_Version; dScript_API_Version = "0.01a"; //Change this to your version of dScripts Version
var dScript_API_Model; dScript_API_Model = "Official"; //Change this to the name of your dScript Version
var dScript_API_Base; dScript_API_Base = "00"; //Don't change this so that people know the base of your dScript API

/*Shortcuts*/
var d; d = document;
var c; c = console;
var a; a = alert;
var p; p = prompt;

/*Variables for functions*/
var doc_body = document.body.innerHTML;
var doc_title = document.title;
var replaceText;

/*Default dScript Help commands*/
function dScript() { /*Please run all functions with (); at the end if you see this!*/ c.warn("dScript v" + dScript_API_Version + " installed successfully!") }
function dScript_help(help) { c.warn(":dScript Commands: some major functions of this script."); c.log("fRandomNumber: Generate a random number between 1 - 10."); c.log("fTemplate: Changes website to a bootstrap template."); c.log("dclear: Clears all content of a website body."); c.log("cspam: Spam the console with warnings."); c.log("ireplace: Quick replace key words in a text."); c.log("Many more commands can be found in the documentations."); c.warn(":dScript Shortcuts: some shortcuts you can use."); c.log("c = console"); c.log("d = document"); c.log("a = alerts"); c.log("p = prompt"); }

/*dScript Functions*/
function dhtml(db_html) { document.body.innerHTML = db_html; }
function ihtml(d, d_html) { document.getElementById(d).innerHTML = d_html; }
function ihref(d, d_href) { document.getElementById(d).href = d_href; }
function ivalue(d, d_value) { document.getElementById(d).value = d_value; }
function icolor(d, d_color) { document.getElementById(d).style.color = d_color; }
function dcolor(db_color) { document.body.style.backgroundColor = db_color; }
function ireplace(text, p_replace, replace_to) { replaceText = text.replace(p_replace, replace_to); }
function dcheckpoint() { doc_body = document.body.innerHTML; }
function dreset() { dhtml(doc_body); doc_title = d.title; }
function dclear() { document.body.innerHTML = ""; }
function cl(message) { c.log(message); }
function dlocation(location) { document.location = location; }
function dtitle(title) { document.title = title; }

/*Random number function*/
function fRandomNumber() { var selectionArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; var randomNumber = Math.floor(Math.random()*selectionArray.length); c.warn("Final Result: " + selectionArray[randomNumber]); c.log("To use the final result, please call: selectionArray[randomNumber]"); }

/*Template generator function*/
function fTemplate() { document.body.innerHTML = "<html lang='en'> <head> <title>Bootstrap - Prebuilt Layout</title> <link href='http://localhost/CDN/unitedocument.min.css' rel='stylesheet'> </head> <body> <nav class='navbar navbar-default'> <div class='container-fluid'> <div class='navbar-header'> <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#defaultNavbar1'><span class='sr-only'>Toggle navigation</span><span class='icon-bar'></span><span class='icon-bar'></span><span class='icon-bar'></span></button> <a class='navbar-brand' href='#'>Brand</a></div> <div class='collapse navbar-collapse' id='defaultNavbar1'> <ul class='nav navbar-nav'> <li class='active'><a href='#'>Link<span class='sr-only'>(current)</span></a></li> <li><a href='#'>Link</a></li> <li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Dropdown<span class='caret'></span></a> <ul class='dropdown-menu' role='menu'> <li><a href='#'>Action</a></li><li><a href='#'>Another action</a></li> <li><a href='#'>Something else here</a></li> <li class='divider'></li> <li><a href='#'>Separated link</a></li> <li class='divider'></li><li><a href='#'>One more separated link</a></li></ul></li></ul><form class='navbar-form navbar-left' role='search'><div class='form-group'><input type='text' class='form-control' placeholder='Search'></div><button type='submit' class='btn btn-default'>Submit</button></form><ul class='nav navbar-nav navbar-right'><li><a href='#'>Link</a></li><li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Dropdown<span class='caret'></span></a><ul class='dropdown-menu' role='menu'><li><a href='#'>Action</a></li><li><a href='#'>Another action</a></li><li><a href='#'>Something else here</a></li><li class='divider'></li><li><a href='#'>Separated link</a></li></ul></li></ul></div> </div></nav><div class='container-fluid'><div class='row'><div class='col-md-6 col-md-offset-3'><h1 class='text-center'>Bootstrap Template </h1></div></div><hr></div><div class='container'><div class='row text-center'><div class='col-md-6 col-md-offset-3'>Click outside the blue container to select this <strong>row</strong>. Columns are always contained within a row. <strong>Rows are indicated by a dashed grey line and rounded corners</strong>. </div></div><hr><div class='row'><div class='text-justify col-sm-4'> Click here to select this<strong> column.</strong> Always place your content within a column. Columns are indicated by a dashed blue line. </div><div class='col-sm-4 text-justify'> You can <strong>resize a column</strong> using the handle on the right. Drag it to increase or reduce the number of columns.</div><div class='col-sm-4 text-justify'> You can <strong>offset a column</strong> using the handle on the left. Drag it to increase or reduce the offset. </div></div><hr><div class='row'><div class='text-center col-md-12'><div class='well'><strong> Easily build your page using the Bootstrap components from the Insert panel.</strong></div></div></div><div class='row'><div class='col-sm-4 text-center'><h4>Adding <strong>Buttons</strong></h4><p>Quickly add buttons to your page by using the button component in the insert panel. </p><button type='button' class='btn btn-info btn-sm'>Info Button</button><button type='button' class='btn btn-success btn-sm'>Success Button</button></div><div class='text-center col-sm-4'><h4>Adding <strong>Labels</strong></h4><p>Using the insert panel, add labels to your page by using the label component.</p><span class='label label-warning'>Info Label</span><span class='label label-danger'>Danger Label</span> </div><div class='text-center col-sm-4'><h4>Adding <strong>Glyphicons</strong></h4><p>You can also add glyphicons to your page from within the insert panel.</p><div class='row'><div class='col-xs-4'><span class='glyphicon glyphicon-menu-hamburger' aria-hidden='true'></span></div><div class='col-xs-4'><span class='glyphicon glyphicon-home' aria-hidden='true'> </span> </div><div class='col-xs-4'><span class='glyphicon glyphicon-envelope' aria-hidden='true'></span></div></div></div></div><hr><div class='row'><div class='text-center col-md-6 col-md-offset-3'><h4>Footer </h4><p>Copyright &copy; 2015 &middot; All Rights Reserved &middot; <a href='http://yourwebsite.com/' >My Website</a></p></div></div><hr></div><script src='js/jquery-1.11.2.min.js'></script><script src='js/bootstrap.js'></script></body></html>";}

/*Console spam function*/
function cspam() { c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)"); c.warn("dScript :)");}

/*Startup function*/
function dload(startup) { startup; }