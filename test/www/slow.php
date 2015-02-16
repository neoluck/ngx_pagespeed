<?php
header('Content-Type: text/html');

echo "<html>";
echo "<head>\n";
echo "</head><body>\n";
$size = 10;

for($i = 1; $i <= $size; $i++) {
  echo "<p>asdfasdfasdfasdf</p><div>foooo</div>\n";
  ob_flush();
  flush();
  sleep(1);
}

echo "</body></html>\n";
?>