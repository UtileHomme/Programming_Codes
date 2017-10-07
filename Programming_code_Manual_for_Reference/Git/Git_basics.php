<!-- What does "commit" mean -->

- When we "commit" we are taking a "snapshot" of the repository at that point in time , giving us a checkpoint to which we can reevaluate or restore the project to any previous state

** Git thinks about its data more like a stream of snapshots
** We do not need to depend on a network connection to commit our work etc.

<!-- The three states of Git -->

1. Committed
- data is safely stored in the local db

2. Modified
- we have changed the file but haven't commited it to the database

3. Staged
- marked a modified file as the one which will go into the next commit snapshot

<!-- How it looks -->
http://imgur.com/a/4ufqC

-- The Git directory is where Git stores the metadata and object db for the projects

<!-- Difference between Git and Github -->

<!-- Git -->
- is a version control system
- think of it as a series of snapshots (commits) of the code
- You see a path of these snapshots, in the order in which they were created

<!-- GitHub -->
- it is a web-page on which you can publish your Git repositories and collaborate with other people

<!-- Why we used Git -->

- If we encounter error between commits we can use the command, "git diff" to see the differences between the current code and the last working commit, helping us locate the error
- if we wish to make a change to the existing code , we can create a branch to test that functionality. If it works fine, merge it to the main branch

<!-- What does "git diff" do -->

- It shows the difference between the working directory and the "index"
- The index is the place where all files go after "git add" is done

<!-- What does "git diff --cached" do -->

- It shows the changes between the index and the HEAD(which is the last commit on the branch)
- This shows what has been added to the index and staged to the commit

<!-- What does "git diif HEAD" do -->

- shows all the changes between the working directory and the HEAD
- shows all the changes since the last commit whether or not they have been staged for commit or not

<!-- What is "origin" in git -->

- "Origin" is the alias on your system for a particular remote repository

Eg - git push origin branchname

- Remotes are alias that store the url of repositories
- it avoids the user to have to type the whole URL when prompting to push

<!-- Difference between "git fetch" and "git pull" -->

- git pull is a combination of git fetch and git merge

- "git fetch" gathers all the commits from the "target branch" that do not exist in the current branch and stores them in a local repository
- it doesn't merge them into the current branch
- this is important if we wish to keep our repository up to date, but are working on something that we do not wish to break if we update the files

<!-- What is the HEAD -->
- a reference to the last commit in the branch currently in use

<!-- What is a tag -->
- pointer to a specific commit which uniquely identifies a repository version.
- are used to revert to old versions when in need

<!-- What is index -->
- staging area
