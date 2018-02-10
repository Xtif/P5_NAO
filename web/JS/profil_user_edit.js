$(document).ready(function() {

//////////// Gestion du tableau //////////////
	table = $('#table-profil-edit').DataTable();
	table.destroy();

	table = $('#table-profil-edit').DataTable({
		"paging": false,
		"searching": false,
		"info": false,
		"columnDefs": [
			{
				"targets": [2],
				"sortable": false
			},
			{
				"targets": [4],
				"sortable": false
			},
		]
	});

	$('#table-profil-edit').addClass("table-responsive");

}); // End of document.ready