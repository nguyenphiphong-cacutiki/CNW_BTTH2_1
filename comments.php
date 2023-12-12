<?php
    include_once 'db_connect.php';
        $status = 'error';
        if(!empty($_POST["name"]) && !empty($_POST["comment"])){

            $insertComments = "INSERT INTO comment (parent_id, comment, sender)
            VALUES ('".$_POST["commentId"]."', '".$_POST["comment"]."',
                '".$_POST["name"]."')";
            $stmt = $conn->prepare($insertComments);
            $stmt->execute();
            
            // $message = '<label class="text-success">Comment posted
            //             Successfully.</label>';
            $message = 'Comment posted successfully!';
            $status = array(
                'error' => 0,
                'message' => $message
            );
        } else {
            // $message = '<label class="text-danger">Error: Comment not
            //             posted.</label>';
            $message = 'Comment not posted!';
            $status = array(
                'error' => 1,
                'message' => $message
            );
        }
        echo json_encode($status);
?>