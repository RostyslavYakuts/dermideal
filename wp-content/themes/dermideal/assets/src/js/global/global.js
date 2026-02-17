import './components/PassiveListeners';
import './components/hamburger';
import {hamburger} from "./components/hamburger";
import {recaptcha} from "./components/recaptcha";
import {scrollToTop} from "./components/scrollToTop";
import {formHandler} from "../form/formHandler";

export const global = ()=>{
	hamburger();
	scrollToTop();

	formHandler();

}
document.querySelectorAll('form input, form textarea').forEach(el => {
	el.addEventListener('focus', () => {
		recaptcha();
	}, { once: true });
});

