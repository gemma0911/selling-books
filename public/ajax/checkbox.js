function search() {

    var checkBoxValue;
    var checkbox = document.getElementsByName('a1')
    for (var i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked === true) {
            checkBoxValue = checkbox[i].value;
            console.log(checkBoxValue)
        }
    }

    var checkboxpriceValue;
    var checkboxprice = document.getElementsByName('idPrice')
    for(var i = 0; i<checkboxprice.length; i++){
        if(checkboxprice[i].checked === true){
            checkboxpriceValue = checkboxprice[i].value;
            console.log(checkboxpriceValue)
        }
    }

    const checkbox1 = document.getElementById('checkbox-new')
    const checkbox2 = document.getElementById('checkbox-sale')

    if(checkboxpriceValue && checkBoxValue && checkbox1.checked && checkbox2.checked ){
        $.ajax({
            url: "http://127.0.0.1:8000/price1",
            type: "get",
            dataType: "text",
            data: {
                idPrice : checkboxpriceValue,
                sale: 1,
                new: 1,
                idCategory: checkBoxValue,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if(checkboxpriceValue && checkBoxValue && checkbox1.checked ){
        $.ajax({
            url: "http://127.0.0.1:8000/price2",
            type: "get",
            dataType: "text",
            data: {
                idPrice : checkboxpriceValue,
                new: 1,
                idCategory: checkBoxValue,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if(checkboxpriceValue && checkBoxValue && checkbox2.checked ){
        $.ajax({
            url: "http://127.0.0.1:8000/price3",
            type: "get",
            dataType: "text",
            data: {
                idPrice : checkboxpriceValue,
                sale: 1,
                idCategory: checkBoxValue,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if(checkboxpriceValue && checkBoxValue ){
        $.ajax({
            url: "http://127.0.0.1:8000/price4",
            type: "get",
            dataType: "text",
            data: {
                idPrice : checkboxpriceValue,
                idCategory: checkBoxValue,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if(checkboxpriceValue){
        $.ajax({
            url: "http://127.0.0.1:8000/price5",
            type: "get",
            dataType: "text",
            data: {
                idPrice : checkboxpriceValue,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if (checkBoxValue && checkbox1.checked && checkbox2.checked) {
        $.ajax({
            url: "http://127.0.0.1:8000/search",
            type: "get",
            dataType: "text",
            data: {
                sale: 1,
                new: 1,
                idCategory: checkBoxValue,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

        if (checkBoxValue && checkbox1.checked && checkbox2.checked) {
        $.ajax({
            url: "http://127.0.0.1:8000/search",
            type: "get",
            dataType: "text",
            data: {
                sale: 1,
                new: 1,
                idCategory: checkBoxValue,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if(checkbox2.checked && checkbox1.checked){
        $.ajax({
            url: "http://127.0.0.1:8000/search7",
            type: "get",
            dataType: "text",
            data: {
                sale : 1,
                new : 1,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if(checkBoxValue && checkbox1.checked){
        $.ajax({
            url: "http://127.0.0.1:8000/search2",
            type: "get",
            dataType: "text",
            data: {
                new : 1,
                idCategory: checkBoxValue,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if(checkBoxValue && checkbox2.checked){
        $.ajax({
            url: "http://127.0.0.1:8000/search3",
            type: "get",
            dataType: "text",
            data: {
                sale : 1,
                idCategory: checkBoxValue,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if(checkbox2.checked){
        $.ajax({
            url: "http://127.0.0.1:8000/search5",
            type: "get",
            dataType: "text",
            data: {
                sale : 1,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if(checkbox1.checked){
        $.ajax({
            url: "http://127.0.0.1:8000/search6",
            type: "get",
            dataType: "text",
            data: {
                new : 1,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return ;
    }

    if(checkBoxValue) {
        console.log(checkBoxValue)
        $.ajax({
            url: "http://127.0.0.1:8000/search1",
            type: "get",
            dataType: "text",
            data: {
                idCategory: checkBoxValue,
            },
            success: function (result) {
                $('#result').html(result);
            }
        });
        return;
    }
}
