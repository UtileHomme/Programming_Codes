<?php
// <!-- How to initialize a folder with "git" -->

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
- see which files are inside it, which changes still need to be committed and which branch of the repository we are currently working on

git commit -m "Message"
- helps create a "snapshot" of the repository
- the "-m" indicates that this should be read as a message

git commit -a -m "Message"
- this will stage and commit in one command only

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

// <!-- How to set "username" for Git -->

- git config --global user.name "Your GitHub account name here"

// <!-- How to set "email" for Git -->

- git config --global user.email "Your Git email name here"

// How to undo the local changes made to any file even "before staging"

- git checkout <file_name>

-- This will remove whatever lines you must have added recently
-- Note : you did not add this file to the staging area yet

// <!-- How to undo the "files" added using "git add" -->

// <!-- - To undo "individual" files , do this -->

- git reset <file_name>

// <!-- - To unstage all the changes , do this -->

- git reset

// <!-- How to check the names of files which are getting added -->

- git add -n .

// <!-- How to unstage changes just before the first commit -->

- git rm --cached <file_names>

// <!-- How to check which files have been staged -->

- git diff --cached (this will show the changes along with the names)

- git diff --cached --name-only(this will show the names of the files only)

- git diff --cached --name-status(this will show the statuses like newly added as well as the ones)

*** "cached" gives the difference in respect to the HEAD

// <!-- How to remove git tracking from a folder -->

rm -rf .git

- "r" is for recursive
- it will delete the entire content without erroring out because the folder is not empty
- "f" is not to ask for deleting the stuff

// <!-- How to check the various remotes -->

- git remote -v

// <!-- How to use git-rebase command -->

Scenario:

There are two developers presently collaborating on a project. Let their names be "T" and "J".

- "J" started the project and "T" was added as a collaborator at a later stage. "T" clones the project and both start working.
- "J" adds some code on Line 2 and pushes the code. "T" adds some code on the same line and after adding and committing has to "PULL"

- "T" should use the following commands:

- git pull --rebase origin master

// <!-- MESSAGE received -->
From https://github.com/UtileHomme/Dummy_for_Learning_Git
* branch            master     -> FETCH_HEAD
First, rewinding head to replay your work on top of it...
Applying: MAde changes to the same line
Using index info to reconstruct a base tree...
M	tanvi.in
Falling back to patching base and 3-way merge...
Auto-merging tanvi.in
CONFLICT (content): Merge conflict in tanvi.in
Failed to merge in the changes.
Patch failed at 0001 MAde changes to the same line
The copy of the patch that failed is found in:
/home/scrabbler/My_Files/Programming_Related/Dummy_for_Learning_Git/.git/rebase-apply/patch

When you have resolved this problem, run "git rebase --continue".
If you prefer to skip this patch, run "git rebase --skip" instead.
To check out the original branch and stop rebasing, run "git rebase --abort".

- After "T" has resolved the conflicts, he/she should add the files. Then:

- git rebase --continue (this will change the rebase id back to the branch we are currently on)

- git rebase --abort (if we realize that we do not want to incorporate the changes from remote yet, then use this. It will undo all conflicts that might have been
raised during git rebase and will bring back the local copy to the point before we applied git pull --rebase)

- git rebase --skip(this will skip any changes that we have made in the recent commit. This is a process used to resolve the conflicts by skipping our commits and keeping
everything from upstream that might have caused the conflict)

// <!-- How to make changes to the "Commit message" when erroneously entered -->

Scenario:
Let us say we have accidently added a commit message. We wish to change the wordings for it. Do this:

    //ensure that there are no staged files (i.e. some files added after the erroneous commit). If there are any, they will also be sent with this commit
    - git commit --amend -m "New Commit Message"

    // How to undo any commits made previously

    Scenario 1: We have added the files to staging area and we have also committed. We realised we did not want to commit yet but we want to retain the changes

    A - B - C (presently HEAD is at C)

    Use this:

    - git reset --soft HEAD~1

    - This will bring the HEAD to B but we will still see "C" though the HEAD is not there
    - the files will not be "unstaged" ,.i.e., we do not have to add them again but we have commit them after making any changes

    Use this:

    - git reset HEAD~1

    - This will also do the above thing
    - Here the files will be "unstaged" and we have to "add and commit" all over again

    Scenario 2: We have to added the files to the staging area and we have also committed. We realised neither do we want the commits, nor the staged files and FINALLY not even the
    local copy changes

    Use this:

    - git reset --hard HEAD~1

    // How to bring non-linear histories back into the linear history

    If at any point of time, any commit goes out of the linear history , do this:

    git rebase -i <sha_id_which_is_causing_the_non_linear_behaviour>

    --conflicts may come up here
    ?>
