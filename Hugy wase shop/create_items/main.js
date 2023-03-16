function postToGoogle() {
    //Xử lý lấy dữ liệu các input vào biến tương ứng thông qua ID của input
    var name = $("#nameField").val();
    var name_items = $("#name_itemsField").val();
    var dvt_items = $("#dvt_itemsField").val();
    var price_items = $("#price_itemsField").val();
    //Đoạn giữa này có thể sử dụng để validate dữ liệu 1 lần nữa hoăc... bỏ qua nhé :D

    //Xử lý gửi dữ liệu lên form
    $.ajax({
        //Chỉ định đích gửi dữ liệu đến: là form response đã tạo ở trên
        url: "https://docs.google.com/forms/d/e/1FAIpQLSfA5fvu6IezgcztEErdStbu_sVJUkK0zjbkr8MLApOGFgn39g/formResponse?",
        //URL lấy từ link đã note ở trên nhé
        data: { //gán các giá trị tương ứng vào các Input name tương ứng đã lấy ở trên
            "entry.1719410041": name,
            "entry.2080944793": name_items,
            "entry.898814997": dvt_items,
            "entry.1323956925": price_items
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

function btn_create_items() {
    document.getElementById("name_itemsField").value = "";
    document.getElementById("dvt_itemsField").value = "";
    document.getElementById("price_itemsField").value = "";
}