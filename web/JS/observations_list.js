$(document).ready(function() {

//////////// Gestion du tableau //////////////
	table = $('#observation-table').DataTable();
	table.destroy();

	table = $('#observation-table').DataTable({
		"paging": false,
		"searching": false,
		"info": false,
		"columnDefs": [
			{
				"targets": [6],
				"sortable": false
			}
		]
	});


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