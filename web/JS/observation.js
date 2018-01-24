//////// Gestion de la carte googlemap ////////////
function initMap() {
  var area = {lat: latitude, lng: longitude};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: area
  });
  var marker = new google.maps.Marker({
    position: area,
    map: map
  });
}


$(document).ready(function() {

///// Gestion de la fenetre modale de suppression ///////
  var lien;

  $(".confirmModalLien").click(function(e) {
      e.preventDefault();
      lien = $(this).attr("href");
      $("#modal_suppression").modal("show");
  });

  $("#confirmModalNon").click(function(e) {
      $("#modal_suppression").modal("hide");
  });

  $("#confirmModalOui").click(function(e) {
      window.location.href = lien;
  });


}); // End of document.ready