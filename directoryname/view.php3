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
$bx->box_title($t->translate("You can check your inputs another time or just insert it"));
$bx->box_body_begin();
echo "<table border=0 width=100% align=center cellspacing=0 cellpadding=3>\n";
echo "<form action=\"".$sess->url("insert.php3")."\" method=\"POST\">\n";

echo "<input type=\"hidden\" name=\"nickname\" value=\"$nickname\">\n";
echo "<input type=\"hidden\" name=\"nationality\" value=\"$nationality\">\n";
echo "<input type=\"hidden\" name=\"year_of_birth\" value=\"$year_of_birth\">\n";
echo "<input type=\"hidden\" name=\"gender\" value=\"$gender\">\n";
echo "<input type=\"hidden\" name=\"profession\" value=\"$profession\">\n";
echo "<input type=\"hidden\" name=\"boss\" value=\"$boss\">\n";
echo "<input type=\"hidden\" name=\"profit\" value=\"$profit\">\n";
echo "<input type=\"hidden\" name=\"studies\" value=\"$studies\">\n";
echo "<input type=\"hidden\" name=\"english\" value=\"$english\">\n";
echo "<input type=\"hidden\" name=\"german\" value=\"$german\">\n";
echo "<input type=\"hidden\" name=\"french\" value=\"$french\">\n";
echo "<input type=\"hidden\" name=\"spanish\" value=\"$spanish\">\n";
echo "<input type=\"hidden\" name=\"italian\" value=\"$italian\">\n";
echo "<input type=\"hidden\" name=\"czech\" value=\"$czech\">\n";
echo "<input type=\"hidden\" name=\"portuguese\" value=\"$portuguese\">\n";
echo "<input type=\"hidden\" name=\"other\" value=\"$other\">\n";
echo "<input type=\"hidden\" name=\"email_domain\" value=\"$email_domain\">\n";
echo "<input type=\"hidden\" name=\"os_as_professional\" value=\"$os_as_professional\">\n";
echo "<input type=\"hidden\" name=\"c\" value=\"$c\">\n";
echo "<input type=\"hidden\" name=\"c_plus_plus\" value=\"$c_plus_plus\">\n";
echo "<input type=\"hidden\" name=\"objective_c\" value=\"$objective_c\">\n";
echo "<input type=\"hidden\" name=\"java\" value=\"$java\">\n";
echo "<input type=\"hidden\" name=\"python\" value=\"$python\">\n";
echo "<input type=\"hidden\" name=\"perl\" value=\"$perl\">\n";
echo "<input type=\"hidden\" name=\"php\" value=\"$php\">\n";
echo "<input type=\"hidden\" name=\"shell\" value=\"$shell\">\n";
echo "<input type=\"hidden\" name=\"html\" value=\"$html\">\n";
echo "<input type=\"hidden\" name=\"lisp\" value=\"$lisp\">\n";
echo "<input type=\"hidden\" name=\"latex\" value=\"$latex\">\n";
echo "<input type=\"hidden\" name=\"pascal\" value=\"$pascal\">\n";
echo "<input type=\"hidden\" name=\"fortran\" value=\"$fortran\">\n";
echo "<input type=\"hidden\" name=\"basic\" value=\"$basic\">\n";
echo "<input type=\"hidden\" name=\"visual_basic\" value=\"$visual_basic\">\n";
echo "<input type=\"hidden\" name=\"javascript\" value=\"$javascript\">\n";
echo "<input type=\"hidden\" name=\"sql\" value=\"$sql\">\n";
echo "<input type=\"hidden\" name=\"ada\" value=\"$ada\">\n";
echo "<input type=\"hidden\" name=\"modula\" value=\"$modula\">\n";
echo "<input type=\"hidden\" name=\"eiffel\" value=\"$eiffel\">\n";
echo "<input type=\"hidden\" name=\"prolog\" value=\"$prolog\">\n";
echo "<input type=\"hidden\" name=\"xml\" value=\"$xml\">\n";
echo "<input type=\"hidden\" name=\"smalltalk\" value=\"$smalltalk\">\n";
echo "<input type=\"hidden\" name=\"tcl\" value=\"$tcl\">\n";
echo "<input type=\"hidden\" name=\"scheme\" value=\"$scheme\">\n";
echo "<input type=\"hidden\" name=\"make\" value=\"$make\">\n";

