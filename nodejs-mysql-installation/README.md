This is a README.md file for the ping module that is used to check whether the remote server is in response

*Clone this repository*
 - git clone https://OCIWolfPack@dev.azure.com/OCIWolfPack/Ansible/_git/Ansible dev

 - cd nodejs-mysql-installtion

Make sure to replace the IP of your remote server in the inventory.ini file and the private-key for your VM instance

*And run the following command*

 - ansible-playbook -i inventory.ini mysqldb-oracle-linux.yaml --ask-vault-password | tee logfile.log

 *Vault Password is*   "mg"

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


=======================================================================================================================
"*To install the nodejs in the slave machine run the following commands*"

 - ansible-playbook -i inventory.ini oracle-linux-node.yaml| tee logfile.log 

 add the block of cmd to see the log for the last run *"  | tee logfile.log  "*

*The above gives the output of the node version installed*
