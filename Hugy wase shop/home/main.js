document.getElementById("btn_create_shop").onclick = function() {
    var choice = confirm("Bạn hãy Đăng nhập để tiếp tục!");

    if(choice == true) {
        window.location = "/Hugy wase shop/dang_nhap";
    }
}

function getTime() {
    var hour = document.getElementById("hour");
    var minute = document.getElementById("minute");
    var second = document.getElementById("second");

    hour.innerHTML = new Date().getHours();
    minute.innerHTML = new Date().getMinutes();
    second.innerHTML = new Date().getSeconds();
}

var getTime = setInterval(getTime, 1000)