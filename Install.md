sudo yum install python3-pip git -y <br/>
pip3 install wheel ansible boto3 docker --user <br/> 
ansible-galaxy collection install community.aws --force-with-deps <br/> 
ansible-playbook aws-ec2-deployment.yml<br/>
