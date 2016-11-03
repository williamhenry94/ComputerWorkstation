<?php
    require_once "uq/auth.php";
    auth_require();
    $json=json_encode(auth_get_payload());
    
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/styling.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<!--		<link href="narrow-jumbotron.css" rel="stylesheet">-->
		<style type="text/css"></style>
        <style>
            .option{
                display: inline;
                margin-right: 10px;
            }
            .thumbnail{
                border: 0px;
                margin: 0px;
                padding: 0px;
            }
            .form-control{
                margin-bottom: 20px !important;
            }
            .list-group{
                max-height: 300px;
                overflow-y: auto;
            }
            .selected{
                display: inline;
                margin-right: 10px;
            }
            .pdf-link{
                float: right !important;
            }
            .checkbox{
                bottom: 20px !important;
                padding-left: 10px !important;
            }
            #location-column{
                padding-left: 0px;
                padding-right: 0px;
                
            }
            #label-location{
                padding-left: 0px;
                padding-right: 0px;
                padding-top: 5px;
            }

            
        </style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<script>
            var answers = new Object();
            var usersInfo= <?php echo $json;?>;
            var questionNum = 0;
            var nowId;
            var date;
            var userName='';
            var loc='';
            var userID='';
            var obj=new Object();
            function answerQuestion(){
//                var status=false;
                questionNum++;
//                var ansObj=new Object();
                var idLocal=arguments[0].split('|');
                answers[idLocal[1]]=idLocal[0];
//                ansObj.answer=arguments[0];
//                console.log(answers.indexOf(ansObj));
//                if(answers.length>0){
//                    for (var i=0;i<answers.length;i++){
//                        console.log(answers[i].id);
//                        if(answers[i].id==nowId){
//                            console.log('splice');
//                            answers.splice(i,1,ansObj);
//                            status=true;
//                            break;
//                        }
                        
//                    }
//                }else if(answers.length==0){
//                    console.log('push');
//                    answers.push(ansObj);
//                    status=true;
//                }
                
//                if(status==false){
//                    console.log('push');
//                    answers.push(ansObj);
//                }
                console.log(arguments);
                console.log("in-"+nowId);
                console.log(answers);
                

            }
            
            function getValue(){
                userName = usersInfo.email;
//                loc="Toowong";
                userID=usersInfo.user;
                console.log(userName);
//                console.log(loc);
                console.log(userID);
            }
            
            function saveName(){            
                
                date = new Date();
                $("#enterDetails").hide();
                $("#questions-collection").show();
                
//                $("#question1").show();
                
            }
		      
            $(document).ready(function(){
                checkFirst();
                function getQuestions(answerID,index){
                
                    $.get("http://ec2-52-221-232-152.ap-southeast-1.compute.amazonaws.com/computer-workstation/public/api/checklists",function(data,success,xhr){
                        if(success='success'){
                            var tmp=1;
                            
                            console.log(data);
                            var tempArray=[];
                            for (var i=0;i<data.length;i++){
                                var qPart=data[i];
                                var tools=qPart.tools;
    //                            for(var j=0;j<questions.length;j++){
    //                                var question=questions[j];
                                    var yes='answerQuestion("Yes|'+qPart.question_id+'")';
                                    var no='answerQuestion("No|'+qPart.question_id+'")';
                                    var div='<div id="'+qPart.question_id+'" class="question-panel text-center" style="display:none;">';
    //                                if(i==0 && j==0){
    //                                    div='<div id="'+question.question_id+'" class="text-center">';
    //                                }else{
    //                                    div='<div id="'+question.question_id+'" class="text-center" style="display:none;">';
    //                                }
                                    var miniObj=new Object();
                                    miniObj.question_id=qPart.question_id;
                                    miniObj.question=qPart.question;
                                    miniObj.no=i+1;
                                    miniObj.answer='';
                                    tempArray.push(miniObj);
//                                    console.log(div);
                                    $("#question-numbering").append('<a href="#" class="list-group-item question-number disabled" id="question-numbering|'+qPart.question_id+'">'
                                                                    +'Question '+tmp
                                                                    +'</a>'
                                    );
                                    $("#questions").append(div
                                                            +'<div class="panel panel-default">'
                                                            +'<div class = "panel-heading">'
                                                            +'<h3>Question '+tmp+'</h3>'
                                                            +'</div>'
                                                            +'<div class="panel-body">'
                                                            +'<div class="col-lg-3 col-md-3 col-sm-3">'
                                                            +'<div id="myCarousel-'+qPart.question_id+'" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">'
                                                            +'<div class="carousel-inner" role="listbox">'
                                                            +'<div class="item active">'
                                                            +'<img src="http://placehold.it/350x350" class="thumbnail">'
                                                            +'</div>'
                                                            +'<div class="item">'
                                                            +'<img src="http://placehold.it/350x350" class="thumbnail">'
                                                            +'</div>'
                                                            +'</div>'
                                                            +'<a class="left carousel-control" href="#myCarousel-'+qPart.question_id+'" role="button" data-slide="prev">'
                                                            +'<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>'
                                                            +'<span class="sr-only">Previous</span>'
                                                            +'</a>'
                                                            +'<a class="right carousel-control" href="#myCarousel-'+qPart.question_id+'" role="button" data-slide="next">'
                                                            +'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
                                                            +'<span class="sr-only">Next</span>'
                                                            +'</a>'
                                                            +'</div>'
                                                            +'</div>'
                                                            +'<div class="col-lg-9 col-sm-9 col-md-9">'
                                                            +'<p>'+qPart.question+'</p>'
                                                            +"<button type='button' onClick='"+yes+"' class='btn btn-success option "+qPart.question_id+"' id='yes|"+qPart.question_id+"'>&#10003;</button>"
                                                            +"<button type='button' onClick='"+no+"' class='btn btn-danger option "+qPart.question_id+"' id='no|"+qPart.question_id+"'>&#10005;</button>"
                                                            +'</div>'
                                                            +'</div>'
                                                            +'</div>'
                                                            +'</div>');
                                    tmp++;

                                    $('#table-qa').append('<tr>'
                                                         +'<td>'+qPart.question+'</td>'
                                                         +'<td class="userAnswer text-center" id="output|'+qPart.question_id+'"></td>'+
                                                         '</tr>');
    //                            }

                            }
                            if(index==0){
                                obj.QA=tempArray;
                            }
                            
                            if(index!==0){
                                var QA2=obj.QA;
                                for (var j=0;j<index;j++){
                                    $("#question-numbering\\|"+(data[j]).question_id).removeClass('disabled');
                                    var selected=QA2[j];
                                    if(selected.answer=='yes'){
                                        $('#yes\\|'+selected.question_id).removeClass('btn-success');
                                        $('#yes\\|'+selected.question_id).addClass('disabled');
                                    }else{
                                        $('#no\\|'+selected.question_id).removeClass('btn-danger');
                                        $('#no\\|'+selected.question_id).addClass('disabled');
                                    }
                                    $('#yes\\|'+selected.question_id).addClass('selected');
                                    $('#yes\\|'+selected.question_id).removeClass('option');
                                    $('#no\\|'+selected.question_id).addClass('selected');
                                    $('#no\\|'+selected.question_id).removeClass('option');
                                    
                                }
                            }
                            console.warn(obj);
                            
                            nowId=(data[index]).question_id;
                            $("#"+(data[index]).question_id).show();
                            $("#question-numbering\\|"+(data[index]).question_id).removeClass('disabled');
                            $("#question-numbering\\|"+(data[index]).question_id).addClass('active');
                            document.getElementById("questionCount").innerHTML= "Question " + (questionNum+1) + " of "+$('#questions').children().length;
                            
                            $(document).on('click','.question-number',function(){
                                console.log(nowId);
                                var idQN=this.id.split('|');
                                if(!$('#question-numbering\\|'+idQN[1]).hasClass('active') &&
                                  !$('#question-numbering\\|'+idQN[1]).hasClass('disabled')){
//                                    $('.active').removeClass('active');
                                    $('.question-number').removeClass('active');
                                    $('#question-numbering\\|'+idQN[1]).addClass('active');
                                    $(".question-panel").hide(); 
                                    nowId=idQN[1];
                                    $('#'+idQN[1]).show();
                                }
                             
                            });
                            
                            $(document).on('click','.selected',function(){
                                var idS=this.id.split("|");
                                if(idS[0]=='yes'){
                                    if(!$('#yes\\|'+idS[1]).hasClass('disabled')){
                                        $('#no\\|'+idS[1]).removeClass('disabled');
                                        $('#no\\|'+idS[1]).addClass('btn-danger');
                                        $('#yes\\|'+idS[1]).addClass('disabled');
                                        $('#yes\\|'+idS[1]).removeClass('btn-success');
                                    }
                                }else if(idS[0]=='no'){
                                     if(!$('#no\\|'+idS[1]).hasClass('disabled')){
                                        $('#no\\|'+idS[1]).removeClass('btn-danger');
                                        $('#no\\|'+idS[1]).addClass('disabled');
                                        $('#yes\\|'+idS[1]).removeClass('disabled');
                                        $('#yes\\|'+idS[1]).addClass('btn-success');
                                     }
                                }
                                console.log($('#questions').children().length);
                                for(var ii=0;ii<$('#questions').children().length;ii++){
                                    
                                    if($('#questions').children()[ii].id==idS[1]){
                                        ((obj.QA)[ii]).answer=idS[0];
                                        sessionStorage.setItem("collection",JSON.stringify(obj));
                                    }
                                    
                                }
                                
                                
                            });
                            
                            $(document).on('click','.option',function(){
                                console.log(this.id.split("|"));
                                var idS=this.id.split("|");
        //                        console.log(idS);
                                
                                
                                console.log(($('#questions').children().length)-questionNum);
                             
                                $("#"+idS[1]).hide(); 
                                nowId=idS[1];
                                $("#question-numbering\\|"+idS[1]).removeClass('active');
                                if(idS[0]=='yes'){
                                    $('#yes\\|'+idS[1]).removeClass('btn-success');
                                    $('#yes\\|'+idS[1]).addClass('disabled');
                                    
                                }else{
                                    $('#no\\|'+idS[1]).removeClass('btn-danger');
                                    $('#no\\|'+idS[1]).addClass('disabled');
                                    
                                }
                                
                                $('#yes\\|'+idS[1]).addClass('selected');
                                $('#yes\\|'+idS[1]).removeClass('option');
                                $('#no\\|'+idS[1]).addClass('selected');
                                $('#no\\|'+idS[1]).removeClass('option');
                                
                                for(var ii=index;ii<$('#questions').children().length;ii++){
                                    if($('#questions').children()[ii].id==idS[1]){
            //                            console.log(ii);
                                        console.warn(userName);
                                        try{
                                            document.getElementById("questionCount").innerHTML= "Question " + (questionNum+1) + " of "+$('#questions').children().length;
                                            $('#'+($("#questions").children()[ii+1]).id).show();
                                            $("#question-numbering\\|"+($("#questions").children()[ii+1]).id).removeClass('disabled');
                                            $("#question-numbering\\|"+($("#questions").children()[ii+1]).id).addClass('active');
                                            if(index==($('#questions').children().length)-1){
                                                answers[idS[1]]=idS[0];
                                            }
                                            
                                        }catch (error){
                                            $("#questionCount").remove();
                                            $('#question3').show();
                                            sessionStorage.clear();
                                            writeCheckList(answerID);
                                            break;

                                        }
                                        ((obj.QA)[ii]).answer=idS[0];
                                        console.log(((obj.QA)[ii]).answer);
                                        sessionStorage.setItem("collection",JSON.stringify(obj));
                                    }
                                }

                            });
                            }
                        });
                    }
                    function validate(){
//                        $('.form-control-danger').removeClass("form-control-danger");
//                        $('.has-danger').removeClass("has-danger");
                        getValue();
                        $('#emailError').empty();
                        $('#idError').empty();
                        $('#locationError').empty();
                        $.ajax({
                            type:'POST',
                            url:'http://ec2-52-221-232-152.ap-southeast-1.compute.amazonaws.com/computer-workstation/public/api/user/checklists',
                            contentType:'application/json; charset=UTF-8',
                            dataType:'json',
                            crossDomain:true,
                            xhrFields: {
                                withCredentials: false
                            },
                            data:JSON.stringify({"email":userName,"user_id":userID}),
                            success:function(data,status,xhr){
                                saveName();
                                getQuestions(data.answer_id,0);
                                obj.answer_id=data.answer_id;
                                obj.user_id=userID;
                                obj.email=userName;
                                
                            },
                            complete:function(status,xhr){
                                console.log(status);
                                if(xhr=='error'){
                                    
                                    var resp=status.responseJSON;
                                    var email=resp.email;
                                    var user_id=resp.user_id;
//                                    var location=resp.location;
                                    console.log(resp.email);
                                    try{
//                                        $('#nameInput').addClass("form-control-danger");
//                                        $('#group-email').addClass("has-danger");
                                        for(var i=0;i<email.length;i++){
                                            $('#emailError').append('<label class="form-control-label text-danger" for="nameInput">'+email[i]+'</label><br>');
                                        }
                                    }catch (error){
                                        console.log(error);
                                    }
                                    try{
//                                        $('#idInput').addClass("form-control-danger");
//                                        $('#group-id').addClass("has-danger");
                                        for(var i=0;i<user_id.length;i++){
                                            $('#idError').append('<label class="form-control-label text-danger" for="idInput">'+user_id[i]+'</label><br>');
                                        }
                                    }catch(error){
                                        console.log(error);
                                    }
//                                    try{
////                                        $('#location').addClass("form-control-danger");
////                                        $('#group-location').addClass("has-danger");
//                                        for(var i=0;i<location.length;i++){
//                                            $('#locationError').append('<label class="form-control-label text-danger" for="location">'+location[i]+'</label><br>');
//                                        }
//                                    }catch(error){
//                                        console.log(error)
//                                    }
                                    
                                }
                                
                            }
                            
                        });
//                        if(userName!=='' && userID!=='' && loc!==''){
//                            saveName();
////                            console.log(data);
//                            $("#"+(data[0]).question_id).show();
//                        }
                        
                    }
                        
                    function writeCheckList(answerID){
                        $("#questions-collection").hide();
                        var dataArray= new Array();
//                        var elements = document.getElementsByClassName("userAnswer");
                       
                        for(var key in answers){
                            if(answers.hasOwnProperty(key)){       
                                if(answers[key]=='Yes'){
                                    $('#output\\|'+key).append("&#10003;");
//                                elements[i].innerHTML = ;
                                
                                }else if(answers[key]=='No'){
                                    $('#output\\|'+key).append("&#10005;");
//                                elements[i].innerHTML = "&#10005;";
                                
                                }
                                dataArray.push(JSON.parse('{"answer":"'+answers[key]+'","question_id":"'+key+'"}'));

                            
                            }
                            
                            
                        }
                        console.log(dataArray);
                        if(userName==''){
                            document.getElementById("nameCheck").innerHTML = "Email: " +obj.email;
                        }else{
                            document.getElementById("nameCheck").innerHTML = "Email: " +userName;
                        }
                        if(userID==''){
                            userID=obj.user_id;
                        }
//                        
                        document.getElementById("date").innerHTML = "Assessment Date: " + date.toUTCString();
                        $(document).on("click","#submission-button",function(){
                            loc=$("#location").val();
                            var help=$('#help').is(':checked');
                            console.log(loc);
                            console.log(help);
                            sendReport(dataArray,answerID,userID,loc,help);
                        });
                        
                       
                     
                        
                        
                    }
                
                function sendReport(answers,answerID,userID,loc,help){
                    $.ajax({
                            type:'POST',
                            url:'http://ec2-52-221-232-152.ap-southeast-1.compute.amazonaws.com/computer-workstation/public/api/checklists',
                            contentType: 'application/json; charset=UTF-8',
                            dataType:'json',
                            crossDomain:true,
                            xhrFields: {
                                withCredentials: false
                            },
                            data:JSON.stringify({"answers":answers,"answer_id":answerID,"user_id":userID,"location":loc,"help":help}),
                            success:function(data,status,xhr){
                                console.warn(data);
//                                if(data.message=='success'){
                                toastr.options={"positionClass": "toast-bottom-right"};
                                toastr.success('Your assessment has been sent', '');
                                $("#location-selection").hide();
                                $("#pdf").empty();
                                $("#pdf").append("<a href='http://ec2-52-221-232-152.ap-southeast-1.compute.amazonaws.com/computer-workstation/public/pdf/"+answerID+"' class='pdf-link'>Save as PDF</a>");
//                                sessionStorage.clear();
//                                }

                            },
                            complete:function(status,xhr){
                                console.log(xhr);
                                if(xhr!=='success'){
                                    toastr.options={"positionClass": "toast-bottom-right"};
                                    toastr.error("Your assessment can't be sent", '');
                                    
                                }
                            }
                        });
                }
                
                function checkFirst() {
                    if(sessionStorage.length>0){
                        var collection=sessionStorage.getItem('collection');
                        var jsonObj=JSON.parse(collection);
                        var answerID=jsonObj.answer_id;
                        var QA=jsonObj.QA;
                        obj=jsonObj;
                        var page=0;
                        answers=new Array();
                        for (var i=0; i<QA.length;i++){
                            var questions=QA[i];
                            console.log(QA[i]);
                            
                            if(questions.answer=='yes'){
                                nowId=questions.question_id;
                                console.warn('called yes');
                                answerQuestion("Yes|"+questions.question_id);

                                continue;
                            }else if(questions.answer=='no'){
                                nowId=questions.question_id;
                                console.warn('called no');
                                answerQuestion('No|'+questions.question_id);

                                continue;
                            }else if(questions.answer==''){
                                console.warn(questions.no);
                                page=questions.no;
                                break;
                            }
                            console.log(questionNum);
                            
                        }
                        
//                        questionNum=page-1;
                        saveName();
                        getQuestions(answerID, page-1);

                    }else{
                        validate();
                    }
                }

               
        });
		</script>
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
                <li><a href="Index.html">Home</a></li>
                <li><a href="SymptomChecker.html">Symptom Checker</a></li>
                <li><a href="WorkStationAssessment.php">Workstation Assessment</a></li>
                <li><a href="Exercises.html">Exercises</a></li>
