<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="riasec_traits.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Poppins">
    <title>Riasec Traits</title>
</head>
<body>

    <div class="header">
        <a href="https://getmiclass.com" class="logo"><img src="https://getmiclass.com/theme/assets/img/Logo/GMC-blue.png" alt="" id="getmyclasslogo"></a>
    </div>

     <div class="topic">
        <h1 id="title">
            THE RIASEC TEST
        </h1>
    </div>

                <?php error_reporting(E_ERROR | E_PARSE); ?>
                <?php if( isset($_POST['submit']) == false  || !isset($_POST["Ans"]) ) { ?>

                    <p id="description">
                        Follow these easy steps to see where your interests are.
                        Read each statement. If you agree with the statement, fill in the circle. There are no wrong answers!
                    </p>

                    <div class="assignmentForm" id="assignment">

                        <form action="riasec_traits.php" method="POST" id="survey-form">

                            <!-- Checkbox section -->
                            <div class="form-group">
                                <ol>
                                    <li id="question1">
                                        <p id="quest">I like to work on cars</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[1][R]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[1][R]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question2">
                                        <p id="quest">I like to do puzzles</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[2][I]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[2][I]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question3">
                                        <p id="quest">I am good at working independently</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[3][A]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[3][A]" class="radio" value=0>No
                                    </label>

                                <br>
                                
                                    <li id="question4">
                                        <p id="quest">I like to work in teams</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[4][S]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[4][S]" class="radio" value=0>No
                                    </label>

                                <br>
                                
                                    <li id="question5">
                                        <p id="quest">I am an ambitious person, I set goals for myself</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[5][E]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[5][E]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question6">
                                        <p id="quest">I like to organize things, (files, desks/offices)</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[6][C]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[6][C]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question7">
                                        <p id="quest">I like to build things</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[7][R]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[7][R]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question8">
                                        <p id="quest">I like to read about art and music</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[8][A]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[8][A]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question9">
                                        <p id="quest">I like to have clear instructions to follow</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[9][C]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[9][C]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question10">
                                        <p id="quest">I like to try to influence or persuade people</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[10][E]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[10][E]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question11">
                                        <p id="quest">I like to do experiments</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[11][I]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[11][I]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question12">
                                        <p id="quest">I like to teach or train people</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[12][S]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[12][S]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question13">
                                        <p id="quest">I like trying to help people solve their problems</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[13][S]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[13][S]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question14">
                                        <p id="quest">I like to take care of animals</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[14][R]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[14][R]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question15">
                                        <p id="quest">I wouldn’t mind working 8 hours per day in an office</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[15][C]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[15][C]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question16">
                                        <p id="quest">I like selling things</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[16][E]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[16][E]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question17">
                                        <p id="quest">I enjoy creative writing</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[17][A]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[17][A]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question18">
                                        <p id="quest">I enjoy science</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[18][I]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[18][I]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question19">
                                        <p id="quest">I am quick to take on new responsibilities</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[19][E]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[19][E]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question20">
                                        <p id="quest">I am interested in healing people</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[20][S]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[20][S]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question21">
                                        <p id="quest">I enjoy trying to figure out how things work</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[21][I]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[21][I]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question22">
                                        <p id="quest">I like putting things together or assembling things</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[22][R]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[22][R]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question23">
                                        <p id="quest">I am a creative person</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[23][A]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[23][A]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question24">
                                        <p id="quest">I pay attention to details</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[24][C]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[24][C]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question25">
                                        <p id="quest">I like to do filing or typing</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[25][C]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[25][C]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question26">
                                        <p id="quest">I like to analyze things (problems/situations)</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[26][I]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[26][I]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question27">
                                        <p id="quest">I like to play instruments or sing</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[27][A]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[27][A]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question28">
                                        <p id="quest">I enjoy learning about other cultures</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[28][S]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[28][S]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question29">
                                        <p id="quest">I would like to start my own business</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[29][E]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[29][E]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question30">
                                        <p id="quest">I like to cook</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[30][R]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[30][R]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question31">
                                        <p id="quest">I like acting in plays</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[31][A]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[31][A]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question32">
                                        <p id="quest">I am a practical person</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[32][R]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[32][R]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question33">
                                        <p id="quest">I like working with numbers or charts</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[33][I]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[33][I]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question34">
                                        <p id="quest">I like to get into discussions about issues</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[34][S]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[34][S]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question35">
                                        <p id="quest">I am good at keeping records of my work</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[35][C]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[35][C]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question36">
                                        <p id="quest">I like to lead</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[36][E]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[36][E]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question37">
                                        <p id="quest">I like working outdoors</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[37][R]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[37][R]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question38">
                                        <p id="quest">I would like to work in an office</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[38][C]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[38][C]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question39">
                                        <p id="quest">I’m good at math</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[39][I]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[39][I]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question40">
                                        <p id="quest">I like helping people</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[40][S]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[40][S]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question41">
                                        <p id="quest">I like to draw</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[41][A]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[41][A]" class="radio" value=0>No
                                    </label>

                                <br>

                                    <li id="question42">
                                        <p id="quest">I like to give speeches</p>
                                    </li>
                                    <label for="">
                                        <input type="radio" name="Ans[42][E]" class="radio" value=1>Yes
                                    </label>
                                    <label for="">
                                        <input type="radio" name="Ans[42][E]" class="radio" value=0>No
                                    </label>
                                

                                </ul>

                                <div id="button">
                                    <button type="submit" value="submit" name="submit" id="submitButton">Submit</button>
                                </div>
                                <br>


                            </div>
                        </form>  
                    </div>
                <?php } ?>


                <?php

                    function getResultsFromTable($conn, $sessionID) {

                        // this is an indexed array. Array items can be accessed using index.
                        global $arrayRiasec;
                        $arrayRiasec = ["R", "I", "A", "S", "E", "C"];

                        // "countsArray" is an 
                        global $countsArray;
                        $countsArray = array();

                        global $traits;
                        $traits=array("R"=>"Realistic","I"=>"Investigative","A"=>"Artistic","S"=>"Social","E"=>"Enterprising","C"=>"Conventional");
                        
                        foreach($arrayRiasec as $key) {
                            $sql = "SELECT SUM(`$key`) FROM Assignment_2 WHERE sessionID=$sessionID";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {

                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {                                        
                                    $count = $row["SUM(`$key`)"];
                                    array_push($countsArray, $count);
                                }
                            } else {
                                echo "0 results";
                            }

                        }

                        // this "resultArray" is an associative array which has "trait=>respective count" 
                        global $resultArray;
                        $resultArray = array();

                        $i = 0;
                        foreach($arrayRiasec as $key) {
                            if ($i < count($arrayRiasec)) {
                                $resultArray[$key] = $countsArray[$i];
                            }
                            $i = $i + 1;
                            
                        }
                        

                        arsort($resultArray);

                        // final sorted array which will be used to display the results. It is an indexed array.
                        global $keysOfResultArray;
                        $keysOfResultArray = array_keys($resultArray);

                        // this sorted sliced indexed array keeps top 3 RIASEC values.
                        global $final;
                        // below line slices the array and preserves the sliced values.
                        $final = (array_slice($keysOfResultArray,0,3,true));
                    }

                    
                    function insertDataToTable($conn, $sessionID) {

                        if(isset($_POST["Ans"])){
                            $answers = $_POST["Ans"];

                        foreach ($answers as $questionId=>$answer) {
                            error_reporting(E_ERROR | E_PARSE);

                            // this is the script for inserting the values into the table.
                            // let the initial "RIASEC array" contain the values as 0.
                            $riasecArray = array("R"=>0, "I"=>0, "A"=>0, "S"=>0, "E"=>0, "C"=>0);

                            foreach( $answer as $key=>$value ) {
                                $riasecArray[$key] = $value;
                            }

                            $r = $riasecArray["R"];
                            $i = $riasecArray["I"];
                            $a = $riasecArray["A"];
                            $s = $riasecArray["S"];
                            $e = $riasecArray["E"];
                            $c = $riasecArray["C"];

                            $sql = "INSERT INTO Assignment_2 (questionID, R, I, A, S, E, C, sessionID)
                                    VALUES ($questionId, $r, $i, $a, $s, $e, $c, $sessionID)";
                            $result = mysqli_query($conn, $sql);
                        }

                        }

                    }


                    if(($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit'])) {
                        // to give space from header after submit
                        echo "<br>";
                        echo "<br>";
                        
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "test1";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " .mysqli_connect_error());
                        }
                        // for time stamp.
                        $sessionID=time();

                        // call the functions which inserts the data to database and extracts the data from it.
                        insertDataToTable($conn,$sessionID);
                        getResultsFromTable($conn,$sessionID);
                        mysqli_close($conn);
                    }

                ?>


                <!-- to show the table only after the submit button is hit -->
                <?php if((isset($_POST['submit'])) && isset($_POST["Ans"])) { ?>
                    <div class="result" id="result">
                        <div id="thankYouMessage">
                            Thank You for taking the survey.<br>
                            Please find your score and preferred learning styles below
                        </div>

                        <table>
                                <thead>
                                    <tr>
                                        <td><?php echo $resultArray[$keysOfResultArray[0]]?></td>
                                        <td><?php echo $resultArray[$keysOfResultArray[1]]?></td>
                                        <td><?php echo $resultArray[$keysOfResultArray[2]]?></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $traits[$keysOfResultArray[0]]?></td>
                                        <td><?php echo $traits[$keysOfResultArray[1]]?></td>
                                        <td><?php echo $traits[$keysOfResultArray[2]]?></td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                <?php  } ?>


                    <!-- make the stylish div for  RIASEC -->
                    <div class="pdfSummary">
                        <!-- First trait -->
                        <?php if((isset($_POST['submit'])) && isset($_POST["Ans"]) && in_array("R", $final)) { ?>
                        <div class="areaSummary" id="R">
                            
                            R = Realistic
                            <br>
                            <br>
                            <div class="traitDescription">
                                These people are often good at mechanical or athletic jobs.
                                <br> 
                                Good college majors for Realistic people are...
                            </div>
                            
                            <div class="listItems">
                                <ul class="summary">
                                    <li>
                                        Agriculture
                                    </li>
                                    <li>
                                        Health Assistant
                                    </li>
                                    <li>
                                        Computers
                                    </li>
                                    <li>
                                        Construction
                                    </li>
                                    <li>
                                        Mechanic/Machinist
                                    </li>
                                    <li>
                                        Engineering
                                    </li>
                                    <li>
                                        Food and Hospitality
                                    </li>
                        
                                </ul>
                            </div>

                            
                            <div class="relatedPathways">
                                <div id="relatedPaths">
                                    Related Pathways
                                </div>
                                <br>
                                <br>
                                Natural Resources
                                <br> 
                                Health Services
                                <br>
                                Industrial and Engineering Technology
                                <br>
                                Arts and Communication
                            </div>
                        
                        </div>
                        <?php } ?>


                        <!-- second trait -->
                        <?php if((isset($_POST['submit'])) && isset($_POST["Ans"]) && in_array("I", $final)) { ?>
                        <div class="areaSummary" id="I">
                            
                            I = Investigative
                            <br>
                            <br>
                            <div class="traitDescription">
                                These people like to watch, learn, analyze and solve problems.
                                <br> 
                                Good college majors for Investigative people are...
                            </div>
                            
                            <div class="listItems">
                                <ul class="summary">
                                    <li>
                                        Marine Biology
                                    </li>
                                    <li>
                                        Engineering
                                    </li>
                                    <li>
                                        Chemistry
                                    </li>
                                    <li>
                                        Zoology
                                    </li>
                                    <li>
                                        Medicine/Surgery
                                    </li>
                                    <li>
                                        Consumer Economics
                                    </li>
                                    <li>
                                        Psychology
                                    </li>
                        
                                </ul>
                            </div>

                            
                            <div class="relatedPathways">
                                <div id="relatedPaths">
                                    Related Pathways
                                </div>
                                <br>
                                <br>
                                Health Services
                                <br> 
                                Business
                                <br>
                                Public and Human Services
                                <br>
                                Industrial and Engineering Technology
                            </div>
                        
                        </div>
                        <?php } ?>


                        <!-- third trait -->
                        <?php if((isset($_POST['submit'])) && isset($_POST["Ans"]) && in_array("A", $final)) { ?>
                        <div class="areaSummary" id="A">
                            
                            A = Artistic
                            <br>
                            <br>
                            <div class="traitDescription">
                                These people like to work in unstructured situations where they can use their creativity.
                                <br> 
                                Good majors for Artistic people are...
                            </div>
                            
                            <div class="listItems">
                                <ul class="summary">
                                    <li>
                                        Communications
                                    </li>
                                    <li>
                                        Cosmetology
                                    </li>
                                    <li>
                                        Fine and Performing Arts
                                    </li>
                                    <li>
                                        Photography
                                    </li>
                                    <li>
                                        Radio and TV
                                    </li>
                                    <li>
                                        Interior Design
                                    </li>
                                    <li>
                                        Architecture
                                    </li>
                        
                                </ul>
                            </div>

                            
                            <div class="relatedPathways">
                                <div id="relatedPaths">
                                    Related Pathways
                                </div>
                                <br>
                                <br>
                                Public and Human Services
                                <br>
                                Arts and Communication
                            </div>
                        
                        </div>
                        <?php } ?>


                        <!-- fourth trait -->
                        <?php if((isset($_POST['submit'])) && isset($_POST["Ans"]) && in_array("S", $final)) { ?>
                        <div class="areaSummary" id="S">
                            
                            S = Social
                            <br>
                            <br>
                            <div class="traitDescription">
                                These people like to work with other people, rather than things.
                                <br> 
                                Good college majors for Social people are...
                            </div>
                            
                            <div class="listItems">
                                <ul class="summary">
                                    <li>
                                        Counseling
                                    </li>
                                    <li>
                                        Nursing
                                    </li>
                                    <li>
                                        Physical Therapy
                                    </li>
                                    <li>
                                        Travel
                                    </li>
                                    <li>
                                        Advertising
                                    </li>
                                    <li>
                                        Public Relations
                                    </li>
                                    <li>
                                        Education
                                    </li>
                        
                                </ul>
                            </div>

                            
                            <div class="relatedPathways">
                                <div id="relatedPaths">
                                    Related Pathways
                                </div>
                                <br>
                                <br>
                                Health Services
                                <br> 
                                Public and Human Services
                            </div>
                        
                        </div>
                        <?php } ?>


                        <!-- fifth trait -->
                        <?php if((isset($_POST['submit'])) && isset($_POST["Ans"]) && in_array("E", $final)) { ?>
                        <div class="areaSummary" id="E">
                            
                            E = Enterprising
                            <br>
                            <br>
                            <div class="traitDescription">
                                These people like to work with others and enjoy persuading and and performing.
                                <br> 
                                Good college majors for Enterprising people are:
                            </div>
                            
                            <div class="listItems">
                                <ul class="summary">
                                    <li>
                                        Fashion Merchandising
                                    </li>
                                    <li>
                                        Real Estate
                                    </li>
                                    <li>
                                        Marketing/Sales
                                    </li>
                                    <li>
                                        Law
                                    </li>
                                    <li>
                                        Political Science
                                    </li>
                                    <li>
                                        International Trade
                                    </li>
                                    <li>
                                        Banking/Finance
                                    </li>
                        
                                </ul>
                            </div>

                            
                            <div class="relatedPathways">
                                <div id="relatedPaths">
                                    Related Pathways
                                </div>
                                <br>
                                <br>
                                Business
                                <br>
                                Public and Human Services
                                <br>
                                Arts and Communication
                            </div>
                        
                        </div>
                        <?php } ?>


                        <!-- sixth trait -->
                        <?php if((isset($_POST['submit'])) && isset($_POST["Ans"]) && in_array("C", $final)) { ?>
                        <div class="areaSummary" id="C">
                            
                            C = Conventional
                            <br>
                            <br>
                            <div class="traitDescription">
                                These people are very detail oriented,organized and like to work with data.
                                <br> 
                                Good college majors for Conventional people are...
                            </div>
                            
                            <div class="listItems">
                                <ul class="summary">
                                    <li>
                                        Accounting
                                    </li>
                                    <li>
                                        Court Reporting
                                    </li>
                                    <li>
                                        Insurance
                                    </li>
                                    <li>
                                        Administration
                                    </li>
                                    <li>
                                        Medical Records
                                    </li>
                                    <li>
                                        Banking
                                    </li>
                                    <li>
                                        Data Processing
                                    </li>
                        
                                </ul>
                            </div>

                            
                            <div class="relatedPathways">
                                <div id="relatedPaths">
                                    Related Pathways
                                </div>
                                <br>
                                <br>
                                Health Services
                                <br> 
                                Business
                                <br>
                                Industrial and Engineering Technology
                            </div>
                        
                        </div>
                        <?php } ?>

                    </div>



                <!-- to load the php without form data on reload !-->
                <script>
                if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>


                <?php if(($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit']) && !isset($_POST["Ans"])) { ?>
                    <div id="formIncomplete">
                        <div id="formIncompleteText">Please submit a valid form.</div>
                    </div>
                <?php } ?>

                <!-- to scroll down to the bottom of the page -->
                <script>
                    window.scrollTo(0, document.body.scrollHeight);
                </script>
</body>
</html>