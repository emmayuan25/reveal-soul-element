<?php
    // establish DB connection
	require "../config/config.php";
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if($mysqli->connect_errno){
		echo $mysqli->connect_error;
		exit();
	}
	$mysqli->set_charset("utf8");

    $sql = "SELECT ROUND(COUNT(*) * 100/(SELECT COUNT(*) FROM users)) as percentage FROM users
    WHERE result = 3;";
    $results = $mysqli->query($sql);
    $pg = $results->fetch_assoc();
    if(!$pg) {
		echo $mysqli->error;
		exit();
	}
	$mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&family=Square+Peg&display=swap" rel="stylesheet">

    <title>Your Soul Element Reveal...</title>
</head>
<body>
    <div class="container-result">
        <div class="result-element" style="background-color: white;" id="element-water">
            <div class="share-img">
                <img src="../images/water_result.jpg">
            </div>
            <div class="result-welcome">
                <span id="username_" style="font-weight: bold;"></span> 's soul element is the
            </div>

            <p class="element-title float-animation-water">
                Hydro
            </p>
            <p class="element-quote">
                "The eye because of flows the multi-tears but pure brightness, the heart because of had experienced much suffering but is good-natured." Louisa May Alcott
            </p>
            <p class="element-description">
                Your soul is composed of clear water. Your are agile and adaptable to all kinds of environment. Socializing with others is under your control as you always see what their emotional needs are.
            </p>
        </div>

        <div class="results-additional-info">
            <div class="results-stats">
                <div class="layered-card">
                    <?php echo $pg["percentage"];?>%
                </div>
                <div class="layered-card">
                    wind
                </div>
            </div>
            <div class="results-stats">
                <div class="card-description">
                    people have the same element as you
                </div>
                <div class="card-description">
                    you get along with people of
                </div>
            </div>
        </div>

    </div>

    <div class="qrcode-div">
        <img id="qrcode" style="display:none" src="../images/qrcode.jpg" />
    </div>

    <div id="preview-page"><div id="preview-img"></div></div>

    <div class="saveimg-msg" data-html2canvas-ignore>
        <span>long press to save your result and share!</span>
    </div>
    
    <div id="results-community" data-html2canvas-ignore>
            <button class="layered-card" id="results-community-tab" onclick="location.href='../pages/community.php'">
                Community
            </button>

            <button class="layered-card" id="redo-tab" onclick="location.href='../home.php'">
                Redo Test
            </button>
    </div>

    
    <script>
        let name = localStorage.getItem("name");
        document.getElementById("username_").innerHTML = name;
    </script>
    <script src="../main.js"></script>
    <script src="../js/html2canvas.min.js"></script>
    <script src="../js/draw.js"></script>

</body>
</html>