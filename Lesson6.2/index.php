<?php



/*
MODES
"w" - opens the file if the file exists it overrides the content if it does not exist it creates a new one
"r" - opens the file in read mode (readonly)
"a" - opens the file if the file exists the pointer points in the end of the file and adds content
"x" - creates a new file
*/ 


$my_file = fopen("ds.txt", "w");
// CODE GOES HERE

fclose($my_file);



?>