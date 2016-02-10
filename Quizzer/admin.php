
<?php
include("header.php");
include("database.php");
?>
<?php 
if(isset($_POST['submit']))
{
			//GET Post Variables

		$question_number = $_POST['question_number'];
		$question_text = $_POST['question_text'];
		$correct_choice = $_POST['correct_answer'];

		//choices array

		$choices = array();
		$choices[1] = $_POST['choice1'];
		$choices[2] = $_POST['choice2'];
		$choices[3] = $_POST['choice3'];
		$choices[4] = $_POST['choice4'];
		$choices[5] = $_POST['choice5'];

		//Insert Queries (Question)

		$query = "INSERT INTO `questions` (question_number,question_text) VALUES ('$question_number','$question_text')";

		$insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);

		//Validate insert
		if($insert_row)
		{
			//Insert choice query

			foreach ($choices as $choice => $value) {
				if($value != '')
				{
						if($correct_choice == $choice){
							$is_correct = 1;
						}
						else
						{
							$is_correct = 0;
						}

						$query = "INSERT INTO `choices` (question_number,is_correct, text) VALUES('$question_number','$is_correct','$value')";
						$insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);

						if($insert_row)
						{
							continue;
						}
						else
						{
							die('Error : (' .$mysqli->errno. ') ' .$mysqli->error);
													}
				}
			}

			$msg = 'Question has been added successfully';
			
		}

}


$query ="SELECT * from questions";

$result = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $result->num_rows;
$next = $total+1; 

?>
		<main>
			<div class="container">
				<h2>Add A Question</h2>
				<?php  if(isset($msg))
				{
					echo '<p style="background:green;">'.$msg.'</p>';

				}
				?>
				<form method="post" action ="admin.php">
					<p>
						<label>Question Number</label>
						<input type="number" value="<?php echo $next;?>" name="question_number" />
					</p>
					<p>
						<label>Question Text</label>
						<input type="text" name="question_text" />
					</p>
					
					<p>
						<label>Choice #1</label>
						<input type="text" name="choice1" />
					</p>
					
					<p>
						<label>Choice #2</label>
						<input type="text" name="choice2" />
					</p>
					
					<p>
						<label>Choice #3</label>
						<input type="text" name="choice3" />
					</p>
					
					<p>
						<label>Choice #4</label>
						<input type="text" name="choice4" />
					</p>
					
					<p>
						<label>Choice #5</label>
						<input type="text" name="choice5" />
					</p>
					<p>
						<label>Correct Answer</label>
						<input type="number" name="correct_answer" />
					</p>
					<input type="submit" name="submit" value="Submit">
				</form>
				
				
			</div>
		
		</main>

	<footer>
		<div class="container">
			Copyright &copy; 2016, Kaustubh Vinzanekar
		</div>
	</footer>
	
  </body>
</html>