$("#form_phone").intlTelInput({
    initialCountry: "auto",
    geoIpLookup: function(callback) {
        jQuery.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "";
            callback(countryCode);
        });
    },
    preferredCountries: ['ua', 'ru'],
    utilsScript: "js/utils.js"
});