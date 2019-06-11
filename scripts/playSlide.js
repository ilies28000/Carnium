function playSlide() {
    if (touch == false) {
        action = setInterval(() => {
            // console.log(touch)
            // console.log(this.currentSlide + this.slidesToScroll)
            this.gotoItem(this.currentSlide + this.slidesToScroll);
        }, 2000);
    }
    if (touch == true) {
        console.log(touch);
        window.clearInterval(action);
    }
}
