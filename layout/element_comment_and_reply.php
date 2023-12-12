<?php 
    function getElementComment_($row){
        return "<div class='comment'>
                    <div class='card' style='width: 60%;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Post by: <span class='ms-2 me-3'>{$row['sender']}</span> <span style='font-size:10px;'>{$row['date']}</span></h5>
                            <p class='card-text'>{$row['comment']}</p>
                        </div>
                    </div>
                </div>";
    }
    function getElementReply($row){
      return    "<div style='width:60%;' class='d-flex justify-content-end mt-2'>
                    <div class='card ' style='width:90%;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Reply by: <span class='ms-2 me-3'>{$row['sender']}</span> <span style='font-size:10px;'>{$row['date']}</span></h5>
                            <p class='card-text'>{$row['comment']}</p>
                        </div>
                    </div>
                </div>";
    }
    function getInputReply($parentId){
        return    
            "<form class='replyForm' method='POST' id='replyForm' action='' >
                <div class='mt-2 mb-4' style='width: 60%;'>
                    <div class='form-group mb-2'>
                        <input value='$parentId' type='text' name='parentId' id='parentId' class='form-control' hidden='true' />
                    </div>
                    <div class='d-flex'>
                        <input name='replyComment' type='text' class='form-control' placeholder='Enter reply comment...' required>
                        <button type='submit'  id='idReply' class='idReply btn btn-primary float-end ms-2'>Reply</button>
                    </div>
                </div>
            </form>";
    }
?>