function search() {

    var checkbox = document.getElementsByName('a1')
    for(var i=0;i<checkbox.length;i++){
        if(checkbox[i].checked === true){
            k = checkbox[i].value;
        }
    }

    const checkbox1 = document.getElementById('checkbox-new')
    const checkbox2 = document.getElementById('checkbox-sale')

    if (checkbox1.checked && !checkbox2.checked) {
        history.pushState({}, "", "http://127.0.0.1:8000?new=new");
        $.ajax({
            url: "http://127.0.0.1:8000/search",
            type : "get",
            dataType:"text",
            data : {
                new : 1,
                idCategory : k,
            },
            success: function(result) {
                $('#result').html(result);
            }
        });
    } else if (checkbox2.checked && !checkbox1.checked) {
        history.pushState({}, "", "http://127.0.0.1:8000?sale=sale");
        $.ajax({
            url: "http://127.0.0.1:8000/search",
            type : "get",
            dataType:"text",
            data : {
                sale : 1,
                idCategory : k,
            },
            success: function(result) {
                $('#result').html(result);
            }
        });
    } else if (checkbox1.checked && checkbox2.checked) {
        history.pushState({}, "", "http://127.0.0.1:8000?sale=sale&new=new");
        $.ajax({
            url: "http://127.0.0.1:8000/search",
            type : "get",
            dataType:"text",
            data : {
                sale : 1,
                new : 1,
                idCategory : k,
            },
            success: function(result) {
                $('#result').html(result);
            }
        });
    } else {
        $.ajax({
            url: "http://127.0.0.1:8000/search",
            type : "get",
            dataType:"text",
            data : {
                idCategory : k,
            },
            success: function(result) {
                $('#result').html(result);
            }
        });
    }
}
