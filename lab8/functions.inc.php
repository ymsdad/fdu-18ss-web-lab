<?php

    function outputOrderRow($file, $title, $quantity, $price) {
        echo "<tr>";
        //TODO
        $amount = $price * $quantity;
        echo "<td>"."<img src=\"images/books/tinysquare/".$file."\"></td>";
        echo "<td class=\"mdl-data-table__cell--non-numeric\">".$title."</td>";
        echo "<td>".$quantity."</td>";
        echo "<td>\$".$price.".00</td>";
        echo "<td>\$".$amount.".00</td>";
        echo "</tr>";
    }
?>