
<form action="" name="dictionary" method="POST">

		<h4>Word :</h4>
		
	<?php if(isset($_POST['entry'])): ?>
			<input type="text" name="entry" value="<?php  echo $_POST['entry'] ?>"><br/><br/>
	<?php else: ?>
			<input type="text" name="entry" value=""><br/><br/>
	<?php endif; ?>
			<input type="submit" name="submit" value="Synonym" style="font-size:15;">

	<?php  synonym(); ?>


<?php

	 function synonym()
	 {
		if(  isset($_POST['entry']) && isset($_POST['submit']))
		{
			 $word=file('word.txt');
			 $syn=file('synonym.txt');
			 
			 $entry=explode('	',$word[0]);
			 $synonym=explode('	',$syn[0]);
			 for($i=0;$i<count($entry);$i++)
			 {
				
				 if(strtolower($_POST['entry'])==$entry[$i])
				 {
				   
					$found=1;

					break;
				 }
				 else
				 {
					$found=0;
				 }								
			 }
		   
			 if($found==1)
			 {
			 
				print "The synonym of ".'"'.ucfirst($_POST['entry']).'"'." is ".'"'.$synonym[$i].'"';
			 }
			 else
			 {
				print "Word not found";
			 }

		 }
		 
	 }

?>

</form>