<!--                <li><a href="SetupGuide.html">Ergonomic Guide</a></li>-->
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
             
    </div>
	<div class="container" id="container_x">
        <p id="questionCount"></p>
<!--
                <div class="list-group">
                  <a href="#" class="list-group-item active">
                    Cras justo odio
                  </a>
                  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                  <a href="#" class="list-group-item">Morbi leo risus</a>
                  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                  <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
-->

        <div id="enterDetails" class="panel panel-default text-center" style="display:none;">
            <div class="panel-body">
                <h1>Please Enter the Detail</h1>
<!--                <p id="warning" class="text-danger" style="display:none;">Please Fill in The Form!</p>-->
                <form>
                    <div class="form-group" id="group-id">
                        <div id="idError"></div>
                        <label for="idInput" class="col-sm-2 control-label">ID</label>
                        <div class="col-sm-10">
                            <input id="idInput" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group" id="group=email">
                        <div id="emailError"></div>
                        <label for="nameInput" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input id="nameInput" type="email" class="form-control">
                        </div>
                    </div>
<!--
                    <div class="form-group" id="group-location">
                        <div id="locationError"></div>
                        <label for="location" class="col-sm-2 control-label">Location</label>
                        <div class="col-sm-10">
                            <input id="location" type="text" class="form-control">
                        </div>
                    </div>
