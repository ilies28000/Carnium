// const slider = document.querySelector('.sliderContainer')
// const sliderImages = document.querySelectorAll('.sliderContainer img')
// const leftButton = document.querySelector('.left')
// const rightButton = document.querySelector('.right')
// const step = 1440 // definit le décalage
// let pos = 0 // définit la position en cours.
// let action

// playSlider()

// function playSlider()
// {
//   action = setInterval(
//     function()
//     {
//       pos = (pos+1)%sliderImages.length
//       setPosition(pos)
//     },
//     5000 // toutes les 5 secondes
//   )
// }


// function leftSlide(){
//   pos--
//   if(pos<0){
//     pos=sliderImages.length-1
//   }
//   setPosition(pos)
// }
// function rightSlide(){
//   pos++
//   if(pos>=sliderImages.length)
//   {
//     pos=0
//   }
//   setPosition(pos)
// }


// slider.addEventListener('mouseover',stopSlider)
// slider.addEventListener('mouseout',playSlider)

// function setPosition(pos)
// {
//   slider.style.left = -pos*step+'px' // 960px
// }



// function stopSlider()
// {
//   clearInterval(action)
// }




// leftButton.addEventListener('click',leftSlide)
// rightButton.addEventListener('click',rightSlide)

class Carousel{
    /**
     * @param {HTMLElement} element 
     * @param {Object} options 
     * @param {Object} options.slidesToScroll nombre element a faire defiler
     * @param {Object} options.slidesVisible nombre element visible dans une slide
     */
 
    constructor( element, options = {}){
        this.element = element
        this.options = Object.assign({} ,{
            slidesToScroll : 1,
            slidesVisible : 1
        } , options)
        this.children = [].slice.call(element.children)
        // let root = document.createElement('div')
        // root.setAttribute('class', 'carousel')
        // this.element.appendChild(root)
        let root = this.createDivWithClass('carousel')
        let container = this.createDivWithClass('carousel_container')
        root.appendChild(container)
        this.element.appendChild(root)
        this.children.forEach((child) =>{
            this.createDivWithClass('carousel_item')
            container.appendChild(child)
        })
        // debugger
    }

    /**
     * 
     * @param {string} className 
     * @returns HTMLElement
     */

    createDivWithClass (className){
        let div = document.createElement('div')
        div.setAttribute('class', className)
        return div
    }

}



document.addEventListener('DOMContentLoaded', function() {
    new Carousel(document.querySelector('.slider1'), {
    slidesToScroll : 3 ,
    slidesVisible : 3 ,
})

})