<?php
    // establish DB connection
    require "../config/config.php";

	if( !isset($_POST['userinput-name']) || empty($_POST['userinput-name'])){
        $error = "Test Error!";
    } else {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if($mysqli->connect_errno){
			echo $mysqli->connect_error;
			exit();
		}
		$mysqli->set_charset("utf8");

        $name = $_POST['userinput-name'];
        $resultEle = $_POST['user_result'];
        // var_dump($name);
        // var_dump($resultEle);

		$statement = $mysqli->prepare("INSERT INTO users(username, result) VALUES (?, ?)");
		$statement->bind_param("si", $name, $resultEle);

		$executed = $statement->execute();
		if(!$executed){
			echo $mysqli->error;
			exit();
		}

        if($statement->affected_rows == 1){
            $success = "success";
			// var_dump($success);
		}

		$statement->close();
		$mysqli->close();
    }

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

        <?php if(isset($error) && !empty($error)) :?>
            <div class="msg-notice">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <div class="user-name processing-msg">
            <p>
                See <span id="username-display"><?php echo $name; ?></span>
                's Soul Element in 2 seconds
            </p>
        </div>

    </div>

    <script src="../main.js"></script>
    <script src="../js/resultjs.js"></script>
    <script src="../js/processing.js"></script>


</body>
</html>