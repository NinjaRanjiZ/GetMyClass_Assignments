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
                    <input type="submit" value="submit" name="submit" id="submitButton">
                </div>
                <br>


            </div>
        </form>
    </div>


                    <?php
                        
                        function finalQuery() {

                            // this is an indexed array. Array items can be accessed using index.
                            global $arrayRiasec;
                            $arrayRiasec = ["R", "I", "A", "S", "E", "C"];


                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "test1";

                            // "countsArray" is an 
                            global $countsArray;
                            $countsArray = array();


                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " .mysqli_connect_error());
                            }

                            
                            foreach($arrayRiasec as $key) {
                                $sql = "SELECT SUM(`$key`) FROM assignment2";
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
                            // print_r($countsArray);


                            global $resultArray;
                            $resultArray = array();
                            $i = 0;
                            foreach($arrayRiasec as $key) {
                                if ($i < count($arrayRiasec)) {
                                    $resultArray[$key] = $countsArray[$i];
                                }
                                $i = $i + 1;
                                
                            }
                            // print_r($resultArray);
                            arsort($resultArray);


                            // final sorted array which will be used to display the results. It is an indexed array.
                            global $keysOfResultArray;
                            $keysOfResultArray = array_keys($resultArray);
                            // print_r($keysOfResultArray);

                            mysqli_close($conn);
                        }


                        function queryQuestion() {

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "test1";

                            // $sessionNumber = $sessionNumber + 1;
                            // echo "session number after the database query is $sessionNumber";

                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " .mysqli_connect_error());
                            }

                            $answers = $_POST["Ans"];
                            print_r($answers);
                            foreach ($answers as $questionId=>$answer){
                                error_reporting(E_ERROR | E_PARSE);
                                $connectorString = ", ";
                                $setvalues = "";
                                foreach( $answer as $key=>$value ) {
                                    $reqString = "`$key`= $value ";
                                    if ($setvalues != "") {
                                        $setvalues = $setvalues .$connectorString. $reqString;
                                        // echo "hello $setvalues <br>";
                                    }
                                    if ($setvalues == "") {
                                        $setvalues = $reqString;
                                        // echo "setvalues is $setvalues <br>";
                                    }
                                }
                                $sql = "UPDATE assignment2 SET $setvalues  WHERE id=$questionId";
                                echo $sql;
                                $result = mysqli_query($conn, $sql);
                            }
                    
                            mysqli_close($conn);

                        }


                        if(($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit'])) {
                            // queryQuestion();
                            finalQuery();
                        }
                    ?>


                <div class="result" id="result">
                    <h5 id="thankYouMessage">Thank You, Your interest codes are displayed below</h5>

                    <table>
	                    <thead>
		                    <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
		                    </tr>
	                    </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $keysOfResultArray[0]?></td>
                                <td><?php echo $keysOfResultArray[1]?></td>
                                <td><?php echo $keysOfResultArray[2]?></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <?php
                        // if(($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit'])) {

                        //     $answers = $_POST["Ans"];
                        //     foreach ($answers as $questionId=>$answer){
                        //         error_reporting(E_ERROR | E_PARSE);
                        //         $connectorString = ", ";
                        //         $setvalues = "";
                        //         foreach( $answer as $key=>$value ) {
                        //             $reqString = "`$key`= $value ";
                        //             if ($setvalues != "") {
                        //                 $setvalues = $setvalues .$connectorString. $reqString;
                        //                 echo "hello $setvalues <br>";
                        //             }
                        //             if ($setvalues == "") {
                        //                 $setvalues = $reqString;
                        //                 echo "setvalues is $setvalues <br>";
                        //             }
                        //         }
 
                        //     }
                                                
                        // }
                    ?>

                </div>

                    
                    

            
</body>
</html>