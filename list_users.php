<?php

// Start the session
session_start();

require_once 'DesignPattern/FactoryPattern.php';
$factory = new FactoryPattern();
$userModel = $factory->make('user');

$params = [];
if (!empty($_GET['keyword'])) {
    $params['keyword'] = $_GET['keyword'];
}

$users = $userModel->getUsers($params);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>

    <title>Home</title>
    <?php include 'views/meta.php' ?>

</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">
        <?php if (!empty($users)) { ?>
            <div class="alert alert-warning" role="alert">
                List of users! <br>
            </div>
            <!-- <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                <tr>
                    <th scope="row"><?php echo $user['id'] ?></th>
                    <td>
                        <?php echo $user['name'] ?>
                    </td>
                    <td>
                        <?php echo $user['fullname'] ?>
                    </td>
                    <td>
                        <?php echo $user['type'] ?>
                    </td>
                    <td>
                        <a href="form_user.php?id=<?php echo md5($user['id']) ?>">
                            <i class="fa fa-pencil-square-o" aria-hidden="true" title="Update"></i>
                        </a>
                        <a href="view_user.php?id=<?php echo md5($user['id']) ?>">
                            <i class="fa fa-eye" aria-hidden="true" title="View"></i>
                        </a>
                        <a href="delete_user.php?id=<?php echo md5($user['id']) ?>">
                            <i class="fa fa-eraser" aria-hidden="true" title="Delete"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table> -->
            <div class="listproduct " data-size="10">
                <?php foreach ($users as $user) { ?>
                    <div class="item" data-id="226935" data-pos="1">
                        <a href="view_user.php?id=<?php echo md5($user['id']) ?>">
                            <div class="item-label">
                                <span class="lb-tragop">ID: <?php echo $user['id'] ?></span>
                            </div>
                            <div class="item-img">
                                <img data-src="https://cdn0.iconfinder.com/data/icons/set-ui-app-android/32/8-512.png" class=" lazyloaded" alt="Samsung Galaxy Z Fold3 5G 256GB" width="210" height="210" src="https://cdn0.iconfinder.com/data/icons/set-ui-app-android/32/8-512.png">
                            </div>
                            <h3>Username: <?php echo $user['name'] ?></h3>
                            <strong class="price">
                                <th scope="col"><?php echo $user['fullname'] ?></th>
                            </strong>
                            <p class="item-gift">Type: <?php echo $user['type'] ?></p>
                            <div class="item-rating">
                                <p>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-black"></i>
                                </p>
                                <p class="item-rating-total">51</p>
                            </div>
                            <!-- <div class="star">
                    <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
                    </div> -->
                        </a>
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
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="alert alert-dark" role="alert">
                This is a dark alert—check it out!
            </div>
        <?php } ?>
    </div>
</body>

</html>