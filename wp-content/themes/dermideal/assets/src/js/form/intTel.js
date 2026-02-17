export const intTel = ()=>{
    document.addEventListener("DOMContentLoaded", function() {
        const input = document.querySelector("#user_phone");
        if (!input) return;
        window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: (success, failure) => {
                fetch("https://ipapi.co/json")
                    .then((res) => res.json())
                    .then((data) => success(data.country_code))
                    .catch(() => success("us"));
            },
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.2/build/js/utils.js"
        });
    });
}