sudo apt update -y
sudo apt install python3-pip -y
sudo pip3 install ansible
sudo ansible-galaxy collection install community.aws --force-with-deps