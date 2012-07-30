array-to-csv
============

# Convert a PHP array into CSV #

This class written in php, convert a PHP array into CSV.

The usage is very simple:

	// Array to convert into CSV
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

	// Create an instace of the class
	$csv = new arrayToCsv();

	// Convert array to csv (you probably want to create a file with this info)
	echo $csv->convert($arr);


## Autor ##

* Jon Segador <jonseg@gmail.com>
* Twitter : *[@jonseg](http://twitter.com/#!/jonseg)*
* Linkedin: *[http://es.linkedin.com/pub/jon-segador/11/685/602](http://es.linkedin.com/pub/jon-segador/11/685/602)*
* Blog    : *[http://jonsegador.com/](http://jonsegador.com/)*