<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Hugy wase shop/material/logo_web_border.png">
    <link rel="stylesheet" href="/Hugy wase shop/file_manage/style.css">
    <link rel="stylesheet" href="/Hugy wase shop/store_manage_id/style.css">
    <title>Home | Hugy Wase Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Nunito&family=Open+Sans:ital@1&family=Signika+Negative:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=M+PLUS+Rounded+1c&family=Open+Sans&family=Prompt&family=Merriweather+Sans:wght@500&family=Open+Sans&family=Play&family=Public+Sans&family=Signika:wght@500&family=Cabin:wght@500&family=Be+Vietnam+Pro&display=swap" rel="stylesheet">
</head>

<style>
    .home_items {
        margin-bottom: 30px;
    }

    .home_title {
        font-size: 25px;
        margin-bottom: 6px;
        font-family: 'Open Sans', sans-serif;
    }

    .home_text {
        font-family: 'Open Sans', sans-serif;
    }

    .home_title span {
        color: red;
        font-size: 18px;
    }

    b {
        font-size: 28px;
        font-family: 'Open Sans', sans-serif;
    }

    input {
        width: 50%;
        height: 33px;
        font-size: 22px;
        margin-bottom: 28px;
        font-family: 'Lobster', cursive;
    }

    textarea {
        font-size: 20px;
        padding: 3px 8px;
        margin-bottom: 28px;
    }

    #success-msg {
        color: blue;
        display: none;
        font-family: roboto;
    }
    
    #table_product {
        overflow: auto;
    }

    th {
        font-size: 18px;
        padding: 5px 16px;
        background-color: #50adff;
        font-family: 'Cabin', sans-serif;
        /* white-space: nowrap; */
    }

    td {
        font-size: 15px;
        padding: 4px 6px;
        background-color: #93d9ff;
        font-family: 'Be Vietnam Pro', sans-serif;
    }

    .form_action_table_bd {
        display: inline-block;
    }

    .describe_inf_echo {
        display: none;
    }

    .stt_box {
        text-align: center;
    }

    .button_action_box {
        text-align: center;
        user-select: none;
    }

    .button_action_box button {
        cursor: pointer;
        padding: 3px 4px;
        border-radius: 4px;
        margin: 0px 2px 0px;
        background-color: white;
        border: 1px solid black;
    }

    #three_vertical_dots {
        right: 0;
        float: right;
        font-size: 30px;
        cursor: pointer;
        line-height: 3px;
        margin-top: 19px;
        transition: 0.2s;
        user-select: none;
        border-radius: 20px;
        display: inline-block;
        transform: rotate(270deg);
        padding: 9px 13px 26px 13px;
    }

    #three_vertical_dots:hover {
        background-color: #b2c4d152;
    }

    #more_box_list {
        width: 237px;
        display: none;
        font-size: 20px;
        position: absolute;
        background: #b8e8ff;
        margin-left: -188px;
        margin-top: -145.5px;
        transform: rotate(90deg);
        box-shadow: 0px 2px 6px 0px #888888;
    }

    .more_items {
        color: black;
        padding: 0px 7px;
        line-height: 37px;
    }

    .more_items:hover {
        background: #71cbfd;
    }

    .check_icon {
        width: 20px;
        float: right;
        margin-top: 8px;
        fill: green;
        display: none;
    }

    .more_table_column,
    .more_table_column_2 {
        display: none;
    }
</style>

