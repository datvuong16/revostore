<?php

use App\Models\Menu;

$menu = new Menu(); //Tạo đối tượng
$list = $menu->menu_list();
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
                    <div class="col-md-6"><strong>
                            DANH SÁCH MENU</strong>
                    </div>
                    <div class="col-md-6 text-right">

                        <a href="index.php?option=menu&cat=deltrash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash">Thùng rác</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-3">
                        <table class="table table->bordered" id="myTable">
                            <div class="card">
                                <div class="accordion" id="accordionExample">
                                    <div class="card-header" id="headingmenu">
                                        <span>Loại sản phẩm</span>
                                        <span class="float-right btn btn-sm btn-info" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="true" aria-controls="collapsemenu">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                    <div id="collapsemenu" class="collapse p-2 m-2" aria-labelledby="headingmenu" data-parent="#accordionExample">
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu1" type="checkbox">
                                            <label for="menu1">Loại sản phẩm 1</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu2" type="checkbox">
                                            <label for="menu2">Loại sản phẩm 2</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu3" type="checkbox">
                                            <label for="menu3">Loại sản phẩm 3</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu4" type="checkbox">
                                            <label for="menu4">Loại sản phẩm 4</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu5" type="checkbox">
                                            <label for="menu5">Loại sản phẩm 5</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu6" type="checkbox">
                                            <label for="menu6">Loại sản phẩm 6</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu7" type="checkbox">
                                            <label for="menu7">Loại sản phẩm 7</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu8" type="checkbox">
                                            <label for="menu8">Loại sản phẩm 8</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu9" type="checkbox">
                                            <label for="menu9">Loại sản phẩm 9</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu10" type="checkbox">
                                            <label for="menu10">Loại sản phẩm 10</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="submit" name="Themmenu" value="Thêm" class="btn btn-success form-control">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </table>
                        <table class="table table->bordered" id="myTable">
                            <div class="card">
                                <div class="accordion" id="accordionExample">
                                    <div class="card-header" id="headingmenu">
                                        <span>Chủ đề bài viết</span>
                                        <span class="float-right btn btn-sm btn-info" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="true" aria-controls="collapsemenu">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                    <div id="collapsemenu" class="collapse p-2 m-2" aria-labelledby="headingmenu" data-parent="#accordionExample">
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu1" type="checkbox">
                                            <label for="menu1">Loại sản phẩm 1</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu2" type="checkbox">
                                            <label for="menu2">Loại sản phẩm 2</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu3" type="checkbox">
                                            <label for="menu3">Loại sản phẩm 3</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu4" type="checkbox">
                                            <label for="menu4">Loại sản phẩm 4</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu5" type="checkbox">
                                            <label for="menu5">Loại sản phẩm 5</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu6" type="checkbox">
                                            <label for="menu6">Loại sản phẩm 6</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu7" type="checkbox">
                                            <label for="menu7">Loại sản phẩm 7</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu8" type="checkbox">
                                            <label for="menu8">Loại sản phẩm 8</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu9" type="checkbox">
                                            <label for="menu9">Loại sản phẩm 9</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input name="namemenu[]" value="1" id="menu10" type="checkbox">
                                            <label for="menu10">Loại sản phẩm 10</label>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="submit" name="Themmenu" value="Thêm" class="btn btn-success form-control">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </table>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th>Tên menu</th>
                                    <th style="width:160px" class="text-center">Chức năng</th>
                                    <th style="width:30px" class="text-center">ID</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>



                    </table>
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
<!-- /.content-wrapper -->
<?php require_once('../views/backend/footer.php') ?>