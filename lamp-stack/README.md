This is a README.md file for the ping module that is used to check whether the remote server is in response

*Clone this repository*
https://OCIWolfPack@dev.azure.com/OCIWolfPack/Ansible/_git/Ansible

cd lamp-stack

Make sure to replace the IP of your remote server in the inventory.ini file and the private-key for your VM instance

*And run the following command*

 - ansible-playbook -i inventory.ini lamp-depl.yaml and 

add the block of cmd to see the log for the last run *"  | tee logfile.log  "*

*To check the DB validation kindly log in to the MySQL by the following command*

 - mysql -u dharani -p people

and enter the password as *"  dharani  "*

now,  

Run the following query to check for the entries in the database

-     SHOW DATBASES;
      USE people;
      SHOW TABLES;
      SELECT * FROM users;


*If not run the following cmd in the repo to check fort he php validation*

 - php -S localhost:8055


*Now copy and nagivate to the desired ip and check fort h validation*
  ("https://localhost:8055/index.html")