# 
# WIDI - Who Is Doing It? - Knowing more about Open Source Developers
# http://widi.berlios.de/
#
# Database Widi
# phpMyAdmin MySQL-Dump
# http://phpwizard.net/phpMyAdmin/
#
# Widi Version 0.1
#	     Gregorio Robles <grex@scouts-es.org>
#	     Hendrik <>
#	     Nils <>
#	     Ingo <>
#
# For more information about the database structure
# have a look at the ApplicationName documentation
#
# Database: Widi

USE widi;

# --------------------------------------------------------
#
# Table structure for table 'active_sessions'
#

DROP TABLE IF EXISTS active_sessions;
CREATE TABLE active_sessions (
   sid varchar(32) NOT NULL,
   name varchar(32) NOT NULL,
   val text,
   changed varchar(14) NOT NULL,
   PRIMARY KEY (name, sid),
   KEY changed (changed)
);


# --------------------------------------------------------
#
# Table structure for table 'comments'
#

DROP TABLE IF EXISTS comments;
CREATE TABLE comments (
   proid bigint(20) unsigned DEFAULT '0' NOT NULL,
   user_cmt varchar(32) NOT NULL,
   email_cmt varchar(128),
   subject_cmt varchar(128) NOT NULL,
   text_cmt blob NOT NULL,
   creation_cmt timestamp(14)
);

#
# Dumping data for table 'comments'
#

INSERT INTO comments VALUES ( '1', 'grex', 'grex@scouts-es.org', 'Your suggestions are welcome', 'Please, help us improving knowing more about ourselves.', '20010510133952');


# --------------------------------------------------------
#
# Table structure for table 'check'
#

DROP TABLE IF EXISTS check;
CREATE TABLE check (
   cntid bigint(20) unsigned DEFAULT '0' NOT NULL auto_increment,
   ipaddr varchar(15) DEFAULT '127.000.000.001' NOT NULL,
   creation_cnt timestamp(14),
   UNIQUE cntid (cntid)
);

#
# Dumping data for table 'check'
#


# --------------------------------------------------------
#
# Table structure for table 'licenses'
#

DROP TABLE IF EXISTS licenses;
CREATE TABLE licenses (
   license varchar(64) NOT NULL,
   url varchar(255) NOT NULL
);

#
# Dumping data for table 'licenses'
#

INSERT INTO licenses VALUES ( 'Apache style', 'http://www.apache.org/docs-2.0/LICENSE');
INSERT INTO licenses VALUES ( 'BSD type', 'http://www.freebsd.org/copyright/license.html');
INSERT INTO licenses VALUES ( 'free for non-commercial use', 'http://sourceagency.berlios.de/licnotavailable.php3');
INSERT INTO licenses VALUES ( 'Free Trail', 'http://sourceagency.berlios.de/licnotavailable.php3');
INSERT INTO licenses VALUES ( 'freely distributable', 'http://sourceagency.berlios.de/licnotavailable.php3');
INSERT INTO licenses VALUES ( 'GPL', 'http://www.gnu.org/copyleft/gpl.html');
INSERT INTO licenses VALUES ( 'LGPL', 'http://www.gnu.org/copyleft/lesser.html');
INSERT INTO licenses VALUES ( 'MIT', 'http://sourceagency.berlios.de/licnotavailable.php3');
INSERT INTO licenses VALUES ( 'MPL', 'http://www.mozilla.org/MPL/');
INSERT INTO licenses VALUES ( 'Open Source', 'http://www.opensource.org/osd.html');
INSERT INTO licenses VALUES ( 'Public Domain', 'http://www.eiffel-forum.org/license/index.htm#pd');
INSERT INTO licenses VALUES ( 'FreeBSD', 'http://www.freebsd.org/copyright/freebsd-license.html');
INSERT INTO licenses VALUES ( 'OpenBSD', 'http://www.openbsd.org/policy.html');
INSERT INTO licenses VALUES ( 'Other', 'http://sourceagency.berlios.de/licnotavailable.php3');
INSERT INTO licenses VALUES ( 'Artistic License', 'http://www.perl.com/language/misc/Artistic.html');
INSERT INTO licenses VALUES ( 'PHP License', 'http://www.php.net/license.html');
INSERT INTO licenses VALUES ( 'free to use but restricted', 'http://sourceagency.berlios.de/licnotavailable.php3');
INSERT INTO licenses VALUES ( 'X11 License', 'http://www.x.org/terms.htm');
INSERT INTO licenses VALUES ( 'Zope Public License', 'http://www.zope.com/Resources/ZPL');
INSERT INTO licenses VALUES ( 'IBM Public License', 'http://oss.software.ibm.com/developerworks/opensource/license10.html');
INSERT INTO licenses VALUES ( 'Shareware', 'http://sourceagency.berlios.de/licnotavailable.php3');

# --------------------------------------------------------
#
# Table structure for table 'developers'
#

DROP TABLE IF EXISTS developers;
CREATE TABLE developers (
   develid bigint(20) unsigned DEFAULT '0' NOT NULL auto_increment,
   name varchar(24),
   surname varchar(24),
   nationality varchar(24),
   year_of_birth int(4),
   gender char(1),
   profession char(48),
   studies char(48),
   email_domain char(3),
   os_as_professional char(1),
# Programming Languages and other type of languages
   c_c_plus_plus char(1),
   java char(1),
   python char(1),
   perl char(1),
   php char(1),
   shell char(1),
   html char(1),
   sgml char(1),
   latex char(1),
   pascal char(1),
   fortran char(1),
   basic char(1),
   visual_basic char(1),
   javascript char(1),
   sql char(1),
   ada char(1),
# languages
   english char(1),
   german char(1),
   french char(1),
   spanish char(1),
   Italian char(1),
   Czech char(1),
   Portuguese char(1),
   Japanese char(1),
   other_langs varchar(48),
# Operation Systems / Distributions
   debian char(1),
   suse char(1),
   red_hat char(1),
   mandrake char(1),
   slackware char(1),
   turbolinux char(1),
   free_bsd char(1),
   open_bsd char(1),
   other_os varchar(48),  
# Desktop
   gnome char(1),
   kde char(1),
   both_desktops char(1),
   other_desktop varchar(48),
   creation timestamp(14),
   UNIQUE develid (develid)
);

#
# Dumping data for table 'developers'
#
