<?php
include("header.php");
include("database.php");

$query ="SELECT * from questions";

$result = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $result->num_rows;

?>
		<main>
			<div class="container">
				<h1>Test your IQ</h1>
				<p>The test consists of multiple choice questions to test your knowledge of PHP.</p>
				
				<ul>
					<li><strong>Number of questions: </strong><?php echo $total;?></li>
					<li><strong>Type: </strong>MCQ</li>
					<li><strong>Estimated Time: </strong><?php echo $total * 1;?> mins</li>
				</ul>
			<a href="questions.php?n=1" class="startquiz">Take Quiz</a>
			</div>
		
		</main>

	<footer>
		<div class="container">
			Copyright &copy; 2016, Kaustubh Vinzanekar
		</div>
	</footer>
	
  </body>
</html>