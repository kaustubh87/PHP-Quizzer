<?php
include("header.php");
include("database.php");?>
<?php session_start();?>
<?php

//Get Question Number
$number = (int) $_GET['n'];

$query ="SELECT * from questions";

$result = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $result->num_rows;

/*Get Question*/

$query = "SELECT * from `questions` WHERE question_number = $number";



/*Get Result*/

$result = $mysqli->query($query) or die($mysqli->error._LINE_);

$question = $result->fetch_assoc();


/*Get Answers */

$query = "SELECT * FROM `choices` WHERE question_number = $number";

$choices = $mysqli->query($query) or die($mysqli->error._LINE_);


?>
		<main>
			<div class="container">
				<div class="current">Question <?php echo $question['question_number'];?> of <?php echo $total;?></div>
				<p class="question"><?php echo $question['question_text'];?></p>
				<form method = "post" action="process.php">
						<ul class="choices">
							<?php while($row = $choices->fetch_assoc()):?>
								<li><input name="choice" type="radio" value="<?php echo $row['id'];?>" /><?php echo $row['text'];?></li>
						    <?php endwhile; ?>
						</ul>
						<input type="submit" value="Submit"/>
						<input type="hidden" name="number" value="<?php echo $number;?>"/>
				</form>
					
				
				</div>
			</div>
		
		</main>

	<footer>
		<div class="container">
			Copyright &copy; 2016, Kaustubh Vinzanekar
		</div>
	</footer>
	
  </body>
</html>