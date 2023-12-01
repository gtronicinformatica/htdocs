<?php
if( !function_exists('desert_companion_check_theme') ){
	function desert_companion_check_theme(){
		$desert_activated_theme = wp_get_theme(); // gets the current theme
		$desert_themes = array('NewsMash','NewsDaily','DayStory','NewsMash Pro');
		if (in_array($desert_activated_theme->name, $desert_themes))
		  {
			return true;
		  }
	}
}	