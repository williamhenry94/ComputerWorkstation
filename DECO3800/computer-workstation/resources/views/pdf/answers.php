<!DOCTYPE html>
<html>
<head>
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
	<title>PDF Answer</title>
</head>
<body>
	<div class="container">
		<table class="table table-fixed" border="1">
			<thead>
				<tr>
					<td>Question</td>
					<td>Answer</td>
				</tr>
			</thead>
			<tbody class="question-answer">
                <?php
                    foreach($datas as $data){
                        echo "<tr>";
                        echo "<td>";
                        echo $data["question"]["question"];
                        echo "</td>";
                        echo "<td>";
                        echo $data["answer"];
                        echo "</td>";
                        echo "</tr>";
                    }
                
                
                ?>
			</tbody>
		</table>
	</div>
<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
<!--	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
</body>
</html>>