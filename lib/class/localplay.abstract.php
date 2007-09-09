<?php
/*

 Copyright (c) 2001 - 2007 Ampache.org
 All Rights Reserved

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License v2
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

*/

/*
 * This is the abstract class for any localplay controller
 */
abstract class localplay_controller { 
	
	// Required Functions
	abstract public function add($objects); // Takes an array of song_ids
	abstract public function delete($objects); // Takes an array of song_ids
	abstract public function play(); 
	abstract public function stop(); 
	abstract public function get(); 
	abstract public function connect(); 
	abstract public function status(); 
	abstract public function get_version(); // Returns the version of this plugin
	abstract public function get_description(); // Returns the description 
	abstract public function get_preferences(); // Returns an array of the prefs needed 

	/**
	 * get_url
	 * This returns the URL for the passed object
	 */
	private function get_url($object) { 


	} // get_url 

	/**
	 * get_file
	 * This returns the Filename for the passed object, not
	 * always possible
	 */
	private function get_file($object) { 


	} // get_file 

} // end localplay_controller interface
