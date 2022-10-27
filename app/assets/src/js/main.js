import "../scss/styles.scss";
import * as bootstrap from 'bootstrap'
import {addNumber} from './sum'
import {divideNumbers} from './division'
import {buttonClickAction} from './events'



document.querySelector('button').addEventListener('click', (evt) => buttonClickAction(evt))
console.log(addNumber(1,1));
console.log(divideNumbers(5,6));