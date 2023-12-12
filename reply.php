<?php
        include 'db_connect.php';
        $status =  array(
            'error' => 1,
            'message' => "message default"
        );
        if(!empty($_POST["parentId"]) && !empty($_POST["replyComment"])){
            try{
                $insertComments = "INSERT INTO comment (parent_id, comment, sender)
                VALUES ('".$_POST["parentId"]."', '".$_POST["replyComment"]."',
                    'Phong')";
                $stmt = $conn->prepare($insertComments);
                $stmt->execute();
            }catch(PDOException $e){
                $status =  array(
                    'error' => 1,
                    'message' => $e->getMessage()
                );
            }
            
            
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