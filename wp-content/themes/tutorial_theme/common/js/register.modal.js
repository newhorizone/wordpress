$(document).ready(function() {
    $('#select01').hide();
    $('#radio01').removeAttr('checked');
    $('#radio02').removeAttr('checked');
    $('#radio01').click(function() {
       $('#select01').show();
       $('#radio02').removeAttr('checked');
    });
    $('#radio02').click(function() {
       $('#select01').hide();
       $('#radio01').removeAttr('checked');
    });    
});

