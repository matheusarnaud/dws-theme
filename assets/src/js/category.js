document.addEventListener('DOMContentLoaded', function() {
    hamb = document.querySelector('.container-hamburguer input')

    hamb.addEventListener("change", () => {
        if (hamb.checked){
            document.body.style.overflow = "hidden"
        } else{
            document.body.style.overflow = "auto"
        }
    })

    const modal = document.querySelector('.modal-wrapper')
    window.addEventListener("scroll", () => {
        let scroll = window.scrollY;

        if ( scroll > 300 ){
            modal.classList.add("modal-transition")
        } else {
            modal.classList.remove("modal-transition")
        }
    })

    const button = document.querySelector('.button-search')
    const input = document.querySelector('#search-text')

    button.addEventListener('click', () => {
        input.focus();
    })
})