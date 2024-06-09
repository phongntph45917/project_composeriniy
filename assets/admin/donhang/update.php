<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="row">
        <table class="table table-bordered text-center mb-0">
            <div class="card-header bg-secondary border-0">
                <h5 class="font-weight-semi-bold m-0">Thông tin khách hàng</h5>
            </div>
            <br>
            <?php
            extract($donhang);
            ?>

            <li><strong> Tên khách hàng:</strong> <?= $user ?></li>
            <li><strong>Email:</strong> <?= $email ?></li>
            <li><strong>Địa chỉ:</strong> <?= $diachi ?></li>
            <li><strong>Số điện thoại:</strong> <?= $sdt ?></li>
            <li><strong>Ma đơn hàng:</strong> DAM-<?= $id ?></li>
            <li><strong>Ngày đặt hàng:</strong> <?= $ngaydathang ?></li>
            <li><strong>Tổng tiền:</strong> <?= $tongdonhang ?></li>
            <li><strong>Phương thức thanh toán:</strong>
                <?php
                switch ($pttt) {
                    case '0':
                        $txtmess = "Thanh toán khi nhận hàng";
                        break;

                    case '1':
                        $txtmess = "Thanh toán online";
                        break;
                    case '2':
                        $txtmess = "Thanh toán qua QRcode";
                        break;

                    default:
                        $txtmess = "quý khách chưa chọn phương thức thanh toán";
                        break;
                }
                ?>
                <?= $txtmess ?>

            </li>

            <li><strong>Trang thái:</strong>
                <?php
                switch ($trangthai) {
                    case '0':
                        $tt = "Chờ xác nhận";
                        break;

                    case '1':
                        $tt = "Đã xác nhận";
                        break;
                    case '2':
                        $tt = "Đang giao hàng";
                        break;
                    case '3':
                        $tt = "Đã nhận hàng ";
                        break;
                    case '4':
                        $tt = "Đã hoàn thành";
                        break;
                    case '5':
                        $tt = "Hủy";
                        break;


                    default:
                        $tt = "";
                        break;
                }
                ?>
                <?= $tt ?>

            </li>
        </table>

        <table class="table table-bordered text-center mb-0">
            <thead class="bg-secondary text-dark">
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Size</th>
                    <th>Tiền</th>

                </tr>
            </thead>
            <tbody class="align-middle">
                <?php
                $tong = 0;
                $i = 0;
                foreach ($billcart as $cart) {
                    extract($cart);
                    $hinhpath = "../upload/" . $hinh;
                    if (is_file($hinhpath)) {
                        $img = "<img src='" . $hinhpath . "' width='80'>";
                    } else {
                        $img = "no photo";
                    }
                    $tong += $thanhtien;
                    ?>
                    <tr>
                        <td class="align-middle"><img src="<?= $hinhpath ?> " alt="" style="width: 50px;"><?= $tensp ?></td>
                        <td class="align-middle"><?= $gia ?></td>
                        <td class="align-middle"><?= $soluong ?></td>
                        <td class="align-middle"><?= $size ?></td>
                        <td class="align-middle"><?= $thanhtien ?></td>

                    </tr>

                    <?php
                    $i += 1;
                }
                ?>
            </tbody>
        </table>


        <div class="card-footer alert-secondary">
            <div class="d-flex justify-content-between mt-2 ">
                <h5 class="font-weight-bold">Số tiền cần phải trả:</h5>
                <h5 class="font-weight-bold"><?= $tong ?></h5>
            </div>
        </div>

        <div class="row pt-5">
            <?php
            extract($donhang);
            ?>
            <form action="index.php?act=updatedh" method="post">



                <h5 class="font-weight-bold">Cập nhật trạng thái</h5>
                <select name="trangthai" id="">
                    <option value="0">Chờ xác nhận</option>
                    <option value="1">Đã xác nhận</option>
                    <option value="2">Đang giao hàng</option>
                    <option value="3">Đã nhận hàng</option>
                    <option value="4">Hủy</option>
                </select>
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
            </form>
        </div>
    </div>
</div>
<!-- Contact End -->