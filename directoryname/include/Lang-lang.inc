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
# File with the main Spanish translation
# translated by Gregorio Robles (grex@scouts-es.org)
#
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 or later of the GPL.
######################################################################

switch($phrase) {

// Top strip Number 2
     case "Language": $tmp = ""; break;
     case "Go": $tmp = ""; break;
     case "Selected Language": $tmp = ""; break;

// Config inputs
     case "Form": $tmp = ""; break;
     case "Stats": $tmp = ""; break;
     case "Comments": $tmp = ""; break;
     case "Links": $tmp = ""; break;

// Top title
     case "Knowing more about Open Source Developers":  $tmp = ""; break;

// Index - Form
     case "Introduction": $tmp = ""; break;

     case "what is this form about?": $tmp = ""; break;
     case "tell a little about the project at the TU-Berlin": $tmp = ""; break;
     case "Tell that all forms are anonymous and that they don't have to answer to anything.": $tmp = ""; break;
     case "Say who are the authors of this project": $tmp = ""; break;
     case "Give thanx for filling it out": $tmp = ""; break;

     case "Personal Data": $tmp = ""; break;
     case "Name": $tmp = ""; break;
     case "Surname": $tmp = ""; break;
     case "Alias": $tmp = ""; break;
     case "Nationality": $tmp = ""; break;
     case "Year of Birth": $tmp = ""; break;
     case "Gender": $tmp = ""; break;
       case "Male": $tmp = ""; break;
       case "Female": $tmp = ""; break;

     case "Professional Data": $tmp = ""; break;

     case "Profession": $tmp = ""; break;
       case "Student": $tmp = ""; break;
       case "Programmer": $tmp = ""; break;
       case "Software Engineer": $tmp = ""; break;
       case "Other type of Engineering": $tmp = ""; break;
       case "University professor/assistant": $tmp = ""; break;
       case "Executive": $tmp = ""; break;
       case "Consultant": $tmp = ""; break;
       case "Nothing to do with the software industry": $tmp = ""; break;

     case "Studies": $tmp = ""; break;
       case "Elementary School": $tmp = ""; break;
       case "High School": $tmp = ""; break;
       case "(Lehre)": $tmp = ""; break;
       case "University Graduate": $tmp = ""; break;
       case "Master": $tmp = ""; break;
       case "PhD": $tmp = ""; break;

     case "What languages do you speak?": $tmp = ""; break;
       case "English": $tmp = ""; break;
       case "German": $tmp = ""; break;
       case "French": $tmp = ""; break;
       case "Spanish": $tmp = ""; break;
       case "Italian": $tmp = ""; break;
       case "Czech": $tmp = ""; break;
       case "Portuguese": $tmp = ""; break;
       case "Japanese": $tmp = ""; break;
       case "Other": $tmp = ""; break;

     case "Email Domain": $tmp = ""; break;

     case "Get you paid for doing Open Source?": $tmp = ""; break;
       case "Blank": $tmp = ""; break;
       case "Yes": $tmp = ""; break;
       case "No": $tmp = ""; break;

     case "Computer experience": $tmp = ""; break;

     case "Number of Open Source Projects you're involved in": $tmp = ""; break;

     case "With which of these tools are you experienced?": $tmp = ""; break;

     case "Operating System / Distribution you use": $tmp = ""; break;

     case "Desktops you use": $tmp = ""; break;
       case "Both": $tmp = ""; break;

     case "Favorite Editor": $tmp = ""; break;

     case "Submit": $tmp = ""; break;

     case "Insert": $tmp = ""; break;


// Languages
	 case "English": $tmp = ""; break;
	 case "German": $tmp = ""; break;
	 case "Spanish": $tmp = ""; break;

// FAQ
     case "Frequently Asked Questions": $tmp = ""; break;
     case "Question": $tmp = ""; break;
     case "Answer": $tmp = ""; break;


// Comment
     case "Your Comment": $tmp = ""; break;
     case "Subject": $tmp = ""; break;
     case "Comment": $tmp = ""; break;
     case "Send": $tmp = ""; break;


// Announcements
    case "by": $tmp = ""; break;
    case "on": $tmp = ""; break;
    case "hits": $tmp = ""; break;


// Errors
     case "Access denied": $tmp = ""; break;
     case "Error": $tmp = ""; break;
     case "and": $tmp = "und"; break;
     case "Database Access failed": $tmp = ""; break;
     case "License description is not available": $tmp = ""; break;

// Footer

     case "Privacy Policy": $tmp = ""; break;
     case "System Credits": $tmp = ""; break;

// Insert

     case "Thank you": $tmp = ""; break;
     case "Give another time thanx for filling it out": $tmp = ""; break; 

// If no translation available, keep the original phrase
     default: $tmp = "$phrase"; break;
}
?>
