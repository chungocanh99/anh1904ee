<?php
/**
 * chuyển json về mảng php
 */

$json1 = '[{"ten":"h\u00e0 n\u1ed9i","gpd":"1 t\u1ec9 USD"},{"ten":"s\u01a1n la","gpd":"10 t\u1ec9 USD"},{"ten":"h\u1ed3 ch\u00ed minh","gpd":"20 t\u1ec9 USD"}]';

$mang1 = json_decode($json1);

echo "<pre>";
print_r($json1);
echo"</pre>";

echo "<pre>";
print_r($mang1);
echo"</pre>";
