<?php

require 'db-conn.inc.php';

echo '<table border="1">';
foreach($connection->query('SELECT * FROM movies') as $records) {
   echo '<tr>';
   echo '<td>' . $records['id'] . '</td>';
   echo '<td>' . $records['title'] . '</td>';
   echo '<td>' . $records['length'] . '</td>';
   echo '<td>' . $records['genre'] . '</td>';
   echo '<td>' . $records['actor'] . '</td>';
   echo '</tr>';
}
echo '</table>'
 ?>