var xhrq = require('XMLHttpRequest').XMLHttpRequest;
var xhr = new xhrq();
const butt = document.getElementById("letsgo");
const user = document.getElementById("user");
const pass = document.getElementById("pass");
const errr = document.getElementById("errr")
var sitebase=`https://asilogin-default-rtdb.firebaseio.com/USERS/${user}/data.json`;
butt.addEventListener('click', check, false);
function test(){
    console.log("kys")
}
function check(){
    console.log(user.innerText);
}