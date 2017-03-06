


$('#example-one-grid').on('click', function() {
  if($('.grid.example-one header').hasClass('show-grid')){
    $('#example-one-grid p').text('Show Grid');
  }
  else{
    $('#example-one-grid p').text('Hide Grid');
  }
  $('.grid.example-one header, .grid.example-one article, .grid.example-one .side-left, .grid.example-one footer').toggleClass('show-grid');
})


$( "#example-one-code" ).click(function() {
    if($('pre').is(':visible')){
      $('#example-one-code p').text('Show Code');
    }
    else{
      $('#example-one-code p').text('Hide Code');
    }
    $('pre').slideToggle("slow");
});


$( "#example-one-mobile" ).click(function() {
    if($('pre').is(':visible')){
      $('#example-one-mobile p').text('Show Mobile');
    }
    else{
      $('#example-one-mobile p').text('Hide Mobile');
    }
    $('.grid.example-one').toggleClass('show-mobile');
});
