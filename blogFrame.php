<?php
$url = $_POST['url'];


echo '<img style="height:100px;margin-bottom:20px;" src="http://ec2-54-79-18-12.ap-southeast-2.compute.amazonaws.com/wp-content/uploads/2015/08/logo.png" alt="" />';

echo '<iframe height="100%" style="border:0px solid white;" id="yFrame" src="'.$url.'" width="100%"></iframe>';
