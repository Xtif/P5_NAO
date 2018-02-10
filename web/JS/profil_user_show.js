$(document).ready(function() {

//////////// Gestion du tableau //////////////
	table = $('#table-profil-show').DataTable();
	table.destroy();

	table = $('#table-profil-show').DataTable({
		"paging": false,
		"searching": false,
		"info": false,
		"columnDefs": [
			{
				"targets": [2],
				"sortable": false
			},
			{
				"targets": [3],
				"sortable": false
			}
		]
	});

	$('#table-profil-show').addClass("table-responsive");

}); // End of document.ready