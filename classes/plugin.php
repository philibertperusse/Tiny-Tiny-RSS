<?php
class Plugin {
	private $dbh;
	private $host;

	const API_VERSION_COMPAT = 2;

	function init($host) {
		$this->dbh = $host->get_dbh();
		$this->host = $host;
	}

	function about() {
		// plugin version, description, author, is_system, link
		return array(1.0, "No description", "Author", false, "http://example.com/plugin");
	}

	function get_js() {
		return "";
	}

	function get_prefs_js() {
		return "";
	}

	function api_version() {
		return Plugin::API_VERSION_COMPAT;
	}
}
?>
