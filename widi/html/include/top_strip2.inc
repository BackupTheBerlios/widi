<?php

######################################################################
# ApplicationName
# ================================================
#
# Copyright (c) 2001 by
#                Gregorio Robles (grex@scouts-es.org)
#
# This file is based on 
# BerliOS SourceWell: http://sourcewell.berlios.de
# BerliOS - The OpenSource Mediator: http://www.berlios.de
# by
#                Lutz Henckel (lutz.henckel@fokus.gmd.de) and
#                Gregorio Robles (grex@scouts-es.org)
#
# This file shows a strip at the top of the page
#
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 or later of the GPL.
######################################################################

?>

<!-- top strip -->
<table BORDER=0 CELLSPACING=0 CELLPADDING=2 WIDTH="100%" BGCOLOR="<?php echo $th_navstrip_bgcolor;?>">
<tr>
<?php
echo "<td width=100% align=center>\n";
$i = 0;
while (list($title, $url) = each($ts_array)) {
	if ($i > 0)
		echo "\n &nbsp;|&nbsp; ";
	echo "<b><a href=\"$url\" class=\"maintitlebar\">".$title."</a></b>";
	$i++;
};
echo "\n</span></td>";
?>

</td>
</tr>

</table>
<!-- end top strip -->
