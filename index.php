<?php

$file = fopen("resources/documents/Games101.csv", 'r');

$headers = fgetcsv($file);
$data = array();

while (($line = fgetcsv($file)) !== false) {
    //This will be used to randomly sort these values
    if(strlen(trim($line[0]))){
        if($line[1] < 0){
            //Years before 0 is negative in excel
            $line[1] = (-$line[1]) . " BCE";
            $line[2] = (-$line[2]) . " BCE";
        }
        array_push($line, rand());
        array_push($data, $line);
    }
    else{break;}
}

//var_dump($data);

fclose($file);

//Sort by random number
function mergesort($array){
    
    /*
     * Reminder of data structure
     * array = array(
     *              array( [0]=>1 ),
     *              array( [1]=>2 )
     *         );
     *      
     */
    
}

?>

<!--SO FUTURE STUDENTS WON'T HAVE TO SUFFER-->
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Games-101</title>
        
        <!--Javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="resources/js/common.js" type="text/javascript"></script>
        
        
        <!--CSS-->
        <link href="resources/css/common.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        
    </head>
    <body>
        <div class="header">
            <h1>Games-101</h1>
            <h3>Key Games List 2016-2017 Spring Semester</h3>
        </div>
        <div class="section">
            <h2>Under construction</h2>
            <h4>To do:</h4>
            <ul>
                <li>User can download .csv</li>
                <li>Get screenshots of the game</li>
                <li>Create a variety of tests with the games*</li>
                <li>Try out AngularJS</li>
                <li>Responsive Design</li>
            </ul>
        </div>
        
        <!--<p>*Opens up a can of worms</p>
        Closure practice
        <div>
            <input type="button" value="Click Me!" onclick="click();"> 
            <label id="clickCount">0</label>
        </div>
        -->
        
        <!--The table was made just because I wanted to refresh on making tables and to make sure the data is right--> 
        <ul class="table">
            <li>
                <?php 
                foreach($headers as $item){
                    echo sprintf("<div><strong>%s</strong></div>", $item);
                }
                ?>
            </li>
            <?php 
            foreach($data as $row){
                echo "<li>";
                for($i = 0; $i < 7; $i++){
                    echo sprintf("<div>%s</div>", $row[$i]);
                }
                echo "</li>";
            }
            ?>
        </ul>
    </body>
</html>
