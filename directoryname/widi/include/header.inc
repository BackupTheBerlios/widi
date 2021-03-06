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
# This file contains the common header
#
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 or later of the GPL.
######################################################################

// Disabling cache
header("Cache-Control: no-cache, must-revalidate");     // HTTP/1.1
header("Pragma: no-cache"); 				// HTTP/1.0

require("config.inc");
require("lib.inc");
require("statslib.inc");
require("translation.inc");
require("lang.inc");
require("box.inc");
$t = new translation($la);
$db = new DB_Widi;
?>

<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <meta http-equiv="expires" content="0">
   <title><?php echo $sys_name;?> - <?php echo $t->translate($sys_title);?></title>
<link rel="stylesheet" type="text/css" href="berlios.css">
</head>
<body bgcolor="<?php echo $th_body_bgcolor;?>" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" marginheight="0" marginwidth="0">

<?php
require("top_strip.inc");
require("top_title.inc");
require("top_strip2.inc");
?>

<table BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH="100%" >
<tr VALIGN=TOP BGCOLOR="<?php echo $th_body_bgcolor;?>">

<td WIDTH="10"><img SRC="images/blank.gif" BORDER=0 height=1 width=10></td>

<td WIDTH="99%">
<p>&nbsp;
