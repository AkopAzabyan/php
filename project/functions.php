<?php

/**
 * @param $time
 * @return string
 */
function timeToRus($time)
{
    $months =
        [
            1 => 'Января',
            2 => 'Февраля',
            3 => 'Марта',
            4 => 'Апреля',
            5 => 'Мая',
            6 => 'Июня',
            7 => 'Июля',
            8 => 'Августа',
            9 => 'Сентября',
            10 => 'Октября',
            11 => 'Ноября',
            12 => 'Декабря'
        ];
    $dayString = date('d ', $time);
    $monthsInt = date('n', $time);
    $yearAndTimeString = date(' Y года в H:i:s', $time);

    return $dayString . $months[$monthsInt] . $yearAndTimeString;
}

/**
 * @param $row
 * @return string
 */
function postToHtml($row)
{
    if ($row['isLikeYou']) {
        $likeString = '<a href="?like_post_delete=' . $row['id'] . '"><span class="glyphicon glyphicon-thumbs-up"></span></a> ';
    } else {
        $likeString = '<a href="?like_post=' . $row['id'] . '"><span class="glyphicon glyphicon-thumbs-up"></span></a>';
    }
    if ($row['disLikeYou']) {
        $DislikeString = '<a href="?dis_like_post_delete=' . $row['id'] . '"><span class="glyphicon glyphicon-thumbs-down"></span></a> ';
    } else {
        $DislikeString = '<a href="?dis_like_post=' . $row['id'] . '"><span class="glyphicon glyphicon-thumbs-down"></span></a>';
    }
    return
        '
    <div class="panel-group">
    <div class="panel panel-default">
    <div class="panel-heading">
    <b>Пользователь: ' . $row['name'] . '</b>
    </div>
    </div>
    <div class="panel-body">
    <i>' . $row['comment'] . '</i>
    </div>
    <div class="panel-footer">
    Дата Публикации: 
    ' . timeToRus($row['datetime']) . '
    ' . $likeString . ' ' . $row['valuesLike'] . '
    ' . $DislikeString . ' ' . $row['valuesDisLike'] . '
    </div>
    </div>  
    ';
}


function myIp()
{
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = @$_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
    elseif (filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
    else $ip = $remote;

    return $ip;

}