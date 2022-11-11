var xhrq = require('XMLHttpRequest').XMLHttpRequest;
var getusername = new xhrq();
var getstuff = new xhrq();
var sitebase=`https://asilogin-default-rtdb.firebaseio.com/USERS/`;
var key = sessionStorage.getItem("sessionkey");
var user = ""
var lmao = ""
//GET THE KEY FROM THE OTHER SIDE
console.log(key);
const stuff = document.getElementById("content");
const save = document.getElementById("save");
stuff.innerHTML=key;
function onstart(){
    getusername.open('GET', sitebase+"-NDp73qvY2Pl4tBzYW0-/verified.json", true).then(
        getusername.send()
    )
}
getusername.onreadystatechange = function(){
    if (this.readyState != 4) {
        console.log("IT DIDNT WORK")
    };
    if (this.status == 200) {
        user = JSON.parse(this.responseText);
        getstuff.open('GET', sitebase+user+"/data.json", true)
        getstuff.send()
    }
}
getstuff.onreadystatechange = function(){
    if (this.readyState != 4) {
        return
    };
    if (this.status == 200) {
        console.log("data acquired")
        lmao=JSON.parse(this.responseText);
        stuff.value=lmao;
    }
}
onstart();