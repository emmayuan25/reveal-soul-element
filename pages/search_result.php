<?php
    // establish DB connection
	require "../config/config.php";
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if($mysqli->connect_errno){
		echo $mysqli->connect_error;
		exit();
	}
	$mysqli->set_charset("utf8");


    $sql = "SELECT * FROM comments WHERE 1=1";
    if(isset($_GET["msg-key"]) && !empty($_GET["msg-key"])){
        $sql = $sql . " AND comments.msg LIKE '%" . $_GET["msg-key"] . "%'";
    }

    $sql = $sql . " ORDER BY comment_id DESC LIMIT 5;";
    $results = $mysqli->query($sql);
    if(!$results) {
		echo $mysqli->error;
		exit();
	}

	$mysqli->close();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Result</title>
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
        comment search
    </div>
    <div class="general-box">
        
        <?php while($row = $results->fetch_assoc()): ?>
            <div class="comment-row">

                <?php echo $row["msg"];?>

            </div>
        <?php endwhile; ?>

    </div>
    <a class="goback-btn" href="community.php">
        back to community
    </a>
</body>
</html>