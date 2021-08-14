const selectCheckbox = {
    selectbox : document.querySelector('.selectbox'),
    checkboxesEl : document.querySelector('.checkboxes'),

    init(){
        this.showCheckboxList()
    },

    showCheckboxList(){
        if(this.selectbox){
            this.selectbox.addEventListener('click', () => {
                this.checkboxesEl.classList.toggle('checkboxesEl-on')
            })
        }
    }

}

export default selectCheckbox
