//funcion que se ejecuta al inicio
function init() {

  $("#formulario").on("submit", function (e) {
    editar(e);
  });

}

$(document).ready(function () {
  $('#logo').on('change', function (e) {
    //get the file name
    // var fileName = $(this).val();
    var fileName =  e.target.files[0].name;

    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })
});



(function () {
  'use strict';
  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


//funcion para editar
function editar(e) {
  e.preventDefault();//no se activara la accion predeterminada 

  var formData = new FormData($("#formulario")[0]);

  formData.append("logo", $("input[name=logo]")[0].files[0]);

  $.ajax({
    url: "models/actualiza.php?op=editar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,

    success: function (datos) {
      bootbox.alert(datos);
    }

  });
}

init();