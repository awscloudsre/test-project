sudo yum install python3-pip git -y <br/>
pip3 install wheel ansible boto3 docker --user
ansible-galaxy collection install community.aws --force-with-deps
ansible-playbook aws-ec2-deployment.yml
