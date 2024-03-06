<?php
	/* 	__________ ____ ___  ___________________.___  _________ ___ ___  
		\______   \    |   \/  _____/\_   _____/|   |/   _____//   |   \ 
		 |    |  _/    |   /   \  ___ |    __)  |   |\_____  \/    ~    \
		 |    |   \    |  /\    \_\  \|     \   |   |/        \    Y    /
		 |______  /______/  \______  /\___  /   |___/_______  /\___|_  / 
				\/                 \/     \/                \/       \/  	
							www.bugfish.eu
							
	    Bugfish Fast PHP Page Framework
		Copyright (C) 2024 Jan Maurice Dahlmanns [Bugfish]

		This program is free software: you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 3 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program.  If not, see <https://www.gnu.org/licenses/>.
		
		// Configuration Injection to be loaded before Initializations, before global_post injections!
	*/ if(!is_array($object)) { http_response_code(404); Header("Location: ../"); exit(); }
	#####################################################################################
	## Website Settings
	#####################################################################################
		# Website Title for Tabs and More
		define('_HIVE_TITLE_',  				"FP²"); 
		# Title Spacer for Tabs in Browser
		define('_HIVE_TITLE_SPACER_',  			" - "); 
		# Show PHP Errors on website? (true/false)
		define('_HIVE_PHP_DEBUG_',  			true); 
		# Array with needed PHP Modules, if not existant error is shown (example: array("mysqli", "mbstring", "gd")) 
		define('_HIVE_PHP_MODS_',  				array()); 
		# Stop and Show MySQL Errors on Page if Happening? (Will always be logged in x_log_mysql table!) (true/false)
		define('_HIVE_MYSQL_DEBUG_',  			true); 

	#####################################################################################
	## URL Settings
	#####################################################################################
		# URL of this Page // Setting can be Overwritten as from settings.php
		# This is only needed for multi site purposes and if automatically fetching per browser url
		# is deactivated
		define('_HIVE_URL_',  					$object["url"]); 
		
	#####################################################################################
	## URL Navigation Settings
	#####################################################################################
		// STRING - GET VARIABLE SEO IN HTACCESS  | 0 - No SEO URLs Using
		define('_HIVE_URL_SEO_',  				false);  
		# Only neeed if _HIVE_URL_SEO_ == false [Name for Get Location Variables]
		define('_HIVE_URL_GET_', 				array("site", "second", "third", false, false)); 
		#_HIVE_URL_CUR_ Contains current url elements
		#_HIVE_URL_REL_ Relative Folder Path
		
	#####################################################################################
	## Language Settings
	#####################################################################################
		define("_HIVE_LANG_DEFAULT_", 			"en"); # Array with Default Language
		define("_HIVE_LANG_ARRAY_", 			array("en", "de", "es", "jp")); # Array with valid Languages
		define("_HIVE_LANG_DB_", 				false); # False = Use Language Files in SITE/_lang / True = Use Language Database
		#_HIVE_LANG_ Contains current choosen Language
		
	#####################################################################################
	## Theme/Color Settings
	#####################################################################################
		define("_HIVE_THEME_DEFAULT_", 			"orange"); # Default Used Theme
		define("_HIVE_THEME_ARRAY_", 			array("green", "purple", "orange", "dynamic")); # Array with valid Themes
		define("_HIVE_THEME_COLOR_DEFAULT_", 	"#FFFF00"); # Default Color for Dynamic Theme Colors
		#_HIVE_THEME_ Contains current choosen theme
		#_HIVE_COLOR_ Contains current choosen theme
		