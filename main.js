
//setup vars
let myInput = document.querySelector("#myInput");
let myButton = document.querySelector("#btn");

//Events
myButton.addEventListener('click', togglepassword);

//function
function togglepassword() {
    if(myButton.getAttribute('data-text') == "show"){
        myInput.setAttribute('type', 'text');
        this.setAttribute('data-text', 'hide');
        this.innerHTML = "Hide";
    }else{
        myInput.setAttribute('type', 'password');
        this.setAttribute('data-text', 'show');
        this.innerHTML = "Show";
    }
}