echo "<input type=\"hidden\" name=\"debian\" value=\"$debian\">\n";
echo "<input type=\"hidden\" name=\"suse\" value=\"$suse\">\n";
echo "<input type=\"hidden\" name=\"red_hat\" value=\"$red_hat\">\n";
echo "<input type=\"hidden\" name=\"mandrake\" value=\"$mandrake\">\n";
echo "<input type=\"hidden\" name=\"slackware\" value=\"$slackware\">\n";
echo "<input type=\"hidden\" name=\"turbolinux\" value=\"$turbolinux\">\n";
echo "<input type=\"hidden\" name=\"freebsd\" value=\"$freebsd\">\n";
echo "<input type=\"hidden\" name=\"openbsd\" value=\"$openbsd\">\n";
echo "<input type=\"hidden\" name=\"solaris\" value=\"$solaris\">\n";
echo "<input type=\"hidden\" name=\"windows\" value=\"$windows\">\n";
echo "<input type=\"hidden\" name=\"mac\" value=\"$mac\">\n";
echo "<input type=\"hidden\" name=\"beos\" value=\"$beos\">\n";
echo "<input type=\"hidden\" name=\"os2\" value=\"$os2\">\n";
echo "<input type=\"hidden\" name=\"palmos\" value=\"$palmos\">\n";
echo "<input type=\"hidden\" name=\"other_os\" value=\"$other_os\">\n";

echo "<input type=\"hidden\" name=\"favorite_desktop\" value=\"$favorite_desktop\">\n";
echo "<input type=\"hidden\" name=\"favorite_editor\" value=\"$favorite_editor\">\n";

//echo "<input type=\"hidden\" name=\"\" value=\"$\">\n";

echo "<tr><td align=right width=30%>&nbsp;</td><td width=70%><input type=\"Submit\" value=\"".$t->translate("Just Insert")."\"></td></tr>\n";
echo "</form>\n";
echo "</td></tr>\n";
echo "</table>\n";

$bx->box_body_end();
$bx->box_end();



