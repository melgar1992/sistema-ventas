$(document).ready(function () {
    var base_url = $("#base_url").val();

    $(".btn-vista").on("click", function() {

     const id = $(this).val();
     console.log(id);
     $.ajax({
        url: base_url + "Mantenimiento/Categorias/vista/" + id ,
        type : "POST",
        success: function(resp) {
          alert(resp);
        }

      });


    });
  

  })

