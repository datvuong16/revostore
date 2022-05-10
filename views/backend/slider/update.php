<?php

use App\Models\Slider;

$slider = new Slider();
$id = $_REQUEST['id'];
$row = $slider->slider_row($id);

$list = $slider->slider_list(['status' => 'index']);
$strposition = '';
foreach ($list as $item) {

    if ($row['orders'] == $item['id']) {
        $strposition .= "<option selected value='" . $item['orders'] . "'>Sau: " . $item['name'] . "</option>";
    }
}
?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=slider&cat=process" method="post">
    <div class="content-wrapper py-2">

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6"><strong class="text-danger">
                                CẬP NHẬT LOẠI SẢN PHẨM</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=slider" class="btn btn-sm btn-success">
                                <i class="fas fa-plus"> </i> QUAY VỀ DANH SÁCH
                            </a>
                            <button name="CAPNHAT" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-plus"> </i>Lưu[Cập nhật]
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="id" value="<?php echo $row['id']; ?>" type="hidden" />
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="name">Tên Slider</label>
                                <input name="data[name]" id="name" type="text" class="form-control" required placeholder="Nhập tên slider" />
                            </div>
                            <div class="mb-3">
                                <label for="link">Liên kết</label>
                                <input name="data[link]" id="link" type="text" class="form-control" required placeholder="Nhập liên kết" />
                            </div>
                            <div class="mb-3">
                                <label for="hinh">Hình ảnh</label>
                                <input name="img" id="hinh" type="file" required />
                            </div>
                            <div class="mb-3">
                                <label for="orders">Vị trí</label>
                                <select name="data[orders]" id="orders" class="form-control" required>
                                    <option value="">Chọn Vị trí</option>
                                    <?php echo $strorders; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status">Trạng thái</label>
                                <select name="data[status]" id="status" class="form-control">
                                    <option value="2">Chưa xuất bản</option>
                                    <option value="1">Xuất bản</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
</form>
<!-- /.content-wrapper -->
<?php require_once('../views/backend/footer.php') ?>