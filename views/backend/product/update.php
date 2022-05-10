<?php

use App\Models\Product;
use App\Models\Category;

$product = new Product();
$category = new Category();

$id = $_REQUEST['id'];
$row = $product->product_row($id);

$list = $category->category_list(['status' => 'index']);
$strcatid = '';
foreach ($list as $item) {
    if ($row['catid'] == $item['id']) {
        $strcatid .= "<option selected value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    } else {
        $strcatid .= "<option value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    }
}
?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=product&cat=process" method="post" enctype="multipart/form-data">
    <div class="content-wrapper py-2">

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6"><strong class="text-danger">
                                CẬP NHẬT SẢN PHẨM</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=product" class="btn btn-sm btn-success">
                                <i class="fas fa-plus"> </i> QUAY VỀ DANH SÁCH
                            </a>
                            <button name="CAPNHAT" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-plus"> </i>Lưu[Cập Nhật]
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="id" value="<?php echo $row['id']; ?>" type="hidden" />
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label for="name">Tên chủ đề</label>
                                <input name="data[name]" id="name" value="<?php echo $row['name']; ?>" type="text" class="form-control" required placeholder="Nhập tên loại" />
                            </div>
                            <div class="mb-3">
                                <label for="detail">Chi tiết</label>
                                <textarea name="data[detail]" id="detail" class="form-control" required rows="4"><?php echo $row['detail']; ?></textarea>

                            </div>
                            <div class="mb-3">
                                <label for="metakey">Từ khoá SEO</label>
                                <textarea name="data[metakey]" id="metakey" class="form-control" required rows="4"><?php echo $row['metakey']; ?></textarea>

                            </div>
                            <div class="mb-3">
                                <label for="metadesc">Mô tả SEO</label>
                                <textarea name="data[metadesc]" id="metadesc" class="form-control" required rows="4"><?php echo $row['metadesc']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="catid">Chọn loại sản phẩm</label>
                                <select name="data[catid]" id="catid" class="form-control" required>
                                    <option value="">Chọn loại</option>
                                    <?php echo $strcatid; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="number">Số lượng</label>
                                <input name="data[number]" id="number" class="form-control" type="number" min="1" max="10000" value="<?php echo $row['number']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="price">Giá</label>
                                <input name="data[price]" id="price" class="form-control" type="number" step="10000" min="50000" max="999999999" value="<?php echo $row['price']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="pricesale">Giá khuyến mãi</label>
                                <input name="data[pricesale]" id="pricesale" class="form-control" type="number" step="10000" min="50000" max="999999999" value="<?php echo $row['pricesale']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="hinh">Hình</label>
                                <input name="img" id="hinh" type="file" />
                            </div>
                            <div class="mb-3">
                                <label for="status">Trạng thái</label>
                                <select name="data[status]" id="status" class="form-control">
                                    <option value="2" <?php echo ($row['status'] == 2) ? 'selected' : ''; ?>>Chưa xuất bản</option>
                                    <option value="1" <?php echo ($row['status'] == 1) ? 'selected' : ''; ?>>Xuất bản</option>
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