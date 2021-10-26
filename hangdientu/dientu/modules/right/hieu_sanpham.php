<?php

$PGSQL = "select * from products where product_brand='$_GET[id]' ";
$hieu = pg_query($conn, $PGSQL);
$PGSQL_tenhieu = "select tenhieu from hieu where hieu_id='$_GET[id]'   ";
$tenhieu = pg_query($conn, $PGSQL_tenhieu);
$dong_tenhieu = pg_fetch_array($tenhieu);
?>
<p class="loai"><?php echo $dong_tenhieu['tenhieu'] ?></p>
<ul>

    <?php
    while ($dong_hieu = pg_fetch_array($hieu)) {
        ?>
        <li><a href="#">
                <?php
                echo '<img src="admincp/modules/sanpham/uploads/' . $dong_hieu['product_image'] . '" width="120" height="150"/>';
                ?>
                <p>Tên sản phẫm: <?php echo $dong_hieu['product_title'] ?></p>
                <p>Giá:<?php echo $dong_hieu['product_price'] ?></p>
                <p style="color:#900;margin-left:20px;margin-top:5px;"><a
                            href="index.php?xem=chitiet&id=<?php echo $dong_hieu['product_id'] ?>" style="color:#09C;">Chi
                        tiết</p></a>

            </a></li>
        <?php
    }
    ?>
</ul>
          