Simple Tables Install: Basic PHP / MySQL Simple Tables Install

Author - ic-myXMB

Notice: This project is submitted and shared "AS IS" in the hopes that folks may find it of some use and hopefully see it as a starting point to continue on with further and improve upon.


About: 

Primarily this project was created while only having a brief moment of free time, thus a casual brief moment was spent tinkering on the thoughts on a previously shared "Simple dot sql install" and thinking along the lines of: "say, what happens if one say does not want to do something like that .sql file method (additional file)? So what is just one of many really basic ways to not say do the .sql file method while yet do something somewhat similar with php and mysql as a really basic make tables file. On such thoughts, such can be done in many ways and this is but one really basic method and was only intended as a quick example of one basic method that one could drop such into a project quickly if so desired to quickly add setup tables and or say then modify further for table field inserts if say for example, one so desired.

Note: the very same 3 tables used in previous .sql file that the past .sql file example loaded is what this present example uses for example purposes. Stating such, if you desire to say change table info edit the source code to reflect your tables info, you can edit them within the source code to reflect your table infos if so desired and then drop such into your project quickly if desired. This simple project snippet is submitted and shared "AS IS".


Setup:

1) Simply upload the files contained within the "UPLOAD" directory:

and since we need a simple database connection you need to edit and add your database details in file: connect.php

Edit:

config/connect.php

2) you only need to edit this:

// Database credentials. Edit: dbusername, dbpassword, dbname

At:

// connect to server and select database

$mysqli = mysqli_connect("localhost", "testUser", "testPassword", "testDB");


* Optional: (related ONLY! persay, if after testing example tables you then say want to replace example tables used in code with your existing projects tables and or modify further for your own usages)

* Then you would visit the db-install.php file in a text or code editor to edit and replace table infos with alts infos for your own usages:

* db-install.php

* as you will note: there is already example table informations used in this project file in case you want to test out the db-install.php using such, but if not, then you would edit such and replace with your existing table informations.



3) Finally to execute, you then in your browser would visit:

db-install.php

to quickly install the db tables.

That is it! Simple enough, right?! Hopefully you may find such of interest or usage.


Final note:

If you say then wanted to add table inserts

You could do and expand upon something like:


For example say your table was auth_users and you wanted to insert a user in the db-install.php file.... Just for a basic example:


// insert a user

$sql_insert_user = "INSERT INTO auth_users VALUES('1', 'John', 'Doe', 'john@doeishaha.com', 'jdoe', PASSWORD('hahadoepass'))";

$insert_user_res = mysqli_query($mysqli, $sql_insert_user);

// if insert user res is true

if ($insert_user_res === TRUE) {

	// echo user insertion is a success

	echo "A user: ".$username." has been inserted.";

} else {

	// print insert user is a failure

	printf("Could not insert user: %s\n", mysqli_error($mysqli));

}
