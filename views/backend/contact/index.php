<?php

use App\Models\contact;

$contact = new contact(); //Tạo đối tượng
$list = $contact->contact_list(['status' => 'index']);
?>

<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper py-2">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6"><strong class="text-danger">
                            DANH MỤC LIÊN HỆ</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=contact&cat=insert" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i> Thêm
                        </a>
                        <a href="index.php?option=contact&cat=trash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i> Thùng rác
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered " id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:20px">#</th>
                            <th>Tiêu đề liên hệ</th>
                            <th>Email</th>
                            <th class="text-center">Điện thoại</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Chức năng</th>
                            <th class="text-center" style="width:20px">ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $row) : ?>
                            <tr>
                                <td class="text-center">
                                    <input name="checkid" type="checkbox" />
                                </td>
                                <td><?php echo $row['title']; ?></td>

                                <td><?php echo $row['email']; ?></td>
                                <td class="text-center"><?php echo $row['phone']; ?></td>
                                <td class="text-center">
                                    <?php if ($row['status'] == 1) : ?>
                                        <a href="index.php?option=category&cat=status&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success">
                                            Đã trả lời
                                        </a>
                                    <?php else : ?>
                                        <a href="index.php?option=category&cat=status&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">
                                            Chưa trả lời
                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?option=contact&cat=reply" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>Trả lời
                                    </a>
                                </td>
                                <td class="text-center"><?php echo $row['id']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<?php require_once('../views/backend/footer.php') ?>