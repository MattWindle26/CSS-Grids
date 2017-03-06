$('#example-one-btn').on('click', function() {
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
