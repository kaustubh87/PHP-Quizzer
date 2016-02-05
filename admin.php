<?php
include("header.php");
?>

		<main>
			<div class="container">
				<h2>Add A Question</h2>
				<form method="post" action ="admin.php">
					<p>
						<label>Question Number</label>
						<input type="number" name="question_number" />
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