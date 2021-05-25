import { createPopper } from '@popperjs/core'

const popconrn = document.querySelector('#popcorn');
const tooltip = document.querySelector('#tooltip');

createPopper(popconrn, tooltip, {
    placement: 'bottom-end' ,
})

function getArticleCount(){
    var e;   
}