<body>
    <header>
        <div class="logo_web" id="header_logo_web">
            <?php
                $id = $_GET['id'];
                
                echo "
                <a href='?id={$id}&page=index'>
                    <img src='/Hugy wase shop/material/logo_web.png'>
                </a>
                ";
            ?>

            <div id="header_logo_title">
                <div id="header_main_logo_title">Hugy Wase Shop</div>
                <div id="header_bottom_logo_title">Quản lí cửa hàng Hugy</div>
            </div>
        </div>

        <div id="header_item_navigation">
            <?php
                $page = $_GET['page'];

                if ($page === "index") {echo "<button class='header_items' id='btn_create_shop_link'>Tạo Cửa Hàng Mới</button>";}
                if ($page === "create_store") {echo "<label for='send' class='header_items' id='btn_create_shop'>Tạo</label>";}
                if ($page === "shopmanager") {
                    $user_id = $_GET['id'];
                    $shop_id = $_GET['shopid'];
                    $shop_page = $_GET['shoppage'];

                    if ($shop_page === "index") {
                        echo "
                            <a href='?id={$user_id}&page=shopmanager&shopid={$shop_id}&shoppage=addproduct'>
                                <button class='header_items' id='btn_create_product_link'>Thêm hàng hóa</button>
                            </a>
                        ";
                    }

                    if ($shop_page === "addproduct") {
                        echo "<label for='send' class='header_items' id='btn_create_product'>Thêm mới hàng hóa</label>";
                    }

                    if ($shop_page === "editproduct") {
                        echo "<label for='send' class='header_items' id='btn_edit_product'>Sửa hàng hóa</label>";
                    }
                }
                // else {echo "";}
            ?>
        </div>
    </header>

    <div id="navigation">
        <div class="nav_items" id="nav_btn_overview">Tổng quan</div>
        <div class="nav_items" id="nav_btn_product">Hàng hóa</div>
        <div class="nav_items" id="nav_btn_tactic">Chiến thuật</div>
        <div class="nav_items" id="nav_btn_productivity">Năng suất</div>
        <!-- <div class="nav_line"></div> -->
    </div>
    
    <div id="container">
        <div class="home_items">
            <!-- <i style="
            color: red;
            " class="home_text">Bạn chưa lập Cửa Hàng nào!</i> -->
            <!-- <a class="user_store_link" href="/Hugy wase shop/store_manage_id/hgw_57829126847183265285189772839931363454588434554583/user_shop/sun-station"> -->
                
                <?php
                    $id = $_GET['id'];
                    $page = $_GET['page'];

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
                        // echo "<div style='display: none'>Connected successfully</div>";
                        echo "<div>Connected successfully</div>";
                        echo "<span style='display:none' id='user_id'>$id</span>";
                    }
                    // mysqli_close($conn);

                    // $sql = "SELECT username, user_password, power FROM account_user";

                    // Kiểm tra giá trị của tham số URL "page"
                    if($page === "index") {
                        echo "<div class='home_title'>Các cửa hàng của bạn:</div>";

                        $sql = "SELECT * FROM shop_user WHERE user_id LIKE '$id'";
                        $result = $conn->query($sql);
                    
                        if ($result -> num_rows > 0) {
                            // Load dữ liệu lên website
                            while($row = $result->fetch_assoc()) {
                                // echo "- Tên người dùng: " . $row["username"]. "<br>" . " - Mật khẩu: " . $row["user_password"]. "<br>" . " - Shop 1: " . $row["shop_1"]. "<br>" . " - Shop 2: " . $row["shop_2"]. "<br>". " - Quyền: ". $row["power"]."<br>" . " - Ghi chú: " . $row["note"]. "<br><br>";
                                echo "
                                <a class='user_store_link' href='?id=$id&page=shopmanager&shop_name={$row["shop_name"]}&shopid={$row["shop_id"]}&shoppage=index'>
                                    <div class='user_store'>
                                        <div class='shop_title_name'>{$row["shop_name"]}</div>
                                        <div class='shop_title_field'>{$row["business_areas"]}</div>
                                        <div class='shop_title_about'>
                                            {$row["shop_describe"]}
                                        </div>
                                    </div>
                                <a>
                                ";
                            }
                        } else {
                            echo "<div class='notice'>Dữ liệu đã bị lỗi từ Database.</div>";
                        }
                    }

                    if($page === "create_store") {
                        echo "
                        <b>Tạo Cửa hàng Mới</b><br><br>
                        <form name='cform' id='cform' method='post' entype='multipart/form-data'>
                            <div class='home_title'>
                                <span>*</span>
                                Tên Cửa Hàng:
                            </div>
                            <input id='shop_nameField' name='shop_nameField' type='text' autocomplete='off' required>

                            <div class='home_title'>
                                <span>*</span>
                                Tên chủ Cửa Hàng:
                            </div>
                            <input id='name_mngField' name='name_mngField' type='text' required>

                            <div class='home_title'>
                                <span>*</span>
                                Lĩnh vực kinh doanh:
                            </div>
                            <input id='fieldField' name='fieldField' type='text' required>
                            
                            <div class='home_title'>
                                <span>*</span>
                                Giới thiệu cửa hàng:
                            </div>
                            <textarea id='itdcField' name='itdcField' type='text' placeholder='Mô tả thêm về cửa hàng của bạn...' required></textarea>

                            <div class='home_title'>Ghi chú:</div>
                            <textarea id='noteField' name='noteField' type='text' placeholder='Bạn có thể ghi chú thêm điều gì đó...'></textarea>

                            <button style='display:none;' type='submit' id='send' name='send'>Gửi</button>
                        </form>
                        ";
        
                        $sql = "SELECT * FROM account_user WHERE user_id LIKE '$id'";
                        $result = $conn->query($sql);
        
                        if ($result -> num_rows > 0) {
                            // Load dữ liệu lên website
                            while($row = $result->fetch_assoc()) {
                                if(isset($_POST['send']))
                                {
                                    $shop_nameField = $_POST["shop_nameField"];
                                    $name_mngField = $_POST["name_mngField"];
                                    $fieldField = $_POST["fieldField"];
                                    $itdcField = $_POST["itdcField"];
                                    $noteField = $_POST["noteField"];

                                    // Tạo id random cho tài khoản
                                    $id_random= '0123456789abcdefghijklmnopqrstuvwxyz';
                                    $shop_id = substr(str_shuffle($id_random), 0, 100000);
            
                                    // Chèn dữ liệu vào database
                                    $sql_add = "INSERT INTO shop_user (shop_name, user_name, user_id, shop_manager, business_areas, shop_describe, shop_id, note) VALUES ('$shop_nameField', '{$row["username"]}', '{$row["user_id"]}', '$name_mngField', '$fieldField', '$itdcField', '$shop_id', '$noteField')";

                                    // Kiểm tra chèn dữ liệu
                                    if (mysqli_query($conn, $sql_add)) {
                                        // Thông báo nếu thành công
                                        echo "<div class='notice'>Đã tạo cửa hàng thành công! Id cửa hàng: {$shop_id}</div>";
                                    }
                                    else {
                                        // Hiện thông báo khi không thành công
                                        echo "<div class='notice'>Đăng kí không thành công, vui lòng gửi phản hồi cho hệ thống!</div>" . "Lỗi: " . mysqli_error($conn);
                                    }
                                }
                            }
                        } else {
                            echo "<div class='notice'>Id người dùng được khai báo không tồn tại trong hệ thống.</div>";
                        }
                    }

                    if($page === "shopmanager") {
                        $shopid = $_GET['shopid'];
                        $shoppage = $_GET['shoppage'];
                        $i = 1;
                        $s = $i++;

                        $shop_name = mysqli_query($conn, "select shop_name from shop_user where shop_id = '$shopid'");
                        $row = mysqli_fetch_assoc($shop_name);
                        $shop_describe = mysqli_query($conn, "select shop_describe from shop_user where shop_id = '$shopid'");
                        $ro = mysqli_fetch_assoc($shop_describe);

                        echo "<span style='display:none' id='shop_id'>{$shopid}</span>";

                        if($shoppage === "index") {
                            echo "<span style='display:none' id='changeBGColor'>bgcolor_shopmanager_index</span>";
                            echo "
                                <div class='home_items'>
                                    <img
                                    src='/Hugy wase shop/material/logo_web.png'
                                    id='logo_shop'
                                    >
        
                                    <div id='shop_title'>
                                        <div id='shop_title_name'>
                            " . $row['shop_name'] . "</div><div id='shop_title_about'>" . $ro['shop_describe'] . "</div></div><div id='three_vertical_dots'>...<div id='more_box_list'><a href='?id=$id&page=shopmanager&shopid=$shopid&shoppage=editshop'><div class='more_items'>Chỉnh sửa Cửa Hàng</div></a><div class='more_items' id='title_not_down_line'>Dàn hàng đề mục<svg id='check_icon' class='check_icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z'/></svg></div><div class='more_items' id='btn_more_table_column'>Tất cả cột<svg id='check_icon_2' class='check_icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z'/></svg></div></div></div></div>";

                            $sql = "SELECT * FROM shop_products WHERE shop_id LIKE '$shopid'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                echo "<table id='table_product'>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã vạch</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Đơn vị tính</th>
                                            <th>Số lượng</th>
                                            <th>Nhà phân phối</th>
                                            <th class='more_table_column'>Mô tả sản phẩm</th>
                                            <th>Ghi chú</th>
                                            <th class='more_table_column_2'>Id</th>
                                        </tr>";
                                // output data of each row
                                $i = 1;
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr><td class='stt_box'>".$i."</td><td>".$row["product_code"]."</td><td>".$row["product_name"]."</td><td>".$row["price"]."</td><td>".$row["unit"]."</td><td>".$row["inventory"]."</td><td>".$row["supplier"]."</td><td class='more_table_column'>".$row["product_describe"]."</td><td>".$row["note"]."</td><td class='more_table_column_2'>".$row["product_id"]."</td></tr>";
                                    $i++;

                                    if (isset($_POST['delete_data'])) {
                                        $input_get_value = $_POST['product_id'];
                                        //code to delete product
                                        $sql_dlt = "DELETE FROM shop_products WHERE product_id = '$input_get_value'";
                                                            
                                        if (mysqli_query($conn, $sql_dlt)) {
                                            echo 'Product deleted successfully.';
                                            echo "<span style='display:none' id='redirect'>delete_complete</span>";
                                        }
                                        else {
                                            echo 'Error deleting product.';
                                        }
                                    }
                                }

                                echo "</table>";
                            } else {
                                echo "<div class='notice'>Bạn chưa tạo mặt hàng nào!</div>";
                            }
                            
                            // $sql = "SELECT * FROM shop_products WHERE shop_id LIKE '$shopid'";
                            // $result = $conn->query($sql);

                            // echo "
                            //         <div class='home_items'>
                            //             <div class='shop_title'>Danh sách hàng hóa</div>

                            //             <table class='table table-bordered table-hover'>
                            //                 <thead>
                            //                     <tr>
                            //                         <th class='text-center'>#</th>
                            //                         <th class='text-center'>Mã hàng</th>
                            //                         <th class='text-center'>Thông tin sản phẩm</th>
                            //                         <th class='text-center'>Hoạt động</th>
                            //                     </tr>
                            //                 </thead>
                            //                 <tbody>";
            
                            // if ($result -> num_rows > 0) {
                            //     while($row = $result->fetch_assoc()) {
                                    // echo "
                                    //             <tr>
                                    //             <span style='display:none' id='shop_id'>$shopid</span>
                                    //                 <td class='text-center'>$s</td>
                                    //                 <td class=''>
                                    //                     <p><b>{$row['product_code']}</b></p>
                                    //                 </td>
                                    //                 <td class=''>
                                    //                     <p>Tên: <b>{$row['product_name']}</b></p>
                                    //                     <p><small>Giá: <b>number_format({$row['price']}, 2)</b></small></p>
                                    //                     <p><small>ĐVT: <b>{$row['unit']}</b></small></p>
                                    //                     <p><small>Mô tả: <b>{$row['product_describe']}</b></small></p>
                                    //                 </td>
                                    //                 <td class='text-center'>
                                    //                     <button class='btn btn-sm btn-primary edit_product' type='button' data-json=''>Chỉnh sửa</button>
                                    //                     <button class='btn btn-sm btn-danger delete_product' type='button' data-id='{$row['product_id']}'>Xóa</button>
                                    //                 </td>
                                    //             </tr>";
                                                // <?php endwhile;
                            //     }
                            // }
                            
                            // else {
                            //     echo "<div class='notice'>Id người dùng được khai báo không tồn tại trong hệ thống.</div>";
                            // }
                            //         echo "
                            //                 </tbody>
                            //             </table>
                            //         </div>
                            //         ";
                        }

                        if($shoppage === "editshop") {
                            $productid = $_GET['productid'];
                            // Đang code dở
                            echo "
                            <b>Thông tin cửa hàng</b><br><br>
                            <form name='cform' id='cform' method='post' entype='multipart/form-data'>
                                <div class='home_title'>
                                    <span>*</span>
                                    Tên cửa hàng:
                                </div>
                                <input id='product_codeField' name='product_codeField' type='text' autocomplete='off'>

                                <div class='home_title'>
                                    <span>*</span>
                                    Tên chủ cửa hàng:
                                </div>
                                <input id='product_nameField' name='product_nameField' type='text' required>

                                <div class='home_title'>
                                    <span>*</span>
                                    Lĩnh vực kinh doanh:
                                </div>
                                <input id='priceField' name='priceField' type='text' required>
                                
                                <div class='home_title'>
                                    Giới thiệu cửa hàng:
                                </div>
                                <input id='unitField' name='unitField' type='text'>
                                
                                <div class='home_title'>
                                    Ghi chú cửa hàng:
                                </div>
                                <input id='inventoryField' name='inventoryField' type='text'>
                                
                                
                            ";
            
                            $sql = "SELECT * FROM shop_products WHERE product_id LIKE '$productid'";
                            $result = $conn->query($sql);
            
                            if ($result -> num_rows > 0) {
                                // Load dữ liệu lên website
                                while($row = $result->fetch_assoc()) {
                                    echo "<span class='describe_inf_echo' id='product_code_inf'>{$row['product_code']}</span>";
                                    echo "<span class='describe_inf_echo' id='product_name_inf'>{$row['product_name']}</span>";
                                    echo "<span class='describe_inf_echo' id='price_inf'>{$row['price']}</span>";
                                    echo "<span class='describe_inf_echo' id='unit_inf'>{$row['unit']}</span>";
                                    echo "<span class='describe_inf_echo' id='inventory_inf'>{$row['inventory']}</span>";
                                    echo "<span class='describe_inf_echo' id='supplier_inf'>{$row['supplier']}</span>";
                                    echo "<span class='describe_inf_echo' id='big_unit_inf'>{$row['big_unit']}</span>";
                                    echo "<span class='describe_inf_echo' id='big_unit_code_inf'>{$row['big_unit_code']}</span>";
                                    echo "<span class='describe_inf_echo' id='big_unit_price_inf'>{$row['big_unit_price']}</span>";
                                    echo "<span class='describe_inf_echo' id='product_name_inf'>{$row['product_name']}</span>";
                                    echo "<span class='describe_inf_echo' id='product_describe_inf'>{$row['product_describe']}</span>";
                                    echo "<span class='describe_inf_echo' id='note_inf'>{$row['note']}</span>";

                                    echo "
                                        <div class='home_title'>
                                            Giới thiệu sản phẩm:
                                        </div>
                                        <textarea id='itdcField' name='itdcField' type='text' placeholder='Mô tả thêm về sản phẩm của bạn...'>{$row['product_describe']}</textarea>
        
                                        <div class='home_title'>Ghi chú:</div>
                                        <textarea id='noteField' name='noteField' type='text' placeholder='Ghi chú sản phẩm...'>{$row['note']}</textarea>
        
                                        <button style='display: none' type='submit' id='send' name='send'>Gửi</button>
                                    </form>
                                    ";

                                    if(isset($_POST['send']))
                                    {
                                        $product_codeField = $_POST["product_codeField"];
                                        $product_nameField = $_POST["product_nameField"];
                                        $priceField = $_POST["priceField"];
                                        $unitField = $_POST["unitField"];
                                        $inventoryField = $_POST["inventoryField"];
                                        $supplierField = $_POST["supplierField"];
                                        $big_unitField = $_POST["big_unitField"];
                                        $big_unit_codeField = $_POST["big_unit_codeField"];
                                        $big_unit_priceField = $_POST["big_unit_priceField"];
                                        $itdcField = $_POST["itdcField"];
                                        $noteField = $_POST["noteField"];
                
                                        // Chèn dữ liệu vào database
                                        $sql_add = "UPDATE shop_products SET product_name = '$product_nameField', price = '$priceField', shop_id = '$shopid', product_code = '$product_codeField', unit = '$unitField', product_describe = '$itdcField', inventory = '$inventoryField', supplier = '$supplierField', big_unit = '$big_unitField', big_unit_code = '$big_unit_codeField', big_unit_price = '$big_unit_priceField', note = '$noteField' WHERE product_id = '$productid'";

                                        // Kiểm tra chèn dữ liệu
                                        if (mysqli_query($conn, $sql_add)) {
                                            // Thông báo nếu thành công
                                            echo "<div class='notice'>Sửa dữ liệu thành công!</div>";
                                            echo "<span style='display:none' id='redirect'>editok</span>";
                                            echo "<span style='display:none' id='shop_id'>$shopid</span>";
                                        }
                                        else {
                                            // Hiện thông báo khi không thành công
                                            echo "<div class='notice'>Thêm sản phẩm không thành công! Vui lòng thử lại hoặc phản hồi cho hệ thống.</div>" . "Lỗi: " . mysqli_error($conn);
                                        }
                                    }
                                }
                            } else {
                                echo "<div class='notice'>Id người dùng được khai báo không tồn tại trong hệ thống.</div>";
                            }
                        }

                        if($shoppage === "addproduct") {
                            echo "
                            <b>Thêm mới hàng hóa</b><br><br>
                            <form name='cform' id='cform' method='post' entype='multipart/form-data'>
                                <div class='home_title'>
                                    Mã sản phẩm (Mã vạch):
                                </div>
                                <input id='product_codeField' name='product_codeField' type='text' autocomplete='off'>

                                <div class='home_title'>
                                    <span>*</span>
                                    Tên sản phẩm:
                                </div>
                                <input id='product_nameField' name='product_nameField' type='text' required>

                                <div class='home_title'>
                                    <span>*</span>
                                    Giá tiền:
                                </div>
                                <input id='priceField' name='priceField' type='text' required>
                                
                                <div class='home_title'>
                                    <span>*</span>
                                    Đơn vị tính (gói, chai, hộp,...):
                                </div>
                                <input id='unitField' name='unitField' type='text' required>
                                
                                <div class='home_title'>
                                    <span>*</span>
                                    Số lượng:
                                </div>
                                <input id='inventoryField' name='inventoryField' type='text' required>
                                
                                <div class='home_title'>
                                    Nhà phân phối:
                                </div>
                                <input id='supplierField' name='supplierField' type='text'>
                                
                                <div class='home_title'>
                                    Đơn vị tính lớn (Thùng, bịch,...):
                                </div>
                                <input id='big_unitField' name='big_unitField' type='text'>
                                
                                <div class='home_title'>
                                    Mã đơn vị tính lớn:
                                </div>
                                <input id='big_unit_codeField' name='big_unit_codeField' type='text'>
                                
                                <div class='home_title'>
                                    Giá đơn vị tính lớn:
                                </div>
                                <input id='big_unit_priceField' name='big_unit_priceField' type='text'>
                                
                                <div class='home_title'>
                                    Giới thiệu sản phẩm:
                                </div>
                                <textarea id='itdcField' name='itdcField' type='text' placeholder='Mô tả thêm về sản phẩm của bạn...'></textarea>

                                <div class='home_title'>Ghi chú:</div>
                                <textarea id='noteField' name='noteField' type='text' placeholder='Ghi chú sản phẩm...'></textarea>

                                <button style='display:none;' type='submit' id='send' name='send'>Gửi</button>
                            </form>
                            ";
            
                            $sql = "SELECT * FROM shop_user WHERE shop_id LIKE '$shopid'";
                            $result = $conn->query($sql);
            
                            if ($result -> num_rows > 0) {
                                // Load dữ liệu lên website
                                while($row = $result->fetch_assoc()) {
                                    if(isset($_POST['send']))
                                    {
                                        $product_codeField = $_POST["product_codeField"];
                                        $product_nameField = $_POST["product_nameField"];
                                        $priceField = $_POST["priceField"];
                                        $unitField = $_POST["unitField"];
                                        $inventoryField = $_POST["inventoryField"];
                                        $supplierField = $_POST["supplierField"];
                                        $big_unitField = $_POST["big_unitField"];
                                        $big_unit_codeField = $_POST["big_unit_codeField"];
                                        $big_unit_priceField = $_POST["big_unit_priceField"];
                                        $itdcField = $_POST["itdcField"];
                                        $noteField = $_POST["noteField"];

                                        // Tạo id random cho sản phẩm
                                        $id_random= '0123456789abcdefghijklmnopqrstuvwxyz';
                                        $product_id = substr(str_shuffle($id_random), 0, 100000);
                
                                        // Chèn dữ liệu vào database
                                        $sql_add = "INSERT INTO shop_products (product_name, price, shop_id, product_code, product_id, unit, product_describe, inventory, supplier, big_unit, big_unit_code, big_unit_price, note) VALUES ('$product_nameField', '$priceField', '$shopid', '$product_codeField', '$product_id', '$unitField', '$itdcField', '$inventoryField', '$supplierField', '$big_unitField', '$big_unit_codeField', '$big_unit_priceField', '$noteField')";

                                        // Kiểm tra chèn dữ liệu
                                        if (mysqli_query($conn, $sql_add)) {
                                            // Thông báo nếu thành công
                                            echo "<div class='notice'>Đã thêm sản phẩm thành công! Id sản phẩm: {$product_id}</div>";
                                            echo "<span style='display:none' id='redirect'>ok</span>";
                                            echo "<span style='display:none' id='shop_id'>$shopid</span>";
                                        }
                                        else {
                                            // Hiện thông báo khi không thành công
                                            echo "<div class='notice'>Thêm sản phẩm không thành công! Vui lòng thử lại hoặc phản hồi cho hệ thống.</div>" . "Lỗi: " . mysqli_error($conn);
                                        }
                                    }

                                    // if (isset($_POST['list'])) {
                                    //     $listValue = $_POST['list'];
                                    
                                    //     // Connect to the database
                                    //     $db = new mysqli("host", "user", "password", "database");
                                    
                                    //     // Check connection
                                    //     if ($db->connect_error) {
                                    //       die("Connection failed: " . $db->connect_error);
                                    //     }
                                    
                                    //     // Prepare and bind
                                    //     $stmt = $db->prepare("INSERT INTO dropdown_list (list_value) VALUES (?)");
                                    //     $stmt->bind_param("s", $listValue);
                                    
                                    //     // Execute
                                    //     $stmt->execute();
                                    
                                    //     // Close connection
                                    //     $db->close();
                                    // }
                                }
                            } else {
                                echo "<div class='notice'>Id người dùng được khai báo không tồn tại trong hệ thống.</div>";
                            }
                        }

                        if($shoppage === "editproduct") {
                            $productid = $_GET['productid'];

                            echo "
                            <b>Sửa hàng hóa</b><br><br>
                            <form name='cform' id='cform' method='post' entype='multipart/form-data'>
                                <div class='home_title'>
                                    Mã sản phẩm (Mã vạch):
                                </div>
                                <input id='product_codeField' name='product_codeField' type='text' autocomplete='off'>

                                <div class='home_title'>
                                    <span>*</span>
                                    Tên sản phẩm:
                                </div>
                                <input id='product_nameField' name='product_nameField' type='text' required>

                                <div class='home_title'>
                                    <span>*</span>
                                    Giá tiền:
                                </div>
                                <input id='priceField' name='priceField' type='text' required>
                                
                                <div class='home_title'>
                                    <span>*</span>
                                    Đơn vị tính (gói, chai, hộp,...):
                                </div>
                                <input id='unitField' name='unitField' type='text' required>
                                
                                <div class='home_title'>
                                    <span>*</span>
                                    Số lượng:
                                </div>
                                <input id='inventoryField' name='inventoryField' type='text' required>
                                
                                <div class='home_title'>
                                    Nhà phân phối:
                                </div>
                                <input id='supplierField' name='supplierField' type='text'>
                                
                                <div class='home_title'>
                                    Đơn vị tính lớn (Thùng, bịch,...):
                                </div>
                                <input id='big_unitField' name='big_unitField' type='text'>
                                
                                <div class='home_title'>
                                    Mã đơn vị tính lớn:
                                </div>
                                <input id='big_unit_codeField' name='big_unit_codeField' type='text'>
                                
                                <div class='home_title'>
                                    Giá đơn vị tính lớn:
                                </div>
                                <input id='big_unit_priceField' name='big_unit_priceField' type='text'>
                            ";
            
                            $sql = "SELECT * FROM shop_products WHERE product_id LIKE '$productid'";
                            $result = $conn->query($sql);
            
                            if ($result -> num_rows > 0) {
                                // Load dữ liệu lên website
                                while($row = $result->fetch_assoc()) {
                                    echo "<span class='describe_inf_echo' id='product_code_inf'>{$row['product_code']}</span>";
                                    echo "<span class='describe_inf_echo' id='product_name_inf'>{$row['product_name']}</span>";
                                    echo "<span class='describe_inf_echo' id='price_inf'>{$row['price']}</span>";
                                    echo "<span class='describe_inf_echo' id='unit_inf'>{$row['unit']}</span>";
                                    echo "<span class='describe_inf_echo' id='inventory_inf'>{$row['inventory']}</span>";
                                    echo "<span class='describe_inf_echo' id='supplier_inf'>{$row['supplier']}</span>";
                                    echo "<span class='describe_inf_echo' id='big_unit_inf'>{$row['big_unit']}</span>";
                                    echo "<span class='describe_inf_echo' id='big_unit_code_inf'>{$row['big_unit_code']}</span>";
                                    echo "<span class='describe_inf_echo' id='big_unit_price_inf'>{$row['big_unit_price']}</span>";
                                    echo "<span class='describe_inf_echo' id='product_name_inf'>{$row['product_name']}</span>";
                                    echo "<span class='describe_inf_echo' id='product_describe_inf'>{$row['product_describe']}</span>";
                                    echo "<span class='describe_inf_echo' id='note_inf'>{$row['note']}</span>";

                                    echo "
                                        <div class='home_title'>
                                            Giới thiệu sản phẩm:
                                        </div>
                                        <textarea id='itdcField' name='itdcField' type='text' placeholder='Mô tả thêm về sản phẩm của bạn...'>{$row['product_describe']}</textarea>
        
                                        <div class='home_title'>Ghi chú:</div>
                                        <textarea id='noteField' name='noteField' type='text' placeholder='Ghi chú sản phẩm...'>{$row['note']}</textarea>
        
                                        <button style='display: none' type='submit' id='send' name='send'>Gửi</button>
                                    </form>
                                    ";

                                    if(isset($_POST['send']))
                                    {
                                        $product_codeField = $_POST["product_codeField"];
                                        $product_nameField = $_POST["product_nameField"];
                                        $priceField = $_POST["priceField"];
                                        $unitField = $_POST["unitField"];
                                        $inventoryField = $_POST["inventoryField"];
                                        $supplierField = $_POST["supplierField"];
                                        $big_unitField = $_POST["big_unitField"];
                                        $big_unit_codeField = $_POST["big_unit_codeField"];
                                        $big_unit_priceField = $_POST["big_unit_priceField"];
                                        $itdcField = $_POST["itdcField"];
                                        $noteField = $_POST["noteField"];
                
                                        // Chèn dữ liệu vào database
                                        $sql_add = "UPDATE shop_products SET product_name = '$product_nameField', price = '$priceField', shop_id = '$shopid', product_code = '$product_codeField', unit = '$unitField', product_describe = '$itdcField', inventory = '$inventoryField', supplier = '$supplierField', big_unit = '$big_unitField', big_unit_code = '$big_unit_codeField', big_unit_price = '$big_unit_priceField', note = '$noteField' WHERE product_id = '$productid'";

                                        // Kiểm tra chèn dữ liệu
                                        if (mysqli_query($conn, $sql_add)) {
                                            // Thông báo nếu thành công
                                            echo "<div class='notice'>Sửa dữ liệu thành công!</div>";
                                            echo "<span style='display:none' id='redirect'>editok</span>";
                                            echo "<span style='display:none' id='shop_id'>$shopid</span>";
                                        }
                                        else {
                                            // Hiện thông báo khi không thành công
                                            echo "<div class='notice'>Thêm sản phẩm không thành công! Vui lòng thử lại hoặc phản hồi cho hệ thống.</div>" . "Lỗi: " . mysqli_error($conn);
                                        }
                                    }
                                }
                            } else {
                                echo "<div class='notice'>Id người dùng được khai báo không tồn tại trong hệ thống.</div>";
                            }
                        }

                        if($shoppage === "product_manage") {
                            echo "<span style='display:none' id='changeBGColor'>bgcolor_shopmanager_product_manage</span>";

                            echo "<div class='home_title'>Tất cả hàng hóa:</div>";
                            $sql = "SELECT * FROM shop_products WHERE shop_id LIKE '$shopid'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                echo "<table id='table_product'>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã vạch</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Đơn vị tính</th>
                                            <th>Số lượng</th>
                                            <th>Nhà phân phối</th>
                                            <th class='more_table_column'>Mô tả sản phẩm</th>
                                            <th>Ghi chú</th>
                                            <th class='more_table_column_2'>Id</th>
                                            <th>Hoạt động</th>
                                        </tr>";
                                // output data of each row
                                $i = 1;
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr><td class='stt_box'>".$i."</td><td>".$row["product_code"]."</td><td>".$row["product_name"]."</td><td>".$row["price"]."</td><td>".$row["unit"]."</td><td>".$row["inventory"]."</td><td>".$row["supplier"]."</td><td class='more_table_column'>".$row["product_describe"]."</td><td>".$row["note"]."</td><td class='more_table_column_2'>".$row["product_id"]."</td><td class='button_action_box'><a href='?id={$id}&page=shopmanager&shopid={$shopid}&shoppage=editproduct&productid={$row['product_id']}'><button>Sửa</button></a><form class='form_action_table_bd' method='post' entype='multipart/form-data'><input style='display: none' name='product_id' value='".$row['product_id']."'><button name='delete_data'>Xóa</button></form></td></tr>";
                                    $i++;

                                    if (isset($_POST['delete_data'])) {
                                        $input_get_value = $_POST['product_id'];
                                        //code to delete product
                                        $sql_dlt = "DELETE FROM shop_products WHERE product_id = '$input_get_value'";
                                                            
                                        if (mysqli_query($conn, $sql_dlt)) {
                                            echo 'Product deleted successfully.';
                                            echo "<span style='display:none' id='redirect'>delete_complete</span>";
                                        }
                                        else {
                                            echo 'Error deleting product.';
                                        }
                                    }
                                }

                                echo "</table>";

                                echo "<div class='home_title' style='margin-top: 46px'>Nhập hàng:</div>";
                            } else {
                                echo "<div class='notice'>Bạn chưa tạo mặt hàng nào!</div>";
                            }
                        }
                    }

                    $conn->close();
                ?>

            <!-- </a> -->
        </div>
        <div>
            
        </div>
        <div>
            <div class="home_title">Cách website hoạt động:</div>
            <div class="home_text">
                Khi bạn tạo và quản lí 1 cửa hàng trên website, chúng tôi sẽ tạo trên mỗi trang Thương Mại Điện Tử như: Shoppee, Lazada, Sendo,... một cửa hàng với các thông tin của bạn trên website này, qua đó khách hàng của bạn sẽ nhiều hơn và thu được nhiều lợi nhuận hơn.
            </div>
        </div>
    </div>
