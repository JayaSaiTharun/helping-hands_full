
display();
    $("#hcd_add_slide").submit(function(e){
        e.preventDefault();
        var form = $(this)[0];
        var data = new FormData(form);
        var tab = $('#dtBasicExample').attr("data-tab");
        data.append('tab1', tab);
        console.log(data);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            url: 'upload_1.php',
            data:data,
            cache: false,  
            success: function(res){
                            alert(res);
                             if(res == "success"){
                                document.getElementById('hcd_add_slide').reset();
                                display();
                                
                            
                             }
                             else{
                                alert("no");
                             }
                        
            }
        })
    })
    $("#main_slide_form").submit(function(e){
        e.preventDefault();
        var form = $(this)[0];
        var data = new FormData(form);
        var tab = $('#dtBasicExample').attr("data-tab");
        data.append('tab1', tab);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            url: 'edit.php',
            data:data,
            success: function(response){
                alert(response);
                if($.trim(response) == 'success'){
                    
                    display();
                }   
                else{
                    alert("no");
                }             
            }
        })
    })
    
    function display(){
        var tab = $('#dtBasicExample').attr("data-tab");
        //alert(tab);
        var data ={'tab1':tab};
        $.ajax({
            type: "POST",
            url: 'function.php',
            data: data,
            cache: false,  
            success: function(res){
                             //console.log(res);
                             $("#result").html(res);
                             $('#dtBasicExample').DataTable();
                             
            }
        })
        
    }

function show2(idr){
    
    var id= idr.slice(1);
    var st= "#"+id;
    var x=$(st).html();
    var z=$(st).children();
    var a=$(z[0]).html();
    var b=$(z[1]).html();
    var y=$(z[2]).html();
    var c=$(y).attr("src");
    var tab = $('#dtBasicExample').attr("data-tab");
    console.log(c);
    $.ajax({
        url: "delete.php",
        method: "POST",
        data: { sno: id,
                src: c,
                tab1 : tab },
        success: function(response) {
            alert(response);
            if($.trim(response) == 'success'){
                display();
            }   
            else{
                alert("no");
            }    
        }
      });
    
}

function show(id){
    $('#main_slide_form')[0].reset();
    var st= "#"+id;
    var z=$(st).children();
    var a=$(z[0]).html();
    var b=$(z[1]).html();
    var y=$(z[2]).html();
    var c=$(y).attr("src");
    $("#edit_title").val(a);
    $("#edit_description").val(b);
    $("#edit_id").val(id+"#"+c);
}
function showgal(id){
    $('#main_slide_form')[0].reset();
    var st= "#"+id;
    var z=$(st).children();
    var a=$(z[0]).html();
    var b=$(z[1]).html();
    var c=$(b).attr("src");
    $("#edit_title").val(a);
    $("#edit_id").val(id+"#"+c);
}
function showmain(id){
    $('#main_slide_form')[0].reset();
    var st= "#"+id;
    var z=$(st).children();
    var a=$(z[0]).html();
    var b=$(z[1]).html();
    var c=$(z[2]).html();
    var d=$(z[3]).html();
    var y=$(d).attr("src");
    $("#edit_titlehead").val(a);
    $("#edit_title").val(b);
    $("#edit_description").val(a);
    $("#edit_id").val(id+"#"+y);
}
function show2main(idr){
    
    var id= idr.slice(1);
    var st= "#"+id;
    var x=$(st).html();
    var z=$(st).children();
    var a=$(z[0]).html();
    var b=$(z[3]).html();
    var c=$(b).attr("src");
    var tab = $('#dtBasicExample').attr("data-tab");
    console.log(c);
    $.ajax({
        url: "delete.php",
        method: "POST",
        data: { sno: id,
                src: c,
                tab1 : tab },
        success: function(response) {
            alert(response);
            if($.trim(response) == 'success'){
                display();
            }   
            else{
                alert("no");
            }    
        }
      });
    
}
function show2gal(idr){
    
    var id= idr.slice(1);
    var st= "#"+id;
    var x=$(st).html();
    var z=$(st).children();
    var a=$(z[0]).html();
    var b=$(z[1]).html();
    var c=$(b).attr("src");
    var tab = $('#dtBasicExample').attr("data-tab");
    console.log(c);
    $.ajax({
        url: "delete.php",
        method: "POST",
        data: { sno: id,
                src: c,
                tab1 : tab },
        success: function(response) {
            alert(response);
            if($.trim(response) == 'success'){
                display();
            }   
            else{
                alert("no");
            }    
        }
      });
    
}

function showweekly(id){
    $('#main_slide_form')[0].reset();
    var st= "#"+id;
    var z=$(st).children();
    var a=$(z[0]).html();
    var b=$(z[1]).html();
    var c=$(z[2]).html();
    var d=$(z[3]).html();
    var e=$(z[4]).html();
    var f=$(z[5]).html();
    var h=$(z[6]).html();
    var i=$(z[7]).html();
    $("#editofdate").val(a);
    $("#editweekly_no").val(b);
    $("#editpuc1").val(c);
    $("#editpuc2").val(d);
    $("#edite1").val(e);
    $("#edite2").val(f);
    $("#edite3").val(h);
    $("#edite4").val(i);
    $("#editid").val(id);    
}
function showicd(id){
    $('#main_slide_form')[0].reset();
    var st= "#"+id;
    var z=$(st).children();
    var a=$(z[0]).html();
    console.log(a);
    var c=$(a).attr("src");
    $("#edit_id").val(id+"#"+c);
}

function show2icd(idr){
    
    var id= idr.slice(1);
    var st= "#"+id;
    var x=$(st).html();
    var z=$(st).children();
    var a=$(z[0]).html();
    var b=$(z[1]).html();
    var y=$(z[2]).html();
    var c=$(a).attr("src");
    var tab = $('#dtBasicExample').attr("data-tab");
    console.log(c);
    $.ajax({
        url: "delete.php",
        method: "POST",
        data: { sno: id,
                src: c,
                tab1 : tab },
        success: function(response) {
            alert(response);
            if($.trim(response) == 'success'){
                display();
            }   
            else{
                alert("no");
            }    
        }
      });
    
}

function show2certificate(idr){
    
    var id= idr.slice(1);
    var st= "#"+id;
    var z=$(st).children();
    var a=$(z[0]).html();
    var b=$(z[1]).html();
    var c=$(a).attr("src");
    var d=$(b).attr("src");
    var tab = $('#dtBasicExample').attr("data-tab");
    console.log(c);
    $.ajax({
        url: "delete.php",
        method: "POST",
        data: { sno: id,
                src1: c,
                src2:d,
                tab1 : tab },
        success: function(response) {
            alert(response);
            if($.trim(response) == 'success'){
                display();
            }   
            else{
                alert("no");
            }    
        }
      });
    
}



function show2weekly(idr){
    
    var id= idr.slice(1);
    var st= "#"+id;
    var tab = $('#dtBasicExample').attr("data-tab");
    $.ajax({
        url: "delete.php",
        method: "POST",
        data: { sno: id,
                tab1 : tab },
        success: function(response) {
            alert(response);
            if($.trim(response) == 'success'){
                display();
            }   
            else{
                alert("no");
            }    
        }
      });
    
}