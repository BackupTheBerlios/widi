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
$bx->box_title($t->translate("Thank you"));
$bx->box_body_begin();
echo "\n<P>";
echo $t->translate("Give another time thanx for filling it out");
echo "\n<P>";
$bx->box_body_end();
$bx->box_end();


$bx->box_begin();
$bx->box_title($t->translate("Personal Data"));
$bx->box_body_begin();
echo "<table border=0 width=100% align=center cellspacing=0 cellpadding=3>\n";
echo "<form action=\"".$sess->url("insert.php3")."\" method=\"POST\">\n";
echo "<tr><td align=right width=30%>".$t->translate("Name").":</td><td width=70%>$name</td></tr>\n";
echo "<tr><td align=right width=30%>".$t->translate("Surame").":</td><td width=70%>$surname</td></tr>\n";
echo "<tr><td align=right width=30%>".$t->translate("Alias").":</td><td width=70%>$alias</td></tr>\n";
echo "<tr><td align=right width=30%>".$t->translate("Nationality").":</td><td width=70%>$nationality</td></tr>\n";


echo "<tr><td align=right width=30%>".$t->translate("Date of Birth").":</td><td width=70%>$year_of_birth</td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Gender").":</td><td width=70%>$gender</td></tr>\n";

echo "</td></tr>\n";
echo "</table>\n";
$bx->box_body_end();
$bx->box_end();


$bx->box_begin();
$bx->box_title($t->translate("Professional Data"));
$bx->box_body_begin();
echo "<table border=0 width=100% align=center cellspacing=0 cellpadding=3>\n";

echo "<tr><td align=right width=30%>".$t->translate("Profession").":</td><td width=70%>$profession</td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Studies").":</td><td width=70%>$studies</td></tr>\n";

echo "<tr><td align=right valign=top width=30%>".$t->translate("What languages do you speak?")."</td><td width=70%>\n";
if (isset($english) && !empty($english)) echo "English<BR>\n";
if (isset($german) && !empty($german)) echo "German<BR>\n";
if (isset($french) && !empty($french)) echo "French<BR>\n";
if (isset($spanish) && !empty($spanish)) echo "Spanish<BR>\n";
if (isset($italian) && !empty($italian)) echo "Italian<BR>\n";
if (isset($czech) && !empty($czech)) echo "Czech<BR>\n";
if (isset($portuguese) && !empty($portuguese)) echo "Portuguese<BR>\n";
if (isset($japanese) && !empty($japanese)) echo "Japanese<BR>\n";
if (isset($other) && !empty($other)) echo "Other<BR>\n";
echo "</td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Email Domain").":</td><td width=70%>username@server.<B>$email_domain</B></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Get you paid for doing Open Source?").":</td><td width=70%>$os_as_professional</td></tr>\n";

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