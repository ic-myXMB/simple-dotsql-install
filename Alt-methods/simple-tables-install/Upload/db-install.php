<?php
/*
* Basic Tables Install Method
* Author - ic-myXMB
* Make Tables File
* This is the db-install.php
*/

// CONNECT

// include the connect file

include("config/connect.php");

// doDB function

doDB();

// BEGIN

    // do begin html display block

    $display_block = "	<!DOCTYPE html>
	<html lang=\"en\">
	<meta charset=\"UTF-8\">
	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
	<head>
	<title>Install Tables</title>
	</head>
	<body>
	<h1>Installation:</h1>";
    
    // echo display block 

    echo $display_block;


// SETUP FORUM_CATEGORIES TABLE

//  now query if `forum_categories` table is present

// so verify the `forum_categories` table exists or not

$verify_categories_table_exists_sql = "SHOW TABLES LIKE 'forum_categories'";

// verify result

$verify_categories_table_exists_result = mysqli_query($mysqli, $verify_categories_table_exists_sql) or die(mysqli_error($mysqli));

// This is `forum_categories` TABLE INFORMATION

// do display block about it

$display_block = "
	<div style=\"color:#333333;margin-bottom:15px;padding:10px;\"><h2 style=\"padding-left:10px;\">Table: forum_categories</h2></div>";

// echo display block about it

echo $display_block;

// verify result returns `forum_categories` table exists

if (mysqli_num_rows($verify_categories_table_exists_result) == 1) {

	// the table: `forum_categories` already exists
    
    // do display block about it

	$display_block = "
	<div style=\"background-color:#FFE0E0;border:1px solid #A33A3A;color:#BA3939;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">The table: `forum_categories` already exists.</h3></div>";

    // echo display block about it

    echo $display_block;

	// thus the table: `forum_categories` will not be created
    
    // do display block about it

    $display_block = "
	<div style=\"background-color:#C9DDFF;border:1px solid #4C699B;color:#204A8E;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">Thus, the table: `forum_categories` will not be created.</h3></div>";
    
    // echo display block about it

    echo $display_block;

} else {

  // verify result returns `forum_categories` table does not exist

  if (mysqli_num_rows($verify_categories_table_exists_result) < 1) { 
      	
	 // result returns `forum_categories` table does not exist so create

	 // the table: `forum_categories` does not exist
     
     // do display block about it

	 $display_block = "
	<div style=\"background-color:#FFFBD1;border:1px solid #87803E;color:#756E15;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">The table: `forum_categories` does not exist.</h3></div>";

     // echo display block about it 

	 echo $display_block;

	 // thus the table: `forum_categories` can now be created
     
     // do display block about it

	 $display_block = "
	<div style=\"background-color:#C9DDFF;border:1px solid #4C699B;color:#204A8E;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">Thus, the table: `forum_categories` will now be created.</h3></div>";
     
     // echo display block about it 

	 echo $display_block;

	 // so, create the `forum_categories` table & fields

	 $sql_create_categories_table = "CREATE TABLE forum_categories (category_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, category_title VARCHAR(150), category_description TEXT, category_create_time DATETIME, category_owner VARCHAR(150))";

	 $create_categories_table_result = mysqli_query($mysqli, $sql_create_categories_table);

	   // if create `forum_categories` table result is true

	   if ($create_categories_table_result === TRUE) {

		 // echo the `forum_categories` table creation is a success

		 // the table: `forum_categories` was successfully created

	   	// do display block about it

		 $display_block = "
	<div style=\"background-color:#ECFFD6;border:1px solid #617C42;color:#2B7515;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">The table: `forum_categories` was successfully created.</h3></div>";

         // echo display block about it 

	     echo $display_block;

	    } else {

	     // print the `forum_categories` table creation is a failure

		 printf("Could not create the table: %s\n", mysqli_error($mysqli));

	    }

    }

}

// SETUP FORUM_TOPICS TABLE

