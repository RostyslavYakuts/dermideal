import * as $ from 'jquery';

/**
 * @var grecaptcha
 * @var localizedScript
 */
export const footerFormHandler = () => {
    const form = document.getElementById("contacts_form");
    if (!form) return;

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const name = form.querySelector("#name").value.trim();
        const nameError = document.querySelector('[data-id="name"]');
        const email = form.querySelector("#email").value.trim();
        const emailError = document.querySelector('[data-id="email"]');
        const age = form.querySelector("#age").value.trim();
        const ageError = document.querySelector('[data-id="age"]');
        const country = form.querySelector("#country").value.trim();
        const countryError = document.querySelector('[data-id="country"]');
        const intention = form.querySelector("#intention").value.trim();
        const referral = form.querySelector("#referral").value.trim();
        const errMsg = form.querySelectorAll(".input-error");
        const confirmLegal = form.querySelector('#confirm_legal').checked;
        const confirmSubscription = form.querySelector('#confirm_subscription').checked;

        const globalMsg = document.getElementById("result_message");
        errMsg.forEach(el => {
            el.textContent = ""; el.classList.add("hidden");
        });

        let valid = true;

        if(age.length < 5){
            ageError.textContent = "Please select option";
            ageError.classList.remove("hidden");
            valid = false;
        }

        if (name.length > 0 && name.length < 2) {
            nameError.textContent = "Please enter your name (at least 2 characters)";
            nameError.classList.remove("hidden");
            valid = false;
        }else if (name.length > 200) {
            nameError.textContent = "Your name is too long. Please keep it under 200 characters.";
            nameError.classList.remove("hidden");
            valid = false;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            emailError.textContent = "Please enter a valid email.";
            emailError.classList.remove("hidden");
            valid = false;
        }

        const countryValue = country;
        if (countryValue.length < 2) {
            countryError.textContent = "Please enter country (at least 2 characters)";
            countryError.classList.remove("hidden");
            valid = false;
        } else if (countryValue.length > 200) {
            countryError.textContent = "Your message is too long. Please keep it under 1000 characters.";
            countryError.classList.remove("hidden");
            valid = false;
        }

        if (!valid) return;



        const pk = localizedScript.pk;
        const nonce = localizedScript.contacts_form_nonce;
        const action = localizedScript.contacts_form_action;


        try {
            const token = await grecaptcha.execute(pk, { action: action });
            const res = await fetch(localizedScript.url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
                },
                body: new URLSearchParams({
                    action: action,
                    name: name,
                    email: email,
                    age: age,
                    intention: intention,
                    referral: referral,
                    country: country,
                    confirm_legal: confirmLegal,
                    confirm_subscription: confirmSubscription,
                    nonce: nonce,
                    recaptcha_token: token,
                }),
            });

            const result = await res.json();
            console.log(result);
            if (result.success === false) {
                globalMsg.innerHTML = result?.data?.message || "Error. Try again later.";
                showThankYouModal('fail');
                form.reset();
                $('.pseudo-select').each(function () {
                    const $select = $(this).find('select');
                    const $value = $(this).find('.pseudo-value');
                    const defaultOption = $select.find('option').first();
                    $select.val(defaultOption.val());
                    $value.text(defaultOption.text());
                    $(this).removeClass('active');
                });
                return;
            }

            form.reset();
            $('.pseudo-select').each(function () {
                const $select = $(this).find('select');
                const $value = $(this).find('.pseudo-value');
                const defaultOption = $select.find('option:selected').first();
                $select.val(defaultOption.val());
                $value.text(defaultOption.text());
                $(this).removeClass('active');
            });
            globalMsg.innerHTML =  result?.data?.message || "Thank you for your message!";
            showThankYouModal('success');
        } catch (error) {
            console.log(error);
            globalMsg.textContent = "Connecting Error. Try again later.";
            showThankYouModal('fail');
        }
    });
};


const showThankYouModal = (result) => {
    const modal = document.getElementById('contacts_modal');
    modal.classList.remove('hidden');
    modal.classList.add(result);

    const closeButton = document.getElementById('modal_close');
    closeButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
};