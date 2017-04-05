<?php
	function display_template($fn, $vars=array()) {
		if (!$vars)
			$vars=array();
		foreach ($vars as $key=>$value)
			$$key=$value;
		require $fn;
	}
	function render_template($fn, $vars=array()) {
		foreach ($vars as $key=>$value)
			$$key=$value;
		ob_start();
		require $fn;
		return ob_get_clean();
	}
