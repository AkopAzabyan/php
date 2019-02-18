<?php
include("functions.php");

if (isset($_POST['submit'])) {
    $name = strip_tags(trim($_POST['name']));
    $comment = strip_tags(trim($_POST['comment']));
    $date = time();

    $sql = "insert into wall
          (`name`, `comment`,`datetime`)
          VALUES 
          ('$name','$comment','$date')";

    $insert = $connection->query($sql);

    $_POST['submit'] = null;
}


if (isset($_GET['like_post'])) {
    if (!is_null($_GET['like_post'])) {
        $post_id = $_GET['like_post'];
        $ip = myIp();
        $sql = "insert into `likeForPost`(`ip`,`post_id`,`value`) values ('$ip','$post_id',1)";
        $insert = $connection->query($sql);
    }
}

if (isset($_GET['like_post_delete'])) {
    if (!is_null($_GET['like_post_delete'])) {
        $post_id = $_GET['like_post_delete'];
        $ip = myIp();
        $sql = "delete from `likeForPost` where `likeForPost`.ip='$ip' and  `likeForPost`.post_id=$post_id and `likeForPost`.value=1";
        $connection->query($sql);

    }
}
if (isset($_GET['dis_like_post'])) {
    if (!is_null($_GET['dis_like_post'])) {
        $post_id = $_GET['dis_like_post'];
        $ip = myIp();
        $sql = "insert into `likeForPost`(`ip`,`post_id`,`value`) values ('$ip','$post_id',-1)";
        $insert = $connection->query($sql);
    }
}
if (isset($_GET['dis_like_post_delete'])) {
    if (!is_null($_GET['dis_like_post_delete'])) {
        $post_id = $_GET['dis_like_post_delete'];
        $ip = myIp();
        $sql = "delete from `likeForPost` where `likeForPost`.ip='$ip' and  `likeForPost`.post_id=$post_id and `likeForPost`.value=-1";
        $connection->query($sql);
    }
}


$get = $connection->query("SELECT w.id,w.name,w.comment,w.datetime,
IFNULL ((SELECT SUM(l.value )FROM likeForPost l WHERE l.post_id=w.id and l.value=1),0) AS 'valuesLike',
EXISTS (select * from `likeForPost` l where l.post_id=w.id and l.ip='127.0.0.1' and l.value=1) as isLikeYou,
IFNULL ((SELECT SUM(l.value )FROM likeForPost l WHERE l.post_id=w.id and l.value=-1),0) AS 'valuesDisLike',
EXISTS (select * from `likeForPost` l where l.post_id=w.id and l.ip='127.0.0.1' and l.value=-1) as disLikeYou
FROM wall w");


while ($row = mysqli_fetch_assoc($get)) {
    echo postToHtml($row);
}

//LIKE
//DESING
//AVATARS 3 items (man women incognito)
