$(document).ready(function(){
    $('.menu-card').click(function(){
        $('input[name="suit"]').val($(this).data('suit'));
        $('input[name="value"]').val($(this).data('value'));
        $('#select-card').attr('src', $(this).attr('src'));
    });
    
    $('#draw-card').click(function(){
        $.ajax({
            method: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "/update-game",
            data: {
                suit: $('input[name="suit"]').val(),
                value: $('input[name="value"]').val()
            }
        })
        .done(function(response) {
            $('#preview-card').attr('src', response.image);
            
            if (response.status == true) {
                $('#chance').text(`Got It! the chance was ${response.chance} %`);
                $('#draw-card').hide();
            } else {
                $('#chance').text(`Chance : ${response.chance} %`);
            }
        });
    });
});