$bx->box_begin();
$bx->box_title($t->translate("Personal Data"));
$bx->box_body_begin();
echo "<table border=0 width=100% align=center cellspacing=0 cellpadding=3>\n";
echo "<form action=\"".$sess->url("insert.php3")."\" method=\"POST\">\n";
echo "<tr><td align=right width=30%>".$t->translate("Nickname")." (24):</td><td width=70%><input type=\"TEXT\" name=\"nickname\" value=\"$nickname\" size=24 maxlength=24></td></tr>\n";
echo "<tr><td align=right width=30%>".$t->translate("Nationality").":</td><td width=70%>\n";
echo "<select name=\"nationality\">\n";
if (!isset($nationality) || empty($nationality)) echo "<option selected> \n";
for($i=4;$i<sizeof($domain_country)-5;$i++) {
  if ($nationality == $domain_country[$i][1])   echo "<option selected>".$domain_country[$i][1]."\n";
  else echo "<option>".$domain_country[$i][1]."\n";
}
if (!isset($nationality) || empty($nationality)) echo "<option> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Year of Birth").":</td><td width=70%>\n";
echo "<select name=\"year_of_birth\">\n";
for ($i=1930; $i<1991; $i++) {
  if ($year_of_birth == $i) echo "<option selected>".$year_of_birth."\n";
  else echo "<option>".$i."\n";
}
if (!isset($year_of_birth) || empty($year_of_birth)) echo "<option selected> \n";
else echo "<option> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Gender").":</td><td width=70%>\n";
echo "<select name=\"gender\">\n";
if ($gender == "".$t->translate("Male")."") echo "<option selected>".$t->translate("Male")."\n";
else echo "<option>".$t->translate("Male")."\n";
if ($gender == "".$t->translate("Female")."") echo "<option selected>".$t->translate("Female")."\n";
else echo "<option>".$t->translate("Female")."\n";
if ($gender == "") echo "<option selected> \n";
else echo "<option> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Email Domain").":</td><td width=70%>\n";
echo "username@server.<select name=\"email_domain\">\n";
if (!isset($email_domain) || empty($email_domain)) echo "<option selected> \n";
for($i=1;$i<sizeof($domain_country);$i++) {
  if ($email_domain == $domain_country[$i][0])   echo "<option selected>".$domain_country[$i][0]."\n";
  else echo "<option>".$domain_country[$i][0]."\n";
}
if (!isset($nationality) || empty($nationality)) echo "<option> \n";
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
if ($profession == "".$t->translate("Student")."") echo "<option selected>".$t->translate("Student")."\n";
else echo "<option>".$t->translate("Student")."\n";
if ($profession == "".$t->translate("Programmer")."") echo "<option selected>".$t->translate("Programmer")."\n";
else echo "<option>".$t->translate("Programmer")."\n";
if ($profession == "".$t->translate("Software Engineer")."") echo "<option selected>".$t->translate("Software Engineer")."\n";
else echo "<option>".$t->translate("Software Engineer")."\n";
if ($profession == "".$t->translate("Other type of Engineering")."") echo "<option selected>".$t->translate("Other type of Engineering")."\n";
else echo "<option>".$t->translate("Other type of Engineering")."\n";
if ($profession == "".$t->translate("University professor/assistant")."") echo "<option selected>".$t->translate("University professor/assistant")."\n";
else echo "<option>".$t->translate("University professor/assistant")."\n";
if ($profession == "".$t->translate("Executive")."") echo "<option selected>".$t->translate("Executive")."\n";
else echo "<option>".$t->translate("Executive")."\n";
if ($profession == "".$t->translate("Consultant")."") echo "<option selected>".$t->translate("Consultant")."\n";
else echo "<option>".$t->translate("Consultant")."\n";
if ($profession == "".$t->translate("Nothing to do with the software industry")."") echo "<option selected>".$t->translate("Nothing to do with the software industry")."\n";
else echo "<option>".$t->translate("Nothing to do with the software industry")."\n";
if ($profession == "") echo "<option selected> \n";
else echo "<option> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Does your boss know you do Open Source").":</td><td width=70%>\n";
echo "<select name=\"boss\">\n";
if ($boss == "".$t->translate("Yes")."") echo "<option selected>".$t->translate("Yes")."\n";
else echo "<option>".$t->translate("Yes")."\n";
if ($boss == "".$t->translate("No")."") echo "<option selected>".$t->translate("No")."\n";
else echo "<option>".$t->translate("No")."\n";
if ($boss == "".$t->translate("He even does not know what the GPL is")."") echo "<option selected>".$t->translate("He even doesn't know what the GPL is")."\n";
else echo "<option>".$t->translate("He even does not know what the GPL is")."\n";
if ($boss == "") echo "<option selected> \n";
else echo "<option> \n";
echo "</select></td></tr>\n";


echo "<tr><td align=right width=30%>".$t->translate("Have you profitted professionally because you develop Open Source").":</td><td width=70%>\n";
echo "<select name=\"profit\">\n";
if ($profit == "".$t->translate("Yes")."") echo "<option selected>".$t->translate("Yes")."\n";
else echo "<option>".$t->translate("Yes")."\n";
if ($profit == "".$t->translate("No")."") echo "<option selected>".$t->translate("No")."\n";
else echo "<option>".$t->translate("No")."\n";
if ($profit == "".$t->translate("No, but I hope some day")."") echo "<option selected>".$t->translate("No, but I hope some day")."\n";
else echo "<option>".$t->translate("No, but I hope some day")."\n";
if ($profit == "") echo "<option selected> \n";
else echo "<option> \n";
echo "</select></td></tr>\n";


