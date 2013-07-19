<?php
ini_set('auto_detect_line_endings',true);
$src = "";

$files = array("license.txt",
               "core.js",
               "intro.js",
               "HashMap.js",
               "2D.js",
               "collision.js",
               "DOM.js",
               "html.js",
               "storage.js",
               "extensions.js",
               "device.js",
               "sprite.js",
               "canvas.js",
               "controls.js",
               "animation.js",
               "drawing.js",
               "isometric.js",
               "particles.js",
               "sound.js", 
               "text.js",
               "loader.js",
               "math.js",
               "time.js",
			"DebugLayer.js",
               "outro.js");
			   
foreach($files as $file) {
	$src .= file_get_contents("../src/".$file);
	$src .= "\n\n";
}

file_put_contents("../crafty.js", $src);

?>
<h1>Done: Please YUI Compress!</h1>
