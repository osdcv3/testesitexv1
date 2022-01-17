<?php
$url = 'https://www.xvideos.com/video57889817/esposa_petite_nervosa_e_melhor_amigo_foda_enquanto_voce_assiste_';
$meta = "html5player.setVideoUrlLow('";
$meta2 = "');";
$dadosdosite = file_get_contents($url);

$var1 = explode($meta, $dadosdosite);
$var2 = explode($meta2, $var1[1]);

#print $var2[0];
$link = $var2[0];
echo "<video width='320' height='240' autoplay muted>
<source src='$link2' type='video/mp4'>
Your browser does not support the video tag.
</video>";






?>
