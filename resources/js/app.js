const menuImgEl = document.querySelector('.menuResponsive-img')
const menuElt = document.querySelector('.menuResponsive-menu')
console.log(menuImgEl)

menuImgEl.addEventListener('click', () => {
    menuElt.classList.toggle('menuResponsive-on')
    console.log('test');
})
