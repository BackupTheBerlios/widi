<?php
/*
 * Session Management for PHP3
 *
 * Copyright (c) 1998-2000 NetUSE AG
 *                    Boris Erdmann, Kristian Koehntopp
 *
 * $Id: local.inc,v 1.1 2001/05/19 18:25:57 grex Exp $
 *
 */ 

######################################################################
# Widi Database Configuration
#
# For using Widi, you only have to fill in the appropriate
# parameters that fit your database
#
# The default (and recommended) configuration is the one with
# "applicationname" as the database name. Do better not change it ;-)
#
######################################################################

class DB_Widi extends DB_Sql {
  var $Host     = "localhost";
  var $Database = "widi";
  var $User     = "operator";
  var $Password = "password";
}

######################################################################
# Widi Advanced Database Configuration
#
# If you've chosen "widi" as your database name, you don't
# need to worry about the rest of the file ;-)
#
######################################################################

class Widi_CT_Sql extends CT_Sql {
  var $database_class = "DB_Widi";   ## Which database to connect...
  var $database_table = "active_sessions"; ## and find our session data in this table.
}

class Widi_Session extends Session {
  var $classname = "Widi_Session";

  var $cookiename     = "";                ## defaults to classname
  var $magic          = "Hocuspocus";      ## ID seed
  var $mode           = "cookie";          ## We propagate session IDs with cookies
#  var $mode = "get";
  var $fallback_mode  = "get";
  var $lifetime       = 0;                 ## 0 = do session cookies, else minutes
  var $that_class     = "Widi_CT_Sql"; ## name of data storage container
  var $gc_probability = 5;  
}

?>