<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Hugy wase shop/material/logo_web_border.png">
    <link rel="stylesheet" href="/Hugy wase shop/file_manage/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Đăng kí | Hugy Wase Shop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Nunito&family=Open+Sans:ital@1&family=Signika+Negative:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo_web" id="header_logo_web">
            <a href="/Hugy wase shop/home">
                <img src="/Hugy wase shop/material/logo_web.png">
            </a>
            <div id="header_logo_title">
                <div id="header_main_logo_title">Hugy Wase Shop</div>
                <div id="header_bottom_logo_title">Quản lí cửa hàng Hugy</div>
            </div>
        </div>

        <div id="header_item_navigation">
            <label for="send" class="header_items" id="btn_create_shop">Đăng kí</label>
        </div>
    </header>

    <div id="navigation">
      <div class="nav_items" id="nav_btn_home">Trang Chủ</div>
      <div class="nav_items" id="nav_btn_sign_in">Đăng nhập</div>
      <div class="nav_items" id="nav_btn_sign_up">Đăng kí</div>
      <div class="nav_items" id="nav_btn_tmdt">TMĐT</div>
        <!-- <div class="nav_line"></div> -->
    </div>
    
    <div id="container">
        <b>Đăng kí</b><br><br><br>
        <!-- <h3 id="success-msg" class="text-center">Đã tạo Tài khoản Thành Công! Đang chờ xét duyệt.</h3><br> -->
        <div>
            <form method="post" entype="multipart/form-data">
                <div class="home_title">
                    <span>*</span>
                    Tên người dùng:
                </div>
                <input id="nameField" name="nameField" type="text" autocomplete="off" required>

                <div class="home_title">
                    <span>*</span>
                    Mật khẩu:
                </div>
                <input id="passField" name="passField" type="password" autocomplete="off" required>

                <div class="home_title">
                    <span>*</span>
                    Nhập lại mật khẩu:
                </div>
                <input id="repassField" name="repassField" type="password" autocomplete="off" required>

                <button style="display:none;" type="submit" id="send" name="send">Gửi</button>

                <div id="have_account_yet">
                    Bạn đã có Tài Khoản?
                    <a href="/Hugy wase shop/dang_nhap">Đăng nhập</a>
                </div>
            </form>

            <?php
                if(isset($_POST['send']))
                {
                    sign_up();
                }
                function sign_up()
                {
                    $nameField = $_POST["nameField"];
                    $passField = $_POST["passField"];
                    $repassField = $_POST["repassField"];
    
                    $servername = "localhost";
                    $database = "hugy_wase_shop";
                    $username = "root";
                    $password = "";
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $database);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    else {
                        echo "<div style='display: none'>Connected successfully</div>";
                    }
                    // mysqli_close($conn);
    
                    // $sql = "SELECT username, user_password, power FROM account_user";
                    $sql = "SELECT * FROM account_user WHERE username LIKE '$nameField'";
                    $result = $conn->query($sql);
    
                    if ($result -> num_rows > 0) {
                        // Load dữ liệu lên website
                        while($row = $result->fetch_assoc()) {
                            // echo "- Tên người dùng: " . $row["username"]. "<br>" . " - Mật khẩu: " . $row["user_password"]. "<br>" . " - Shop 1: " . $row["shop_1"]. "<br>" . " - Shop 2: " . $row["shop_2"]. "<br>". " - Quyền: ". $row["power"]."<br>" . " - Ghi chú: " . $row["note"]. "<br><br>";
    
                            echo "<div class='notice'>Tên người dùng đã tồn tại trong hệ thống.</div>";
                        }
                    } else {
                        if($passField === $repassField) {
                            // Tạo id random cho tài khoản
                            $acc_id = '0123456789abcdefghijklmnopqrstuvwxyz';
                            $id_random = substr(str_shuffle($acc_id), 0, 100000);

                            // Chèn dữ liệu vào database
                            $sql_add = "INSERT INTO account_user (username, user_password, user_id) VALUES ('$nameField', '$passField', '$id_random')";

                            // Kiểm tra chèn dữ liệu
                            if (mysqli_query($conn, $sql_add)) {
                                // Thông báo nếu thành công
                                echo "<div class='notice'>Đã tạo tài khoản của bạn thành công! Id tài khoản: {$id_random}</div>";
                            }
                            else {
                                // Hiện thông báo khi không thành công
                                echo "<div class='notice'>Đăng kí không thành công, vui lòng gửi phản hồi cho hệ thống!</div>" . "Lỗi: " . mysqli_error($conn);
                            }
                        }
                        else {
                            echo "<div class='notice'>Mật khẩu không khớp, vui lòng <a href=''>thử lại<a>.</div>";
                        }
                    }

                    $conn->close();
                }
            ?>
        </div>
    </div>
</body>

<script src="main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</html>