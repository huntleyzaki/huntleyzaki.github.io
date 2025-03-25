<?php
$file = 'stats.json';
$stats = file_exists($file) ? json_decode(file_get_contents($file), true) : ['visitors' => 0];

if ($_GET['action'] === 'increment_visitors') {
    $stats['visitors']++;
    file_put_contents($file, json_encode($stats));
    echo json_encode(['visitors' => $stats['visitors']]);
}
?>
