<?php
$header = 'Ошибка 404';
require_once 'template/header.php';
?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <section class="box-body">
                <h1><?=$header;?></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li class="active"><?=$header;?></li>
                </ol>
            </section>
        </div>
    </div>
</div>

<?php
require_once 'template/footer.php';
?>