<?php

######################################################################
# Widi - Who Is Doing It?
# ================================================
#
# Copyright (c) 2001 by
#                Gregorio Robles (grex@scouts-es.org)
#                xxx xxx
#
# Widi: http://widi.berlios.de
#
# This is the index with the form
#
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 or later of the GPL.
######################################################################  

page_open(array("sess" => "Widi_Session"));

require("header.inc");

$bx = new box("88%",$th_box_frame_color,$th_box_frame_width,$th_box_title_bgcolor,$th_box_title_font_color,$th_box_title_align,$th_box_body_bgcolor,$th_box_body_font_color,$th_box_body_align);
$be = new box("80%",$th_box_frame_color,$th_box_frame_width,$th_box_title_bgcolor,$th_box_title_font_color,$th_box_title_align,$th_box_body_bgcolor,$th_box_error_font_color,$th_box_body_align);
$bs = new box("100%",$th_strip_frame_color,$th_strip_frame_width,$th_strip_title_bgcolor,$th_strip_title_font_color,$th_strip_title_align,$th_strip_body_bgcolor,$th_strip_body_font_color,$th_strip_body_align);
?>

<!-- content -->

<?php

$bx->box_begin();
$bx->box_title($t->translate("Introduction"));
$bx->box_body_begin();
echo "\n<P>";
echo $t->translate("what is this form about?");
echo "\n<P>";
echo $t->translate("tell a little about the project at the TU-Berlin");
echo "\n<P>";
echo $t->translate("Tell that all forms are anonymous and that they don't have to answer to anything.");
echo "\n<P>";
echo $t->translate("Say who are the authors of this project");
echo "\n<P>";
echo $t->translate("Give thanx for filling it out");
echo "\n<P>";
$bx->box_body_end();
$bx->box_end();


$bx->box_begin();
$bx->box_title($t->translate("Personal Data"));
$bx->box_body_begin();
echo "<table border=0 width=100% align=center cellspacing=0 cellpadding=3>\n";
echo "<form action=\"".$sess->url("insert.php3")."\" method=\"POST\">\n";
echo "<tr><td align=right width=30%>".$t->translate("Name")." (24):</td><td width=70%><input type=\"TEXT\" name=\"name\" size=24 maxlength=24></td></tr>\n";
echo "<tr><td align=right width=30%>".$t->translate("Surame")." (24):</td><td width=70%><input type=\"TEXT\" name=\"surname\" size=24 maxlength=24></td></tr>\n";
echo "<tr><td align=right width=30%>".$t->translate("Alias")." (24):</td><td width=70%><input type=\"TEXT\" name=\"alias\" size=24 maxlength=24></td></tr>\n";
echo "<tr><td align=right width=30%>".$t->translate("Nationality").":</td><td width=70%>\n";
echo "<select name=\"nationality\">\n";
echo "<option selected> \n";
for($i=4;$i<sizeof($domain_country)-5;$i++) {
  echo "<option>".$domain_country[$i][1]."\n";
}
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Date of Birth").":</td><td width=70%>\n";
echo "<select name=\"year_of_birth\">\n";
for ($i=1930; $i<1996; $i++) {
  echo "<option>".$i."\n";
}
echo "<option selected> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Gender").":</td><td width=70%>\n";
echo "<select name=\"gender\">\n";
echo "<option>Male\n";
echo "<option>Female\n";
echo "<option selected> \n";
echo "</select></td></tr>\n";

echo "</td></tr>\n";
echo "</table>\n";
$bx->box_body_end();
$bx->box_end();


$bx->box_begin();
$bx->box_title($t->translate("Professional Data"));
$bx->box_body_begin();
echo "<table border=0 width=100% align=center cellspacing=0 cellpadding=3>\n";

echo "<tr><td align=right width=30%>".$t->translate("Profession").":</td><td width=70%>\n";
echo "<select name=\"profession\">\n";
echo "<option>Student\n";
echo "<option>Programmer\n";
echo "<option>Software Engineer\n";
echo "<option>Other type of Engineering\n";
echo "<option>University professor/assistant\n";
echo "<option>Executive\n";
echo "<option>Consultant\n";
echo "<option>Nothing to do with the software industry\n";
echo "<option selected> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Studies").":</td><td width=70%>\n";
echo "<select name=\"studies\">\n";
echo "<option>Elementary School\n";
echo "<option>High School\n";
echo "<option>(Lehre)\n";
echo "<option>University Graduate\n";
echo "<option>Master\n";
echo "<option>PhD\n";
echo "<option selected> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right valign=top width=30%>".$t->translate("What languages do you speak?")."</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"english\">&nbsp; English";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"german\">&nbsp; German";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"french\">&nbsp; French";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"spanish\">&nbsp; Spanish";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"italian\">&nbsp; Italian";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"czech\">&nbsp; Czech";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"portuguese\">&nbsp; Portuguese";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"japenese\">&nbsp; Japanese";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"other_langs\">&nbsp; Other";
echo "</td></tr></table></center>\n";

