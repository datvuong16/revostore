<?php

use App\Models\Slider;


$slider = new Slider();
$list = $slider->slider_list(['status' => 'index']);
$strposition = '';
$strorders = '';
foreach ($list as $item) {
    $strposition .= "<option value='" . $item['id'] . "'>" . $item['position'] . "</option>";
    $strorders .= "<option value='" . $item['orders'] . "'> Sau: " . $item['name'] . "</option>";
}
?>

<?php require_once('../views/backend/header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=slider&cat=process" method="post" enctype="multipart/form-data">
    <div class="content-wrapper py-2">

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">THÊM LOẠI SLIDER</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=slider" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> Quay về danh sách
                            </a>
                            <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-save"></i>Lưu[Thêm]
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="name">Tên slider</label>
                                <input name="data[name]" type="text" class="form-control" required placeholder="Nhận tên slider">
                            </div>
                            <div class="mb-3">
                                <label for="link">Liên kết</label>
                                <input name="data[link]" id="link" class="form-control"></input>
                            </div>

                            <div class="mb-3">
                                <label for="hinh">Hình</label>
                                <input name="img" class="form-control" id="hinh" type="file" required>
                            </div>
                            <div class="mb-3">
                                <label for="position">Vị trí</label>
                                <select name="data[position]" id="position" class="form-control" required>
                                    <option value="0">Chọn vị trí </option>
                                    <?php echo $strposition; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="orders">Sắp xếp</label>
                                <select name="data[orders]" id="orders" class="form-control">
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

<?php require_once('../views/backend/footer.php'); ?>