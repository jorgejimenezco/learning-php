<?php ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
  <?php
// crteate first row of table header
echo "<tr>";
echo '<th>&nbsp;</th>';
for ($col = 1; $col <= 12; $col++) :
  echo "<th>$col</th>";
  endfor;
  echo "</tr>";
// create row header
  for ($row = 1, $col = 1; $row <= 12; $row++) :
    echo "<tr>";
    // first cell is a table header
    if ($col == 1) {
    echo "<th>$row</th>"; 
  }
    while ($col <= 12) :
      echo "<td>" . $row * $col++ . "</td>";

    endwhile;
    echo "</tr>";
    // reset $col at end of each row
$col = 1;
endfor;

    ?>
  </table>
</body>
</html>
