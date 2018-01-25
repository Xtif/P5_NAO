$('#flash-message').hide();

/*          API Google maps         */

function initMap() {

    var latlng = new google.maps.LatLng(48.862725, 2.287592000000018);

    var options = {

      center: latlng,
      zoom: 5,

    };

    var map = new google.maps.Map(document.getElementById('map'), options);

    var geocoder = new google.maps.Geocoder();

    $('#locality-button').on('click', function(e) {

      e.preventDefault();

        var request = {

            address: $('#locality-input').val()

        }

        geocoder.geocode(request, function(results, status) {

            if(status === google.maps.GeocoderStatus.OK) {

                var pos = results[0].geometry.location;

                map.setCenter(pos);
                map.setZoom(7);
                positionMarker.setPosition(pos);

            } else {

                $('#flash-message').addClass('error-message').fadeIn(600).append('<div class = "message"><p>Veuillez entrer une localité valide</p> <br /></div>').delay(1300).fadeOut(600);
                $('#locality-button').prop('disabled', true);

                setTimeout(function() {

                    $('.message').remove();
                    $('#locality-button').prop('disabled', false);
                    $('#flash-message').removeClass('error-message');

                }, 2600);

            }

        });

    });

}
