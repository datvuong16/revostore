<?php

use App\Models\contact;

$contact = new Contact();
$list = $contact->contact_list(['status' => 'index']);
$strfullname = '';
$stremail = '';
$strphone = '';
foreach ($list as $item) {
    $strfullname .= "<option value ='" . $item['id'] . "'>" . $item['fullname'] . "</option>";
    $stremail .= "<option value ='" . $item['id'] . "'>Sau: " . $item['email'] . "</option>";
    $strphone .= "<option value ='" . $item['id'] . "'>Sau: " . $item['phone'] . "</option>";
}
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
                                TRẢ LỜI LIÊN HỆ</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=contact" class="btn btn-sm btn-success">
                                <i class="fas fa-plus"> </i> QUAY VỀ DANH SÁCH
                            </a>
                            <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-plus"> </i>Lưu[Thêm]
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label for="title">Tiêu đề liên hệ</label>
                                <input name="data[title]" id="title" type="text" class="form-control" required placeholder="Tiêu đề liên hệ" />
                            </div>
                            <div class="mb-3">
                                <label for="replydetail">Nội dung câu hỏi</label>
                                <textarea name="data[replydetail]" id="replydetail" class="form-control" required rows="4"></textarea>

                            </div>
                            <div class="mb-3">
                                <label for="replyid">Nội dung trả lời</label>
                                <textarea name="data[replyid]" id="replyid" class="form-control" required rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="fullname">Họ và tên</label>
                                <input name="data[fullname]" id="fullname" type="text" class="form-control" required placeholder="<?php echo $row['fullname']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input name="data[email]" id="email" type="text" class="form-control" required placeholder="<?php echo $row['email']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="phone">Điện thoại</label>
                                <input name="data[phone]" id="phone" type="text" class="form-control" required placeholder="<?php echo $row['phone']; ?>" />
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