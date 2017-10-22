$(document).ready(function() {
  $("#author").change(function() {
    if($('#author').val() == 0) {
      $('#author-form').show();
    }
    else {
      $('#author-form').hide();
    }
  });
});
