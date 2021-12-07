<?php
// Start the session
session_start();
$_SESSION['token']=md5(1);
require_once 'DesignPattern/FactoryPattern.php';
$factory = new FactoryPattern();
$bankModel = $factory->make('bank');

$params = [];
if (!empty($_GET['keyword'])) {
    $params['keyword'] = $_GET['keyword'];
}
$banks = $bankModel->getbanks($params);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if (!empty($banks)) {?>
        <div class="alert alert-warning" role="alert">
            List of banks! <br>
        </div>
        <!-- <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User_ID</th>
                    <th scope="col">COST</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($banks as $bank) {?>
                <tr>
                    <td>
                        <?php echo $bank['id']?>
                    </td>
                    <td>
                        <?php echo $bank['user_id']?>
                    </td>
                    <td>
                        <?php echo $bank['cost']?>
                    </td>
                    <td>
                        <a href="form_bank.php?id=<?php echo md5($bank['id']) ?>">
                            <i class="fa fa-pencil-square-o" aria-hidden="true" title="Update"></i>
                        </a>
                        <a href="view_bank.php?id=<?php echo md5($bank['id']) ?>">
                            <i class="fa fa-eye" aria-hidden="true" title="View"></i>
                        </a>
                        <a
                            href="delete_bank.php?id=<?php echo md5($bank['id'])?>&token=<?php echo $_SESSION['token'] ?? '' ?>">
                            <i class="fa fa-eraser" aria-hidden="true" title="Delete"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table> -->
        <div class="p-list-container d-flex flex-wrap">
            <?php foreach ($banks as $bank) {?>
            <div class="p-item ">
                <div class="option">
                    <div class="row">
                        <div class="col-md-6 edit">
                            <a href="form_user.php?id=<?php echo md5($user['id']) ?>">
                                <i class="fa fa-pencil-square-o" aria-hidden="true" title="Update"> Edit</i>
                            </a>
                        </div>
                        <div class="col-md-6 delete">
                            <a href="delete_user.php?id=<?php echo md5($user['id']) ?>">
                                <i class="fa fa-eraser" aria-hidden="true" title="Delete"> Delete</i>
                            </a>
                        </div>
                    </div>
                </div>
                <a href="/laptop-acer-gaming-nitro-5-an515-57-56s5-nh.qeksv.001-core-i5-11400h-8gb-512gb-gtx-1650-4gb-15.6-inch-fhd-win-11-den_id39610.html"
                    class="p-img">
                    <img data-src="https://e7.pngegg.com/pngimages/611/577/png-clipart-dollar-sign-united-states-dollar-computer-file-dollar-sign-gold-number-thumbnail.png"
                        class="fit-img lazy loaded"
                        src="https://e7.pngegg.com/pngimages/611/577/png-clipart-dollar-sign-united-states-dollar-computer-file-dollar-sign-gold-number-thumbnail.png"
                        data-was-processed="true">
                </a>
                <div class="p-text">
                    <span class="p-sku" style="font-size: 12px;">User ID: <?php echo $bank['user_id']?></span>

                    <a href="#" class="p-name">
                        <h3><?php echo $bank['fullname']?></h3>
                    </a>
                    <div class="price-container">
                        <span class="p-discount"> ID: <?php echo $bank['id'] ?> </span>
                        <span class="p-price">
                            <?php echo $bank['cost'] ?> đ
                        </span>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php }else { ?>
        <div class="alert alert-dark" role="alert">
            This is a dark alert—check it out!
        </div>
        <?php } ?>
    </div>
</body>

</html>