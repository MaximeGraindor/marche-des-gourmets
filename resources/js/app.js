const menuImgEl = document.querySelector('.menuResponsive-img')
const menuElt = document.getElementById('categoryProduct')
console.log(menuElt);

menuImgEl.addEventListener('click', () => {
    menuElt.classList.toggle('menuResponsive-on')
    console.log('test');
})


//----------------------------------------------------------------

const selectbox = document.querySelector('.selectbox')
const checkboxesEl = document.querySelector('.checkboxes')

selectbox.addEventListener('click', () => {
    checkboxesEl.classList.toggle('checkboxesEl-on')
    console.log(checkboxesEl);
})
