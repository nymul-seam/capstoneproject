<?php
require_once __DIR__ . '/db_connect.php';

$ver = $mysqli->query("SELECT VERSION() AS v")->fetch_assoc()['v'] ?? 'unknown';
$user = $mysqli->query("SELECT CURRENT_USER() AS u")->fetch_assoc()['u'] ?? 'unknown';
$db   = $mysqli->query("SELECT DATABASE() AS d")->fetch_assoc()['d'] ?? 'unknown';

echo "<h3>✅ Connected</h3>";
echo "<p>Server version: " . htmlspecialchars($ver) . "</p>";
echo "<p>Current user: "   . htmlspecialchars($user) . "</p>";
echo "<p>Database: "       . htmlspecialchars($db) . "</p>";

$r = $mysqli->query("SHOW TABLES");
echo "<h4>Tables:</h4><ul>";
while ($row = $r->fetch_array()) {
  echo "<li>" . htmlspecialchars($row[0]) . "</li>";
}
echo "</ul>";

$mysqli->close();
?>
