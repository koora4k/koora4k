// ---today---
var date = new Date();
var today = date.getDate();
var month= date.getMonth()+1;
var year =date.getFullYear();
var fulldate = today + "/" + month + "/" + year ;
document.getElementById("time").innerHTML =fulldate;



// ------yesterday----
var date = new Date();
var today = date.getDate()-1;
var month= date.getMonth()+1;
var year =date.getFullYear();
var fulldate = today + "/" + month + "/" + year ;
document.getElementById("timeing").innerHTML =fulldate;

// ------tomorrow---
var date = new Date();
var today = date.getDate()+1;
var month= date.getMonth()+1;
var year =date.getFullYear();
var fulldate = today + "/" + month + "/" + year ;
document.getElementById("timet").innerHTML =fulldate;


