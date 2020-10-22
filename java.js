function mcheck()
{
var mid=document.getElementById("email").value;
var filter=/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9\-]+).([a-z]{2,20})?.([a-z]{2,20})$/;
if(!filter.test(mid))
window.alert("Email-Error");
}
function a()
{
    var p1=document.getElementById("p1").value;
    var p2=document.getElementById("p2").value;
    if(p1!=p2)
    window.alert("password mismatch");
}
function lo()
{
location("login.html");
}