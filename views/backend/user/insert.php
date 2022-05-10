<?php

use App\Models\User;

$user = new User();
$list = $user->user_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=user&cat=process" method="post">
    <div class="content-wrapper py-2">

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6"><strong class="text-danger">
                                THÊM THÀNH VIÊN</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=user" class="btn btn-sm btn-success">
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
                                <label for="fullname">Họ tên thành viên</label>
                                <input name="data[fullname]" id="fullname" type="text" class="form-control" required placeholder="Họ và tên" />
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input name="data[email]" id="email" type="text" class="form-control" required placeholder="Thư điện tử" />

                            </div>
                            <div class="mb-3">
                                <label for="phone">Số điện thoại</label>
                                <input name="data[phone]" id="phone" type="text" class="form-control" required placeholder="Số điện thoại" />
                            </div>

                            <div class="mb-3">
                                <label for="username">Tên đăng nhập</label>
                                <input name="data[username]" id="username" type="text" class="form-control" required placeholder="Tên đăng nhập" />
                            </div>
                            <div class="mb-3">
                                <label for="password">Mật khẩu</label>
                                <input name="data[password]" id="password" type="text" class="form-control" required placeholder="Mật khẩu" />
                            </div>


                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="gender">Chọn giới tính</label>
                                <select name="data[gender]" id="gender" class="form-control">
                                    <option value="2">Nam</option>
                                    <option value="1">Nữ</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="roles">Vai trò</label>
                                <select name="data[roles]" id="roles" class="form-control">
                                    <option value="2">Adminitrator</option>
                                    <option value="1">Editor</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="hinh">Avatar</label>
                                <input name="img" id="hinh" type="file" required />
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