echo "<tr><td align=right width=30%>".$t->translate("Studies").":</td><td width=70%>\n";
echo "<select name=\"studies\">\n";
if ($studies == "".$t->translate("Elementary School")."") echo "<option selected>".$t->translate("Elementary School")."\n";
else echo "<option>".$t->translate("Elementary School")."\n";
if ($studies == "".$t->translate("High School")."") echo "<option selected>".$t->translate("High School")."\n";
else echo "<option>".$t->translate("High School")."\n";
if ($studies == "".$t->translate("(Lehre)")."") echo "<option selected>".$t->translate("(Lehre)")."\n";
else echo "<option>".$t->translate("(Lehre)")."\n";
if ($studies == "".$t->translate("University Graduate")."") echo "<option selected>".$t->translate("University Graduate")."\n";
else echo "<option>".$t->translate("University Graduate")."\n";
if ($studies == "".$t->translate("Master")."") echo "<option selected>".$t->translate("Master")."\n";
else echo "<option>".$t->translate("Master")."\n";
if ($studies == "".$t->translate("PhD")."") echo "<option selected>".$t->translate("PhD")."\n";
else echo "<option>".$t->translate("PhD")."\n";
if ($studies == "".$t->translate("")."") echo "<option selected>".$t->translate("")."\n";
else echo "<option> \n";
echo "</select></td></tr>\n";

echo "<tr><td align=right valign=top width=30%>".$t->translate("What languages do you speak?")."</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=33%>";
if ($english == "on") echo "<input type=\"checkbox\" name=\"english\" checked>&nbsp; ".$t->translate("English")."\n";
else echo "<input type=\"checkbox\" name=\"english\">&nbsp; ".$t->translate("English")."\n";
echo "</td>\n<td width=33%>";
if ($german == "on") echo "<input type=\"checkbox\" name=\"german\" checked>&nbsp; ".$t->translate("German")."\n";
else echo "<input type=\"checkbox\" name=\"german\">&nbsp; ".$t->translate("German")."\n";
echo "</td>\n<td width=33%>";
if ($french == "on") echo "<input type=\"checkbox\" name=\"french\" checked>&nbsp; ".$t->translate("French")."\n";
else echo "<input type=\"checkbox\" name=\"french\">&nbsp; ".$t->translate("French")."\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($spanish == "on") echo "<input type=\"checkbox\" name=\"spanish\" checked>&nbsp; ".$t->translate("Spanish")."\n";
else echo "<input type=\"checkbox\" name=\"spanish\">&nbsp; ".$t->translate("Spanish")."\n";
echo "</td>\n<td width=33%>";
if ($italian == "on") echo "<input type=\"checkbox\" name=\"italian\" checked>&nbsp; ".$t->translate("Italian")."\n";
else echo "<input type=\"checkbox\" name=\"italian\">&nbsp; ".$t->translate("Italian")."\n";
echo "</td>\n<td width=33%>";
if ($czech == "on") echo "<input type=\"checkbox\" name=\"czech\" checked>&nbsp; ".$t->translate("Czech")."\n";
else echo "<input type=\"checkbox\" name=\"czech\">&nbsp; ".$t->translate("Czech")."\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($portuguese == "on") echo "<input type=\"checkbox\" name=\"portuguese\" checked>&nbsp; ".$t->translate("Portuguese")."\n";
else echo "<input type=\"checkbox\" name=\"portuguese\">&nbsp; ".$t->translate("Portuguese")."\n";
echo "</td>\n<td width=33%>";
if ($japenese == "on") echo "<input type=\"checkbox\" name=\"japenese\" checked>&nbsp; ".$t->translate("Japenese")."\n";
else echo "<input type=\"checkbox\" name=\"japenese\">&nbsp; ".$t->translate("Japanese")."\n";
echo "</td>\n<td width=33%>";
if ($other_langs == "on") echo "<input type=\"checkbox\" name=\"other_langs\" checked>&nbsp; ".$t->translate("Other")."\n";
else echo "<input type=\"checkbox\" name=\"other_langs\">&nbsp; ".$t->translate("Other")."\n";
echo "</td></tr></table></center>\n";

