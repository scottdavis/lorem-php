<?php
	require_once(dirname(__FILE__) . '/lorem/text.php');
	
	class Lorem {
		/**
		* @uses Lorem::paragraphs(5);
		*/
		public static function paragraphs($number, $tags = true) {
			$go = true;
			$i = 0;
			$out = '';
			while($go) {
				foreach(LoremText::$paragraphs as $text) {
					if($tags) {
						$out .= "<p>" . $text . "</p>";
					}else{
						$out .= $text . "\n";
					}
					$i++;
					if($i == $number || $i > $number) {
						break;
					}
				}
				if($i == $number || $i > $number) {
					$go = false;
				}
			}
			return $out;
		}
		/**
		* @uses Lorem::words(5);
		*/
		public static function words($number) {
			$text = reset(LoremText::$paragraphs);
			$text = str_replace(array('.', ',', ';', ';'), '', $text);
			$text_array = explode(' ', $text);
			while(count($text_array) < $number){
				$text_array = array_merge($text_array, $text_array);
			} 
			$words = array_slice($text_array, 0, (int) $number);
			return strtolower(implode(" ", $words));
		}
		/**
		* @uses Lorem::chars(5);
		*/		
		public static function chars($number) {
			$text = reset(LoremText::$paragraphs);
			$text = str_replace(array('.', ',', ';', ';'), '', $text);
			while(strlen($text) < $number) {
				$text .= $text;
			}
			$i = 0;
			$out = '';
			while(strlen($out) < $number) {
				$out .= $text[$i];
				$i++;
			}
			return $out;
		}
		
	}
	
	
?>