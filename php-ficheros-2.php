<?php
	function reemplazar($fichero, $nuevofichero, $oldPalabra, $newPalabra){
		//$fd = fopen($fichero, 'r');
		copy($fichero, $nuevofichero);
		$fw = fopen($nuevofichero, "r");
		
		while (($contenido = fgets($fw)) !== false) {
			$str = str_replace($oldPalabra, $newPalabra, $contenido);
			echo $str . "\n";
		}
		//fwrite($fw, $str);
		fclose($fw);
	}

reemplazar("elquijote.txt", "quijote-modificado.txt", "Sancho", "Morty");
?>