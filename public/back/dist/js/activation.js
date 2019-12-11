

//iCheck for checkbox and radio inputs
  $(function () {
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
    });

//CK editor activation
    $(function () {
        CKEDITOR.replace('description');
        // CKEDITOR.replace('specification');
        CKEDITOR.replace('keypoint');
    });

    $('.datepicker').datepicker({
        autoclose: true
      });
  