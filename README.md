# TUFIKIANE
TUFIKIANE is a solution that is aimed at easening CSR events through bridging the gap between donors (one's donating) and recipients (one's who need donations)

To run the code above install Xampp application. DUring installation process ensure you select 'PHP' and 'MySQL'
Once the application is installed, navigate to the xampp folder in your local computer, inside the folder "xampp folder" locate "htdocs" folder. 
Clone the TUFIKIANE repository (download .zip file) and unzip inside the 'htdocs' folder above. NB: All files to be in one folder ie. TUFIKIANE or rename to your own.
Search for XAMPP application using search function on your computer, run the application. 
Once the application pop's up click on "Start" buttons of Apache and MySQL. Now proceed and click "Admin" button of MySQL only to be directed to the phpMyAdmin interface.
Create your account, take note of the password and username. 
Once your have access to your server/interface: Create a database (for me "user_db"). 
Now using your IDE i.e VS Code open i. register_form.php and take note of parameters inside the user_form1 brackets as shown: user_form1(name, email, password, user_type, org_name, org_address)
                                    ii. process_form1.php and take note of the parameters inside the recipient_info brackets as shown: recipient_info (organization, address, email, items, description)
                                    iii. submit_donations2.php and take note of the parameters inside the donations brackets as shown: donations (name, contact, location) VALUES ('$name', '$contact', '$location')";

Now proceed to create three tables under the same database (for me "donations", "recipient_info", "user_form1") and inside the tables insert the parameters above. NB: Basic knowledge of MySQL required. Refer to the documenation on how to create database tables. 

Incase of any authorization errors: Edit the .php files according with right cresidential details as per your sysem i.e username, password, server etc

Finally once everything is done, go to your browser (Google chrome or Edge) interface,  launch your application using: "localhost/TUFIKIANE1/index.html" (Type "localhost/", followed by your folder name where files are found ie "TUFIKIANE1", followed by "index.html"  and finall click enter to launch the application. 

Hurry you are on TUFIKIANE

