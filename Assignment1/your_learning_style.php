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

                <?php error_reporting(E_ERROR | E_PARSE); ?>
                <?php if( isset($_POST['submit']) == false  || !isset($_POST["Ans"]) ) { ?>

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
                                <div id="button">
                                    <button type="submit" value="submit" name="submit" id="submitButton">Submit</button>
                                </div>
                                <br>
                            </div>

                        </form>

                    </div>

                <?php } ?>


                <?php

                    function getResultsFromTable($conn,$sessionID) {
                        
                        global $countsArray;
                        $countsArray = array();

                        global $keys;
                        $keys = ["V", "A", "R", "K"];

                        global $learningStyles;
                        $learningStyles=array("V"=>"Visual","A"=>"Auditory","R"=>"Read/write","K"=>"Kinesthetic");

                        foreach ($keys as $key){
                            $sql = "SELECT SUM(`$key`) FROM Assignment_1 WHERE sessionID=$sessionID";

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


                        // this "resultArray" is an associative array which has "trait=>respective count" 
                        global $resultArray;
                        $resultArray = array();

                        $i = 0;
                        foreach($keys as $key) {
                            if ($i < count($keys)) {
                                $resultArray[$key] = $countsArray[$i];
                            }
                            $i = $i + 1;
                        }
                        

                        arsort($resultArray);

                        // final sorted array which will be used to display the results. It is an indexed array.
                        global $keysOfResultArray;
                        $keysOfResultArray = array_keys($resultArray);


                        // this sorted sliced indexed array keeps top 3 VARK values.
                        global $final;
                        // below line slices the array and preserves the sliced values.
                        $final = (array_slice($keysOfResultArray,0,3,true));
                    }


                    function insertDataToTable($conn,$sessionID) {
                        
                        if(isset($_POST["Ans"])){
                            $answers = $_POST["Ans"];
                            
                            foreach ($answers as $questionId=>$answer) {
                                error_reporting(E_ERROR | E_PARSE);
                                
                                // this is the script for inserting the values into the table.
                                // let the initial "VARK array" contain the values as 0.
                                $varkArray = array("V"=>0, "A"=>0, "R"=>0, "K"=>0);

                                foreach( $answer as $key=>$value ) {
                                        $varkArray[$key] = $value;
                                }

                                $v = $varkArray["V"];
                                $a = $varkArray["A"];
                                $r = $varkArray["R"];
                                $k = $varkArray["K"];

                                $sql = "INSERT INTO Assignment_1 (questionID, V, A, R, K, sessionID)
                                        VALUES ($questionId, $v, $a, $r, $k, $sessionID)";
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
                <?php if((isset($_POST['submit']) && count($countsArray) > 0) && isset($_POST["Ans"])) { ?>
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
                                    <td><?php echo $learningStyles[$keysOfResultArray[0]]?></td>
                                    <td><?php echo $learningStyles[$keysOfResultArray[1]]?></td>
                                    <td><?php echo $learningStyles[$keysOfResultArray[2]]?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                <?php  } ?>



                <!-- make the stylish div for VARC -->
                <div class="pdfSummary">
                    <?php if((isset($_POST['submit'])) && isset($_POST["Ans"]) && in_array("V", $final)) { ?>
                        <!-- visual learning style -->
                        <div class="areaSummary" id="V">
                            
                            V = Visual Learning Style
                            <br>
                            <br>
                            <div class="traitDescription">
                                Someone with a Visual learning style has a preference for seen or observed things, including
                                pictures, diagrams, demonstrations, displays, handouts, films, flip-chart, etc. These people will
                                use phrases such as ‘show me’, ‘let’s have a look at that’ and will be best able to perform a new
                                task after reading the instructions or watching someone else do it first. These are the people
                                who will work from lists and written directions and instructions.
                            </div>
                        </div>
                    <?php } ?>


                    <?php if((isset($_POST['submit'])) && isset($_POST["Ans"]) && in_array("A", $final)) { ?>
                        <!-- auditory learning style -->
                        <div class="areaSummary" id="A">
                            
                            A = Auditory Learning Style:
                            <br>
                            <br>
                            <div class="traitDescription">
                            Someone with an Auditory learning style has a preference for the transfer of information
                            through listening: to the spoken word, of self or others, of sounds and noises. These people will
                            use phrases such as ‘tell me’, ‘let’s talk it over’ and will be best able to perform a new task after
                            listening to instructions from an expert. These are the people who are happy being given
                            spoken instructions over the telephone, and can remember all the words to songs that they
                            hear!
                            </div>
                        </div>
                    <?php } ?>


                    <?php if((isset($_POST['submit'])) && isset($_POST["Ans"]) && in_array("R", $final)) { ?>
                        <!-- read/write learning style -->
                        <div class="areaSummary" id="R">
                            
                            R = Read / Write Learning Style:
                            <br>
                            <br>
                            <div class="traitDescription">
                            Someone with a Read/Writing learning style has a preference for information to be displayed in
                            words – text based information, reports, manuals, essays and assignments. These people will
                            use words such as let me read the instructions, let me write you a report, I will do my
                            presentation on a PowerPoint. These are the people who will like to read about a subject,
                            follow written instructions and write their responses.
                            </div>
                        </div>
                    <?php } ?>

                    
                    <?php if((isset($_POST['submit'])) && isset($_POST["Ans"]) && in_array("K", $final)) { ?>
                        <!-- kinesthetic learning style -->
                        <div class="areaSummary" id="K">
                            
                            K = Kinesthetic Learning Style:
                            <br>
                            <br>
                            <div class="traitDescription">
                            Someone with a Kinesthetic learning style has a preference for physical experience - touching,
                            feeling, holding, doing, practical hands-on experiences. These people will use phrases such as
                            ‘let me try’, ‘how do you feel?’ and will be best able to perform a new task by going ahead and
                            trying it out, learning as they go. These are the people who like to experiment, hands-on, and
                            never look at the instructions first!
                            The higher your score in a particular style, that is the main preferred learning style, but this will
                            be part of a blend of all four. Some people have a very strong preference; other people have a
                            more even mixture of two, three or less commonly, four styles.
                            When you know your preferred learning style(s) you understand the type of learning that best
                            suits you. This enables you to choose the types of learning that work best for you. There is no
                            right or wrong learning style. The point is that there are types of learning that are right for your
                            own preferred learning style.
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