
$(document).ready(function() {


  function afficher(reponse) {
    var reponse_obj=JSON.parse(reponse);
    $("input[id*='"+reponse_obj.selecteur+"_prixBillet']").attr("value",reponse_obj.totalBillet);
  }

  $("input[id*='dateNaissance']").on("change",

    function() {
      var parent=$(this).parent().parent().attr("id");
      console.log(parent);
      var dateVisite=$("input[id*='"+parent+"_dateVisite']").val();
      console.log(dateVisite);
      var reduction=$("input[id*='"+parent+"_reduction']").val();

      if (dateVisite) {
        ajaxGet("http://localhost/P4/web/app_dev.php/resa_script?dateVisite="+dateVisite+"&dateNaissance="+$(this).val()+"&id="+parent+"&reduction="+reduction+"",afficher);
      }


  });

  $("input[id*='reduction']").on("change",

  function() {
    var parent=$(this).parent().parent().parent().parent().attr("id");
    console.log(parent);
    var dateVisite=$("input[id*='"+parent+"_dateVisite']").val()
    console.log(dateVisite);
    var dateNaissance=$("input[id*='"+parent+"_dateNaissance']").val()
    console.log(dateNaissance);
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
      console.log(parent);
      var dateNaissance=$("input[id*='"+parent+"_dateNaissance']").val()
      console.log(dateNaissance);
      var reduction=$("input[id*='"+parent+"_reduction']").val();

      if (dateNaissance) {
        ajaxGet("http://localhost/P4/web/app_dev.php/resa_script?dateVisite="+$(this).val()+"&dateNaissance="+dateNaissance+"&id="+parent+"&reduction="+reduction+"",afficher);
      }

  });
});
