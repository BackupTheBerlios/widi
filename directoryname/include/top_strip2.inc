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
<td width=27%><span class=maintitlebar>
<?php
echo "<form action=\"".$sess->self_url()."\">\n";
echo "<FONT COLOR=\"".$th_nav_bgcolor."\">";
echo $t->translate("Language")." :";
echo "</FONT>\n";
while (is_array($HTTP_GET_VARS) 
		&& list($key, $val) = each($HTTP_GET_VARS)) {
	if ($key != "lang" && $key != "go") {
		echo "<input TYPE=\"hidden\" NAME=\"$key\" VALUE=\"$val\">\n";
	}
}
?>
<select name="lang" size=1>
<?php
while (list(, $ln) = each($la_array)) {
	if ($la == $ln) {
		$sel = "selected";
	} else {
		$sel ="";
	}
	echo "<option value=\"$ln\" $sel>".$t->translate($ln)."\n";
}
?>
</select>
<?php
echo "<input TYPE=\"submit\" NAME=\"go\" VALUE=\"".$t->translate("Go")."\">";
?>
</form>
<?php
echo "</td><td width=46% align=center>\n";
$i = 0;
while (list($title, $url) = each($ts_array)) {
	if ($i > 0)
		echo "\n &nbsp;|&nbsp; ";
	echo "<b><a href=\"".$sess->url($url)."\" class=\"maintitlebar\">".$t->translate("$title")."</a></b>";
	$i++;
};
echo "\n</span></td><td width=27% align=right>\n";
echo "<FONT COLOR=\"".$th_nav_bgcolor."\">".$t->translate("Selected Language").": <b>".$t->translate("$la")."</b>";
?>

</td>
</tr>

</table>
<!-- end top strip -->
