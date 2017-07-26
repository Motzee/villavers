<?php
$garden = file_get_contents('garden.json') ;

$garden = json_decode($garden, true);

echo '<table id="garden">' ;
echo '<thead><tr><th></th>' ;
    for($nbcol = 1; $nbcol <= 10; $nbcol++) {
        echo "<th>$nbcol</th>" ;
    }
echo '</tr></thead><tbody>' ;

foreach($garden as $ligne => $cases) {
    echo "<tr><td>$ligne</td>" ;
    foreach($cases as $coord => $case) {
        echo '<td id='.$coord.'></td>' ;
    }
    echo "</tr>" ;
}

echo '</tbody></table>' ;

?>

<link rel="stylesheet" href="styles.css" />

<script src="script.js"></script>