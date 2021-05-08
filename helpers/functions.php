<?php
    /**
     * method for outputting the multiplication table
     */
    function outputTable() {
        echo '<tr class="content__table-row">';
        for($i = 1; $i <= 10; $i++) {
            if($i === 6){
                echo '</tr>';
                echo '<tr class="content__table-row">';
            }
            echo '<td class="content__table-col">';
            for($j = 1; $j <= 10; $j++) {
                echo $i . ' x ' . $j . ' = ' . $i * $j . '<br>';
            }
            echo '</td>';
        }
        echo '</tr>';
    }