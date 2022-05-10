<?php

use App\Models\Menu;

$menu = new Menu();
$args = array(
    'status' => 1,
    'position' => 'mainmenu',
    'parentid' => 0,
    'order' => array('field' => 'orders', 'orderby' => 'ASC')
);
$list_menu = $menu->menu_list($args);
?>

<section class="mainmenu bg-mainmenu">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-mainmenu">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="#">Revo Store
                    <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        DANH MỤC
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Điện thoại</a></li>
                        <li><a class="dropdown-item" href="#">Laptop</a></li>
                        <li><a class="dropdown-item" href="#">Thời trang nam</a></li>
                        <li><a class="dropdown-item" href="#">Thời trang nữ</a></li>
                        <li><a class="dropdown-item" href="#">Balo</a></li>
                        <li><a class="dropdown-item" href="#">Túi xách</a></li>
                        <li><a class="dropdown-item" href="#">Nón</a></li>
                        <li><a class="dropdown-item" href="#">Giày</a></li>
                        <li><a class="dropdown-item" href="#">Phụ kiện điện tử</a></li>
                        <li><a class="dropdown-item" href="#">Phụ kiện thời trang</a></li>
                    </ul> 
                    --end banners -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php foreach ($list_menu as $row_menu) : ?>
                            <?php
                            $args1 = array(
                                'status' => 1,
                                'position' => 'mainmenu',
                                'parentid' => $row_menu['id'],
                                'order' => array('field' => 'orders', 'orderby' => 'ASC')
                            );
                            $list_menu1 = $menu->menu_list($args1);
                            ?>
                            <?php if (count($list_menu1) != 0) : ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo $row_menu['name']; ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach ($list_menu1 as $row_menu1) : ?>
                                            <li><a class="dropdown-item" href="<?php echo $row_menu1['link']; ?>"><?php echo $row_menu1['name']; ?></a></li>
                                        <?php endforeach; ?>

                                    </ul>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $row_menu['link']; ?>"><?php echo $row_menu['name']; ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </ul>
                    <a href="#"><i class="fa-solid fa-arrows-retweet"></i></a>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </nav>
    </div>
</section>