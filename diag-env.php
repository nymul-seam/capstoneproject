<?php
header('Content-Type: text/plain');
$vals = [
  'DB_HOST' => getenv('DB_HOST'),
  'DB_NAME' => getenv('DB_NAME'),
  'DB_USER' => getenv('DB_USER'),
  'DB_PASS_len' => strlen((string)getenv('DB_PASS')), // don't print the secret
];
print_r($vals);
