const { isNull } = require("lodash");

function search() {

    var checkBoxValue;
    var checkbox = document.getElementsByName('a1')
    for (var i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked === true) {
            checkBoxValue = checkbox[i].value;
        }
    }

    const checkbox1 = document.getElementById('checkbox-new')
    const checkbox2 = document.getElementById('checkbox-sale')

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