echo "<tr><td align=right width=30%>".$t->translate("Get you paid for doing Open Source?").":</td><td width=70%>\n";
echo "<center><table width=80% border=0>\n";
echo "<tr><td width=26%>";
if (empty($os_as_professional)) echo "<input type=\"radio\" name=\"os_as_professional\" value=\"\" checked>&nbsp;".$t->translate("Blank")."\n";
else echo "<input type=\"radio\" name=\"os_as_professional\" value=\"\">&nbsp;".$t->translate("Blank")."\n";
echo "</td>\n<td width=26%>";
if ($os_as_professional == "Yes") echo "<input type=\"radio\" name=\"os_as_professional\" value=\"yes\" checked>&nbsp;".$t->translate("Yes")."\n";
else echo "<input type=\"radio\" name=\"os_as_professional\" value=\"Yes\">&nbsp; ".$t->translate("Yes")."\n";
echo "</td>\n<td width=26%>";
if ($os_as_professional == "no") echo "<input type=\"radio\" name=\"os_as_professional\" value=\"No\" checked>&nbsp;".$t->translate("No")."\n";
else echo "<input type=\"radio\" name=\"os_as_professional\" value=\"No\">&nbsp; ".$t->translate("No")."\n";
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
if (empty($number_of_projects)) echo "<option selected> \n";
else echo "<option> \n";
if ($number_of_projects == 0) echo "<option selected>0\n";
else echo "<option>0\n";
if ($number_of_projects == 1) echo "<option selected>1\n";
else echo "<option>1\n";echo "<option>1\n";
if ($number_of_projects == 2) echo "<option selected>2\n";
else echo "<option>2\n";
if ($number_of_projects == 3) echo "<option selected>3\n";
else echo "<option>3\n";
if ($number_of_projects == 4) echo "<option selected>4\n";
else echo "<option>4\n";
if ($number_of_projects == "+5") echo "<option selected>+5\n";
else echo "<option>+5\n";
if ($number_of_projects == "+10") echo "<option selected>+10\n";
else echo "<option>+10\n";
if ($number_of_projects == "+15") echo "<option selected>+15\n";
else echo "<option>+15\n";
if ($number_of_projects == "+20") echo "<option selected>+20\n";
else echo "<option>+20\n";
if ($number_of_projects == "+25") echo "<option selected>+25\n";
else echo "<option>+25\n";
echo "</select></td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("With which of these tools are you experienced?").":</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=33%>";
if ($c == "on") echo "<input type=\"checkbox\" name=\"c\" checked>&nbsp; C\n";
else echo "<input type=\"checkbox\" name=\"c\">&nbsp; C\n";
echo "</td>\n<td width=33%>";
if ($c_plus_plus == "on") echo "<input type=\"checkbox\" name=\"c_plus_plus\" checked>&nbsp; C++\n";
else echo "<input type=\"checkbox\" name=\"c_plus_plus\">&nbsp; C++\n";
echo "</td>\n<td width=33%>";
if ($objective_c == "on") echo "<input type=\"checkbox\" name=\"objective_c\" checked>&nbsp; Objective C\n";
else echo "<input type=\"checkbox\" name=\"objective_c\">&nbsp; Objective C\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($java == "on") echo "<input type=\"checkbox\" name=\"java\" checked>&nbsp; Java\n";
else echo "<input type=\"checkbox\" name=\"java\">&nbsp; Java\n";
echo "</td>\n<td width=33%>";
if ($python == "on") echo "<input type=\"checkbox\" name=\"python\" checked>&nbsp; Python\n";
else echo "<input type=\"checkbox\" name=\"python\">&nbsp; Python\n";
echo "</td>\n<td width=33%>";
if ($perl == "on") echo "<input type=\"checkbox\" name=\"perl\" checked>&nbsp; perl\n";
else echo "<input type=\"checkbox\" name=\"perl\">&nbsp; perl\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($php == "on") echo "<input type=\"checkbox\" name=\"php\" checked>&nbsp; php\n";
else echo "<input type=\"checkbox\" name=\"php\">&nbsp; php\n";
echo "</td>\n<td width=33%>";
if ($shell == "on") echo "<input type=\"checkbox\" name=\"shell\" checked>&nbsp; shell\n";
else echo "<input type=\"checkbox\" name=\"shell\">&nbsp; shell\n";
echo "</td>\n<td width=33%>";
if ($html == "on") echo "<input type=\"checkbox\" name=\"html\" checked>&nbsp; html\n";
else echo "<input type=\"checkbox\" name=\"html\">&nbsp; html\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($lisp == "on") echo "<input type=\"checkbox\" name=\"lisp\" checked>&nbsp; LISP\n";
else echo "<input type=\"checkbox\" name=\"lisp\">&nbsp; LISP\n";
echo "</td>\n<td width=33%>";
if ($latex == "on") echo "<input type=\"checkbox\" name=\"latex\" checked>&nbsp; (La)TEX\n";
else echo "<input type=\"checkbox\" name=\"latex\">&nbsp; (La)TEX\n";
echo "</td>\n<td width=33%>";
if ($pascal == "on") echo "<input type=\"checkbox\" name=\"pascal\" checked>&nbsp; Pascal\n";
else echo "<input type=\"checkbox\" name=\"pascal\">&nbsp; Pascal\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($fortran == "on") echo "<input type=\"checkbox\" name=\"fortran\" checked>&nbsp; FORTRAN\n";
else echo "<input type=\"checkbox\" name=\"fortran\">&nbsp; FORTRAN\n";
echo "</td>\n<td width=33%>";
if ($basic == "on") echo "<input type=\"checkbox\" name=\"basic\" checked>&nbsp; BASIC\n";
else echo "<input type=\"checkbox\" name=\"basic\">&nbsp; BASIC\n";
echo "</td>\n<td width=33%>";
if ($visual_basic == "on") echo "<input type=\"checkbox\" name=\"visual_basic\" checked>&nbsp; Visual Basic\n";
else echo "<input type=\"checkbox\" name=\"visual_basic\">&nbsp; Visual Basic\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($javascript == "on") echo "<input type=\"checkbox\" name=\"javascript\" checked>&nbsp; JavaScript\n";
else echo "<input type=\"checkbox\" name=\"javascript\">&nbsp; JavaScript\n";
echo "</td>\n<td width=33%>";
if ($sql == "on") echo "<input type=\"checkbox\" name=\"sql\" checked>&nbsp; SQL\n";
else echo "<input type=\"checkbox\" name=\"sql\">&nbsp; SQL\n";
echo "</td>\n<td width=33%>";
if ($ada == "on") echo "<input type=\"checkbox\" name=\"ada\" checked>&nbsp; Ada\n";
else echo "<input type=\"checkbox\" name=\"ada\">&nbsp; Ada\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($modula == "on") echo "<input type=\"checkbox\" name=\"modula\" checked>&nbsp; Modula\n";
else echo "<input type=\"checkbox\" name=\"modula\">&nbsp; Modula\n";
echo "</td>\n<td width=33%>";
if ($eiffel == "on") echo "<input type=\"checkbox\" name=\"eiffel\" checked>&nbsp; Eiffel\n";
else echo "<input type=\"checkbox\" name=\"eiffel\">&nbsp; Eiffel\n";
echo "</td>\n<td width=33%>";
if ($prolog == "on") echo "<input type=\"checkbox\" name=\"prolog\" checked>&nbsp; Prolog\n";
else echo "<input type=\"checkbox\" name=\"prolog\">&nbsp; Prolog\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($xml == "on") echo "<input type=\"checkbox\" name=\"xml\" checked>&nbsp; XML / SGML\n";
else echo "<input type=\"checkbox\" name=\"xml\">&nbsp; XML / SGML\n";
echo "</td>\n<td width=33%>";
if ($smalltalk == "on") echo "<input type=\"checkbox\" name=\"smalltalk\" checked>&nbsp; Smalltalk\n";
else echo "<input type=\"checkbox\" name=\"smalltalk\">&nbsp; Smalltalk\n";
echo "</td>\n<td width=33%>";
if ($tcl == "on") echo "<input type=\"checkbox\" name=\"tcl\" checked>&nbsp; Tcl\n";
else echo "<input type=\"checkbox\" name=\"tcl\">&nbsp; Tcl\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($scheme == "on") echo "<input type=\"checkbox\" name=\"scheme\" checked>&nbsp; Scheme\n";
else echo "<input type=\"checkbox\" name=\"scheme\">&nbsp; Scheme\n";
echo "</td>\n<td width=33%>";
if ($make == "on") echo "<input type=\"checkbox\" name=\"make\" checked>&nbsp; Make\n";
else echo "<input type=\"checkbox\" name=\"make\">&nbsp; Make\n";
echo "</td>\n<td width=33%>";
echo "&nbsp;";
echo "</td></tr></table></center>\n";
echo "</td></tr>\n";


