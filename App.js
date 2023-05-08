const ul=document.querySelector("ul");
const h3=document.querySelector("h3")
window.addEventListener("scroll",()=>{
    if(window.scrollY>140){
        ul.style.top="-400px"
    }else{
        ul.style.top="15px"
    }
})
window.addEventListener('mousemove',(e)=>{
 h3.style.left=e.pageX+"px"
})
