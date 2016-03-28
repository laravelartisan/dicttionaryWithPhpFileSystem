
<?
if(isset($_REQUEST['submit'])&&isset($_REQUEST['entry']))
{
 $word=file('word.txt');
 $syn=file('synonym.txt');
 for($i=0;$i<count($word);$i++)
 {
 
 if(strtolower($_REQUEST['entry'])==$word[$i])
 {
   
      
	  print $syn[$i]; 
   break;
 }
 }
   
 }



?		>