echo "<tr><td align=right width=30%>".$t->translate("Operating System / Distribution you use").":</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=33%>";
if ($debian == "on") echo "<input type=\"checkbox\" name=\"debian\" checked>&nbsp; Debian\n";
else echo "<input type=\"checkbox\" name=\"debian\">&nbsp; Debian\n";
echo "</td>\n<td width=33%>";
if ($suse == "on") echo "<input type=\"checkbox\" name=\"suse\" checked>&nbsp; SuSE\n";
else echo "<input type=\"checkbox\" name=\"suse\">&nbsp; SuSE\n";
echo "</td>\n<td width=33%>";
if ($red_hat == "on") echo "<input type=\"checkbox\" name=\"red_hat\" checked>&nbsp; \Red Hatn";
else echo "<input type=\"checkbox\" name=\"red_hat\">&nbsp; Red Hat\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($mandrake == "on") echo "<input type=\"checkbox\" name=\"mandrake\" checked>&nbsp; Mandrake\n";
else echo "<input type=\"checkbox\" name=\"mandrake\">&nbsp; Mandrake\n";
echo "</td>\n<td width=33%>";
if ($slackware == "on") echo "<input type=\"checkbox\" name=\"slackware\" checked>&nbsp; Slackware\n";
else echo "<input type=\"checkbox\" name=\"slackware\">&nbsp; Slackware\n";
echo "</td>\n<td width=33%>";
if ($turbolinux == "on") echo "<input type=\"checkbox\" name=\"turbolinux\" checked>&nbsp; Turbolinux\n";
else echo "<input type=\"checkbox\" name=\"turbolinux\">&nbsp; Turbolinux\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($freebsd == "on") echo "<input type=\"checkbox\" name=\"freebsd\" checked>&nbsp; FreeBSD\n";
else echo "<input type=\"checkbox\" name=\"freebsd\">&nbsp; FreeBSD\n";
echo "</td>\n<td width=33%>";
if ($openbsd == "on") echo "<input type=\"checkbox\" name=\"openbsd\" checked>&nbsp; OpenBSD\n";
else echo "<input type=\"checkbox\" name=\"openbsd\">&nbsp; OpenBSD\n";
echo "</td>\n<td width=33%>";
if ($solaris == "on") echo "<input type=\"checkbox\" name=\"solaris\" checked>&nbsp; Solaris\n";
else echo "<input type=\"checkbox\" name=\"solaris\">&nbsp; Solaris\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($windows == "on") echo "<input type=\"checkbox\" name=\"windows\" checked>&nbsp; Windows\n";
else echo "<input type=\"checkbox\" name=\"windows\">&nbsp; Windows 9x/NT\n";
echo "</td>\n<td width=33%>";
if ($mac == "on") echo "<input type=\"checkbox\" name=\"mac\" checked>&nbsp; MacOS\n";
else echo "<input type=\"checkbox\" name=\"mac\">&nbsp; MacOS\n";
echo "</td>\n<td width=33%>";
if ($beos == "on") echo "<input type=\"checkbox\" name=\"beos\" checked>&nbsp; BeOS\n";
else echo "<input type=\"checkbox\" name=\"beos\">&nbsp; BeOS\n";
echo "</td></tr>\n<tr><td width=33%>";
if ($os2 == "on") echo "<input type=\"checkbox\" name=\"os2\" checked>&nbsp; OS/2\n";
else echo "<input type=\"checkbox\" name=\"os2\">&nbsp; OS/2\n";
echo "</td>\n<td width=33%>";
if ($palmos == "on") echo "<input type=\"checkbox\" name=\"palmos\" checked>&nbsp; PalmOS\n";
else echo "<input type=\"checkbox\" name=\"palmos\">&nbsp; PalmOS\n";
echo "</td>\n<td width=33%>";
if ($other_os == "on") echo "<input type=\"checkbox\" name=\"other_os\" checked>&nbsp; ".$t->translate("Other")."\n";
else echo "<input type=\"checkbox\" name=\"other_os\">&nbsp; ".$t->translate("Other")."\n";
echo "</td></tr></table></center>\n";
echo "</td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Desktops you use").":</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=25%>";
if ($favorite_desktop == "GNOME") echo "<input type=\"radio\" name=\"\" value=\"favorite_desktop\" checked>&nbsp;".$t->translate("GNOME")."\n";
else echo "<input type=\"radio\" name=\"favorite_desktop\">&nbsp; GNOME\n";
echo "</td>\n<td width=25%>";
if ($favorite_desktop == "KDE") echo "<input type=\"radio\" name=\"\" value=\"favorite_desktop\" checked>&nbsp;".$t->translate("KDE")."\n";
else echo "<input type=\"radio\" name=\"favorite_desktop\">&nbsp; KDE\n";
echo "</td>\n<td width=25%>";
if ($favorite_desktop == "Both") echo "<input type=\"radio\" name=\"\" value=\"favorite_desktop\" checked>&nbsp;".$t->translate("Both")."\n";
else echo "<input type=\"radio\" name=\"favorite_desktop\">&nbsp; ".$t->translate("Both")."\n";
echo "</td>\n<td width=25%>";
if (empty($favorite_desktop)) echo "<input type=\"radio\" name=\"\" value=\"favorite_desktop\" checked>&nbsp;".$t->translate("Blank")."\n";
else echo "<input type=\"radio\" name=\"favorite_desktop\">&nbsp; ".$t->translate("Blank")."\n";
echo "</td></tr></table></center>\n";
echo "</td></tr>\n";

