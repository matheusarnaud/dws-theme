// import '../sass/single.scss'

document.addEventListener('DOMContentLoaded', function() {
    const nav = document.querySelector('.wrapper-navbar')

    window.addEventListener("scroll", (event) => {
        let scroll = window.scrollY;

        if (scroll > document.querySelector('header').offsetHeight){
            nav.style.background = "rgba(38, 50, 70, .95)"
        } 
        else {
            nav.style.background = "rgba(38, 50, 70, 1)"
        }
    });
    
    // PROGRESS BAR
    const footer = document.querySelector("footer");
    const progressBarEl = document.querySelector(".progress-bar-container-progress");


    window.addEventListener("scroll", (event) => {
        let scroll = window.scrollY
        let percent = (scroll / (document.body.offsetHeight - window.innerHeight - footer.offsetHeight))*100
        if (scroll > 0){
            progressBarEl.style.width = `${percent}%`
        }
    });

    const topbtn = document.querySelector('.top-scroll')
    const modal = document.querySelector('.modal-wrapper')
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

    function post_time(){
        const divtext = document.querySelector(".text-content")
        const words = divtext.innerText.split(" ").length
        const r_time = Math.round(words/200)
        const text = document.createTextNode(`Leitura de ${r_time} minutos`)
        const text_location = document.querySelector(".time > p")
        if (text_location) {text_location.appendChild(text)}
    }
    post_time()

    const hamb = document.querySelector('.container-hamburguer input')
    hamb.addEventListener('change', () => {
        if (hamb.checked == true){
            document.body.style.overflow = "hidden"
        } else{
            document.body.style.overflow = "auto"
        }
    })

    const button = document.querySelector('.button-search')
    const input = document.querySelector('#search-text')

    button.addEventListener('click', () => {
        input.focus();
    })
})