function postToGoogle() {
    //Xử lý lấy dữ liệu các input vào biến tương ứng thông qua ID của input
    var name = $("#nameField").val();
    var email = $("#emailField").val();
    var mess = $("#messField").val();
    var hello = $("#helloField").val();
    //Đoạn giữa này có thể sử dụng để validate dữ liệu 1 lần nữa hoăc... bỏ qua nhé :D

    //Xử lý gửi dữ liệu lên form
    $.ajax({
        //Chỉ định đích gửi dữ liệu đến: là form response đã tạo ở trên
        url: "https://docs.google.com/forms/d/e/1FAIpQLScF9kar-QR4HxszVqxaQQQDmRQHCtzeFg2ZIfCO2_B5FKFmrg/formResponse?",
        //URL lấy từ link đã note ở trên nhé
        data: { //gán các giá trị tương ứng vào các Input name tương ứng đã lấy ở trên
            "entry.1550862055": name,
            "entry.1504763683": email,
            "entry.2043759687": mess,
            "entry.1829303561": hello
        },
        type: "POST",
        dataType: "jsonp", //các bạn có thể để xml, nhưng khi bật console lên sẽ thấy báo đỏ lòm vì ko cho cross, còn cái này nó vẫn cảnh báo nhưng màu xám thôi, ko đỏ :v
        success: function(d)
    {}, //do đã bảo ở trên là nó ko cho cross đâu, nên khi gửi data xong ko trả về success được, ko cần điền cái này nhé
        error: function(x, y, z) {
            $('#success-msg').show(); //hiện ra cái mess báo thành công khi gửi xong
        }
    });

    return false;
}