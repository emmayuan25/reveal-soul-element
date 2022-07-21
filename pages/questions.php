<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&family=Square+Peg&display=swap" rel="stylesheet">

    <!-- favicon -->

    <title>Questions</title>
</head>
<body>
    <div class="container question-box">
        
        <div class="question" id="q1">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q1-gif" src="../images/q1.gif" alt="q1">
            </div>
            
            <div class="question-body animate__animated animate__fadeIn">
                Inside an empty room, there are three doors in front of you. The first door has a mottled wood surface with a mystical pattern in red paint. The second one is a cold heavy metal door, seemingly abandoned for a long time. The third door is a glass door, glossy like a mirror, shining faintly.
            </div>
            <div class="question-options animate__animated animate__fadeIn" id="qo1">
                <div class="qo-div" id="q1-a" onclick="updateWood('q1','q2')">
                    <button type="button" class="qo-btn" >Wood door</button>
                </div>
                <div class="qo-div" id="q1-b" onclick="updateMist('q1','q2')">
                    <button type="button" class="qo-btn" >Metal door</button>
                </div>
                <div class="qo-div" id="q1-c" onclick="updateIce('q1','q2')">
                    <button type="button" class="qo-btn">Glass door</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="q2">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q2-gif" src="../images/q2.gif" alt="q2">
            </div>
            <p class="question-body animate__animated animate__fadeIn">
                After you entered the door, you find yourself in a foreign land. You are in
            </p>
            <div class="question-options animate__animated animate__fadeIn" id="qo2">
                <div class="qo-div" id="q2-a" onclick="updateFire('q2','q3')">
                    <button type="button" class="qo-btn">Dry Wilderness</button>
                </div>
                <div class="qo-div" id="q2-b" onclick="updateThunder('q2','q3')">
                    <button type="button" class="qo-btn">Hustling City</button>
                </div>
                <div class="qo-div" id="q2-c" onclick="updateDark('q2','q3')">
                    <button type="button" class="qo-btn">Boundless Universe</button>
                </div>
                <div class="qo-div" id="q2-d" onclick="updateLight('q2','q3')">
                    <button type="button" class="qo-btn">Pure White Clouds</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="q3">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q3-gif" src="../images/q3.png" alt="q3">
            </div>
            <p class="question-body animate__animated animate__fadeIn">
                Out of a sudden, a human figure appeared from far away, you think they are
            </p>
            <div class="question-options animate__animated animate__fadeIn" id="qo3">
                <div class="qo-div" id="q3-a" onclick="updateRock('q3','q4')">
                    <button type="button" class="qo-btn">A no longer in contact acquaintance</button>
                </div>
                <div class="qo-div" id="q3-b" onclick="updateWind('q3','q4')">
                    <button type="button" class="qo-btn">Strange mystic sage </button>
                </div>
                <div class="qo-div" id="q3-c" onclick="updateWater('q3','q4')">
                    <button type="button" class="qo-btn">Your most trusted person</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="q4">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q4-gif" src="../images/q4.png" alt="q4">
            </div>
            <p class="question-body animate__animated animate__fadeIn">
                Follow them?
            </p>
            <div class="question-options animate__animated animate__fadeIn" id="qo4">
                <div class="qo-div" id="q4-a" onclick="updateFire('q4','q5')">
                    <button type="button" class="qo-btn">Yes</button>
                </div>
                <div class="qo-div" id="q4-b" onclick="updateIce('q4','q5')">
                    <button type="button" class="qo-btn">No</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="q5">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q5-gif" src="../images/q5.png" alt="q5">
            </div>
            <p class="question-body animate__animated animate__fadeIn">
                The end of the world would be
            </p>
            <div class="question-options animate__animated animate__fadeIn" id="qo5">
                <div class="qo-div" id="q5-a" onclick="updateWind('q5','q6')">
                    <button type="button" class="qo-btn">Sudden ending dream</button>
                </div>
                <div class="qo-div" id="q5-b" onclick="updateRock('q5','q6')">
                    <button type="button" class="qo-btn">Unfinished past</button>
                </div>
                <div class="qo-div" id="q5-c" onclick="updateMist('q5','q6')">
                    <button type="button" class="qo-btn">Code in infinite recursion</button>
                </div>
                <div class="qo-div" id="q5-d" onclick="updateLight('q5','q6')">
                    <button type="button" class="qo-btn">Newborn, clouds dispelled and sun appearing</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="q6">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q6-gif" src="../images/q6.png" alt="p6">
            </div>
            <p class="question-body animate__animated animate__fadeIn">
                Your favourite season is
            </p>
            <div class="question-options animate__animated animate__fadeIn" id="qo6">
                <div class="qo-div" id="q6-a" onclick="updateWind('q6','q7')">
                    <button type="button" class="qo-btn">Spring</button>
                </div>
                <div class="qo-div" id="q6-b" onclick="updateThunder('q6','q7')">
                    <button type="button" class="qo-btn">Summer</button>
                </div>
                <div class="qo-div" id="q6-c" onclick="updateWood('q6','q7')">
                    <button type="button" class="qo-btn">Fall</button>
                </div>
                <div class="qo-div" id="q6-d" onclick="updateIce('q6','q7')">
                    <button type="button" class="qo-btn">Winter</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="q7">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q7-gif" src="../images/q7.png" alt="p7">
            </div>
            <p class="question-body animate__animated animate__fadeIn">
                Rainy days to you feel like
            </p>
            <div class="question-options animate__animated animate__fadeIn" id="qo7">
                <div class="qo-div" id="q7-a" onclick="updateWind('q7','q8')">
                    <button type="button" class="qo-btn">Lazy and cozy afternoon</button>
                </div>
                <div class="qo-div" id="q7-b" onclick="updateWind('q7','q8')">
                    <button type="button" class="qo-btn">Comforting white noise</button>
                </div>
                <div class="qo-div" id="q7-c" onclick="updateDark('q7','q8')">
                    <button type="button" class="qo-btn">Cloudy canopy</button>
                </div>
                <div class="qo-div" id="q7-d" onclick="updateWood('q7','q8')">
                    <button type="button" class="qo-btn">Sludgy rain boots</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="q8">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q8-gif" src="../images/q8.png" alt="p8">
            </div>
            <p class="question-body animate__animated animate__fadeIn">
                Your dreams are filled with
            </p>
            <div class="question-options animate__animated animate__fadeIn" id="qo8">
                <div class="qo-div" id="q8-a" onclick="updateMist('q8','q9')">
                    <button type="button" class="qo-btn">Terrifying escapes</button>
                </div>
                <div class="qo-div" id="q8-b" onclick="updateThunder('q8','q9')">
                    <button type="button" class="qo-btn">Journey without destination</button>
                </div>
                <div class="qo-div" id="q8-c" onclick="updateWater('q8','q9')">
                    <button type="button" class="qo-btn">Mind-ripple encounters</button>
                </div>
                <div class="qo-div" id="q8-d" onclick="updateRock('q8','q9')">
                    <button type="button" class="qo-btn">Ordinary and repeating normals</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="q9">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q9-gif" src="../images/q9.png" alt="p9">
            </div>
            <p class="question-body animate__animated animate__fadeIn">
                What makes up an ideal romantic relationship
            </p>
            <div class="question-options animate__animated animate__fadeIn" id="qo9">
                <div class="qo-div" id="q9-a" onclick="updateFire('q9','q10')">
                    <button type="button" class="qo-btn">100% Passion & 0% Management</button>
                </div>
                <div class="qo-div" id="q9-b" onclick="updateLight('q9','q10')">
                    <button type="button" class="qo-btn">70% Passion & 30% Management</button>
                </div>
                <div class="qo-div" id="q9-c" onclick="updateWater('q9','q10')">
                    <button type="button" class="qo-btn">50% Passion & 50% Management</button>
                </div>
                <div class="qo-div" id="q9-d" onclick="updateDark('q9','q10')">
                    <button type="button" class="qo-btn">30% Passion & 70% Management</button>
                </div>
                <div class="qo-div" id="q9-e" onclick="updateRock('q9','q10')">
                    <button type="button" class="qo-btn">0% Passion & 100% Management</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="q10">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q10-gif" src="../images/q10.png" alt="p10">
            </div>
            <p class="question-body animate__animated animate__fadeIn">
                If you can intern for the Creator for one day, you would
            </p>
            <div class="question-options animate__animated animate__fadeIn" id="qo10">
                <div class="qo-div" id="q10-a" onclick="updateThunder('q10','q11')">
                    <button type="button" class="qo-btn">Use your power to make changes to your life</button>
                </div>
                <div class="qo-div" id="q10-b" onclick="updateFire('q10','q11')">
                    <button type="button" class="qo-btn">Eliminate all existing pains in the world</button>
                </div>
                <div class="qo-div" id="q10-c" onclick="updateDark('q10','q11')">
                    <button type="button" class="qo-btn">Be a pure observer</button>
                </div>
                <div class="qo-div" id="q10-d" onclick="updateLight('q10','q11')">
                    <button type="button" class="qo-btn">Build a new world from scratch</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="q11">

            <div class="question-animation animate__animated animate__fadeIn">
                <img id="q11-gif" src="../images/q11.png" alt="p11">
            </div>
            <p class="question-body animate__animated animate__fadeIn">
                The main theme of your life is
            </p>
            <div class="question-options animate__animated animate__fadeIn" id="qo11">
                <div class="qo-div" id="q11-a" onclick="updateMist('q11','name-box')">
                    <button type="button" class="qo-btn">Starry Night by Vincent van Gogh</button>
                </div>
                <div class="qo-div" id="q11-b" onclick="updateWood('q11','name-box')">
                    <button type="button" class="qo-btn">Water Lilies by Claude Monet</button>
                </div>
                <div class="qo-div" id="q11-c" onclick="updateIce('q11','name-box')">
                    <button type="button" class="qo-btn">Composition with Large Red Plane, Yellow, Black, Gray, and Blue by Piet Mondrian</button>
                </div>
            </div>
            
        </div>

        <div class="question hide" id="name-box">
            <p id="name-q-text">And your name?</p>
            
            <form id="form-username" action="processing.php" method="POST">
                <div id="name-input-div" class="general-box">
                    <input type="text" id="name-input" class="form-control" name="userinput-name">
                    
                </div>
                <div class="form-group row">
                    <button type="submit" class="qo-btn" id="show-result">
                        show result
                    </button>
                </div>

                <input id="userresult-form" type="hidden" name="user_result" value="3">

            </form>
            
        </div>

    </div>

    <script src="../main.js"></script>
    <script src="../js/resultjs.js"></script>

</body>
</html>