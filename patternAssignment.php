<?php
//draw a  metrix and calculate row and column and  execute loop accordingly
for ($row=0; $row<5; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if ((($column == 1 or $column == 7) and $row != 0 and $row != 4) 
  or (($row == 0 or $row == 4) and $column > 1 and $column < 7)){
            echo "*";    
  }else { 
    echo "&nbsp;&nbsp;";   
  }  
	}        
  echo "</br></br>";
}
?>