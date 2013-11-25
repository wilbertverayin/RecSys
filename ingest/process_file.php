<?php 
require "../vendor/autoload.php";
use BCC\Myrrix\MyrrixService as MyrrixService;

	function processFile($input,$weights = array(1)) {
		echo "start";
		$i=0;
		$myrrix = new MyrrixService('localhost', 8888); 
		$input= 'upload/'.$input;
		$output = 'upload/output.csv';

		$output_file = fopen($output, 'w');	
		$handle = fopen($input, "r");
		if ($handle) {
			while (($line = fgets($handle)) !== false) {
				$i++;
				$values = explode(",", $line);
				$criteriaNum = sizeof($weights);        		
				$computedWeight = 0;
				for ($x=2; $x<=$criteriaNum; $x++)
				{			
					$computedWeight += $values[$x]*$weights[$x-2];				
				}					
				fwrite($output_file, $values[0].",".$values[1].",".$computedWeight."\n");				
				$myrrix->removePreference(intval($values[0]),intval($values[1]));
				$myrrix->setPreference(intval($values[0]),intval($values[1]),intval($computedWeight));
			}
		} else {
		    echo "error opening the file.";
		}
		fclose($output_file);
	}
?> 

