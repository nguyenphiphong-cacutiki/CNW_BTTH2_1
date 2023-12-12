<?php
    include_once("db_connect.php");
    include_once 'layout/element_comment_and_reply.php';
    $commentQuery = "SELECT id, parent_id, comment, sender, date FROM
        comment WHERE parent_id = '-1' ORDER BY id DESC";
    $stmt = $conn->prepare($commentQuery);
    $stmt->execute();
    $arrRes = $stmt->fetchAll();
    // get comments and reply
    $commentHTML = '';
    foreach($arrRes as $row){
        $commentHTML .= (getElementComment_($row)
                        .getCommentReply($conn, $row['id'])
                        .getInputReply($row['id']));
    }
    echo $commentHTML;

    function getCommentReply($conn, $id){
        $html = '';
        $stmt = $conn->prepare("select * from comment where parent_id = '$id'");
        $stmt->execute();
        $replys = $stmt->fetchAll();
        foreach($replys as $row){
            $html .= getElementReply($row);
        }
        return $html;
    }
?>