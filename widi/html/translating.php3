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
# This is the project page
#
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 or later of the GPL.
######################################################################  

require("header.inc");

$bx = new box("88%",$th_box_frame_color,$th_box_frame_width,$th_box_title_bgcolor,$th_box_title_font_color,$th_box_title_align,$th_box_body_bgcolor,$th_box_body_font_color,$th_box_body_align);
$be = new box("80%",$th_box_frame_color,$th_box_frame_width,$th_box_title_bgcolor,$th_box_title_font_color,$th_box_title_align,$th_box_body_bgcolor,$th_box_error_font_color,$th_box_body_align);
$bs = new box("100%",$th_strip_frame_color,$th_strip_frame_width,$th_strip_title_bgcolor,$th_strip_title_font_color,$th_strip_title_align,$th_strip_body_bgcolor,$th_strip_body_font_color,$th_strip_body_align);
?>

<!-- content -->

<?php

$bx->box_begin();
$bx->box_title("Translating Widi into your language");
$bx->box_body_begin();
echo "\n<P>";
echo "Widi can be easily translated into different
languages. If you see that Widi does not have support in your
language, you're gladly invited to help us with the
internationalization of Widi by sending us your translation.

<P>You don't need to have any computer or programming experience to do a
translation. Keep on reading and you'll find out how easy it is.";
echo "\n<P>";
$bx->box_body_end();
$bx->box_end();

$bx->box_begin();
$bx->box_title("HOWTO translate");
$bx->box_body_begin();
echo "\n<P>";
echo "Download the <A HREF=\"Lang-lang.inc\">Lang-lang.inc</A> file (it also comes in Widi's
0.8 tarball) . If you edit it, you'll find lines
like this:

<PRE>
     case \"Home\": $tmp = \"\"; break;
</PRE>

<P>We will explain it briefly: after the <I>case</I> you will see the English text to translate writen in
quotes (in our example, the English text is \"Home\"). Then you'll find a
sort of equation. The content of your translation from English into your language should
be placed in between these second quotes. For example, in the case you were making a translation into German, this would be the result for this line:

<PRE>
     case \"Home\": $tmp = \"Heim\"; break;
</PRE>

<P>Ok, now that you're an expert, you'll notice that \"Home\" is translated
into German as \"Heim\" ;-). The procedure just explained should be repeated with
all the lines in this file. 

<P>Once you're finished, save it as <I>YourLanguage-lang.inc</I> and please send it to the authors. We will include
it in the next releases so that everybody can benefit of your work.";
echo "\n<P>";
$bx->box_body_end();
$bx->box_end();

$bx->box_begin();
$bx->box_title("Contributors");
$bx->box_body_begin();
echo "\n<P>";
echo "<P>Here's a list of all the people that have contributed to the
translation of Widi.

<CENTER>
<TABLE width=95%>
<TR><TD>Language</TD><TD>Translator</TD><TD>Version</TD><TD>Last Modified</TD></TR>
<TR><TD>German</TD><TD> Niels Weber &lt;<A
HREF=\"mailto:nath@snafu.de\">nath@snafu.de</A>&gt;</TD><TD>0.8</TD><TD>26 June 2001</TD></TR>
<TR><TD>Spanish</TD><TD>Gregorio Robles &lt;<A
HREF=\"mailto:grex@scouts-es.org\">grex@scouts-es.org</A>&gt;</TD><TD>0.8</TD><TD>26 June 2001</TD></TR>
<TR><TD>French</TD><TD> Hendrik Scheider &lt;<A
HREF=\"mailto:hendrik@missing-piece.de\">hendrik@missing-piece.de</A>&gt;</TD><TD>0.8</TD><TD>26 June 2001</TD></TR>
</TABLE></CENTER>";
echo "\n<P>";
$bx->box_body_end();
$bx->box_end();


 
?>

<!-- end content -->

<?php
require("footer.inc");
?>
