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
# 
#
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 or later of the GPL.
######################################################################  

page_open(array("sess" => "Widi_Session"));

require("header.inc");
require("cmtlib.inc");

$bx = new box("88%",$th_box_frame_color,$th_box_frame_width,$th_box_title_bgcolor,$th_box_title_font_color,$th_box_title_align,$th_box_body_bgcolor,$th_box_body_font_color,$th_box_body_align);
$be = new box("80%",$th_box_frame_color,$th_box_frame_width,$th_box_title_bgcolor,$th_box_title_font_color,$th_box_title_align,$th_box_body_bgcolor,$th_box_error_font_color,$th_box_body_align);
$bs = new box("100%",$th_strip_frame_color,$th_strip_frame_width,$th_strip_title_bgcolor,$th_strip_title_font_color,$th_strip_title_align,$th_strip_body_bgcolor,$th_strip_body_font_color,$th_strip_body_align);
?>

<!-- content -->

<?php

if ($new_comment == "yes") {
  $tables = "comments";
  $set = "user_cmt='$name_cmt',email_cmt='$email_cmt',subject_cmt='$subject_cmt',text_cmt='$text_cmt',creation_cmt=NOW()";
  $db->query("INSERT $tables SET $set");
  if ($db->affected_rows() == 0) {
    $be->box_full($t->translate("Error"),$t->translate("Database Access failed"));    
  }
}
cmtform();

$query="SELECT * FROM comments ORDER BY creation_cmt DESC";
cmtshow($query);

?>

<!-- end content -->

<?php
require("footer.inc");
@page_close();
?>
