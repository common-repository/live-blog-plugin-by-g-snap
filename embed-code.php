<?php
// note that $id is eventcast-identifer, i.e. an eventcast-id or eventcast name
function embed_code ($iWidth, $iHeight, $getServerName, $id, $alt_html = null)
{
   $html = <<<EOT
<iframe width="$iWidth" height="$iHeight" frameborder="0" scrolling="no" src="$getServerName/event.html?id=$id">
</iframe>
EOT;

   return $html;
}
?>
