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
$bx->box_title($t->translate("Links"));
$bx->box_body_begin();
echo "\n<P>";
echo $t->translate("some interesting links");
echo "\n<P>";
echo $t->translate("about CODD");
echo "\n<P>";
echo $t->translate("About Widi");
echo "\n<P>";
$bx->box_body_end();
$bx->box_end();

?>

<!-- end content -->

<?php
require("footer.inc");
@page_close();
?>
