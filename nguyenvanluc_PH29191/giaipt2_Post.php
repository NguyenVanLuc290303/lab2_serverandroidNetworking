<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $detal = pow($b,2) - 4 * $a * $c;

    $ketqua = "";

    if($a == 0 ){
        if($b == 0){
            $ketqua = " phường trình vô số nghiệm";
        }
        else{
            $x1 = -$b/$c;
            $ketqua = " phường trình có nghiệm duy nhất " . $x1;
        }
    }else{
        if($detal > 0 ){

            $x1 = ((-$b+sqrt($detal)) / (2*$a));
            $x2 = ((-$b-sqrt($detal)) / (2*$a));
            $ketqua = "phương trình có 2 nghiệm phân biệt : x1 = " . $x1 . " ; x2 = " . $x2 ;
        }elseif($detal == 0 ){
            $x1 = -$b / (2*$a);
            $ketqua = "phương trình có nghiệm kép" . $x1;
        }else{
            $ketqua = "phường trình vô nghiệm";
        }
    }

    echo "kết quả : " . $ketqua;
?>
