<?php
/**
 * overWrite the Env File values.
 */
if (!function_exists('setEnv')) {
	function setEnv($key, $value)
	{
		$path = app()->environmentFilePath();

		$escaped = preg_quote('=' . env($key), '/');

		if (strpos(file_get_contents($path), $key) != false && strpos(file_get_contents($path), $key) >= 0) {
			file_put_contents($path, preg_replace(
				"/^{$key}{$escaped}/m",
				"{$key}={$value}",
				file_get_contents($path)
			));
		} else {
			file_put_contents($path, file_get_contents($path) . PHP_EOL.$key . '=' . $value);
		}
	}
}
?>