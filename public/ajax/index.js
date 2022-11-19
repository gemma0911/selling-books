$(document).ready(function() {
    $(".page-link").click(function() {
        console.log($(this).html())
        history.pushState({}, "", "http://127.0.0.1:8000?page=" + $(this).html());
        $.ajax({
            url: "http://127.0.0.1:8000/product?page=" + $(this).html(),
            success: function(result) {
                $('#result').html(result);
            }
        });
    });
});

