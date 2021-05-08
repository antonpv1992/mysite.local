<?php

    /**
    * color set
    */
    const COLORS = [
    1 => 'red',
    2 => 'green',
    3 => 'yellow',
    4 => 'blue',
    5 => 'brown',
    6 => 'orange',
    7 => 'dark-blue',
    8 => 'light-green',
    9 => 'pink',
    0 => 'purple'];

    /**
     * method for outputting the multiplication table
     * @param bool $color - black/white or color table output
     */
    function outputTable(bool $color = false) {
        echo '<tr class="content__table-row">';
        for($i = 1; $i <= 10; $i++) {
            if($i === 6){
                echo '</tr>';
                echo '<tr class="content__table-row">';
            }
            echo '<td class="content__table-col">';
            for($j = 1; $j <= 10; $j++) {
                echo ($color ?  getColor($i) . ' x ' . getColor($j) . ' = ' . getColor($i * $j) . '<br>' : $i . ' x ' . $j . ' = ' . $i * $j . '<br>');
            }
            echo '</td>';
        }
        echo '</tr>';
    }

    /**
     * method that takes a number that returns an html colored string
     * @param int $number number for coloring
     * @return string color html string number
     */
    function getColor(int $number): string
    {
        $colors = COLORS;
        $result = '';
        $tagsContainer = [];
        $count = 0;
        while(strlen((string)$number) !== 1 ) {
            $tagsContainer[$count] = "<span class='{$colors[$number % 10]}'>" . $number % 10 . '</span>';
            $count++;
            $number = floor($number / 10);
        }
        $tagsContainer[$count] = "<span class='{$colors[$number % 10]}'>" . $number % 10 . '</span>';
        for($i = $count; $i >= 0; $i--) {
            $result .= $tagsContainer[$i];
        }
        return $result;
    }

    /**
     * method for string coloring
     * @param string $str string for coloring
     */
    function paintWord(string $str){
        $letters = preg_split('/(?<!^)(?!$)/u', $str);
        $colors = COLORS;
        $text = '';
        for($i = 0, $j = 0; $i < count($letters); $i++, $j++){
            if($j >= 10){
                $j = 0;
            }
            $text .= "<span class='$colors[$j]'>" . $letters[$i] . '</span>';
        }
        echo $text;
    }

    /**
     * method for reversing the string
     * @param string $str string for reversing
     * @return string reversed string
     */
    function mb_strrev(string $str): string
    {
        $letters = preg_split("//u", htmlspecialchars($str), 0, PREG_SPLIT_NO_EMPTY);
        return join("", array_reverse($letters));
    }