</body>

<script src="/Hugy wase shop/store_manage_id/main.js"></script>

<script>
    
    document.getElementById("nav_btn_manage").onclick = function() {
        window.location = "/Hugy wase shop/store_manage_id/hgw_57829126847183265285189772839931363454588434554583/user_shop/sun-station/manage";
    }

    document.getElementById("nav_btn_productivity").onclick = function() {
        window.location = "/Hugy wase shop/store_manage_id/hgw_57829126847183265285189772839931363454588434554583/user_shop/sun-station/productivity";
    }

</script>

<script>
    // Vì user_id và shop_id không được in ra dữ liệu từ ở trên nên không thể lấy innerHTML được, phải in ra dữ liệu từ đoạn 
    var user_id = document.getElementById("user_id").innerHTML;
    var shop_id = document.getElementById("shop_id").innerHTML;
    document.getElementById("nav_btn_overview").onclick = function() {
        window.location = "?" + "id=" + user_id + "&page=shopmanager" + "&shopid=" + shop_id + "&shoppage=index";
    }
    document.getElementById("nav_btn_product").onclick = function() {
        window.location = "?" + "id=" + user_id + "&page=shopmanager" + "&shopid=" + shop_id + "&shoppage=product_manage";
    }
</script>

<script>
    if (document.getElementById("changeBGColor").innerHTML == "bgcolor_shopmanager_index") {
        document.getElementById("nav_btn_overview").style.background = "#4BA3C3";
    }
    if (document.getElementById("changeBGColor").innerHTML == "bgcolor_shopmanager_product_manage") {
        document.getElementById("nav_btn_product").style.background = "#4BA3C3";
    }
