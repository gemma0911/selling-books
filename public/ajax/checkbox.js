function search() {
    const checkbox1 = document.getElementById('checkbox-new')
    const checkbox2 = document.getElementById('checkbox-sale')
    if (checkbox1.checked && !checkbox2.checked) {
        history.pushState({}, "", "http://127.0.0.1:8000?new=new");
        $.ajax({
            url: "http://127.0.0.1:8000/search?new=new",
            success: function(result) {
                $('#result').html(result);
            }
        });
    } else if (checkbox2.checked && !checkbox1.checked) {
        history.pushState({}, "", "http://127.0.0.1:8000?sale=sale");
        $.ajax({
            url: "http://127.0.0.1:8000/search?sale=sale",
            success: function(result) {
                $('#result').html(result);
            }
        });
    } else if (checkbox1.checked && checkbox2.checked) {
        history.pushState({}, "", "http://127.0.0.1:8000?sale=sale&new=new");
        $.ajax({
            url: "http://127.0.0.1:8000/search?sale=sale&&new=new",
            success: function(result) {
                $('#result').html(result);
            }
        });
    }
}
