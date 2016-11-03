<?php
    require_once "uq/auth.php";
    auth_require();
    
    $json=json_encode(auth_get_payload());
    
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Prototype</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styling.css">
<!--		<link href="narrow-jumbotron.css" rel="stylesheet">-->
	<style>
		.table-fixed thead {
		  width: 100%;
		}
		.table-fixed tbody {
		  height: 230px;
		  overflow-y: auto;
		  width: 100%;
		}
		.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
		  display: block;
		}
		.table-fixed tbody td, .table-fixed thead > tr> th {
		  float: left;
		  border-bottom-width: 0;
		}
        .navbar-inverse .navbar-nav > .open > a{
            background-color: transparent !important;
        }
        .save-pdf{
            margin-left: 20px;
            text-align: right;
        }

	</style>
</head>
<body>
        <div class="container">
         <nav class="navbar navbar-inverse navbar-fixed-top" style="background-image:linear-gradient(to bottom,#6A2885 0,#3B3040 100%);padding-bottom: 10px;padding-top: 10px;">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
        <!--              <img src="images/masthead-logo-BB9-1-new.png">-->
                <img src="https://static.uq.net.au/v1/logos/corporate/uq-logo-white.svg">
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav pull-right">
                <li><a href="DataBaseInterface.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span id="full-name"></span> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
                  </ul>
                </li>
<!--                <li><span id="full-name"></span></li>-->
               
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        </div>
		<div class="container" id="container_x">
            <?php
                if(auth_get_payload()["email"]=="l.ritchie@uq.edu.au" || auth_get_payload()["email"]=="j.cooper8@uq.edu.au" ||
                    auth_get_payload()["email"]=="s4412906@student.uq.edu.au"){
            ?>
            <div id="enterDetails" class="panel panel-default text-center">
                <div class="panel-body">
                    <h1>Workstation Assessment Database</h1>
                    ID: <input id="idInput" type="text">
                    <table class="table table-fixed">
                        <thead>
                        <tr>
                            <th class="col-md-3">Answer ID</th>
                            <th class="col-md-2">Student ID</th>
                            <th class="col-md-3">Email</th>
                            <th class="col-md-2">Date Submitted</th>
                            <th class="col-md-2">Date Completed</th>
                        </tr>
                        </thead>
                        <tbody class="results">
                        </tbody>
                    </table>
                </div>	
            </div>
	   </div>
        <div id="answer" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Answer Form 
    <!--                <a href="#" class="btn btn-primary save-pdf">Save as PDF</a>-->
                </h4>
              </div>
              <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Question</td>
                            <td>Answer</td>
                        </tr>
                    </thead>
                    <tbody class="question-answer">
                    </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
    <?php
        }else{
    ?>
    <h1 class="text-danger">No permission</h1>
    </div>
    <?php
        }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        
        var json=<?php echo $json;?>;
        
//        var temp='';
        $(document).ready(function(){
            $("#full-name").text(json.firstname +" "+json.lastname);
            <?php
                if(auth_get_payload()["email"]=="l.ritchie@uq.edu.au" || auth_get_payload()["email"]=="j.cooper8@uq.edu.au" ||
                    auth_get_payload()["email"]=="s4412906@student.uq.edu.au"){
            ?>
            doSearch('');
            $("#idInput").keyup(function(){
                console.log($(this).val());
                doSearch($(this).val());
                
            });
            
            function doSearch(value){
                $.get('http://ec2-52-221-232-152.ap-southeast-1.compute.amazonaws.com/computer-workstation/public/api/view?query='+value,function(data,status,xhr){
                console.log(data); 
                $('.results').empty();
                if(status=='success'){
                    for (var i=0;i<data.length;i++){
                        var answer=data[i];
                        var user=answer.user;
                        $('.results').append('<tr>'+
                                            '<td class="col-md-3"><a href="#" class="button-modal" data-toggle="modal" data-target="#answer" id="'+answer.answer_id+'">'+answer.answer_id+'</a></td>'+
                                            '<td class="col-md-2">'+answer.user_id+'</td>'+
				                            '<td class="col-md-3">'+user.email+'</td>'+
				                            '<td class="col-md-2">'+answer.created_at+'</td>'+
                                            '<td class="col-md-2">'+answer.completed_at+'</td>'+
                                            '</tr>');
                        }
                    }
                });
            }
            
            $(document).on("hidden.bs.modal", function (e) {
                $(e.target).removeData("bs.modal").find(".question-answer").empty();
//                $('.save-pdf').attr("href","#");
            });
            
            $(document).on("click",".button-modal",function(){
                
                $.ajax({
                    type:'GET',
                    dataType:'json',
                    url:"http://ec2-52-221-232-152.ap-southeast-1.compute.amazonaws.com/computer-workstation/public/api/detail/"+this.id,
                    contentType:'application/json; charset=UTF-8',
                    crossDomain:true,
                    xhrFields: {
                        withCredentials: false
                    },
                    success: function(data,status,xhr){
                        console.log(data); 
//                        temp=data;
                        for (var i=0; i<data.length; i++){
                            var obj=data[i];
                            console.log(obj);
                            var question=obj.question;
                            $(".question-answer").append("<tr>"
                                                        +"<td>"+question.question+"</td>"
                                                        +"<td>"+obj.answer+"<td>"
                                                        +"</tr>");
                        }
//                        $('.save-pdf').attr("href","test.php?answers="+encodeURIComponent(JSON.stringify(data)));
                        
//                        $(document).on('click','.save-pdf',function(){
//                        
//                            $.ajax({
//                                type:'POST',
//                                url:'test.php',
//                                contentType:'application/json; charset=UTF-8',
//                                dataType:'json',
//                                data:JSON.stringify({"answers":data}),
//                                success:function(data,status,xhr){
//    //                                        console.log(status); 
//                                    window.open('test.php','_blank');
////                                    window.open("data:application/pdf;base64, " + data);
//                                },
//                                complete:function(status,xhr){
//                                    console.log(status);
//                                }
//                            });
//                            
//                        });
                    
                    },
                    error:function(xhr, textStatus, errorThrown){
                        temp='';
                        $(".question-answer").append("<tr>"
                                                    +"<td colspan='2'>No answers submitted</td>"
                                                    +"</tr>");
                    }
                });
            
            });
            <?php
                }
            ?>
            
        });
    </script>
    

</body>
</html>
