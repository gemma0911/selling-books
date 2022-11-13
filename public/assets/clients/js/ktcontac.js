function validate() {
    var p11 = document.getElementById("hoten").value;
    var p22 = document.getElementById("email").value;
    var p33 = document.getElementById("dt").value;
    var p44 = document.getElementById("area").value;
    if(p11 == "") {
    alert("Vui lòng nhập ngày họ tên");
    return false;
    }
    if(p22 == "") {
    alert("Vui lòng nhập mail");
    return false;
    }
    if(p33 == "") {
    alert("Vui lòng nhập đối tượng");
    return false;
    }
    if(p44 == "") {
    alert("Vui lòng nhập lời nhắn");
    return false;
    }
}