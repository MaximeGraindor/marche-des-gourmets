import countdown from './partials/countdown'
import selectCheckbox from './partials/selectCheckbox'
import responsiveMenu from './partials/responsiveMenu'

countdown.init()
selectCheckbox.init()
responsiveMenu.init()




const selectElt = document.getElementById('ticket')

const fixPrice = 5
const amountElt = document.getElementById('amount')
const amountInputHidden = document.getElementById('amountInputHidden')

function updateAmount(){
    window.requestAnimationFrame(updateAmount)
    amountElt.innerText = fixPrice * selectElt.value
    amountInputHidden.value = fixPrice * selectElt.value
}

updateAmount()

//----------------------------------------------------------------




