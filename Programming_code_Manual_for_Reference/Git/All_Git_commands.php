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

<!-- How to undo the "files" added using "git add" -->

<!-- - To undo "individual" files , do this -->

- git reset <file_name>

<!-- - To unstage all the changes , do this -->

- git reset

<!-- How to check the names of files which are getting added -->

- git add -n .

<!-- How to unstage changes just before the first commit -->

- git rm --cached <file_names>

<!-- How to check which files have been staged -->

- git diff --cached (this will show the changes along with the names)

- git diff --cached --name-only(this will show the names of the files only)

- git diff --cached --name-status(this will show the statuses like newly added as well as the ones)

*** "cached" gives the difference in respect to the HEAD

<!-- How to remove git tracking from a folder -->

rm -rf .git

- "r" is for recursive
- it will delete the entire content without erroring out because the folder is not empty
- "f" is not to ask for deleting the stuff

<!-- How to check the various remotes -->

- git remote -v
