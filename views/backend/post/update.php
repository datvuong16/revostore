<?php

use App\Models\Post;
use App\Models\Topic;

$post = new Post();
$topic = new Topic();

$id = $_REQUEST['id'];
$row = $post->post_row($id);

$list = $topic->topic_list(['status' => 'index']);
$strtopid = '';
foreach ($list as $item) {
    $strtopid .= "<option value ='" . $item['id'] . "'>" . $item['name'] . "</option>";
}
?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=post&cat=process" method="post" enctype="multipart/form-data">
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
                            <a href="index.php?option=post" class="btn btn-sm btn-success">
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
                                <label for="title">Tên chủ đề</label>
                                <input name="data[title]" id="title" value="<?php echo $row['title']; ?>" type="text" class="form-control" required placeholder="Nhập tên loại" />
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
                                <label for="topid">Chọn loại sản phẩm</label>
                                <select name="data[topid]" id="topid" class="form-control" required>
                                    <option value="">Chọn loại</option>
                                    <?php echo $strtopid; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="hinh">Hình</label>
                                <input name="img" id="hinh" type="file" require />
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