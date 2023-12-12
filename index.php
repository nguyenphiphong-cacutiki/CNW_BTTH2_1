<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/bootstrap-5.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-3">Example: Comment System with Ajax, PHP & MySQL</h2>
        <form method="POST" id="commentForm" action="">
            <div class="form-group mb-2">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
            </div>
            <div class="form-group mb-2">
                <textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
            </div>
            <span id="message" class="text-bg-light text-success mb-2"></span>

            <div class="form-group">
                <input type="hidden" name="commentId" id="commentId"
                        value="-1"/>
                <input type="submit" name="submit" id="submit"
                    class="btn btn-primary" value="Post Comment" />
            </div>
        </form>
        <?php
            include_once('db_connect.php');
            include_once('loadAllComments.php');
            
        ?>
        
        <div class="mt-3" id="showComments"><?=loadAllcomments($conn);?></div>

        <button id='showtest' class="btn btn-dark">show tesst</button>
    </div>
    




    <script src="./asset/bootstrap-5.3.2/js/bootstrap.min.js"></script>
    <script src="./asset/jquery-3.7.1.min.js"></script>
    <script src="comments.js"></script>
    <script src='reply.js'></script>
</body>
</html>