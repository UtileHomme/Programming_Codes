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
-
