<!-- How to initialize a folder with "git" -->

git init
    - initializes a new Git repository
    - Until we run this command it is a regular folder
    - this will make the folder accept further Git commands

git config
    - useful when we wish to set Git for the first time

git help
    - useful to get detailed information about commands
Eg - "git help init"

git add
    - ** This does not add new files to the repository
    - It brings new files to Git attention
    - After adding, these files are including in "Git's snapshots" of the repository

git status
    - checks the status of the repository
    - see which files are inside it, which changes still need to be committed and which branch of the repository we're currently working on

git commit -m "Message"
    - helps create a "snapshot" of the repository
    - the "-m" indicates that this should be read as a message

git branch "branchname"
    - helps build a new branch and work on your own part of the code

git checkout "repository name to checkout to"
    - allows one to checkout to a repository that we are not currently working inside

git merge "the repositorie's code that we want inside the current working repository"
    - used for merging into the current repository from another repository

git push
    - adding local changes to Github repository

git pull
    - to pull the updated Github repository code

<!-- How to set "username" for Git -->

- git config --global user.name "Your GitHub account name here"

<!-- How to set "email" for Git -->

- git config --global user.email "Your Git email name here"
