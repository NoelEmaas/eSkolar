window.addEventListener('scroll',(e)=>{
    const nav = document.getElementById('navigation-bar');
    if(window.scrollY > 0){
      nav.classList.add("add-shadow");
    }else{
      nav.classList.remove("add-shadow");
    }
});