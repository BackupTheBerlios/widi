<?php

######################################################################
# SourceWell: Software Announcement & Retrieval System
# ================================================
#
# Copyright (c) 2001 by
#                Lutz Henckel (lutz.henckel@fokus.gmd.de) and
#                Gregorio Robles (grex@scouts-es.org)
#
# BerliOS SourceWell: http://sourcewell.berlios.de
# BerliOS - The OpenSource Mediator: http://www.berlios.de
#
# Library with the functions for comments and faq
#
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 or later of the GPL.
######################################################################

function cmtform() {
  global $bx, $t, $sess;

  $bx->box_begin();
  $bx->box_title($t->translate("Your Comment"));
  $bx->box_body_begin();
  echo "<form action=\"".$sess->url("cmtins.php3")."\" method=\"POST\">\n";
  echo "<table border=0 align=center cellspacing=0 cellpadding=3>\n";
  echo "<tr><td align=right width=30%>".$t->translate("Name")." (32):</td><td width=70%><input type=\"TEXT\" name=\"name_cmt\" size=32 maxlength=32></td></tr>\n";
  echo "<tr><td align=right width=30%>".$t->translate("Email")." (32):</td><td width=70%><input type=\"TEXT\" name=\"email_cmt\" size=32 maxlength=32></td></tr>\n";
  echo "<tr><td align=right>".$t->translate("Subject")." (128):</td><td><input type=\"TEXT\" name=\"subject\" size=40 maxlength=128></td></tr>\n";
  echo "<tr><td align=right>".$t->translate("Comment")." (*):</td><td><textarea cols=40 rows=7 name=\"text\" wrap=\"virtual\" maxlength=255></textarea></td></tr>\n";
  echo "<tr><td align=right>&nbsp;</td><td><input type=\"Submit\" value=\"".$t->translate("Send")."\"></td>\n";
  echo "</form>\n";
  echo "</tr></table>\n";
  $bx->box_body_end();
  $bx->box_end();
}


function cmtshow($query) {
  global $t, $bx, $db;

  $db->query($query);
  while($db->next_record()) {
    $bx->box_begin();
    $bx->box_title($t->translate("Comment").": ".$db->f("subject_cmt"));
    $bx->box_body_begin();
    $timestamp = mktimestamp($db->f("creation_cmt"));
    echo "<b><a href=\"mailto:".$db->f("email_cmt")."\">".$db->f("user_cmt")."</a> - ".timestr($timestamp)."</b>\n";
    echo "<p>".$db->f("text_cmt")."\n";
    $bx->box_body_end();
    $bx->box_end();
  }
}

function cmtmod($query) {
  global $t, $bx, $db, $sess;

  $db->query($query);
  $db->next_record();
  $bx->box_begin();
  $bx->box_title($t->translate("Comment about")." \"".$db->f("name")."\"");
  $bx->box_body_begin();
  echo "<form action=\"".$sess->self_url()."\" method=\"POST\">\n";
  echo "<table border=0 align=center cellspacing=0 cellpadding=3>\n";
  echo "<tr><td align=right>".$t->translate("Subject")." (128):</td><td><input type=\"TEXT\" name=\"subject\" size=40 maxlength=128 value=\"".$db->f("subject_cmt")."\"></td></tr>\n";
  echo "<tr><td align=right>".$t->translate("Comment")." (*):</td><td>
<textarea cols=40 rows=7 name=\"text\" wrap=\"virtual\" maxlength=255>".$db->f("text_cmt")."</textarea></td></tr>\n";
  echo "<input type=\"hidden\" name=\"id\" value=\"".$db->f("appid")."\">\n";
  echo "<input type=\"hidden\" name=\"modification\" value=\"".$db->f("creation_cmt")."\">\n";
  echo "<input type=\"hidden\" name=\"modify\" value=\"2\">\n";
  echo "<tr><td align=right>&nbsp;</td><td><input type=\"Submit\" value=\"".$t->translate("Modify")."\"></td>\n";
  echo "</form>\n";
  echo "</tr></table>\n";
  $bx->box_body_end();
  $bx->box_end();
}


function faqshow($query) {
  global $t, $bx, $db;

  $db->query($query);
  $db->next_record();
  $bx->box_begin();
  $bx->box_title("<B>".$t->translate("Question")."</B>: ".$db->f("question"));
  $bx->box_body_begin();
  echo "<B>".$t->translate("Answer")."</B>: ".$db->f("answer")."\n";
  $bx->box_body_end();
  $bx->box_end();
}


function faqmod($query) {
  global $sess, $db, $t, $bx;

  $db->query($query);
  $db->next_record();
  $bx->box_begin();
  $bx->box_title($t->translate("Modify a Frequently Asked Question"));
  $bx->box_body_begin();
  echo "<form action=\"".$sess->self_url()."\" method=\"POST\">\n";
  echo "<table border=0 align=center cellspacing=0 cellpadding=3>\n";
  echo "<tr><td align=right>".$t->translate("Question")." (*):</td><td><textarea cols=60 rows=4 name=\"question\" wrap=\"virtual\" maxlength=1024>".$db->f("question")."</textarea></td></tr>\n";
  echo "<tr><td align=right>".$t->translate("Answer")." (*):</td><td><textarea cols=60 rows=7 name=\"answer\" wrap=\"virtual\" maxlength=4096>".$db->f("answer")."</textarea></td></tr>\n";
  echo "<input type=\"hidden\" name=\"faqid\" value=\"".$db->f("faqid")."\">\n";
  echo "<input type=\"hidden\" name=\"modify\" value=\"2\">\n";
  echo "<tr><td align=right>&nbsp;</td><td><input type=\"Submit\" value=\"".$t->translate("Modify")."\"></td>\n";
  echo "</form>\n";
  echo "</tr></table>\n";
  $bx->box_body_end();
  $bx->box_end();
}


function faqform() {
  global $sess, $bx, $t;
  $bx->box_begin();
  $bx->box_title($t->translate("New FAQ"));
  $bx->box_body_begin();
  echo "<form action=\"".$sess->self_url()."\" method=\"POST\">\n";
  echo "<table border=0 align=center cellspacing=0 cellpadding=3>\n";
  echo "<tr><td align=right>".$t->translate("Question")." (*):</td><td><textarea cols=40 rows=4 name=\"question\" wrap=\"virtual\" maxlength=1024></textarea></td></tr>\n";
  echo "<tr><td align=right>".$t->translate("Answer")." (*):</td><td><textarea cols=40 rows=7 name=\"answer\" wrap=\"virtual\" maxlength=4096></textarea></td></tr>\n";
  echo "<tr><td align=right>&nbsp;</td><td><input type=\"Submit\" value=\"".$t->translate("Create")."\"></td>\n";
  echo "<input type=\"hidden\" name=\"create\" value=\"2\">\n";
  echo "</form>\n";
  echo "</tr></table>\n";

/*  bx->box_body_end();
  bx->box_end(); */
// These should be the real two lines, but they don't work
// instead I paste their functionality in here
  echo "</font></td></tr>\n";
  echo "<!-- box body end -->\n";
  echo "</table>\n";
  echo "</td></tr></table><br>\n";
  echo "<!-- box end -->\n";
}

?>

