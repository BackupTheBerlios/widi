<?php

######################################################################
# Widi - Who Is Doing It?
# ================================================
#
# Copyright (c) 2001 by
#                Gregorio Robles (grex@scouts-es.org)
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
$bx2 = new box("100%",$th_box_frame_color,$th_box_frame_width,$th_box_title_bgcolor,$th_box_title_font_color,$th_box_title_align,$th_box_body_bgcolor,$th_box_body_font_color,$th_box_body_align);
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
$bx->box_body_end();
$bx->box_end();


$bx->box_begin();
$bx->box_title($t->translate("Personal Data"));
$bx->box_body_begin();
echo "<table border=0 width=100% align=center cellspacing=0 cellpadding=3>\n";
echo "<form action=\"".$sess->url("view.php3")."\" method=\"POST\">\n";
echo "<tr><td align=right width=30%>".$t->translate("Nickname")." (24):</td><td width=70%><input type=\"TEXT\" name=\"nickname\" size=24 maxlength=24></td></tr>\n";
echo "<tr><td align=right width=30%>".$t->translate("Nationality").":</td><td width=70%>\n";
echo "<select name=\"nationality\">\n";
echo "<option selected> \n";
for($i=4;$i<sizeof($domain_country)-5;$i++) {
  echo "<option>".$domain_country[$i][1]."\n";
}
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Year of Birth").":</td><td width=70%>\n";
echo "<select name=\"year_of_birth\">\n";
for ($i=1930; $i<1991; $i++) {
  echo "<option>".$i."\n";
}
echo "<option selected> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Gender").":</td><td width=70%>\n";
echo "<select name=\"gender\">\n";
echo "<option>".$t->translate("Male")."\n";
echo "<option>".$t->translate("Female")."\n";
echo "<option selected> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Email Domain").":</td><td width=70%>\n";
echo "username@server.<select name=\"email_domain\">\n";
echo "<option selected> \n";
for($i=1;$i<sizeof($domain_country);$i++) {
  echo "<option>".$domain_country[$i][0]."\n";
}
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
echo "<option>".$t->translate("Student")."\n";
echo "<option>".$t->translate("Programmer")."\n";
echo "<option>".$t->translate("Software Engineer")."\n";
echo "<option>".$t->translate("Other type of Engineering")."\n";
echo "<option>".$t->translate("University professor/assistant")."\n";
echo "<option>".$t->translate("Executive")."\n";
echo "<option>".$t->translate("Consultant")."\n";
echo "<option>".$t->translate("Nothing to do with the software industry")."\n";
echo "<option selected> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Does your boss know you do Open Source").":</td><td width=70%>\n";
echo "<select name=\"boss\">\n";
echo "<option>".$t->translate("Yes")."\n";
echo "<option>".$t->translate("No")."\n";
echo "<option>".$t->translate("He even does not know what the GPL is")."\n";
echo "<option selected> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Have you profitted professionally because you develop Open Source").":</td><td width=70%>\n";
echo "<select name=\"profit\">\n";
echo "<option>".$t->translate("Yes")."\n";
echo "<option>".$t->translate("No")."\n";
echo "<option>".$t->translate("No, but I hope some day")."\n";
echo "<option selected> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Studies").":</td><td width=70%>\n";
echo "<select name=\"studies\">\n";
echo "<option>".$t->translate("Elementary School")."\n";
echo "<option>".$t->translate("High School")."\n";
echo "<option>".$t->translate("(Lehre)")."\n";
echo "<option>".$t->translate("University Graduate")."\n";
echo "<option>".$t->translate("Master")."\n";
echo "<option>".$t->translate("PhD")."\n";
echo "<option selected> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right valign=top width=30%>".$t->translate("What languages do you speak?")."</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"english\">&nbsp; ".$t->translate("English")."\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"german\">&nbsp; ".$t->translate("German")."\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"french\">&nbsp; ".$t->translate("French")."\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"spanish\">&nbsp; ".$t->translate("Spanish")."\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"italian\">&nbsp; ".$t->translate("Italian")."\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"czech\">&nbsp; ".$t->translate("Czech")."\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"portuguese\">&nbsp; ".$t->translate("Portuguese")."\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"japenese\">&nbsp; ".$t->translate("Japanese")."\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"other_langs\">&nbsp; ".$t->translate("Other")."\n";
echo "</td></tr></table></center>\n";

echo "<tr><td align=right width=30%>".$t->translate("Get you paid for doing Open Source?").":</td><td width=70%>\n";
echo "<center><table width=80% border=0>\n";
echo "<tr><td width=26%>";
echo "<input type=\"radio\" name=\"os_as_professional\" value=\"\" checked>&nbsp; ".$t->translate("Blank")."\n";
echo "</td>\n<td width=26%>";
echo "<input type=\"radio\" name=\"os_as_professional\" value=\"Yes\">&nbsp; ".$t->translate("Yes")."\n";
echo "</td>\n<td width=26%>";
echo "<input type=\"radio\" name=\"os_as_professional\" value=\"No\">&nbsp; ".$t->translate("No")."\n";
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

