<?php

class fontes{
	private $pasta;
	public function inserirFontes($pasta){

		$this->setPasta($pasta);

		$folder = opendir($this->getPasta());
		echo "\n<style>";
		while ($arquivo = readdir($folder)) {
			if ($arquivo != "." && $arquivo != ".."):
				$fontName = explode(".", $arquivo);
				$newFontName = $fontName[0];
				echo "\n@font-face {\n";
				echo "  font-family: '" . strtolower($newFontName) . "'; \n";
				echo "  src: url('" . $this->getPasta() . "/" . $arquivo . "');";
				echo "\n}\n";
			endif;
		}
		echo "</style>";

	}
	private function getPasta(){
		return $this->pasta;
	}

	private function setPasta($pasta){
		$this->pasta = $pasta;
	}
}