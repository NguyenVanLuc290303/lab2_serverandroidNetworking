<?php
    $cdai = $_POST['chieudai'];
    $crong = $_POST['chieurong'];
    $chuvi = ($cdai + $crong) * 2;
    $dientich = $cdai * $crong;

    echo "chu vi : " . $chuvi .";  dientich : " . $dientich;
?>