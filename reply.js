$(document).ready(function(){

    catchEventForInputReply();
    function catchEventForInputReply(){
        var $j_object = $(".replyForm");
        $j_object.each(function(){
            $(this).on('submit', function(event){
                event.preventDefault();
                // alert('catch event submit success')
                
                var formData = $(this).serialize();
                $.ajax({
                    url: "reply.php",
                    method: "POST",
                    data: formData,
                    // dataType: "json",
                    success:function(response) {
                        if(!response.error) {
                            $('#replyForm')[0].reset();
                            // alert('reply.php response ok!')
                            showComments();
                        } else if(response.error){
                            alert('reply.php response fail')
                        }
                        
        
                    }
                    
                })
            });
            
               
        })         
    }
   
    function showComments() {
        $.ajax({
            url:"show_comments.php",
            method:"POST",
            success:function(response) {
                // alert('show comments function')
                $('#showComments').html(response);
                catchEventForInputReply();
            }
        })
    }
});
// export default catchEventForInputReply