<?php
	function brand(){
		$dir = 'svgs/brands';
		
		$svg_files = glob($dir . '/*.svg');
		
		foreach ($svg_files as $file) {
			$file_name = basename($file);
			$view = "
				<span class='icon-content'>
					<span class='icon'>
						<img src= '$file'  alt='$file_name' onclick='copySVG(this)'>
					</span>
					<p>$file_name</p>
				</span>
			";
			echo $view;
		}
	}
	
	function regular(){
		$dir = 'svgs/regular';
		
		$svg_files = glob($dir . '/*.svg');
		
		foreach ($svg_files as $file) {
			$file_name = basename($file);
			$view = "
				<span class='icon-content'>
					<span class='icon'>
						<img src= '$file'  alt='$file_name' onclick='copySVG(this)'>
					</span>
					<p>$file_name</p>
				</span>
			";
			echo $view;
		}
	}
	
	function solid(){
		$dir = 'svgs/solid';
		
		$svg_files = glob($dir . '/*.svg');
		
		foreach ($svg_files as $file) {
			$file_name = basename($file);
			$view = "
				<span class='icon-content'>
					<span class='icon'>
						<img src= '$file'  alt='$file_name' onclick='copySVG(this)'>
					</span>
					<p>$file_name</p>
				</span>
			";
			echo $view;
		}
	}

function bootstrap(){
	$dir = 'svgs/bootstrap';
	
	$svg_files = glob($dir . '/*.svg');
	
	foreach ($svg_files as $file) {
		$file_name = basename($file);
		$view = "
				<span class='icon-content'>
					<span class='icon'>
						<img src= '$file'  alt='$file_name' onclick='copySVG(this)'>
					</span>
					<p>$file_name</p>
				</span>
			";
		echo $view;
	}
}