<?php

use App\Models\contact;

$contact = new Contact();
$id = $_REQUEST['id'];
$row = $contact->contact_row($id);

$list = $contact->contact_list(['status' => 'index']);
$strtitle = '';
$strdetail = '';

?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=contact&cat=process" method="post">
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
                            <a href="index.php?option=contact" class="btn btn-sm btn-success">
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
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="fullname">Họ và tên</label>
                                <input name="data[fullname]" value="<?php echo $row['fullname']; ?>" id="fullname" type="text" class="form-control" required placeholder="Nguyễn Văn A" />
                            </div>
                            <div class="mb-3">
                                <label for="fullname">Tiêu đề</label>

                            </div>
                            <div class="mb-3">
                                <label for="fullname">Chi tiết</label>

                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="phone">Số điện thoại</label>
                                <input name="data[fullname]" value="<?php echo $row['fullname']; ?>" id="fullname" type="text" class="form-control" required placeholder="Nguyễn Văn A" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input name="data[fullname]" value="<?php echo $row['fullname']; ?>" id="fullname" type="text" class="form-control" required placeholder="Nguyễn Văn A" />

                            </div>

                        </div>
                        <div class="col-md-3">
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