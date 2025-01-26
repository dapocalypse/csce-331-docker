<?php

function proc_csv ($filename, $delimiter, $quote, $columns_to_show) {
    $handle = fopen("../data/$filename", "r") or die("Cannot open " + $filename);

    echo "<table border=\"1\"> \n";

    $regex = "/(?:^|$delimiter)((?:$quote([^$quote]*)$quote)|(\d+))/";

    $columnNumber = 1;
    $columnArray = explode(":", $columns_to_show);

    while ($data = fgets($handle)) {
        echo "<tr>\n";

        $items = [];

        preg_match_all($regex, trim($data), $items);

        foreach($items[1] as $item) {
            if (substr($item,0, 1) == $quote &&
                substr($item,-1) == $quote) {
                $item = substr($item,1, strlen($item)-2);
            }

            if ($columns_to_show == "ALL" ||
                in_array($columnNumber, $columnArray)) {
                echo "<td>$item</td>\n";
            }
        }
        echo "</tr>\n<br>";

        $columnNumber++;
    }

    fclose($handle);

    echo "</table>\n";
}

?>