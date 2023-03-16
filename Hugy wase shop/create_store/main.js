function postToGoogle() {
    //Xử lý lấy dữ liệu các input vào biến tương ứng thông qua ID của input
    var name = $("#nameField").val();
    var name_mng = $("#name_mngField").val();
    var field = $("#fieldField").val();
    var itdc = $("#itdcField").val();
    var note = $("#noteField").val();
    //Đoạn giữa này có thể sử dụng để validate dữ liệu 1 lần nữa hoăc... bỏ qua nhé :D

    //Xử lý gửi dữ liệu lên form
    $.ajax({
        //Chỉ định đích gửi dữ liệu đến: là form response đã tạo ở trên
        url: "https://docs.google.com/forms/d/e/1FAIpQLSebvx-e6vSdw7HbWJ34zt9gXrbCIneW0jVkgky5Gk9l6X53VQ/formResponse?",
        //URL lấy từ link đã note ở trên nhé
        data: { //gán các giá trị tương ứng vào các Input name tương ứng đã lấy ở trên
            "entry.975984835": name,
            "entry.2078593880": name_mng,
            "entry.2055697624": field,
            "entry.2126920250": itdc,
            "entry.754242872": note
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