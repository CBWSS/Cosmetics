<?php
if (isset($_GET['uuid'])) {
    echo '{"uuid":"' . $_GET['uuid'] . '","username":null,"cosmetics":{"blackjesus_white":
{"name":"blackjesus_white","type":"cape","scale":0.16,"active":true,"resourceLocation":"blackjesus_white"},"solidblackwings":
{"name":"solidblackwings","type":"dragon_wings","scale":0.13,"active":true,"resourceLocation":"solidblackwings"}}}';
}
?>