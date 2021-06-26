<?php 
    class operationsOnFile {
        public $dataFile;
        public $operation;
        
        function __construct($dataFile, $operation) {
            $this->dataFile = $dataFile;
            $this->operation = $operation;
        }

        public function operationMaking($line, $operation) {
            if ($operation == "+") {
                $numbers = explode(" ", $line);
                return (int)$numbers[0] + (int)$numbers[1]; 
            } elseif ($operation == "-") {
                $numbers = explode(" ", $line);
                return (int)$numbers[0] - (int)$numbers[1]; 
            } elseif ($operation == "*") {
                $numbers = explode(" ", $line);
                return (int)$numbers[0] * (int)$numbers[1]; 
            } elseif ($operation == "/") {
                $numbers = explode(" ", $line);
                return (int)$numbers[0] / (int)$numbers[1]; 
            } else {
                echo "It's not operation type. Choose from + - / *";
            }
        }

        public function sortingAnswers($result) {
            if ($result < 0) {
                $negativeResults = fopen("negativeResults.txt", "a+") or die("Unable to open file!");
                fwrite($negativeResults, $result . "\n");
                fclose($negativeResults);
            } else {
                $positiveResults = fopen("positiveResults.txt", "a+") or die("Unable to open file!");
                fwrite($positiveResults, $result . "\n");
                fclose($positiveResults);
            }
        }
    }

    $dataFile = readline("Enter a file's name: ");
    $operation = readline("Enter operation's type (Choose from + - / *): ");    
    
    $operation1 = new operationsOnFile($dataFile, $operation);
    
    $path = "./" . $dataFile;
    $data = fopen($path, "r") or die("Unable to open the file!");
    while(!feof($data)) {
        $line = fgets($data);
        $result = $operation1->operationMaking($line, $operation);
        $operation1->sortingAnswers($result);
    }
    fclose($data);
?>