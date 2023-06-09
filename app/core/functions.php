<?php

function show($stuff)
{
	echo "<pre>";
	print_r($stuff);
	echo "</pre>";
}

function escape_html_tags($str)
{
	return htmlspecialchars($str, ENT_QUOTES);
}

function redirect($path)
{
	header("Location: " . ROOT . "/" . $path);
	exit;
}

function sanitize_text($text)
{
	$text = nl2br($text);
	$text = escape_html_tags($text);
	return $text;
}

function is_authenticated()
{
	return isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;
}

function set_flash_message($message, $type = 'default')
{
	$_SESSION['flash_message'] = [
		'message' => $message,
		'type' => $type,
	];
}

function display_flash_message()
{
	if (isset($_SESSION['flash_message'])) {
		$message_type = $_SESSION['flash_message']['type'] ?? 'default';
		$css_class = '';

		switch ($message_type) {
			case 'success':
				$css_class = 'success';
				break;
			case 'error':
				$css_class = 'error';
				break;
			default:
				$css_class = 'default';
				break;
		}

		echo "<p class=\"flash-message $css_class\" id=\"flash-message\">";
		echo $_SESSION['flash_message']['message'];
		echo "</p>";

		unset($_SESSION['flash_message']);
	}
}

function checkInactivityTimeout()
{
	$timeoutDuration = 900; // 15 minutes in seconds

	if (is_authenticated()) {
		if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeoutDuration) {
			unset($_SESSION['USER']);
			unset($_SESSION['authenticated']);
			unset($_SESSION['last_activity']);
			set_flash_message("You have been logged out due to inactivity.", "default");
			redirect('');
			exit();
		} else {
			$_SESSION['last_activity'] = time(); // Update the last activity time
		}
	} elseif (isset($_SESSION['last_activity'])) {
		// User is not authenticated, but there is a last activity time set
		unset($_SESSION['last_activity']);
	}
}