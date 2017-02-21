<?php
	function redirect_to($location) {
		header("location: " . $location);
		exit;
	}

	function escapeHTML($html) {
		return htmlspecialchars($html);
	}
?>