-->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-default enter">Enter</button>
                        </div>
                    </div>
                </form>


            </div>

        </div>
        <div class="row" id="questions-collection" style="display:none;">
            <div class="col-sm-12 col-lg-4 col-md-4">
                  <div class="list-group" id="question-numbering">
<!--
                      <a href="#" class="list-group-item active">
                        Cras justo odio
                      </a>
                      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                      <a href="#" class="list-group-item">Morbi leo risus</a>
                      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                      <a href="#" class="list-group-item">Vestibulum at eros</a>
-->
                    </div>
            
            </div>
            <div id="questions" class="col-sm-12 col-lg-8 col-md-8"></div>
        </div>

<!--
		<div id="question1" class="text-center">
			<h1>Question 1</h1>
			<p> Is your chair adjustable, comfortable, in good condition, and does it have a stable 5 star castor base?</p>
            <div class="button">
                <button type="button" onClick="answerQuestion('Yes')" class="btn btn-success btn-block">Yes</button>
                <button type="button" onClick="answerQuestion('No')" class="btn btn-danger btn-block">No</button>
            </div>
		</div>
-->
<!--
		<div id="question2" class="text-center" style="display:none;">
			<h1>Question 2</h1>
			<p>Can you adjust the height of your chair so that the underside of your elbow is about the same height as the top 
			of your desk, with forearms parallel to the floor and comfortably supported during mousing/keying?</p>
            <div class="button">
                <button type="button" onClick="answerQuestion('Yes')" class="btn btn-success btn-block">Yes</button>
                <button type="button" onClick="answerQuestion('No')" class="btn btn-danger btn-block">No</button>
            </div>
		</div>
