let menuToggler = document.getElementById("menu")

let sidebar = document.getElementById("sidebar")
let init = 0
menuToggler.addEventListener("click",()=>{
if(init === 0){
    sidebar.style.left = "0px";
    init = 1;
    menuToggler.classList.remove("fa-bars");
    menuToggler.classList.add("fa-times");
    menuToggler.style.transform = "rotate(360deg)";

}
else{
    sidebar.style.left = "-300px";
    menuToggler.classList.remove("fa-times")
    menuToggler.classList.add("fa-bars")
    init = 0
    menuToggler.style.transform = "rotate(0deg)";

}
})
