
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

  $('.overlay').css('display','block');

    if($('pre').is(':visible')){
      $('#example-one-code p').text('Show CSS');
    }
    else{
      $('#example-one-code p').text('Hide CSS');
    }
    $('pre').slideToggle("slow");
});

$('.close-btn').click(function(){
  $('.overlay').css('display','none');
  $('pre').slideToggle("slow");
  $('#example-one-code p').text('Show CSS');
});
