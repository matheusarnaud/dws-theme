document.addEventListener('DOMContentLoaded', function() {

    let acc = document.getElementsByClassName("accordion");

    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            if (this.classList.contains("active-accordion")){
                this.classList.remove('active-accordion');
                var panel = this.nextElementSibling;
                panel.style.display = "none";
            }
            else{
                for (i = 0; i < acc.length; i++) {
                    acc[i].classList.remove('active-accordion')
                    var panel = acc[i].nextElementSibling;
                    panel.style.display = "none";
                }
                this.classList.toggle("active-accordion");
                var panel = this.nextElementSibling;
                
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } 
                else {
                    panel.style.display = "block";
                }
            }
        })
    }

    const topbtn = document.querySelector('.top-scroll')
    const modal = document.querySelector('.modal-wrapper')
    topbtn.style.top = "85px"
    window.addEventListener("scroll", (event) => {
        let scroll = window.scrollY
        if (scroll > 300){
            topbtn.style.display = "flex"
        }
        else {
            topbtn.style.display = "none"
        }

        if ( scroll > 300 ){
            modal.classList.add("modal-transition")
        } else {
            modal.classList.remove("modal-transition")
        }
    })

    topbtn.addEventListener("click", () =>{
        window.scroll(0,0)
    })

    const hamb = document.querySelector('.container-hamburguer input')
    const header = document.querySelector('header')
    hamb.addEventListener('change', () => {
        if (hamb.checked == true){
            document.body.style.overflow = "hidden"
        } else{
            document.body.style.overflow = "auto"
        }
    })

})