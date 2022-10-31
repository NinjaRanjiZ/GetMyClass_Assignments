<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="interest_survey.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Poppins">
    <title>Interest Survey</title>
</head>
<body>

    <div class="header">
        <a href="https://getmiclass.com" class="logo"><img src="https://getmiclass.com/theme/assets/img/Logo/GMC-blue.png" alt="" id="getmyclasslogo"></a>
    </div>

    <div class="topic">
        <h1 id="title">
            Interest Survey
        </h1>
    </div>

                    <?php error_reporting(E_ERROR | E_PARSE); ?>
                    <?php if( isset($_POST['submit']) == false  || !isset($_POST["Ans"]) ) { ?>

                        <div class="growUp" id="growUp">
                            <h2>When I Grow Up</h2>
                        </div>

                        <p id="description">
                            Even if you haven't given too much thought to careers, you've probably been asked what you want to be when you grow up. You might have even been asked this question many times.
                            Your answer might have been the same or changed each time you were asked! For this activity, use the space below to either draw or write the first thing you remember wanting to be.
                            Have you changed your mind or added other job ideas since then, or do you still want to be the same thing?
                        </p>

                        <div class="needDirections" id="needDirections">
                            <h2>Need Directions?</h2>
                        </div>

                        <p id="completeIt">Completing the following steps will point you to some general work areas where you can explore career possibilities.</p>


                        <form action="interest_survey.php" method="POST" id="survey-form">

                            <div class="form-question" id="set1">

                                    <label for="">
                                        <input type="checkbox" name="Ans[1][A]" class="checkbox" value=1>Taking care of pets in your neighborhood
                                    </label>
                                    <label for="">
                                        <input type="checkbox" name="Ans[2][A]" class="checkbox" value=1>Transplanting small trees
                                    </label>
                                    <label for="">
                                        <input type="checkbox" name="Ans[3][A]" class="checkbox" value=1>Planting and taking care of flowers & plants
                                    </label>
                                    <label for="">
                                        <input type="checkbox" name="Ans[4][A]" class="checkbox" value=1>Working in a garden & creating landscapes
                                    </label>
                                    <label for="">
                                        <input type="checkbox" name="Ans[5][A]" class="checkbox" value=1>Nursing sick animals back to health
                                    </label>
                                    <label for="">
                                        <input type="checkbox" name="Ans[6][A]" class="checkbox" value=1>Brushing or grooming dogs, cats, and/or horses
                                    </label>
                                    <label for="">
                                        <input type="checkbox" name="Ans[7][A]" class="checkbox" value=1>Hiking & watching wildlife
                                    </label>
                                    <label for="">
                                        <input type="checkbox" name="Ans[8][A]" class="checkbox" value=1>Chopping wood & replanting trees
                                    </label>
                                    <label for="">
                                        <input type="checkbox" name="Ans[9][A]" class="checkbox" value=1>Identifying environmental hazards & sick/dying plants
                                    </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set2">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][B]" class="checkbox" value=1>Repairing small appliances
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][B]" class="checkbox" value=1>Painting houses or buildings
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][B]" class="checkbox" value=1>Using tools to make household repairs
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][B]" class="checkbox" value=1>Cutting and shaping wood to build structures
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][B]" class="checkbox" value=1>Volunteering for Habitat for Humanity
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][B]" class="checkbox" value=1>Drawing floor plans
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][B]" class="checkbox" value=1>Building simple circuit boards
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][B]" class="checkbox" value=1>Laying brick or cinder block
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][B]" class="checkbox" value=1>Landscaping and planting flower gardens
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set3">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][C]" class="checkbox" value=1>Performing (music, drama, dance) for an audience
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][C]" class="checkbox" value=1>Creating graphic designs on a computer
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][C]" class="checkbox" value=1>Creating an original video or film
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][C]" class="checkbox" value=1>Sketching or painting pictures
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][C]" class="checkbox" value=1>Taking photographs
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][C]" class="checkbox" value=1>Writing poems, stories or plays
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][C]" class="checkbox" value=1>Making jewelry, sculpture, ceramics or stained glass
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][C]" class="checkbox" value=1>Designing a newspaper layout(artwork)
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][C]" class="checkbox" value=1>Being an announcer for an amateur radio station
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set4">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][D]" class="checkbox" value=1>Using a cash register
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][D]" class="checkbox" value=1>Typing minutes of a school club meeting
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][D]" class="checkbox" value=1>Filing or sorting mail or other papers
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][D]" class="checkbox" value=1>Running your own business
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][D]" class="checkbox" value=1>Developing web pages and creating print layouts using desktop publishing
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][D]" class="checkbox" value=1>Managing tasks for a group
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][D]" class="checkbox" value=1>Preparing reports and analyzing data
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][D]" class="checkbox" value=1>Typing documents for other people
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][D]" class="checkbox" value=1>Volunteering to answer phones
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set5">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][E]" class="checkbox" value=1>Working as a kid's camp counselor or volunteer
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][E]" class="checkbox" value=1>Tutoring young children
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][E]" class="checkbox" value=1>Reading to elementary school students
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][E]" class="checkbox" value=1>Giving instructions for/or directing a play
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][E]" class="checkbox" value=1>Baby-sitting young children
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][E]" class="checkbox" value=1>Organizing and shelving library books
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][E]" class="checkbox" value=1>Peer counseling or mediation
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][E]" class="checkbox" value=1>Helping at Special Olympics events
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][E]" class="checkbox" value=1>Teaching young children in an after-school program
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set6">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][F]" class="checkbox" value=1>Planning a mock stock market game
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][F]" class="checkbox" value=1>Investing money and studying investments
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][F]" class="checkbox" value=1>Balancing a checkbook
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][F]" class="checkbox" value=1>Opening a savings/checking account
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][F]" class="checkbox" value=1>Being a treasurer for a school club
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][F]" class="checkbox" value=1>Organizing a fund raiser
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][F]" class="checkbox" value=1>Collecting money for a school or community event
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][F]" class="checkbox" value=1>Developing a budget
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][F]" class="checkbox" value=1>Using spreadsheets and financial computer programs
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set7">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][G]" class="checkbox" value=1>Campaigning for a political candidate
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][G]" class="checkbox" value=1>Making political speeches
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][G]" class="checkbox" value=1>Volunteering as an urban planning committee member
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][G]" class="checkbox" value=1>Running for class office
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][G]" class="checkbox" value=1>Planning and preparing budgets
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][G]" class="checkbox" value=1>Participating in a debate
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][G]" class="checkbox" value=1>Volunteering as a legislative aide
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][G]" class="checkbox" value=1>Learning and speaking a foreign language
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][G]" class="checkbox" value=1>Researching and writing grants
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set8">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][H]" class="checkbox" value=1>Taking care of a sick relative
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][H]" class="checkbox" value=1>Watching doctor/hospital shows on TV
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][H]" class="checkbox" value=1>Learning first aid and CPR
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][H]" class="checkbox" value=1>Volunteering at a retirement home
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][H]" class="checkbox" value=1>Volunteering as a hospital aide
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][H]" class="checkbox" value=1>Using a stethoscope to listen to someone's heart
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][H]" class="checkbox" value=1>Identifying human body parts from a diagram
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][H]" class="checkbox" value=1>Bandaging sports injuries with a trainer's help
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][H]" class="checkbox" value=1>Assisting persons in wheelchairs with daily tasks
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set9">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][I]" class="checkbox" value=1>Working in a restaurant
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][I]" class="checkbox" value=1>Planning vacations and other events
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][I]" class="checkbox" value=1>Cooking, baking and serving meals
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][I]" class="checkbox" value=1>Participating in sports or recreational activities
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][I]" class="checkbox" value=1>Being a lifeguard
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][I]" class="checkbox" value=1>Catering an event
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][I]" class="checkbox" value=1>Working at a concession stand
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][I]" class="checkbox" value=1>Exercising and working out
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][I]" class="checkbox" value=1>Officiating a sporting event
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set10">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][J]" class="checkbox" value=1>Making a family menu
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][J]" class="checkbox" value=1>Working with the elderly
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][J]" class="checkbox" value=1>Working at a shelter
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][J]" class="checkbox" value=1>Shopping, comparing prices & consumer goods
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][J]" class="checkbox" value=1>Listening & helping friends with problems
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][J]" class="checkbox" value=1>Participating in youth groups or community groups
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][J]" class="checkbox" value=1>Working as a dietetic aid
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][J]" class="checkbox" value=1>Volunteering at a retirement home
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][J]" class="checkbox" value=1>Volunteering to be a Big Brother/Big Sister
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set11">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][K]" class="checkbox" value=1>Developing software programs
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][K]" class="checkbox" value=1>Building computers
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][K]" class="checkbox" value=1>Playing video games
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][K]" class="checkbox" value=1>Surfing the Internet
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][K]" class="checkbox" value=1>Learning how to configure operating systems
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][K]" class="checkbox" value=1>Intalling software
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][K]" class="checkbox" value=1>Learning how to assemble computer hardware
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][K]" class="checkbox" value=1>Playing with electronic gadgets
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][K]" class="checkbox" value=1>Designing video games
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set12">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][L]" class="checkbox" value=1>Reading mystery novels
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][L]" class="checkbox" value=1>Listening to a police scanner
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][L]" class="checkbox" value=1>Watching mystery movies or courtroom dramas
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][L]" class="checkbox" value=1>Playing "Clue" or other mystery board games
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][L]" class="checkbox" value=1>Volunteering in a lawyer's office
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][L]" class="checkbox" value=1>Following court cases in the news
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][L]" class="checkbox" value=1>Participating in EMT training
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][L]" class="checkbox" value=1>Volunteering to search for missing pets or persons
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][L]" class="checkbox" value=1>Participating in search and/or rescue training
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set13">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][M]" class="checkbox" value=1>Welding or working with metals
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][M]" class="checkbox" value=1>Repairing and upholstering furniture
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][M]" class="checkbox" value=1>Creating wood carvings
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][M]" class="checkbox" value=1>Taking machine shop classes
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][M]" class="checkbox" value=1>Making belts or other leather goods
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][M]" class="checkbox" value=1>Operating a printing press
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][M]" class="checkbox" value=1>Installing and repairing home electronics
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][M]" class="checkbox" value=1>Sewing, weaving, knitting or other needlework
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][M]" class="checkbox" value=1>Building cabinets, shelves and other simple woodworking
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set14">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][N]" class="checkbox" value=1>Cutting & styling hair
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][N]" class="checkbox" value=1>Selling products for a school fund-raiser
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][N]" class="checkbox" value=1>Taking tours of new houses for sale
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][N]" class="checkbox" value=1>Designing or modeling clothes
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][N]" class="checkbox" value=1>Giving people advice on products they should buy
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][N]" class="checkbox" value=1>Decorating your house and rearranging your furniture
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][N]" class="checkbox" value=1>Planning and having a yard sale
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][N]" class="checkbox" value=1>Arranging and selling flowers
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][N]" class="checkbox" value=1>Fixing watches and clocks
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set15">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][O]" class="checkbox" value=1>Visiting science museums
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][O]" class="checkbox" value=1>Designing experiments
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][O]" class="checkbox" value=1>Exploring caves and collecting rocks
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][O]" class="checkbox" value=1>Watching the weather and tracking storms
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][O]" class="checkbox" value=1>Using a computer to solve with problems and equations
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][O]" class="checkbox" value=1>Identifying plants, animals and/or marine life
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][O]" class="checkbox" value=1>Developing solutions to environmental problems
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][O]" class="checkbox" value=1>Building model aircraft/boats/trains
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][O]" class="checkbox" value=1>Learning about different cultures
                                </label>

                            </div>

                            <br>
                            <br>

                            <div class="form-question" id="set16">

                                <label for="">
                                    <input type="checkbox" name="Ans[1][P]" class="checkbox" value=1>Flying airplanes
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[2][P]" class="checkbox" value=1>Repairing vehicles, bikes and engines
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[3][P]" class="checkbox" value=1>Working in a warehouse or taking inventory
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[4][P]" class="checkbox" value=1>Operating motorized machines or equipment
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[5][P]" class="checkbox" value=1>Visiting space camps
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[6][P]" class="checkbox" value=1>Building and repairing boats
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[7][P]" class="checkbox" value=1>Operating a CB or ham radio
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[8][P]" class="checkbox" value=1>Reading mechanical and automotive magazines/blogs
                                </label>
                                <label for="">
                                    <input type="checkbox" name="Ans[9][P]" class="checkbox" value=1>Having a paper route
                                </label>

                            </div>

                            <br>
                            
                            <div id="button">
                                <button type="submit" value="submit" name="submit" id="submitButton">Submit</button>
                            </div>
                            
                        </form>
                    <?php } ?>
                

                    <?php
                                    
                            function getResultsFromTable($conn, $sessionID) {

                            global $arrayOfInterests;
                            $arrayOfInterests = array("A"=>"Agriculture, Food & Natural Resources",
                                                    "B"=>"Architecture and Construction",
                                                    "C"=>"Arts, Audio/Visual Technology & Communications",
                                                    "D"=>"Business Management & Administration",
                                                    "E"=>"Education & Training",
                                                    "F"=>"Finance",
                                                    "G"=>"Government & Public Administration",
                                                    "H"=>"Health Science",
                                                    "I"=>"Hospitality & Tourism",
                                                    "J"=>"Human Services",
                                                    "K"=>"Information Technology",
                                                    "L"=>"Law, Public Safety, Corrections & Security",
                                                    "M"=>"Manufacturing",
                                                    "N"=>"Marketing",
                                                    "O"=>"Science, Technology, Engineering & Math",
                                                    "P"=>"Transportation, Distribution & Logistics");


                            // "countsArray" is an indexed array. Array items can be accessed using index.
                            global $countsArray;
                            $countsArray = array();

                            
                            foreach($arrayOfInterests as $key => $interest) {
                                $sql = "SELECT SUM(`$key`) FROM Assignment_3 WHERE sessionID=$sessionID";

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
                            foreach($arrayOfInterests as $key => $interest) {
                                if ($i < count($arrayOfInterests)) {
                                    $resultArray[$interest] = $countsArray[$i];
                                }
                                $i = $i + 1;
                                
                            }

                            // print_r($resultArray);
                            arsort($resultArray);


                            // final sorted array which will be used to display the results. It is an indexed array.
                            global $keysOfResultArray;
                            $keysOfResultArray = array_keys($resultArray);
                            // print_r($keysOfResultArray);
                        }


                        function insertDataToTable($conn, $sessionID) {

                            if(isset($_POST["Ans"])){
                                $answers = $_POST["Ans"];

                            foreach ($answers as $questionId=>$answer){
                                error_reporting(E_ERROR | E_PARSE);

                                // this is the script for inserting the values into the table.
                                // let the initial "ABCD array" contain the values as 0.
                                $varkArray = array("A"=>0, "B"=>0, "C"=>0, "D"=>0, "E"=>0, "F"=>0, "G"=>0, "H"=>0, "I"=>0, "J"=>0, "K"=>0, "L"=>0, "M"=>0, "N"=>0, "O"=>0, "P"=>0);

                                foreach( $answer as $key=>$value ) {
                                        $varkArray[$key] = $value;
                                }

                                $a = $varkArray["A"];
                                $b = $varkArray["B"];
                                $c = $varkArray["C"];
                                $d = $varkArray["D"];
                                $e = $varkArray["E"];
                                $f = $varkArray["F"];
                                $g = $varkArray["G"];
                                $h = $varkArray["H"];
                                $i = $varkArray["I"];
                                $j = $varkArray["J"];
                                $k = $varkArray["K"];
                                $l = $varkArray["L"];
                                $m = $varkArray["M"];
                                $n = $varkArray["N"];
                                $o = $varkArray["O"];
                                $p = $varkArray["P"];


                                $sql = "INSERT INTO Assignment_3 (questionID, A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, sessionID)
                                        VALUES ($questionId, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $sessionID)";
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


                    <?php if((isset($_POST['submit']) && count($countsArray) > 0) && isset($_POST["Ans"])) { ?>
                        <div class="result" id="result">
                                <div id="thankYouMessage">
                                    Thank You for taking the survey.<br>
                                    Please find your score & suggested career pathway
                                </div>

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
                        </div>
                    <!-- this step is not required -->
                    <?php  unset($keysOfResultArray);}?>
                        

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

                    <script>
                        window.scrollTo(0, document.body.scrollHeight);
                    </script>
                    
</div>
</body>
</html>