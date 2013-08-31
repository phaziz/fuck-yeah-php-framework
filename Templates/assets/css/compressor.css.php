<?php
$cssFiles = array('core.css');
$buffer = '';
foreach ($cssFiles as $cssFile) {
  $buffer .= file_get_contents($cssFile);
}
$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
$buffer = str_replace(': ', ':', $buffer);
$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
ob_start("ob_gzhandler");
header('cache-control: public');
header('expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
header('content-type: text/css');
echo($buffer);
?>