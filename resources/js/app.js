import countdown from './partials/countdown'
import selectCheckbox from './partials/selectCheckbox'
import responsiveMenu from './partials/responsiveMenu'

countdown.init()
selectCheckbox.init()
responsiveMenu.init()


lightbox.option({
    'resizeDuration': 0,
    'wrapAround': true,
    'imageFadeDuration': 0,
  })

const selectElt = document.getElementById('quantity')

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




