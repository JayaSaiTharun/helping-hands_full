$(document).ready(function (){
    display();
    
    function display(){
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            url: 'function.php',
            cache: false,  
            success: function(res){
                            $("#result").html(res);
                            $('#dtBasicExample').DataTable;                 
            }
        })
    }
})
