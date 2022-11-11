var xhrq = require('XMLHttpRequest').XMLHttpRequest;
var site='https://asilogin-default-rtdb.firebaseio.com/USERS/pistachio/data.json';
var dat = ""
var xhr = new xhrq();
xhr.onreadystatechange = function () {
    if (this.readyState != 4) return;
    if (this.status == 200) {
        dat = JSON.parse(this.responseText);
        console.log(dat);
    }
};
xhr.open('GET', site, true);
xhr.send();
console.log(dat);