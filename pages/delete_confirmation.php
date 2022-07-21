<?php
    require "../config/config.php";
    $isDeleted = false;

    if( !isset($_GET['comment_id']) || empty($_GET['comment_id'])){
        $error = "Invalid Comment";
    } else {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if($mysqli->connect_errno){
			echo $mysqli->connect_error;
			exit();
		}
		$mysqli->set_charset("utf8");

		$statement = $mysqli->prepare("DELETE FROM comments WHERE comment_id = ?");
		$statement->bind_param("i", $_GET["comment_id"]);

		$executed = $statement->execute();
		if(!$executed){
			echo $mysqli->error;
			exit();
		}

		if($statement->affected_rows == 1){
			$isDeleted = true;
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
    <title>Delete Confirmation</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&family=Square+Peg&display=swap" rel="stylesheet">
</head>
<body>

    <div class="header">
        delete confirmation
    </div>

    <div class="action-msg">
        <?php if(isset($error) && !empty($error)) :?>
            <div class="msg-notice">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>    

        <?php if(!isset($error) && $isDeleted) :?>
            <div class="msg-notice">
                Comment was successfully deleted.
            </div>
        <?php endif; ?>
    </div>
    

    <a class="goback-btn" href="community.php">
        back to community
    </a>
</body>
</html>