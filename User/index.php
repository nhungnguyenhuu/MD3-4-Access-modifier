<?php
include_once "User.php";
$user = new User("Nhung", "nhung@gmail.com", 1);
$user2 = new User("nam", "nam@gmail.com", 2);
echo $user->getInfo();
echo"<pre>";
echo $user->isAdmin("nhung", "nhung@gmail.com", 1);
echo"<pre>";
echo $user->isAdmin("nam", "nam@gmail.com", 2);