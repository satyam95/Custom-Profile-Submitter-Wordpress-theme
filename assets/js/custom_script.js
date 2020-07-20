
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');

    // Get all form-groups in need of validation
    var validateGroup = document.getElementsByClassName('validate-me');

    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }

        //Added validation class to all form-groups in need of validation
                        for (var i = 0; i < validateGroup.length; i++) {
                            validateGroup[i].classList.add('was-validated');
                        }
      }, false);
    });
  }, false);
})();
