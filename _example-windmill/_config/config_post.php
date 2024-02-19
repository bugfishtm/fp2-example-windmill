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
	## Language Selection Settings
	#####################################################################################
		// Array for Language / Chooser in topbar Changer - Needs Fitting Configuration for Language Availability
		$lang_ar = array();
		$lang_ar[0]["current_img"] = _HIVE_URL_REL_."/_core/_vendor/country-flags-icons/png/"._HIVE_LANG_.".png";
		$lang_ar[0]["ident"] = "en";
		$lang_ar[0]["img"] = _HIVE_URL_REL_."/_core/_vendor/country-flags-icons/png/en.png";
		$lang_ar[0]["name"] = "English";
		$lang_ar[1]["ident"] = "de";
		$lang_ar[1]["img"] = _HIVE_URL_REL_."/_core/_vendor/country-flags-icons/png/de.png";
		$lang_ar[1]["name"] = "Deutsch";
		$lang_ar[2]["ident"] = "es";
		$lang_ar[2]["img"] = _HIVE_URL_REL_."/_core/_vendor/country-flags-icons/png/es.png";
		$lang_ar[2]["name"] = "Español";
	
	#####################################################################################
	## Navigation Selection Settings
	#####################################################################################
		// First Sub Menue (Used in Dashboard Themes)
		$sub = array();
		$sub[0]["nav_title"] = $object["lang"]->translate("nav_sub_item"); # Nav Name
		$sub[1]["nav_title"] = $object["lang"]->translate("nav_sub_login"); # Nav Name
		$sub[0]["nav_loc"] 	= hive_get_url_rel(array("first_loc", "secloc", false)); # Location
		$sub[1]["nav_loc"] 	= hive_get_url_rel(array("login", false, false)); # Location
		$sub[0]["nav_img"] = "bx bx-shower";  # Box Icon Image Class
		$sub[1]["nav_img"] = "bx bx-reflect-horizontal";  # Box Icon Image Class
		$sub[0]["nav_sub"] = false;   # Has Submenue?
		$sub[1]["nav_sub"] = false;	   # Has Submenue?
		$sub[0]["nav_act"] = "secloc";	   # Show as Active in Nav on Which Second Location?
		$sub[1]["nav_act"] = false;	   # Show as Active in Nav on Which Second Location?
		// Main Menue (Used in Dashboard Themes)	
		$object["nav"] = array();
		$object["nav"][0]["nav_title"] = $object["lang"]->translate("nav_sub_general");
		$object["nav"][1]["nav_title"] = $object["lang"]->translate("nav_sub_charts");
		$object["nav"][2]["nav_title"] = $object["lang"]->translate("nav_sub_forms");
		$object["nav"][3]["nav_title"] = $object["lang"]->translate("nav_sub_tables");
		$object["nav"][4]["nav_title"] = $object["lang"]->translate("nav_sub_submenue"); # Nav Name
		$object["nav"][0]["nav_loc"] = hive_get_url_rel(array("general", false, false));
		$object["nav"][1]["nav_loc"] = hive_get_url_rel(array("charts", false, false));
		$object["nav"][2]["nav_loc"] = hive_get_url_rel(array("forms", false, false));
		$object["nav"][3]["nav_loc"] = hive_get_url_rel(array("tables", false, false));
		$object["nav"][4]["nav_loc"] = hive_get_url_rel(array("submenue", false, false)); # Location
		$object["nav"][0]["nav_img"] = "bx bx-shower";
		$object["nav"][1]["nav_img"] = "bx bx-reflect-horizontal";
		$object["nav"][2]["nav_img"] = "bx bxl-postgresql";
		$object["nav"][3]["nav_img"] = "bx bxs-cable-car";
		$object["nav"][4]["nav_img"] = "bx bxs-lemon"; # Box Icon Image Class
		$object["nav"][0]["nav_sub"] = false;
		$object["nav"][1]["nav_sub"] = false;
		$object["nav"][2]["nav_sub"] = false;
		$object["nav"][3]["nav_sub"] = false; # Has Submenue?
		$object["nav"][4]["nav_sub"] = $sub;	
		$object["nav"][0]["nav_act"] = "general";
		$object["nav"][1]["nav_act"] = "charts";
		$object["nav"][2]["nav_act"] = "forms";
		$object["nav"][3]["nav_act"] = "tables";
		$object["nav"][4]["nav_act"] = "first_loc";	# Show as Active in Nav on Which First Location?
		// Profile Sub Menue (Used in Dashboard Themes)
		$pfm = array();
		$pfm[0]["nav_title"] = $object["lang"]->translate("nav_sub_profile"); # Profile Sub Menue Item Title
		$pfm[1]["nav_title"] = $object["lang"]->translate("nav_sub_logout");  # Profile Sub Menue Item Title
		$pfm[0]["nav_loc"] 	= hive_get_url_rel(array("profile", false, false, false, false));
		$pfm[1]["nav_loc"] 	= hive_get_url_rel(array("logout", false, false, false, false));
		$pfm[0]["nav_img"] = "bx bx-shower";  # Box Icon Image Class
		$pfm[1]["nav_img"] = "bx bx-reflect-horizontal"; # Box Icon Image Class