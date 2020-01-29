let itemMenu = document.querySelectorAll('.nav-item')
let uriServer = window.location.href

if(uriServer.includes("index")) itemMenu[0].classList.add("active")
if(uriServer.includes("atendimento")) itemMenu[1].classList.add("active")
if(uriServer.includes("lista")) itemMenu[2].classList.add("active")

console.log(uriServer.includes("index"));