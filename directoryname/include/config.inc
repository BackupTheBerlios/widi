<?php

######################################################################
# Widi: Who Is Doing It?
# ================================================
#
# Copyright (c) 2001 by
#                Gregorio Robles (grex@scouts-es.org),
#
# Widi HomePage at Berlios: http://widi.berlios.de
#
# This is the configuration file
#
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 or later of the GPL.
######################################################################

######################################################################
# System Config
#
# sys_name:		Name of the System
# sys_title:		Your site's slogan
# sys_url_title		URL of the system's portal
# sys_url		System URL
# sys_logo_image	Image of your Site
# sys_logo_alt		Alternative text for your site's image
# sys_logo_width	Width of the image of your site
# sys_logo_heigth	Heigth of the image of your site
#
# (don't forget to put slashes at the end of the URLs)
######################################################################

$sys_name = "WIDI - Who Is Doing It?";
$sys_title = "Knowing more about Open Source Developers";
$sys_url_title = "http://widi.berlios.de/";
$sys_url = "http://widi.berlios.de/";
$sys_logo_image = "images/widi.png";
$sys_logo_alt = "Widi";
$sys_logo_width = "200";
$sys_logo_heigth = "100";

######################################################################
# Organisation Config
#
# org_name	   Name of your Organisation
# org_url	   URL of your Organisation
# org_logo_image   Image of your Organisation
# org_logo_alt	   Alternative text for the image of your Organisation
# org_logo_width   Width of the image of your Organisation
# org_logo_heigth  Height of the image of your Organisation
######################################################################

$org_name = "Informatik und Gesellschaft. Technische Universit&auml;t Berlin";
$org_url = "http://ig.cs.tu-berlin.de/";
$org_logo_image = "images/logo_t4.gif";
$org_logo_alt = $org_name;
$org_logo_width = "100";
$org_logo_heigth = "100";

######################################################################
# Top Strip
#
# You can change (add, delete, modify) the top strip
# as you wish as long as you mantain this syntax:
#
# (don't forget that the last one hasn't got a comma!)
#
######################################################################

$ts_array = array (
	"Form"	=> "index.php3",
	"Stats" => "stats.php3",
        "Comments" => "comments.php3",
	"Links"	=> "links.php3",
        "FAQ" => "faq.php3"
);

######################################################################
# Languages
#
# List of languages supported by your website
# You can add/delete/modify as long as you mantain the syntax
# New languages are always wellcome. Contact with the authors!
#
######################################################################

$la_array[] = "English";
$la_array[] = "German";
$la_array[] = "Spanish";

######################################################################
# Theme
#
# Configuration of background colors, font families, etc.
#
######################################################################

$th_body_bgcolor = "#ffffff";
$th_font_family = "sans-serif,helvetica,arial,verdana";
$th_tt_font_family = "sans-serif,courier";
$th_font_color = "#333333";
$th_hover_font_color = "#FF0000";

$th_nav_bgcolor = "#9257e0";
$th_navstrip_bgcolor = "#000000";
$th_nav_font_color = "#333333";
$th_navstrip_font_color = "#AAAAAA";

$th_box_frame_color = "#000000";
$th_box_frame_width = "1";
$th_box_title_bgcolor = "#BBBBBB";
$th_box_body_bgcolor = "#13f4b1";
$th_box_title_align = "left";
$th_box_body_align = "left";
$th_box_title_font_color = "#000000";
$th_box_body_font_color = "#333333";
$th_box_error_font_color = "#FF2020";

$th_strip_frame_color = "#000000";
$th_strip_frame_width = "1";
$th_strip_title_bgcolor = "#CCCCCC";
$th_strip_body_bgcolor = "";
$th_strip_title_align = "center";
$th_strip_body_align = "";
$th_strip_title_font_color = "#000000";
$th_strip_body_font_color = "";

######################################################################
# Page Layout
#
# config_show_appsperpage	maximum number of applications shown each time
# config_show_numberofdays	Number of days shown at the right column
#
######################################################################

$config_show_appsperpage = 10;
$config_show_numberofdays = 7;

######################################################################
# Email Notification
#
# Notify admin by email that a new user has registered
# and editors that apps were inserted, reviewed, updated or changed.
#
# ml_notify		To be notified, ml_notify apps have to be inserted
# ml_fromaddr		Email address in the From field
# ml_replyaddr		Return Email address
#
######################################################################

