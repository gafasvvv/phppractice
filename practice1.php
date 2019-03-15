<?php

    //九九表（ループのネストとbreak/continue）
    for($i = 1; $i < 10; $i++){
        for($j = 1; $j < 10; $j++){
            $result = $i * $j;
            if($result > 81){
                break;
            }
            print "{$result} &nbsp;";
        }
        print '<br />';
    }

    //FizzBuzz問題
    for($i = 1; $i <= 30; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
            print "FizzBuzz";
        } elseif ($i % 3 == 0){
            print "Fizz";
        } elseif ($i % 5 == 0){
            print "Buzz";
        } else {
            print "{$i}";
        }
    }

    //ifとforと配列を使ってバブルソート文(降順と昇順)を作成
    $numbers = [
        7, 5, 9, 8, 6, 4, 1, 2, 10, 3
    ];
    print_r($numbers);

    //昇順のソート文
    //昇順になるまで配列の繰り返す
    for($i = 0; $i < count($numbers); $i++){
        for($j = 1; $j < count($numbers); $j++){
            // インデックス番号で数字を指定してその次のインデックス番号の数字と大小を比較
            if($numbers[$j-1] > $numbers[$j]){
                $tmp = $numbers[$j-1]; // 大小比較した際の大きい値を変数に代入
                $numbers[$j] = $tmp; // 大小比較した際の大きい値を入れ替え
                $numbers[$j-1] = $numbers[$j]; // 大小比較した際の小さい値を入れ替え
            }
        }
    }
    print_r($numbers);

    //降順のソート文
    //降順になるまで繰り返す
    for($i = 0; $i < count($numbers); $i++){
        for($j = 1; $j < count($numbers); $j++){
            // インデックス番号で数字を指定してその次のインデックス番号の数字と大小を比較
            if($numbers[$j-1] < $numbers[$j]){
                $tmp = $numbers[$j-1]; // 大小比較した際の大きい値を変数に代入
                $numbers[$j] = $tmp; // 大小比較した際の大きい値を入れ替え
                $numbers[$j-1] = $numbers[$j]; // 大小比較した際の小さい値を入れ替え
            }
        }
    }
    print_r($numbers);
    /*
    配列
    $numbers = [4, 3, 1, 2];の場合の並び替え順
    
    $numbers = [3, 4, 1, 2]; 1回目
    $numbers = [3, 1, 4, 2]; 2回目
    $numbers = [3, 1, 2, 4]; 3回目

    $numbers = [1, 3, 2, 4]; 4回目
    $numbers = [1, 2, 3, 4]; 5回目
    */
?>