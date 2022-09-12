document.querySelector("button").onclick = myClick;

function myClick() {
    let email = document.querySelector(".email").value
    document.querySelector(".out").innerHTML = email
}

function transfer(){
    var a = forma.text3.value;
   location.href = "newhtml.html?"+a;
}

var a=location.search.substring(1);
forma.text3.value=a;