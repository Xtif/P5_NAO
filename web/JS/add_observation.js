// Gestion de la dropzone des images de l'observation
Dropzone.options.mydropzone = {
  // url: 'ajouter_observation', // url does not has to be written if we have wrote action in the form tag but i have mentioned here just for convenience sake
  addRemoveLinks: true,
  autoProcessQueue: true, // this is important as you dont want form to be submitted unless you have clicked the submit button
  autoDiscover: false,
  uploadMultiple: true,
  paramName: 'picture', // this is optional Like this one will get accessed in php by writing $_FILE['pic'] // if you dont specify it then bydefault it taked 'file' as paramName eg: $_FILE['file'] 
  // previewsContainer: '#dropzonePreview', // we specify on which div id we must show the files
  clickable: true, // this tells that the dropzone will not be clickable . we have to do it because we dont want the whole form to be clickable 
  accept: function(file, done) {
      done();
  },
  error: function(file, msg){
      alert("Une erreur s'est produite lors du téléchargement, veuillez réessayer !");
  },
  init: function(file) {
      var myDropzone = this;
      //now we will submit the form when the button is clicked
      $("#form_submit").on('click',function(e) {
         e.preventDefault();
         myDropzone.processQueue(); // this will submit your form to the specified action path
         console.log(file);
         $("form").submit();
      });

      this.on("sendingmultiple", function() {
        
      });

      this.on("successmultiple", function(files, response) {
        
      });

      this.on("errormultiple", function(files, response) {
        // Gets triggered when there was an error sending the files.
        // Maybe show form again, and notify user of error
      });
  } // init end
};

$(document).ready(function() {

  //Datepicker en francais
  $.fn.datepicker.dates.fr = {
    days: ["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"],
    daysShort: ["dim.","lun.","mar.","mer.","jeu.","ven.","sam."],
    daysMin: ["di","lu","ma","me","je","ve","sa"],
    months: ["janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"],
    monthsShort: ["janv.","févr.","mars","avril","mai","juin","juil.","août","sept.","oct.","nov.","déc."],
    today: "Aujourd'hui",
    monthsTitle: "Mois",
    clear: "Effacer",
    weekStart: 1,
    format: "dd/mm/yyyy"
  }

	//Datepicker choix du jour de l'observation
	$(".datepicker").datepicker({
		autoclose: true,
		language: 'fr',
    format: 'dd/mm/yyyy',
		todayHighlight: true,
  });

}); // End of documentready()