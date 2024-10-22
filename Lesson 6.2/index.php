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

//Set the name of the file to be opened
fclose($my_file);

//open the file for reading
$my_filename = "ds.txt";

//get size of the file
$my_file = fopen($my_filename, "w");

//get size of file
$my_size = filesize($my_filename);

//execute the fread function and to do so we need the name and size of file
$my_filedata = fread($my_file, $my_size);

//EXAMPLE2

//open the file example.txt for reading using fopen function
$file = fopen("example.txt" , "r");

//use a whole loop to read each line  of the file using fgets and print it on the screen

while(!feof($file)){
    echo fgets($file) . "<br>";
}

//close the file using the fclose function
fclose($file);


//open a file named "ds.txt" for writing
//if a file does not exists, it will be created
//the file needs to be opened in writing mode

$my_filename = "ds.txt";

$myfile = fopen($my_filename , "w");

$my_text = "Digital school \n ";

//Write the text 

fwrite($my_file, $my_text);

echo $my_file;

// create a anew file text

$h = fopen("data.txt", "w");
fwrite($h, 'test text 1');

$handle = fopen("data.txt", "a+");
fwrite($handle, "\nAdd more lines to the file");
fclose($handle);















?>