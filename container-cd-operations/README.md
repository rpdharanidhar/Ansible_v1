This is a README.md file for the the Docker, Terraform and Mysql DB installation and is used to check whether the remote server is in response

*Clone this repository*
 - git clone https://OCIWolfPack@dev.azure.com/OCIWolfPack/Ansible/_git/Ansible dev

 - cd container-cd-operations


*And run the following command to install all the containers specified*
 - "ansible-playbook -i inventory.ini docker-installation.yaml | tee logfile.log" 

 add the block of cmd to see the log for the last run *"  | tee logfile.log  "*

*For the Docker Cleaning Process run the following cmd*
  - "ansible-playbook -i inventory.ini docker-destroy.yaml | tee logfile.log"

  add the block of cmd to see the log for the last run *"  | tee logfile.log  "*