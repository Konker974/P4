
$(document).ready(function() {


  function afficher(reponse) {
    var reponse_obj=JSON.parse(reponse);
    $("input[id*='"+reponse_obj.selecteur+"_prixBillet']").attr("value",reponse_obj.totalBillet);

    var prixTotal=0;
    $("input[id*='_prixBillet']").each(function(){
      prixTotal+=parseInt($(this).val());
    });
    $('#resabundle_reservation_prixTotal').val(prixTotal);

  }

  $("input[id*='dateNaissance']").on("change",

    function() {
      var parent=$(this).parent().parent().attr("id");
      var dateVisite=$("input[id*='"+parent+"_dateVisite']").val();
      var reduction=$("input[id*='"+parent+"_reduction']").val();

      if (dateVisite) {
        ajaxGet("http://localhost/P4/web/app_dev.php/resa_script?dateVisite="+dateVisite+"&dateNaissance="+$(this).val()+"&id="+parent+"&reduction="+reduction+"",afficher);
      }


  });

  $("input[id*='reduction']").on("change",

  function() {
    var parent=$(this).parent().parent().parent().parent().attr("id");
    var dateVisite=$("input[id*='"+parent+"_dateVisite']").val()
    var dateNaissance=$("input[id*='"+parent+"_dateNaissance']").val()
    if ($(this).is(':checked')) {
      $(this).val(1);
    }
    else {
      $(this).val(0);
    }

    if (dateVisite && dateNaissance) {
      ajaxGet("http://localhost/P4/web/app_dev.php/resa_script?dateVisite="+dateVisite+"&dateNaissance="+dateNaissance+"&id="+parent+"&reduction="+$(this).val()+"",afficher);
    }
  });

  $("input[id*='dateVisite']").on("change",

    function() {
      var parent=$(this).parent().parent().attr("id");
      var dateNaissance=$("input[id*='"+parent+"_dateNaissance']").val()
      var reduction=$("input[id*='"+parent+"_reduction']").val();

      if (dateNaissance) {
        ajaxGet("http://localhost/P4/web/app_dev.php/resa_script?dateVisite="+$(this).val()+"&dateNaissance="+dateNaissance+"&id="+parent+"&reduction="+reduction+"",afficher);
      }

  });


});
