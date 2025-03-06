var locationInfo = {
    geo: null,
    country: null,
    state: null,
    city: null,
    postalCode: null,
    street: null,
    streetNumber: null,
    reset: function () {
        this.geo = null;
        this.country = null;
        this.state = null;
        this.city = null;
        this.postalCode = null;
        this.street = null;
        this.streetNumber = null;
    },
};

function initAutocomplete() {
    var addressField = document.getElementById("address");
    var autocomplete = new google.maps.places.Autocomplete(
        addressField,
        {
            types: ["geocode"],
        }
    );

    autocomplete.addListener("place_changed", function () {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            return;
        }

        var address = place.address_components;
        var lat = place.geometry.location.lat();
        var lng = place.geometry.location.lng();

        locationInfo.reset();
        locationInfo.geo = [lat, lng];

        for (var i = 0; i < address.length; i++) {
            var component = address[i].types[0];
            switch (component) {
                case "country":
                    locationInfo.country = address[i].long_name;
                    break;
                case "administrative_area_level_1":
                    locationInfo.state = address[i].long_name;
                    break;
                case "locality":
                    locationInfo.city = address[i].long_name;
                    break;
                case "postal_code":
                    locationInfo.postalCode = address[i].long_name;
                    break;
                case "route":
                    locationInfo.street = address[i].long_name;
                    break;
                case "street_number":
                    locationInfo.streetNumber =
                        address[i].long_name;
                    break;
            }
        }

        // Update static map image
        var mapImage = document.getElementById("map-image");
        mapImage.src = `https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyA_KLtDmYZB0Qy_b0f6LHJSlDV2wYYPf8s&center=${lat},${lng}&zoom=14&size=480x400&maptype=roadmap&sensor=false`;

        // Display JSON output
        document.getElementById("js-preview-json").textContent =
        JSON.stringify(locationInfo, null, 4);
        console.log("Selected Address Details:", locationInfo.geo[0]);
        const locationData = {
            Latitude: locationInfo.geo[0],
            Longitude: locationInfo.geo[1]
        };
        console.log(locationData);
    });
}

window.onload = initAutocomplete;