This is a README.md file for the Jenkisn Installationa dn the OS update rot eh Ubuntu 

 - cd jenkins-installation

Make sure to replace the IP of your remote server in the .ini file

*And run the following command*

 - ansible-playbook -i inventory.ini jenkins-installation.yaml | tee logfile.log

*If you need to see the log then you can add the followinf cmd at the end*

 - | tee logfile.log