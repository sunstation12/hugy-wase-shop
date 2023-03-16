<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Hugy wase shop/material/logo_web_border.png">
    <link rel="stylesheet" href="/Hugy wase shop/file_manage/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Đăng nhập | Hugy Wase Shop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Nunito&family=Open+Sans:ital@1&family=Signika+Negative:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans&display=swap&family=Fira+Sans:ital@1&display=swap" rel="stylesheet">
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
            <label for="send" class="header_items" id="btn_create_shop">Đăng nhập</label>
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
        <b>Đăng nhập</b><br><br><br>
        <!-- <div class="home_items">
            <div class="home_title">Các cửa hàng của bạn:</div>
            <i class="home_text">Bạn chưa lập Cửa Hàng nào! Hãy
                <a style="
                color: blue;
                " href="/dang_nhap/">Đăng nhập</a>
                để tiếp tục
            </i>
        </div> -->
        <div>
            <form method="post" entype="multipart/form-data">
                <div class="home_title">
                    <span>*</span>
                    Tên người dùng:
                </div>
                <input name="nameField" id="nameField" type="text" autocomplete="off" required>

                <div class="home_title">
                    <span>*</span>
                    Mật khẩu:
                </div>
                <input name="passField" id="passField" type="password" autocomplete="off" required>

                <button name="send" style="display: none" type="submit" id="send">Gửi</button>

                <div id="no_account">
                    Bạn chưa có Tài Khoản?!
                    <a href="/Hugy wase shop/dang_ki">Đăng kí</a>
                </div>
            </form>

        </div>

        <?php
            if(isset($_POST['send']))
            {
                sign_in();
            }
            function sign_in()
            {
                $nameField = $_POST["nameField"];
                $passField = $_POST["passField"];

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
                        echo "- Tên người dùng: " . $row["username"]. "<br>" . " - Mật khẩu: " . $row["user_password"]. "<br>" . " - Shop 1: " . $row["shop_1"]. "<br>" . " - Shop 2: " . $row["shop_2"]. "<br>". " - Quyền: ". $row["power"]."<br>" . " - Ghi chú: " . $row["note"]. "<br><br>";

                        if ($row["user_password"] === $passField) {
                            // echo "<span id='redirect'>redirect</span>";
                            echo "<div class='notice'>Đăng nhập thành công! <a href='../account_user/?id={$row["user_id"]}&page=index'>Truy cập tài khoản</a> của bạn</div>";
                        }
                        else {
                            echo "<div class='notice'>Mật khẩu không đúng! Vui lòng nhập lại.</div>";
                        }
                    }
                } else {
                    echo "<div class='notice'>Tên người dùng không tồn tại trong hệ thống.</div>";
                }
                $conn->close();
            }
            
        ?>

    </div>
</body>

<script src="main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</html>