<?php

// What is a shell

- text based user interface used to access an OS underlying services
- default shell is "bash"

// Where to change the alias commands

- Inside .bashrc

// What are environment variables

- a dynamic named variable that can affect the way processes behave on a computer

// Some common environment variables

1. HOME
    - contains the current user home directory

2. PATH
    - contains a list of directory paths
    - when the user types a command without providing the full path, "bash" will look at the directories in the PATH environment variable
    to see if they contain the given command

3. PS1
    - specifies how the prompt is displayed

4. EDITOR
    - specifies the default text editor

5. LANG
    - specifies the user language

// How to display the environment variables

- use the "env" command to see a list of current environment variables
- to display the value of a particular environment variable, simply echo it

echo $HOME

// What does the "PATH" variable contain

- a "delimited" list of directories

// What does the "PATH" variable do

- Let's say we type the "ls" command
- "PATH" looks for this command in all the "delimited" directories

- if "bash" reaches the end of the list and doesn't find the "ls" command, it gives "command not found" error

// How to unset an environment variable

- unset $PATH    
?>
