

<?php

// show copyright date
//echo '@' . date("Y",strtotime("-1 year"));
//echo '-' . date('y');

function my_copyright($startYear) {

  $currentYear = date('Y');
  if ($startYear < $currentYear) {
    $currentYear = date('y');
    return "&copy; $startYear&ndash;$currentYear";
  } else {
    return "&copy; $startYear";
  }
}
echo my_copyright(2015);
