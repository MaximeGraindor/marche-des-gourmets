const responsiveMenu = {
    menuImgEl : document.querySelector('.menuResponsive-img'),
    menuElt : document.querySelector('.menuResponsive-menu'),

    init(){
        this.showResponsiveMenu()
    },

    showResponsiveMenu(){
        if (this.menuImgEl) {
            this.menuImgEl.addEventListener('click', () => {
                this.menuElt.classList.toggle('menuResponsive-on')
            })
        }

    }
}

export default responsiveMenu
