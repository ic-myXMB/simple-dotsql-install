Simple .SQL Install: Basic PHP / MySQL Simple .sql Install

Author - ic-myXMB

Notice: This project is submitted and shared "AS IS" in the hopes that folks may find it of some use and hopefully see it as a starting point to continue on with further and improve upon.


Setup:

Simply upload the files contained within the "UPLOAD" directory:

Edit:

config/connect.php

you only need to edit this:

// Database credentials. Edit: dbusername, dbpassword, dbname

At:

// connect to server and select database

$mysqli = mysqli_connect("localhost", "testUser", "testPassword", "testDB");

Then you would visit the sql file to edit for your own usages:

sql/db.sql

* as you will note: there is already example table informations in this file in case you want to test out the db-install.php using such, but if not, then you would edit such and replace with your existing table informations.

IF, you opted as suggested to edit the .sql file with your own dbs tables and such then you  would need to edit the db-install.php file to reflect that table diff, as such you would only edit this line:

$verify_sql = "SHOW TABLES LIKE 'forum_posts'";

And change 'forum_posts'

To whatever the table is you may have and want the install script to check for. Hopefully that makes sense.

Finally to execute, you then in your browser would visit:

db-install.php

to install the db tables.

That is it! Simple enough, right?! Hopefully you may find such of interest or usage.

