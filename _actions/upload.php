<?php

include "../vendor/autoload.php";
function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
};

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

use function PHPSTORM_META\type;

$auth = Auth::check();

$table = new UsersTable(new MySQL());

$name = $_FILES['photo']['name'];
$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];


if ($error) {
    HTTP::redirect("/profile.php", "error=file");
}

if ($type === "image/jpeg" or $type === "image/png") {
    $table->updatePhoto($auth->id, $name);
    move_uploaded_file($tmp, "photos/$name");
    $auth->photo = $name;
    HTTP::redirect('/profile.php');
} else {
    HTTP::redirect("/profile.php", "error=type");
}
// $error = $_FILES['photo']['error'];
// $tmp = $_FILES['photo']['tmp_name'];
// $type = $_FILES['photo']['type'];

// if ($error) {
//     header('location: ../profile.php?error=file');
//     exit();
// }

// if ($type === "image/jpeg" or $type === "image/png") {
//     move_uploaded_file($tmp, "photos/profile.jpg");
//     header('location: ../profile.php');
// } else {
//     header('location: ../profile.php?error=type');
// }
