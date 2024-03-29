<?php
    // Варіанти створення масиву

                    // Варівнт 1 
    // $color = array('white', 'green', 'red', 'blue', 'black');
    //echo $color[0];
    // echo '<pre>';
    // print_r($color);
    // echo '</pre>';

                    // Варівнт 2
    $color = ['white', 'green', 'red', 'blue', 'black'];
    echo '<pre>';
    print_r($color);
    echo '</pre>';
    
                    // Варівнт 3
    // $color [10]='white';
    // $color [11]='green';
    // $color [15]='red';
    // $color [25]='blue';
    // $color [18]='black';
    // echo '<pre>';
    // print_r($color);
    // echo '</pre>';

                    // Приведення стрічки до масиву
    echo '<br>';
    echo '<hr>';
    $color = 'white';
    $arr = (array) $color;
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>