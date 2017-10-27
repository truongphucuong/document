<?php
require_once("data.php");
header('content-type: text/html; charset: utf-8');
echo <<<EOT
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
  <h1>JSON dump</h1>
  <pre>
EOT;
// Example usage 
$file = dirname(__FILE__) . '/data.json';
$json = file_get_contents($file);
// strip off optional Unicode BOM:
if (substr($json, 0, 3) == "\xEF\xBB\xBF") {
  $json = substr($json, 3);
}
echo htmlspecialchars(json_format(