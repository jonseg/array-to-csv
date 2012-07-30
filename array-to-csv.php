<?php

/** 
 * Convert a PHP array into CSV
 * 
 * @author Jon Segador <jonseg@gmail.com> || http://jonsegador.com
 * https://github.com/jonseg/array-to-csv
 * 
 */

class arrayToCsv{

	protected $delimiter;
	protected $text_separator;
	protected $replace_text_separator;
	protected $line_delimiter;

	public function __construct($delimiter = ";", $text_separator = '"', $replace_text_separator = "'", $line_delimiter = "\n"){
		$this->delimiter              = $delimiter;
		$this->text_separator         = $text_separator;
		$this->replace_text_separator = $replace_text_separator;
		$this->line_delimiter         = $line_delimiter;
	}

	public function convert($input) {
		$lines = array();
		foreach ($input as $v) {
			$lines[] = $this->convertLine($v);
		}
		return implode($this->line_delimiter, $lines);
	}

	private function convertLine($line) {
		$csv_line = array();
		foreach ($line as $v) {
			$csv_line[] = is_array($v) ? 
					$this->convertLine($v) : 
					$this->text_separator . str_replace($this->text_separator, $this->replace_text_separator, $v) . $this->text_separator;
		}
		return implode($this->delimiter, $csv_line);
	}

}



// How to use
$arr = array(
	array(
		"name" => "A4",
		"manufacturer" => "Audi",
		"year" => "1994"
	),
	array(
		"name" => "CLK",
		"manufacturer" => "Mercedes",
		"year" => "2005"
	),	
	array(
		"name" => "Golf",
		"manufacturer" => "Volkswagen",
		"year" => "2008"
	),		
);


$csv = new arrayToCsv();
echo $csv->convert($arr);


/* OUTPUT

"A4"|"Audi"|"1994"
"CLK"|"Mercedes"|"2005"
"Golf"|"Volkswagen"|"2008"

*/