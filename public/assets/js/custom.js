
function denyButton (){
    //console.log(document.getElementsByClassName("js-cookie-consent-agree")[0].parentElement);
    let parent = document.getElementsByClassName("js-cookie-consent-agree")[0].parentElement;
    let deny = document.createElement("a");
    deny.style = "margin-left: 20px;";
    deny.innerText = "Deny Cookies";
    deny.className = "cookie-buttons cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium";
    parent.appendChild(deny); 
}

denyButton()
