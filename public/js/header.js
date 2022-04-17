let hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function(){
    document.querySelector("body").classList.toggle("active");
})

window.onload = () =>{
    setTimeout(function() {
        var loader = document.querySelector(".loader-wrapper");
        loader.style.transition = '1s';
        loader.style.opacity = '0';
        loader.style.visibility = 'hidden';
      }, 500);
}
scrollTopButton.onclick = function()
{
    window.scrollTo({
        top : 0 ,
        behavior : "smooth"

    })}


