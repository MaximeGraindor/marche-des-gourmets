const countdown = {
    timestampElt : document.getElementById('date-timestamp'),
    spanDaysElt : document.getElementById('day'),
    spanHoursElt : document.getElementById('hour'),
    spanMinutesElt : document.getElementById('minute'),
    spanSecondsElt : document.getElementById('second'),


    init(){
        this.refreshcountdown()
    },

    setNewCountdown(){
        if(this.timestampElt){
            let currentTimestamp = Date.now()
            let timeBetweenDate = this.timestampElt.textContent - currentTimestamp

            let days = Math.floor(timeBetweenDate / (1000 * 60 * 60 * 24));
            let hours = Math.floor((timeBetweenDate % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((timeBetweenDate % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((timeBetweenDate % (1000 * 60)) / 1000);

            if(this.spanDaysElt.innerText) this.spanDaysElt.innerText = days
            if(this.spanHoursElt.innerText) this.spanHoursElt.innerText = hours
            if(this.spanMinutesElt.innerText) this.spanMinutesElt.innerText = minutes
            if(this.spanSecondsElt.innerText) this.spanSecondsElt.innerText = seconds
        }

    },

    refreshcountdown(){
        setInterval(()=>{
            this.setNewCountdown()
        }, 1000);
    }
}

export default countdown
