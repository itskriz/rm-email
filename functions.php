<?php

//// ACTIONS ////
//// Get Includes
	function rm_email_get_includes() {
		$includes = glob(plugin_dir_path(__FILE__) . 'includes/*.php');
		foreach ($includes as $file) {
			require_once ($file);
		}
		unset($includes);
	}
	add_action('plugins_loaded', 'rm_email_get_includes');

//// FILTERS ////
//// Single Post Template
	function rm_email_single_template($single) {
		global $post;
		if ($post->post_type == 'rm-email') {
			if (file_exists(plugin_dir_path(__FILE__) . 'templates/single-rm-email.php')) {
				return plugin_dir_path(__FILE__) . 'templates/single-rm-email.php';
			}
		}
		return $single;
	}
	add_filter ('single_template', 'rm_email_single_template');

//// FUNCTIONS ////
//// Get Template Parts
	function rm_email_get_template($path = '', $file = '', $include = 0, $require = 0) {
		$get = '';
		if (is_string($path) && !empty($path)) {
			$path = 'templates/' . $path;
			$get .= plugin_dir_path(__FILE__) . $path;
			if (is_string($file) && !emptpy($file)) {
				$file = '/' . $file;
				$get .= $file;
			}
			$get .= '.php';
		}
		if (!empty($get) && isset($get)) {
			if (1 == $require || 'true' === $require) {
				if (1 == $include || 'true' === $include) {
					require_once ($get);	
				} else {
					require ($get);
				}
			} else {
				if (1 == $include || 'true' === $include) {
					include_once ($get);	
				} else {
					include ($get);
				}
			}
		}
	}

?>