const countdown = {
    timestamp : document.getElementById('date-timestamp').textContent,
    spanDaysElt : document.getElementById('day'),
    spanHoursElt : document.getElementById('hour'),
    spanMinutesElt : document.getElementById('minute'),
    spanSecondsElt : document.getElementById('second'),


    init(){
        this.refreshcountdown()
    },

    setNewCountdown(){
        let currentTimestamp = Date.now()
        let timeBetweenDate = this.timestamp - currentTimestamp

        let days = Math.floor(timeBetweenDate / (1000 * 60 * 60 * 24));
        let hours = Math.floor((timeBetweenDate % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((timeBetweenDate % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((timeBetweenDate % (1000 * 60)) / 1000);

        this.spanDaysElt.innerText = days
        this.spanHoursElt.innerText = hours
        this.spanMinutesElt.innerText = minutes
        this.spanSecondsElt.innerText = seconds
    },

    refreshcountdown(){
        setInterval(()=>{
            this.setNewCountdown()
        }, 1000);
    }
}

export default countdown
