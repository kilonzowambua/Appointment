<?php

/* Procedural Database Connecrions */
$dbuser = "root"; /* Database Username */
$dbpass = ""; /* Database Username Password */
$host = "localhost"; /* Database Host */
$db = "playlist_appointment";  /* Database Name */
$mysqli = new mysqli($host, $dbuser, $dbpass, $db); /* Connection Function */