//  now query if `forum_topics` table is present

// so verify the `forum_topics` table exists or not

$verify_topics_table_exists_sql = "SHOW TABLES LIKE 'forum_topics'";

// verify result

$verify_topics_table_exists_result = mysqli_query($mysqli, $verify_topics_table_exists_sql) or die(mysqli_error($mysqli));

// This is `forum_topics` TABLE INFORMATION

// do display block about it

$display_block = "
	<div style=\"color:#333333;margin-bottom:15px;padding:10px;\"><h2 style=\"padding-left:10px;\">Table: forum_topics</h2></div>";

// echo display block  about it

echo $display_block;

// verify result returns `forum_topics` table exists

if (mysqli_num_rows($verify_topics_table_exists_result) == 1) {

	// the table: `forum_topics` already exists
    
    // do display block about it

	$display_block = "
	<div style=\"background-color:#FFE0E0;border:1px solid #A33A3A;color:#BA3939;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">The table: `forum_topics` already exists.</h3></div>";

    // echo display block about it

    echo $display_block;

	// thus the table: `forum_topics` will not be created
    
    // do display block about it

    $display_block = "
	<div style=\"background-color:#C9DDFF;border:1px solid #4C699B;color:#204A8E;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">Thus, the table: `forum_topics` will not be created.</h3></div>";
    
    // echo display block about it

    echo $display_block;

} else {

  // verify result returns `forum_topics` table does not exist

  if (mysqli_num_rows($verify_topics_table_exists_result) < 1) { 
      	
	 // result returns `forum_topics` table does not exist so create

	 // the table: `forum_topics` does not exist
     
     // do display block about it

	 $display_block = "
	<div style=\"background-color:#FFFBD1;border:1px solid #87803E;color:#756E15;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">The table: `forum_topics` does not exist.</h3></div>";

     // echo display block about it 

	 echo $display_block;

	 // thus the table: `forum_topics` can now be created
     
     // do display block about it

	 $display_block = "
	<div style=\"background-color:#C9DDFF;border:1px solid #4C699B;color:#204A8E;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">Thus, the table: `forum_topics` will now be created.</h3></div>";
     
     // echo display block about it 

	 echo $display_block;

	 // so, create the `forum_topics` table & fields

	 $sql_create_topics_table = "CREATE TABLE forum_topics (topic_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, category_id INT NOT NULL, topic_title VARCHAR(150), topic_description TEXT, topic_create_time DATETIME, topic_owner VARCHAR(150))";

	 $create_topics_table_result = mysqli_query($mysqli, $sql_create_topics_table);

	   // if create `forum_topics` table result is true

	   if ($create_topics_table_result === TRUE) {

		 // echo the `forum_topics` table creation is a success

		 // the table: `forum_topics` was successfully created

	   	// do display block about it

		 $display_block = "
	<div style=\"background-color:#ECFFD6;border:1px solid #617C42;color:#2B7515;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">The table: `forum_topics` was successfully created.</h3></div>";

         // echo display block about it 

	     echo $display_block;

	    } else {

	     // print the `forum_topics` table creation is a failure

		 printf("Could not create the table: %s\n", mysqli_error($mysqli));

	    }

    }

}

// SETUP FORUM_POSTS TABLE

//  now query if `forum_posts` table is present

// so, verify the `forum_posts` table exists or not

$verify_posts_table_exists_sql = "SHOW TABLES LIKE 'forum_posts'";

// verify result

$verify_posts_table_exists_result = mysqli_query($mysqli, $verify_posts_table_exists_sql) or die(mysqli_error($mysqli));

// This is `forum_posts` TABLE INFORMATION

// do display block about it

$display_block = "
	<div style=\"color:#333333;margin-bottom:15px;padding:10px;\"><h2 style=\"padding-left:10px;\">Table: forum_posts</h2></div>";

// echo display block about it 

echo $display_block;


// verify result returns `forum_posts` table exists

