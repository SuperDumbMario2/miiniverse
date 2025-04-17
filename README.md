# Miiniverse
A miiverse clone on PHP with least features and IP auth. Unrelated to the one that I teased on my server an MVClonapedia Discord. (This is not Minverse or Miniverse)
# WARNING
This is not a very high-quality code. I am still learning PHP and made it just as a side project, please do not tell me this is bad as i already know it. Also this is fully procedural code so if you're not a fan of procedural code you will not like this code.
Please do **NOT** rehost this. If someone finds a SQL vulnerability or some other vulnerability that gives access to IPs, etc then you can get yourself and a lot of other people doxxed (I know that IPs do not give away actual location and in most cases are easily changeable but still IP leaks are bad). This was made only as a proof-of-concept.

# How to install
Upload the entrie repo to the root of your server.

After this create a db and import the "miniverse.sql" file.

Then, set up the dbconnect.php file to connect to your DB.

If you done all steps correctly you now have a instance of Miiniverse!

Please note there is no administrative functions yet so you have to use PHPMyAdmin for now.
