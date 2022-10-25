<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="your_learning_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Poppins|Tahoma|Geneva">
    <title>Learning Style Form</title>
</head>
<body>

    <div class="header">
        <a href="https://getmiclass.com" class="logo"><img src="https://getmiclass.com/theme/assets/img/Logo/GMC-blue.png" alt="" id="getmyclasslogo"></a>
    </div>

    <div class="topic">
        <h1 id="title">
            Your Learning Style
        </h1>
    </div>

    <p id="description">
        The VARK questionnaire provides you with a Profile of your Learning Preferences as well how you process Information.
        Your preference for the intake and output of ideas and information. Choose the answer which best explains your preference and circle the options below.
        You can also circle more than one options in a question. Also, if any question does not apply to you may leave it blank.
    </p>

    <div class="assignmentForm" id="assignment">

        <form action="your_learning_style.php" method="POST" id="survey-form">

            <!-- Checkbox section -->
            <div class="form-group">
                <ol>
                <li id="question1">
                    <p id="quest">You want to help your relative to go to the airport. You would:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[1][K]" class="checkbox" value=1>go with them.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[1][A]" class="checkbox" value=1>tell them the directions.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[1][R]" class="checkbox" value=1>write down the directions.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[1][V]" class="checkbox" value=1>draw, or show them a map.
                    </label>
                <br>
                <br>
                


                <li id="question2">
                    <p id="quest">A YouTube video is showing how to make a special graph. There is a person speaking, some lists and words describing what to do and some diagrams are shown. You would learn most from:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[2][V]" class="checkbox" value=1>seeing the diagrams.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[2][A]" class="checkbox" value=1>listening to the persons.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[2][R]" class="checkbox" value=1>reading the words.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[2][K]" class="checkbox" value=1>watching the actions of the person.
                    </label>
                <br>
                <br>
                


                <li id="question3">
                    <p id="quest">You are planning for a 7 days holiday with your family, you want the travel agent to:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[3][K]" class="checkbox" value=1>describe some of the highlights you will experience.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[3][V]" class="checkbox" value=1>show you photographs the places.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[3][R]" class="checkbox" value=1>give you a copy of the printed itinerary.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[3][A]" class="checkbox" value=1>phone, text or email you the details.
                    </label>
                <br>
                <br>
                


                <li id="question4">
                    <p id="quest">You are going to cook something as a special treat. You would:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[4][K]" class="checkbox" value=1>cook something you know without the need for instructions.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[4][A]" class="checkbox" value=1>ask friends for suggestions.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[4][V]" class="checkbox" value=1>look on the Internet or in some cookbooks for ideas from the pictures.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[4][R]" class="checkbox" value=1>use a good recipe.
                    </label>
                <br>
                <br>
                


                <li id="question5">
                    <p id="quest">A group of tourists want to learn about the parks or wildlife reserves in your area. You would:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[5][A]" class="checkbox" value=1>talk about, or arrange a talk for them about parks or wildlife reserves.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[5][V]" class="checkbox" value=1>show them maps and internet pictures.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[5][K]" class="checkbox" value=1>take them to a park or wildlife reserve and walk with them.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[5][R]" class="checkbox" value=1>give them a book or pamphlets about the parks or wildlife reserves.
                    </label>
                <br>
                <br>
                


                <li id="question6">
                    <p id="quest">You are about to purchase a digital camera or mobile phone. Other than price, what would most influence your decision?</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[6][K]" class="checkbox" value=1>Trying or testing it.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[6][R]" class="checkbox" value=1>Reading the details or checking its features online.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[6][V]" class="checkbox" value=1>It is a modern design and looks good.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[6][A]" class="checkbox" value=1>The salesperson telling me about its features.
                    </label>
                <br>
                <br>
                


                <li id="question7">
                    <p id="quest">Remember a time when you learned playing chess or monopoly or a new mobile game. You learned best by:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[7][K]" class="checkbox" value=1>watching a demonstration.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[7][A]" class="checkbox" value=1>listening to somebody explaining it and asking questions.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[7][V]" class="checkbox" value=1>diagrams, maps, and charts -visual clues.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[7][R]" class="checkbox" value=1>written instructions - e.g. a manual or book or help text.
                    </label>
                <br>
                <br>
                


                <li id="question8">
                    <p id="quest">You have a problem with your heart. You would prefer that the doctor:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[8][R]" class="checkbox" value=1>gave you a something to read to explain what was wrong.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[8][K]" class="checkbox" value=1>used a plastic model to show what was wrong.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[8][A]" class="checkbox" value=1>described what was wrong.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[8][V]" class="checkbox" value=1>showed you a diagram of what was wrong.
                    </label>
                <br>
                <br>
               


                <li id="question9">
                    <p id="quest">You want to learn a new program, skill or game on a computer. You would:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[9][R]" class="checkbox" value=1>read the written instructions that came with the program.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[9][A]" class="checkbox" value=1>talk with people who know about the program.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[9][K]" class="checkbox" value=1>use the controls or keyboard.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[9][V]" class="checkbox" value=1>follow the diagrams in the book that came with it.
                    </label>
                <br>
                <br>
                


                <li id="question10">
                    <p id="quest">You like websites that have:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[10][K]" class="checkbox" value=1>things you can click on, shift or try.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[10][V]" class="checkbox" value=1>interesting design and visual features.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[10][R]" class="checkbox" value=1>interesting written descriptions, lists and explanations.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[10][A]" class="checkbox" value=1>audio channels where you can hear music, radio programs or interviews.
                    </label>
                <br>
                <br>
                


                <li id="question11">
                    <p id="quest">Other than price, what would most influence your decision to buy a new non-fiction book?</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[11][V]" class="checkbox" value=1>The way it looks is appealing.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[11][R]" class="checkbox" value=1>Quickly reading parts of it.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[11][A]" class="checkbox" value=1>A friend talks about it and recommends it.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[11][K]" class="checkbox" value=1>It has real life stories, experiences and examples.
                    </label>
                <br>
                <br>
                


                <li id="question12">
                    <p id="quest">You are using a book, CD or website to learn how to take photos with your new digital camera. You would like to have:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[12][A]" class="checkbox" value=1>a chance to ask questions and talk about the camera and its features.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[12][R]" class="checkbox" value=1>clear written instructions with lists and bullet points about what to do.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[12][V]" class="checkbox" value=1>diagrams showing the camera and what each part does.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[12][K]" class="checkbox" value=1>many examples of good and poor photos and how to improve them.
                    </label>
                <br>
                <br>
                


                <li id="question13">
                    <p id="quest">Do you prefer a teacher or a presenter who uses:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[13][K]" class="checkbox" value=1>demonstrations, models or practical sessions.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[13][A]" class="checkbox" value=1>question and answer, talk, group discussion, or guest speakers.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[13][R]" class="checkbox" value=1>handouts, books, or readings.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[13][V]" class="checkbox" value=1>diagrams, charts or graphs.
                    </label>
                <br>
                <br>
                


                <li id="question14">
                    <p id="quest">You have finished a competition or test and would like some feedback. You would like to have feedback:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[14][K]" class="checkbox" value=1>using examples from what you have done.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[14][R]" class="checkbox" value=1>using a written description of your results.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[14][A]" class="checkbox" value=1>from somebody who talks it through with you.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[14][V]" class="checkbox" value=1>using graphs showing what you had achieved.
                    </label>
                <br>
                <br>
                


                <li id="question15">
                    <p id="quest">You are going to choose food at a restaurant or cafe. You would:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[15][K]" class="checkbox" value=1>choose something that you have had there before.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[15][A]" class="checkbox" value=1>listen to the waiter or ask friends to recommend choices.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[15][R]" class="checkbox" value=1>choose from the descriptions in the menu.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[15][V]" class="checkbox" value=1>look at what others are eating or look at pictures of each dish.
                    </label>
                <br>
                <br>
                


                <li id="question16">
                    <p id="quest">You have to make an important speech at a conference or special occasion. You would:</p>
                </li>
                    <label for="">
                        <input type="checkbox" name="Ans[16][V]" class="checkbox" value=1>make diagrams or get graphs to help explain things.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[16][A]" class="checkbox" value=1>write a few key words and practice saying your speech over and over.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[16][R]" class="checkbox" value=1>write out your speech and learn from reading it over several times.
                    </label>
                    <label for="">
                        <input type="checkbox" name="Ans[16][K]" class="checkbox" value=1>gather many examples and stories to make the talk real and practical.
                    </label>
                <br>
                <br>


                </ul>
                <input type="submit" value="submit" name="submit" id="submitButton">
                <br>
            </div>
        </form>
    </div>

                <?php
                    // $answers = $_POST["Ans"];
                    // foreach ($answers as $questionId=>$answer){
                    //     error_reporting(E_ERROR | E_PARSE);
                    //     $setvalues = "";
                    //     foreach( $answer as $key=>$value ) {
                    //         if($setvalues != "") $setvalues = $setvalues ." , ";
                    //             $setvalues = $setvalues.' `'.$key.'` = '.$value;
                    //             echo "setvalues is $setvalues <br>";
                    //     };
                        
                    //     $sql = "UPDATE questions SET $setvalues WHERE id=$questionId";
                    //     echo "$sql <br>";
                    //     // $result = mysqli_query($conn, $sql);
                    // }
                    
                ?>


                <?php
                        
                        // $questions = array(1 => "You want to help your relative to go to the airport. You would:",
                        //                    2 => "A YouTube video is showing how to make a special graph. There is a person speaking, some lists and words describing what to do and some diagrams are shown. You would learn most from:",
                        //                    3 => "You are planning for a 7 days holiday with your family, you want the travel agent to:",
                        //                    4 => "You are going to cook something as a special treat. You would:",
                        //                    5 => "A group of tourists want to learn about the parks or wildlife reserves in your area. You would:",
                        //                    6 => "You are about to purchase a digital camera or mobile phone. Other than price, what would most influence your decision?",
                        //                    7 => "Remember a time when you learned playing chess or monopoly or a new mobile game. You learned best by:",
                        //                    8 => "You have a problem with your heart. You would prefer that the doctor:",
                        //                    9 => "You want to learn a new program, skill or game on a computer. You would:",
                        //                    10 => "You like websites that have:",
                        //                    11 => "Other than price, what would most influence your decision to buy a new non-fiction book?",
                        //                    12 => "You are using a book, CD or website to learn how to take photos with your new digital camera. You would like to have:",
                        //                    13 => "Do you prefer a teacher or a presenter who uses:",
                        //                    14 => "You have finished a competition or test and would like some feedback. You would like to have feedback:",
                        //                    15 => "You are going to choose food at a restaurant or cafe. You would:",
                        //                    16 => "You have to make an important speech at a conference or special occasion. You would:");


                        function finalQuery() {

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "test1";

                            global $countsArray;
                            $countsArray = array();


                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " .mysqli_connect_error());
                            }

                            $keys = ["K", "A", "R", "V"];

                            foreach ($keys as $key){
                                $sql = "SELECT SUM(`$key`) FROM assignment1";
                                // echo $sql;
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
                            // print_r($answers);
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
                                $sql = "UPDATE assignment1 SET $setvalues  WHERE id=$questionId";
                                // echo $sql;
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
                    <h5 id="thankYouMessage">Thank You, the Total count is displayed below</h5>

                    <table>
	                    <thead>
		                    <tr>
                                <td>V</td>
                                <td>A</td>
                                <td>R</td>
                                <td>K</td>
		                    </tr>
	                    </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $countsArray["0"]?></td>
                                <td><?php echo $countsArray["1"]?></td>
                                <td><?php echo $countsArray["2"]?></td>
                                <td><?php echo $countsArray["3"]?></td>
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