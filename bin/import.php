#!/usr/bin/env php

<?php
   
  //argumrny argv[1] == the relative path 
  
   print($argv[1]);

   if (!file_exists($file))
   {
     print("The file you chose does not exist.");
   }
   else
   {
       fopen($file, "r");
   }
?>
