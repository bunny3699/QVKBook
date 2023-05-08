document.querySelector("#open__popup").addEventListener("click",function(){
    document.body.classList.add("activepopup");
});

document.querySelector("#popup .close__popup").addEventListener("click",function(){
    document.body.classList.remove("activepopup");
});