if (mysqli_num_rows($verify_posts_table_exists_result) == 1) {

	// the table: `forum_posts` already exists
    
    // do display block about it

	$display_block = "
	<div style=\"background-color:#FFE0E0;border:1px solid #A33A3A;color:#BA3939;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">The table: `forum_posts` already exists.</h3></div>";
    
    // echo display block about it 

	echo $display_block;

	// thus the table: `forum_posts` will not be created

	// do display block about it

    $display_block = "
	<div style=\"background-color:#C9DDFF;border:1px solid #4C699B;color:#204A8E;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">Thus, the table: `forum_posts` will not be created.</h3></div>";
    
    // echo display block about it 

    echo $display_block;

	// since is last table and table already exists, such denotes tables creation ignored, so make note 

	// do display block about it

    $display_block = "
	<div style=\"margin-bottom:15px;padding:5px;\"><h4 style=\"padding-left:10px;\">Database tables already installed! Thus, no table installation is required. <br /><br />As such: <a href=\"index.php\" style=\"background-color:#FFE0E0;border: 1px solid #A33A3A;color:#A33A3A;padding: 4px;border-radius:3px;\">EXIT</a> to begin.</h4></div>";

    // echo display block about it

   echo $display_block;


} else {

  // verify result returns `forum_posts` table does not exist

  if (mysqli_num_rows($verify_posts_table_exists_result) < 1) { 
      	
	 // result returns `forum_posts` table does not exist so create

	 // the table: `forum_posts` does not exist

  	// do display block about it

	 $display_block = "
	<div style=\"background-color:#FFFBD1;border:1px solid #87803E;color:#756E15;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">The table: `forum_posts` does not exist.</h3></div>";
     
     // echo display block about it 

	 echo $display_block;

	 // thus the table: `forum_posts` can now be created

	 // do display block about it

	 $display_block = "
	<div style=\"background-color:#C9DDFF;border:1px solid #4C699B;color:#204A8E;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">Thus, the table: `forum_posts` will now be created.</h3></div>";
     
     // echo display block about it

	 echo $display_block;

	 // so, create the `forum_posts` table & fields

	 $sql_create_posts_table = "CREATE TABLE forum_posts (post_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, topic_id INT NOT NULL, category_id INT NOT NULL, post_text TEXT, post_create_time DATETIME, post_owner VARCHAR(150))";

	 $create_posts_table_result = mysqli_query($mysqli, $sql_create_posts_table);

	   // if create `forum_posts` table result is true

	   if ($create_posts_table_result === TRUE) {

		 // echo the `forum_posts` table creation is a success

		 // the table: `forum_posts` was successfully created

	   	// do display block about it

		 $display_block = "
	<div style=\"background-color:#ECFFD6;border:1px solid #617C42;color:#2B7515;margin-bottom:15px;padding:5px;border-radius:3px;\"><h3 style=\"padding-left:10px;\">The table: `forum_posts` was successfully created.</h3></div>";
         
         // echo display block about it

		 echo $display_block;


		 // since is last table, such denotes tables as thus done, so make note 

		 // do display block about it

         $display_block = "
	<div style=\"margin-bottom:15px;padding:5px;\"><h4 style=\"padding-left:10px;\">Database tables just installed! <br /><br />You can now: <a href=\"index.php\" style=\"background-color:#ECFFD6;border: 1px solid #617C42;color:#2B7515;padding: 4px;border-radius:3px;\">EXIT</a> to begin.</h4></div>";

		 // echo display block about it

		 echo $display_block;

	    } else {

	     // print the `forum_posts` table creation is a failure

		 printf("Could not create the table: %s\n", mysqli_error($mysqli));

	    }

    }

}

// close mysqli connection

mysqli_close($mysqli);

    // do end body & html display block

    $display_block = "
	</body>
	</html>";

	// echo display block

	echo $display_block;

	// END

	// ding, dong, da basic page is done!

?>
