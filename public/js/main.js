$(document).ready(function() {

  $('a#prev[href^="#"]').click(function() {
    var destino = $(this.hash);
    if (destino.length == 0) {
      destino = $('a[name="' + this.hash.substr(1) + '"]');
    }
    if (destino.length == 0) {
      destino = $('html');
    }
    $('html, body').animate({ scrollTop: destino.offset().top }, 2000);
    return false;
  });

  $('[data-toggle="tooltip"]').tooltip()

});

function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("pd");
  li = ul.getElementsByClassName("bs_pd");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    b = li[i].getElementsByClassName("h_bs_mr")[0];
    a = li[i].getElementsByClassName("a_bs_pd")[0];
    txtValue = a.textContent || a.innerText ;
    txtValue1 = b.textContent || b.innerText ;
    if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue1.toUpperCase().indexOf(filter) > -1  ) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}