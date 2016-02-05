<?php
include("header.php");
?>
		<main>
			<div class="container">
				<div class="current">Question 1 of 5</div>
				<p class="question">What does PHP stands for</p>
				<form method = "post" action="process.php">
						<ul class="choices">
							<li><input name="choice" type="radio" value="1" />PHP HyperText Processor</li>
							<li><input name="choice" type="radio" value="1" />Personal Home page</li>
							<li><input name="choice" type="radio" value="1" />Personal HyperText Preprocessor</li>
						</ul>
						<input type="submit" value="Submit"/>
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