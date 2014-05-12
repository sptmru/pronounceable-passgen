<?php

class PasswordController {
	
	private $hash = HASH;
	
	private function findSymbolsInHash($hash) {
		
		$hash_array = str_split($hash);
		$symbols = array();
		$symbols["vowels"] = array();
		$symbols["consonants"] = array();
		$symbols["numbers"] = array();
		
		foreach($hash_array as $symbol) {
			switch($symbol) {
				case "a":
				case "e":
				case "i":
				case "o":
				case "u":
					$symbols["vowels"][] = $symbol;
					break;
				case "b":
				case "c":
				case "d":
				case "f":
				case "g":
				case "h":
				case "j":
				case "k":
				case "l":
				case "m":
				case "n":
				case "p":
				case "q":
				case "r":
				case "s":
				case "t":
				case "v":
				case "w":
				case "x":
				case "z":
					$symbols["consonants"][]  = $symbol;
					break;
				case "0":
				case "1":
				case "2":
				case "3":
				case "4":
				case "5":
				case "6":
				case "7":
				case "8":
				case "9":
					$symbols["numbers"][]  = $symbol;
					break;
				default:
			}
		}
		if(count($symbols["vowels"]) < 3 OR count($symbols["consonants"]) < 3 OR count($symbols["numbers"]) < 2) {		
			$hash = base64_encode($hash);
			$symbols = $this->findSymbolsInHash($hash);
		}
		return $symbols;
	}
	
	public function generatePassword($username, $date) {
		
		$string = $username.$date.$this->hash;
		$hash = md5($string);
		$hash = base64_encode($hash);
		
		$symbols = $this->findSymbolsInHash($hash);
		
		$vowels = $symbols["vowels"];
		$consonants = $symbols["consonants"];
		$numbers = $symbols["numbers"];
		
		$password = $consonants[0].$vowels[0].$consonants[1].$vowels[1].$consonants[2].$vowels[2];
		$password = ucfirst($password);
		$password = $password.$numbers[0].$numbers[1]."!";
		
		
		return $password;
		
		
	}
	
}

?>
