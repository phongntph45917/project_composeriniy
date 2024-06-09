<div class="container-fluid pt-4 px-4">
            <h1>Danh sách thống kê theo danh mục sản phẩm</h1>
        </div>
        <div class="bg-light rounded p-4">
            <form action="" method="post">
                <div class="row frmcontent">
                   <table class="table">
                    <tr>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Số lượng</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
                        <th></th>
                    </tr>
                   <?php
                    foreach ( $list_thongke as $tk) {
                        extract($tk);
                        echo '
                        <tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$minprice.'</td>
                            <td>'.$maxprice.'</td>
                            <td>'.$avgprice.'</td>
                            </tr>
                        ';
                    }
                   ?>
                   
                   </table>
                </div>
                
                <div class="row frmcontent">
                    <a href="index.php?act=bieudo"><button class="btn btn-primary" type="button">Xem biểu đồ</button></a>
                </div>
            </form>
        </div>