-->
		<div id="question3" style="display:none;">
			<h1 class="text-center">Your Computer Workstations Self-Assessment Check-list</h1>
            <div>
				<p id="nameCheck"></p>
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4">
				        <p id="date"></p>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-5" id="location-selection">
                        <div class="form-group">
                            <label for="location" class="col-sm-2" id="label-location">Faculty</label>
                            <div class="col-sm-6" id="location-column">
                                <select id="location" class="form-control">
                                    <option value="BEL" selected>Business, Economics & Law</option>
                                    <option value="EAIT">Engineering, Architecture & Information Technology</option>
                                    <option value="Science">Science</option>
                                    <option value="HASS">Humanities and Social Sciences</option>
                                    <option value="MBS">Medicine and Biomedical Sciences</option>
                                    <option value="HABS">Health and Behavioural Sciences</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox col-sm-4">
                                <label>
                                    <input type="checkbox" id="help"> Request help
                                </label>
                            </div>
                        </div>                       
                    </div>
                    <div class="col-md-3 col-sm-12 col-lg-3" id="pdf">
                        <a href="#" class="btn btn-primary" id="submission-button">Submit</a>
                    </div>
                </div>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Question</th>
						<th class="text-center">Answer</th>
				</thead>
					<tbody id="table-qa">
<!--
					<tr> 
						<td>Is your chair adjustable, comfortable, in good condition, and does it have a stable 5 star castor base?</td>
						<td class="userAnswer text-center"></td>
					</tr>
					<tr>
						<td>Can you adjust the height of your chair so that the underside of your elbow is about the same height as the top 
						of your desk, with forearms parallel to the floor and comfortably supported during mousing/keying?</td>
						<td class="userAnswer text-center"></td>
					</tr>
-->
				</tbody>
			</table>
		</div>
	</div>
	</body>
</html>