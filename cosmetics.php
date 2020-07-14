<?php
if (isset($_GET['uuid'])) {
    echo '{"uuid":"' . $_GET['uuid'] . '","username":null,"cosmetics":{"bluefoglogo":
{"name":"bluefoglogo","type":"cape","scale":0.16,"active":true,"resourceLocation":"bluefoglogo"},"bluefogwings":
{"name":"bluefogwings","type":"dragon_wings","scale":0.10,"active":false,"resourceLocation":"bluefogwings"}}}';
}
?>
