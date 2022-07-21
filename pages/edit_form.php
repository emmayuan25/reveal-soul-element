<?php

	require "../config/config.php";

	if( !isset($_GET["comment_id"]) || empty($_GET["comment_id"]) ){
		$error = "Invalid Comment";
		exit();
	}

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ( $mysqli->connect_errno ) {
		echo $mysqli->connect_error;
		exit();
	}
	$mysqli->set_charset('utf8');

	// sql queries
    $sql_comment = "SELECT * FROM comments WHERE comment_id = " . $_GET["comment_id"] . ";";
    $comment = $mysqli->query($sql_comment);
	$row_comment = $comment->fetch_assoc();

	$mysqli->close();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Form</title>
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
        edit comment
    </div>
	<div class="container">

		<?php if( isset($error) && !empty($error)) : ?>
			<div class="msg-notice">
				<?php echo $error; ?>
			</div>
		<?php endif; ?>

		<form action="edit_confirmation.php" method="POST">
				
				<div class="general-box">
                    <textarea name="msg" id="comment_id" class="form-control"><?php echo $row_comment["msg"];?></textarea>
                    
				</div> 

				<!-- send primary key -->
				<input type="hidden" name="comment_id" value="<?php echo $_GET["comment_id"]; ?>">


				<div id="edit-btn-fg" class="form-group row">
					<button id="edit-sub-btn" type="submit" class="qo-btn">Submit</button>
				</div> <!-- .form-group -->

		</form>

	</div> <!-- .container -->
</body>
</html>