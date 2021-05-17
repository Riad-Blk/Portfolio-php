$(document).ready(function() {
  $(document).click(function() {
    if($('#affichermdp').is(':checked') == true){
      $('#password').attr('type', 'text');
    } else {
      $('#password').attr('type', 'password');
    }
  });
});