echo "<tr><td align=right width=30%>".$t->translate("Number of Open Source Projects you're involved in").":</td><td width=70%>\n";
echo "<select name=\"number_of_projects\">\n";
echo "<option selected> \n";
echo "<option>0\n";
echo "<option>1\n";
echo "<option>2\n";
echo "<option>3\n";
echo "<option>4\n";
echo "<option>+5\n";
echo "<option>+10\n";
echo "<option>+15\n";
echo "<option>+20\n";
echo "<option>+25\n";
echo "</select></td></tr>\n";

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
echo "<input type=\"checkbox\" name=\"shell\">&nbsp; Unix shell\n";
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
echo "<input type=\"checkbox\" name=\"ada\">&nbsp; Ada\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"modula\">&nbsp; Modula\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"eiffel\">&nbsp; Eiffel\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"prolog\">&nbsp; Prolog\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"xml\">&nbsp; XML / SGML\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"smalltalk\">&nbsp; Smalltalk\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"tcl\">&nbsp; Tcl\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"scheme\">&nbsp; Scheme\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"make\">&nbsp; Make\n";
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
echo "<input type=\"checkbox\" name=\"solaris\">&nbsp; Solaris\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"windows\">&nbsp; Windows 9x/NT\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"mac\">&nbsp; MacOS\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"beos\">&nbsp; BeOS\n";
echo "</td></tr>\n<tr><td width=33%>";
echo "<input type=\"checkbox\" name=\"os2\">&nbsp; OS/2\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"palmos\">&nbsp; PalmOS\n";
echo "</td>\n<td width=33%>";
echo "<input type=\"checkbox\" name=\"other_os\">&nbsp; ".$t->translate("Other")."\n";
echo "</td></tr></table></center>\n";
echo "</td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Desktops you use").":</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=25%>";
echo "<input type=\"radio\" name=\"favorite_desktop\" value=\"GNOME\">&nbsp; GNOME\n";
echo "</td>\n<td width=25%>";
echo "<input type=\"radio\" name=\"favorite_desktop\" value=\"KDE\">&nbsp; KDE\n";
echo "</td>\n<td width=25%>";
echo "<input type=\"radio\" name=\"favorite_desktop\" value=\"Both\">&nbsp; ".$t->translate("Both")."\n";
echo "</td>\n<td width=25%>";
echo "<input type=\"radio\" name=\"favorite_desktop\" value=\"Blank\" checked>&nbsp; ".$t->translate("Blank")."\n";
echo "</td></tr></table></center>\n";
echo "</td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Favorite Editor").":</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=25%>";
echo "<input type=\"radio\" name=\"favorite_editor\" value=\"\" checked>&nbsp; ".$t->translate("Blank")."\n";
echo "</td>\n<td width=25%>";
echo "<input type=\"radio\" name=\"favorite_editor\" value=\"emacs\">&nbsp; Emacs\n";
echo "</td>\n<td width=25%>";
echo "<input type=\"radio\" name=\"favorite_editor\" value=\"vi\">&nbsp; Vi\n";
echo "</td>\n<td width=25%>";
echo "<input type=\"radio\" name=\"favorite_editor\" value=\"other_editor\">&nbsp; ".$t->translate("Other")."\n";
echo "</td></tr></table></center>\n";
echo "</td></tr>\n";

echo "</td></tr>\n";
echo "</table>\n";
$bx->box_body_end();
$bx->box_end();


echo"<CENTER><TABLE BORDER=0 width=89%><TR><TD width=65%>\n";
$bx2->box_begin();
$bx2->box_title($t->translate("Submit"));
$bx2->box_body_begin();
echo "<table border=0 width=100% align=center cellspacing=0 cellpadding=0>\n";
echo "<tr><td align=right width=30%>&nbsp;</td><td width=70%><input type=\"Submit\" value=\"".$t->translate("Submit Your Form")."\"></td>\n";
echo "<td><img src=\"images/blank.gif\" width=\"118\" height=\"52\" border=\"0\"></td></tr>\n";
echo "</form>\n";
echo "</td></tr>\n";
echo "</table>\n";
$bx->box_body_end();
$bx->box_end();
echo"</TD><TD width=5%>&nbsp;\n";
echo"</TD><TD width=30%>\n";
$bx2->box_begin();
$bx2->box_title($t->translate("Page hosted at BerliOS"));
$bx2->box_body_begin();
echo "<CENTER><a href=\"http://www.berlios.de\" target=\"_blank\">\n";
echo "<img src=\"http://developer.berlios.de/sflogo.php?group_id=108&type=1\" width=\"118\" height=\"52\" border=\"0\" alt=\"BerliOS Logo\"></A>\n";
echo "The Open Source Mediator</CENTER>\n";
$bx2->box_body_end();
$bx2->box_end();
echo"</TD></TR></TABLE></CENTER>\n";

?>

<!-- end content -->

<?php
require("footer.inc");
@page_close();
?>