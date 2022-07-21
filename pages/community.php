<?php
    // DB connection setup
    require "../config/config.php";
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($mysqli->connect_errno){
		echo $mysqli->connect_error;
		exit();
	}
	$mysqli->set_charset("utf8");

    // sql queries
    $sql_comment = "SELECT * FROM comments ORDER BY comment_id DESC LIMIT 3";
    $result_comment = $mysqli->query($sql_comment);
    if(!$result_comment) {
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
    <title>Find Your Soul's Community</title>
</head>
<body>
    <div class="header">
        elemented space
    </div>
    <div class="row">

        <div id="community-stats-graph">
            <img src="" alt="">
        </div>
        
        <div id="chatbox">
            <!-- input box -->
            <form id="chat-inputform" action="add_confirmation.php" method="POST">
                <div class="form-group" id="chat-inputform-box">

                    <?php if(isset($error) && !empty($error)) :?>
                        <div class="input-warning">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <input name="msg" id="comment_id" class="form-control" placeholder="Add comment here!"></input>

                    <input id="commentresult-form" type="hidden" name="user_result_comment" value="3">

                
                </div>
                <button class="qo-btn" id="addComment">
                    <a href="add_confirmation.php">
                        post
                    </a>
                </button>
            </form>
            
        </div>
        
    </div>
        
    <div class="row">
        <div id="commentbox">
        
            <?php while($row = $result_comment->fetch_assoc()): ?>
                <div class="comment-row">

                    <button class="qo-btn" id="edit-btn">
                    <a href="edit_form.php?comment_id=<?php echo $row["comment_id"];?>">
						    edit
                        </a>
                    </button>

                    <button class="qo-btn" id="del-btn">
                        <a onclick="return confirm('Are you sure you want to delete this comment?');" href="delete_confirmation.php?comment_id=<?php echo $row["comment_id"];?>" >
						    delete
                        </a>
                    </button>

                    <?php echo $row["msg"];?>

                </div>
            <?php endwhile; ?>


        </div>

    </div>

    <div id="goback-btn">
        <button class="layered-card" id="goback-tab" onclick="location.href='../home.php'">
            Redo Test
        </button>
        <button class="layered-card" id="search-tab" onclick="location.href='search_form.php'">
            Search for comments
        </button>
    </div>

    <script src="main.js"></script>
    <script>
        var res = localStorage.getItem("result");
        if(res){
            document.getElementById("commentresult-form").value = result;
        }
    </script>

</body>
</html>