$ml_notify = 1;
$ml_fromaddr = "noreply@mail.berlios.de";
$ml_replyaddr = "noreply@mail.berlios.de";

######################################################################
# Newsletter Configuration
#
# ml_listurl		
# ml_weeklylisturl	
# ml_newstoaddr 
# ml_newsreqaddr 
# ml_weeklynewstoaddr 
# ml_weeklynewsreqaddr =
# ml_newsadmaddr 
# ml_newsfromaddr 
# ml_newsreplyaddr 
#
######################################################################

$ml_listurl = "http://lists.berlios.de/mailman/listinfo/sourceagency-news";
$ml_weeklylisturl = "http://lists.berlios.de/mailman/listinfo/sourceagency-weeklynews";
$ml_newstoaddr = "sourceagency-news@lists.berlios.de";
$ml_newsreqaddr = "sourceagency-news-request@lists.berlios.de";
$ml_weeklynewstoaddr = "sourceagency-weeklynews@lists.berlios.de";
$ml_weeklynewsreqaddr = "sourceagency-weeklynews-request@lists.berlios.de";
$ml_newsadmaddr = "sourceagency-admin@lists.berlios.de";
$ml_newsfromaddr = $ml_newsadmaddr;
$ml_newsreplyaddr = $ml_newsadmaddr;

######################################################################
# Statistic configuration
#
# MinimumAppsByEmail	minimum percentage of an Email domain for
#			being displayed  >= 0.01
# MinimumSecByEmail	the same but for Sections >= 0.01
# MinimumLicByEmail	the same but for Licenses >= 0.01
# Minimum_apps_in_license   minimum amount of apps a license has to
#			    have to be displayed in the statistic
#			    "Apps by Licenses and Email Domains"
#			    >= 1
#
######################################################################

$MinimumAppsByEmail = 0.4;
$MinimumSecByEmail = 5;
$MinimumLicByEmail = 1;
$Minimum_apps_in_license = 1;

######################################################################
# Permission for accessing web pages
#
# "devel"    only allows access to registered users with devel permission
# "sponsor"    only allows access to registered users with sponsor permission
# "editor"  only allows access to registered users with editor permission
# "admin"   only allows access to registered users with admin permission
# "all"     allows access to everybody (also unregistered users)
#
# Please, be sure of what you make!
# An error could make your system fragile.
#
# config_perm_apppend	Access permission to enter apppend.php3
# config_perm_appdom	Access permission to enter appdom.php3
# config_perm_developer	Access permission to enter developer.php3
# config_perm_users	Access permission to enter users.php3
# config_perm_admdate	Access permission to enter admdate.php3
# config_perm_admuser	Access permission to enter admuser.php3
# config_perm_admlicens	Access permission to administrate licenses
# config_perm_admcomment	Access permission to administrate comments
# config_perm_admsec	Access permission to administrate sections
# config_perm_admcat	Access permission to administrate categories
# config_perm_nladm	Access permission to administrate newsletters
# config_perm_admfaq 	Access permission for administrating the faq
# 
######################################################################

$config_perm_apppend = "editor";
$config_perm_appdom = "editor";
$config_perm_developer = "all";
$config_perm_users = "all";
$config_perm_admdate = "admin";
$config_perm_admuser = "admin";
$config_perm_admlicens = "admin";
$config_perm_admcomment = "admin";
$config_perm_admsec = "admin";
$config_perm_admcat = "admin";
$config_perm_nladm = "admin";
$config_perm_admfaq = "admin";

######################################################################
# PHPLIB user authorization
#
# Put a random string in it 
######################################################################

$hash_secret = "Jabberwocky...";

######################################################################
# 
# Ok... that's it. You've finished configuring the SourceAgency system
#
# The rest of parameters that are listed beyond this comment
# are internal for the SourceAgency system or needed for advanced purposes
#
######################################################################

######################################################################
# Widi Version
#
# Please, do not touch this in any case!
# It just gives the version of Widi you're are using
# You can always download the latest version of SourceAgency at
# http://widi.berlios.de/html
#
######################################################################

$Widi_Version = "0.1";

?>
