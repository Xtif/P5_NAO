$(document).ready(function() {

/////Gestion de la fenetre modale de suppression///////
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