</script>

<script>
</script>

<script>
    var user_id = document.getElementById("user_id").innerHTML;
    document.getElementById("btn_create_shop_link").onclick = function() {
        window.location = "?" + "id=" + user_id + "&page=create_store";
    }
</script>

<script>
    var user_id = document.getElementById("user_id").innerHTML;
    var shop_id = document.getElementById("shop_id").innerHTML;
    if (document.getElementById("redirect").innerHTML == "ok") {
        window.location = "?" + "id=" + user_id + "&page=shopmanager" + "&shopid=" + shop_id + "&shoppage=index";
    }
</script>

<script>
    var user_id = document.getElementById("user_id").innerHTML;
    var shop_id = document.getElementById("shop_id").innerHTML;
    if (document.getElementById("redirect").innerHTML == "editok") {
        window.location = "?" + "id=" + user_id + "&page=shopmanager" + "&shopid=" + shop_id + "&shoppage=index";
    }
</script>

<script>
    if (document.getElementById("redirect").innerHTML == "delete_complete") {
        window.location = "";
    }
</script>

<script>
    document.getElementById("product_codeField").value = document.getElementById("product_code_inf").innerHTML;
    document.getElementById("product_nameField").value = document.getElementById("product_name_inf").innerHTML;
    document.getElementById("priceField").value = document.getElementById("price_inf").innerHTML;
    document.getElementById("unitField").value = document.getElementById("unit_inf").innerHTML;
    document.getElementById("inventoryField").value = document.getElementById("inventory_inf").innerHTML;
    document.getElementById("supplierField").value = document.getElementById("supplier_inf").innerHTML;
    document.getElementById("big_unit_codeField").value = document.getElementById("big_unit_code_inf").innerHTML;
    document.getElementById("big_unitField").value = document.getElementById("big_unit_inf").innerHTML;
    document.getElementById("big_unit_priceField").value = document.getElementById("big_unit_price_inf").innerHTML;
    document.getElementById("product_describeField").value = document.getElementById("product_describe_inf").innerHTML;
    document.getElementById("noteField").value = document.getElementById("note_inf").innerHTML;
