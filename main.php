Upload Files to GitHub
You have two ways:

A. Web Upload 

Open your GitHub repo.
Click Add file > Upload files.
Drag and drop your project files/folder structure.
Commit the changes.

B. Git CLI

git clone https://github.com/your-username/Networking-Project-Using-VM-and-PuTTY.git
cd Networking-Project-Using-VM-and-PuTTY
# Add your files
cp -r /path/to/your/project/* .
git add .
git commit -m "Initial project setup with UDC server installation and configuration"
git push origin main