echo "<tr><td align=right width=30%>".$t->translate("Favorite Editor").":</td><td width=70%>\n";
echo "<center><table width=90% border=0>\n";
echo "<tr><td width=25%>";
if (empty($favorite_editor)) echo "<input type=\"radio\" name=\"favorite_editor\" value=\"\" checked>&nbsp;".$t->translate("Blank")."\n";
else echo "<input type=\"radio\" name=\"favorite_editor\" value=\"\">&nbsp; ".$t->translate("Blank")."\n";
echo "</td>\n<td width=25%>";
if ($favorite_editor == "emacs") echo "<input type=\"radio\" name=\"favorite_editor\" value=\"emacs\" checked>&nbsp; Emacs\n";
else echo "<input type=\"radio\" name=\"favorite_editor\" value=\"emacs\">&nbsp; Emacs\n";
echo "</td>\n<td width=25%>";
if ($favorite_editor == "vi") echo "<input type=\"radio\" name=\"favorite_editor\" value=\"Vi\" checked>&nbsp; Vi\n";
else echo "<input type=\"radio\" name=\"favorite_editor\" value=\"vi\">&nbsp; Vi\n";
echo "</td>\n<td width=25%>";
if ($favorite_editor == "other") echo "<input type=\"radio\" name=\"favorite_editor\" value=\"Other\" checked>&nbsp; ".$t->translate("Other")."\n";
else echo "<input type=\"radio\" name=\"favorite_editor\" value=\"other_editor\">&nbsp; ".$t->translate("Other")."\n";
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