</script>

<script>
document.getElementById("title_not_down_line").onclick = function() {
    let thElements = document.getElementsByTagName('th');
    for(let i = 0; i < thElements.length; i++){
        let isWhiteSpaceNowrap = thElements[i].style.whiteSpace === 'nowrap';
        thElements[i].style.whiteSpace =  isWhiteSpaceNowrap ? '' : 'nowrap';
    }

    var x = document.getElementById('check_icon');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}
</script>

<script>
document.getElementById("three_vertical_dots").onclick = function() {
    var more_box_list = document.getElementById('more_box_list');
    if (more_box_list.style.display === 'block') {
        more_box_list.style.display = 'none';
    } else {
        more_box_list.style.display = 'block';
    }
}
</script>

<script>
const btn = document.getElementById('btn_more_table_column');
let isShowing = false;

btn.addEventListener('click', () => {
    const elements = document.querySelectorAll('.more_table_column, .more_table_column_2');
    elements.forEach(element => {
        if (element.classList.contains('more_table_column')) {
            if (isShowing) {
                element.style.display = 'none';
                isShowing = false;
            } else {
                element.style.display = 'table-cell';
                isShowing = true;
            }
        } else if (element.classList.contains('more_table_column_2')) {
            if (isShowing) {
                element.style.display = 'table-cell';
                isShowing = false;
            } else {
                element.style.display = 'none';
                isShowing = true;
            }
        }
    });

    var x = document.getElementById('check_icon_2');
    // Do cột chỉ hiện lên khi nhấn nút lần đầu tiên, không ẩn khi nhấn lại nên dấu tick V cũng chưa cần ẩn đi -> comment lại

    // if (x.style.display === 'block') {
    //     x.style.display = 'none';
    // } else {
        x.style.display = 'block';
    // }
});
</script>

<!-- <script>
    $('.delete_receiving').click(function(){
		_conf("Are you sure to delete this receiving?","delete_receiving",[$(this).attr('data-id')])
	})
	function delete_receiving($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_receiving',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script> -->

<!-- With the help of a small part of AI -->

</html>