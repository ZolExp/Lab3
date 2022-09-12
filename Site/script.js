document.querySelector("button").onclick = myClick;

function myClick() {
    let email = document.querySelector("email").value
    document.querySelector(".out").innerHTML = email
}