echo "<tr><td align=right width=30%>".$t->translate("Email Domain").":</td><td width=70%>\n";
echo "username@server.<select name=\"email_domain\">\n";
echo "<option selected> \n";
for($i=1;$i<sizeof($domain_country);$i++) {
  echo "<option>".$domain_country[$i][0]."\n";
}
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Get you paid for doing Open Source?").":</td><td width=70%>\n";
echo "<center><table width=80% border=0>\n";
echo "<tr><td width=26%>";
echo "<input type=\"radio\" name=\"os_as_professional\" value=\"blank\" checked>&nbsp; Blank\n";
echo "</td>\n<td width=26%>";
echo "<input type=\"radio\" name=\"os_as_professional\" value=\"Yes\">&nbsp; Yes\n";
echo "</td>\n<td width=26%>";
echo "<input type=\"radio\" name=\"os_as_professional\" value=\"No\"&nbsp; >No\n";
echo "</td></tr></table></center>\n";
echo "</td></tr>\n";

echo "</td></tr>\n";
echo "</table>\n";
$bx->box_body_end();
$bx->box_end();


$bx->box_begin();
$bx->box_title($t->translate("Computer experience"));
$bx->box_body_begin();
echo "<table border=0 width=100% align=center cellspacing=0 cellpadding=3>\n";

echo "<tr><td align=right width=30%>".$t->translate("With which of these tools are you experienced?").":</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"c\">&nbsp; C\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"c_plus_plus\">&nbsp; C++\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"objective_c\">&nbsp; Objective C\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"java\">&nbsp; Java\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"python\">&nbsp; Python\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"perl\">&nbsp; perl\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"php\">&nbsp; php\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"shell\">&nbsp; shell\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"html\">&nbsp; html\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"lisp\">&nbsp; LISP\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"latex\">&nbsp; (La)TEX\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"pascal\">&nbsp; Pascal\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"fortran\">&nbsp; FORTRAN\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"basic\">&nbsp; BASIC\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"visual_basic\">&nbsp; Visual Basic\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"javascript\">&nbsp; JavaScript\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"sql\">&nbsp; SQL\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"ada\">&nbsp; ADA\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"modula_2\">&nbsp; MODULA 2\n";
echo "</td>\n<td width=33%>";
echo "&nbsp;";
echo "</td>\n<td width=33%>";
echo "&nbsp;";
echo "</td></tr></table></center>\n";
echo "</td></tr>\n";


echo "<tr><td align=right width=30%>".$t->translate("Operating System / Distribution you use").":</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"debian\">&nbsp; Debian\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"suse\">&nbsp; SuSE\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"red_hat\">&nbsp; Red Hat\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"mandrake\">&nbsp; Mandrake\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"slackware\">&nbsp; Slackware\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"turbolinux\">&nbsp; Turbolinux\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"freebsd\">&nbsp; FreeBSD\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"openbsd\">&nbsp; OpenBSD\n";
echo "</td>\n<td width=33%>";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"windows\">&nbsp; Windows\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"other_os\">&nbsp; Other\n";
echo "</td>\n<td width=33%>";
echo "&nbsp;";
echo "</td></tr></table></center>\n";
echo "</td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Desktops you use").":</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=25%>";
echo "<input type=\"checkbox\" name=\"gnome\">&nbsp; GNOME\n";
echo "</td>\n<td width=25%>";
echo "<input type=\"checkbox\" name=\"kde\">&nbsp; KDE\n";
echo "</td>\n<td width=25%>";
echo "<input type=\"checkbox\" name=\"both\">&nbsp; Both\n";
echo "</td>\n<td width=25%>";
echo "<input type=\"checkbox\" name=\"other_desktop\">&nbsp; Other\n";
echo "</td></tr></table></center>\n";
echo "</td></tr>\n";

echo "</td></tr>\n";
echo "</table>\n";
$bx->box_body_end();
$bx->box_end();


$bx->box_begin();
$bx->box_title($t->translate("Submit"));
$bx->box_body_begin();
echo "<table border=0 width=100% align=center cellspacing=0 cellpadding=3>\n";

echo "<tr><td align=right width=30%>&nbsp;</td><td width=70%><input type=\"Submit\" value=\"".$t->translate("Insert")."\"></td></tr>\n";
echo "</form>\n";
echo "</td></tr>\n";
echo "</table>\n";

$bx->box_body_end();
$bx->box_end();

?>

<!-- end content -->

<?php
require("footer.inc");
@page_close();
?>