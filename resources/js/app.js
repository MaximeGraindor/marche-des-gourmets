const menuImgEl = document.querySelector('.menuResponsive-img')
const menuElt = document.querySelector('.menuResponsive-menu')
console.log(menuElt);

menuImgEl.addEventListener('click', () => {
    menuElt.classList.toggle('menuResponsive-on')
})


//----------------------------------------------------------------

const selectbox = document.querySelector('.selectbox')
const checkboxesEl = document.querySelector('.checkboxes')

selectbox.addEventListener('click', () => {
    checkboxesEl.classList.toggle('checkboxesEl-on')
})



