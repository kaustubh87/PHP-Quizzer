<?php
include("header.php");?>
<?php session_start();?>
		<main>
			<div class="container">
				<h2>You have completed the test. Congratulations</h2>
				<p>Final Score is <?php echo $_SESSION['score']; ?></p>
				<a href="questions.php?n=1" class="startquiz">Retake the test</a>
				
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
<?php unset($_SESSION['score']); ?>
<?php session_destroy(); ?>