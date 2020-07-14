<?php
if (isset($_GET['uuid'])) {
    echo '{"uuid":"' . $_GET['uuid'] . '","username":null,"cosmetics":{"protected":{"name":"protected","type":"cape","scale":0.16,"active":true,"resourceLocation":"aac"},"purple":{"name":"purple","type":"dragon_wings","scale":0.13,"active":true,"resourceLocation":"purple"}}}';
}
?>
