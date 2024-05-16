This is a README.md file for the the Docker, Terraform and Mysql DB installation and is used to check whether the remote server is in response

*Clone this repository*
 - git clone https://OCIWolfPack@dev.azure.com/OCIWolfPack/Ansible/_git/Ansible dev

 - cd docker-installation


*And run the following command*
 - "ansible-playbook -i inventory.ini terraform.yaml" 
 --ask-vault-password 

*Vault Password is*   "mg"


*For the Docker Installation Process run the following cmd*
  - "ansible-playbook -i inventory.ini docker-installation.yaml"

*For the Docker Cleaning Process run the following cmd*
  - "ansible-playbook -i inventory.ini docker-destroy.yaml"