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
# This page inserts the data into the database
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

if (check($GLOBALS[REMOTE_ADDR])) {

  if ($english == "on") $english = "Y"; else $english = "N";
  if ($german == "on") $german = "Y"; else $german = "N";
  if ($french == "on") $french = "Y"; else $french = "N";
  if ($spanish == "on") $spanish = "Y"; else $spanish = "N";
  if ($italian == "on") $italian = "Y"; else $italian = "N";
  if ($czech == "on") $czech = "Y"; else $czech = "N";
  if ($portuguese == "on") $portuguese = "Y"; else $portuguese = "N";
  if ($japanese == "on") $japanese = "Y"; else $japanese = "N";
  if ($other_langs == "on") $other_langs = "Y"; else $other_langs = "N";
  if ($c == "on") $c = "Y"; else $c = "N";
  if ($c_plus_plus == "on") $c_plus_plus = "Y"; else $c_plus_plus = "N";
  if ($objective_c == "on") $objective_c = "Y"; else $objective_c = "N";
  if ($java == "on") $java = "Y"; else $java = "N";
  if ($python == "on") $python = "Y"; else $python = "N";
  if ($perl == "on") $perl = "Y"; else $perl = "N";
  if ($php == "on") $php = "Y"; else $php = "N";
  if ($shell == "on") $shell = "Y"; else $shell = "N";
  if ($html == "on") $html = "Y"; else $html = "N";
  if ($lisp == "on") $lisp = "Y"; else $lisp = "N";
  if ($latex == "on") $latex = "Y"; else $latex = "N";
  if ($pascal == "on") $pascal = "Y"; else $pascal = "N";
  if ($fortran == "on") $fortran = "Y"; else $fortran = "N";
  if ($basic == "on") $basic = "Y"; else $basic = "N";
  if ($visual_basic == "on") $visual_basic = "Y"; else $visual_basic = "N";
  if ($javascript == "on") $javascript = "Y"; else $javascript = "N";
  if ($sql == "on") $sql = "Y"; else $sql = "N";
  if ($ada == "on") $ada = "Y"; else $ada = "N";
  if ($modula == "on") $modula = "Y"; else $modula = "N";
  if ($eiffel == "on") $eiffel = "Y"; else $eiffel = "N";
  if ($prolog == "on") $prolog = "Y"; else $prolog = "N";
  if ($xml == "on") $xml = "Y"; else $xml = "N";
  if ($smalltalk == "on") $smalltalk = "Y"; else $smalltalk = "N";
  if ($tcl == "on") $tcl = "Y"; else $tcl = "N";
  if ($scheme == "on") $scheme = "Y"; else $scheme = "N";
  if ($make == "on") $make = "Y"; else $make = "N";

  if ($debian == "on") $debian = "Y"; else $debian = "N";
  if ($suse == "on") $suse = "Y"; else $suse = "N";
  if ($red_hat == "on") $red_hat = "Y"; else $red_hat = "N";
  if ($mandrake == "on") $mandrake = "Y"; else $mandrake = "N";
  if ($slackware == "on") $slackware = "Y"; else $slackware = "N";
  if ($turbolinux == "on") $turbolinux = "Y"; else $turbolinux = "N";
  if ($free_bsd == "on") $free_bsd = "Y"; else $free_bsd = "N";
  if ($open_bsd == "on") $open_bsd = "Y"; else $open_bsd = "N";
  if ($solaris == "on") $solaris = "Y"; else $solaris = "N";
  if ($windows == "on") $windows = "Y"; else $windows = "N";
  if ($mac == "on") $mac = "Y"; else $mac = "N";
  if ($beos == "on") $beos = "Y"; else $beos = "N";
  if ($os2 == "on") $os2 = "Y"; else $os2 = "N";
  if ($palmos == "on") $palmos = "Y"; else $palmos = "N";
  if ($other_os == "on") $other_os = "Y"; else $other_os = "N";

  if ($favorite_desktop == "GNOME") $gnome = "Y"; else $gnome = "N";
  if ($favorite_desktop == "KDE") $kde = "Y"; else $kde = "N";
  if ($favorite_desktop == "Both") $both_desktops = "Y"; else $both_desktops = "N";
  if ($favorite_desktop == "Other") $other_desktop = "Y"; else $other_desktop = "N";

  if ($favorite_editor == "emacs") $emacs = "Y"; else $emacs = "N";
  if ($favorite_editor == "vi") $vi = "Y"; else $vi = "N";
  if ($favorite_editor == "other") $other_editor = "Y"; else $other_editor = "N";

  $query = "INSERT developers SET nickname = '$nickname', nationality='$nationality', year_of_birth='$year_of_birth', gender='$gender', profession='$profession', boss ='$boss', profit='$profit', studies='$studies', email_domain='$email_domain', os_as_professional='$os_as_professional', c='$c', c_plus_plus='$c_plus_plus', java='$java', python='$python', perl='$perl', php='$php', shell='$shell', html='$html', latex='$latex', pascal='$pascal', fortran='$fortran', basic='$basic', visual_basic='$visual_basic', javascript='$javascript', sql='$sql', ada='$ada', modula='$modula', eiffel='$eiffel', prolog='$prolog', xml='$xml', smalltalk='$smalltalk', tcl='$tcl', scheme='$scheme', make='$make', english='$english', german='$german', french='$french', spanish='$spanish', italian='$italian', czech='$czech', portuguese='$portuguese', japanese='$japanese', other_langs='$other_langs', debian='$debian', suse='$suse', red_hat='$red_hat', mandrake='$mandrake', slackware='$slackware', turbolinux='$turbolinux', free_bsd='$free_bsd', open_bsd='$open_bsd', solaris = '$solaris', windows = '$windows', mac='$mac', beos='$beos', os2='$os2', palmos='$palmos', other_os='$other_os', gnome='$gnome', kde='$kde', both_desktops='$both_desktops', other_desktop='$other_desktop', emacs='$emacs', vi='$vi', other_editor='$other_editor'";
  $db->query($query);
  if ($db->affected_rows() == 0) {
    $be->box_full($t->translate("Error"),$t->translate("Database Access failed"));
  } else {

    $bx->box_begin();
    $bx->box_title($t->translate("Thank you"));
    $bx->box_body_begin();
    echo "\n<P>";
    echo $t->translate("Give another time thanx for filling it out");
    echo "\n<P>";
    $bx->box_body_end();
    $bx->box_end();

    $bx->box_begin();
    $bx->box_title($t->translate("Have a look at the stats"));
    $bx->box_body_begin();
    echo "\n<P>";
    echo $t->translate("Yes, that's where you'll find what Open Source Developers are");
    echo "\n<P>";
    $bx->box_body_end();
    $bx->box_end();

    $bx->box_begin();
    $bx->box_title($t->translate("Authors"));
    $bx->box_body_begin();
    echo "\n<P>";
    echo $t->translate("Say who are the authors of this project");
    echo "\n<P>";
    $bx->box_body_end();
    $bx->box_end();

    echo "</td></tr>\n";
    echo "</table>\n";
    $bx->box_body_end();
    $bx->box_end();

    $bx->box_body_end();
    $bx->box_end();
  }
} else {
  $be->box_full($t->translate("Error"),$t->translate("Sorry, we only allow one insertion per IP every 24 hours"));
}
?>

<!-- end content -->

<?php
require("footer.inc");
@page_close();
?>
