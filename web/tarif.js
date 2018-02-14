
$(document).ready(function() {


  function afficher(reponse) {
    $('#resabundle_reservation_prixTotal').attr("value",reponse);
  }

  $("input[id*='dateNaissance']").on("change",

    function() {
      var parent=$(this).parent().parent().attr("id");
      console.log(parent);
      var dateVisite=$("input[id*='"+parent+"_dateVisite']").val()
      console.log(dateVisite);
      if (dateVisite) {
        ajaxGet("http://localhost/P4/web/app_dev.php/resa_script?dateVisite="+dateVisite+"&dateNaissance="+$(this).val()+"",afficher);
      }
      else {
        alert("entrez la date de visite pour calculer le tarif");
      }

  });



  $("input[id*='dateVisite']").on("change",

    function() {
      var parent=$(this).parent().parent().attr("id");
      console.log(parent);
      var dateNaissance=$("input[id*='"+parent+"_dateNaissance']").val()
      console.log(dateNaissance);
      if (dateNaissance) {
        ajaxGet("http://localhost/P4/web/app_dev.php/resa_script?dateVisite="+$(this).val()+"&dateNaissance="+dateNaissance+"",afficher);
      }
      else {
        alert("entrez la date de naissance pour calculer le tarif");
      }

  });
});
