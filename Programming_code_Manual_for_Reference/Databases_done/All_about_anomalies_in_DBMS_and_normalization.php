<!-- What are the various anomalies that can occur in a table -->

<!-- Reference - https://www.youtube.com/watch?v=K5P-2-oWXqs&index=14&list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV -->

<!-- Reference table -->
https://imgur.com/a/TSEMGZt

<!-- Idea behind the above table structure -->
- In the table student info, we have tried to store entire data about the student

<!-- Result -->
- Entire branch data of the branch must be repeated for every student of the branch

<!-- Redundancy -->
- When same data is stored multiple times unnecessary in the database

<!-- Disadvantages -->

1. Insertion, deletion and modification anomalies

<!-- Insertion -->
- when a certain data(attributes) cannot be inserted into the database, without the presence of another data

Eg -
We won't be able to store a CIVIL branch student here, until we have a student from a Civil branch

<!-- Deletion -->
- If we delete some data(unwanted) and it causes us to delete some other data (wanted)

Eg -
When we try to delete a student from Mech branch, we will have to delete the details about the branches too

<!-- Updation -->
- When we want to update single piece of data, but it must be done at all places

Eg - We want to change the name of the HOD, but we have to do it at all of its copies

2. Data Inconsistency
- During updation, some of the places updation was done but some places it wasn't
- This leads to data inconsistency

3. Increase in database size and increase in time(slow)

<!-- Normalization in a nutshell   -->

<!-- Reference - https://www.youtube.com/watch?v=px7HV91fx2I&index=15&list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV -->

<!-- Normalized table -->

https://imgur.com/a/oAVARHO

- normalization means decomposing a table so that each table creates a single idea
- it is done on the basis of functional dependencies

Branch and Student info are segregated in the above database structure

<!-- First Normal Form -->

<!-- Reference - https://www.youtube.com/watch?v=CedOasDoe-w&list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV&index=16 -->

- A table is said to be in First Normal Form if every cell contains atomic value
- There should not be more than one value in a particular column

<!-- Second Normal Form -->

<!-- Reference - https://www.youtube.com/watch?v=80CcB9_HSxU&list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV&index=17 -->

<!-- How to convert into 2nd Normal Form -->

<!-- Reference - https://www.youtube.com/watch?v=Wx5CzybyLXA&list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV&index=19&t=0s -->

<!-- Reference - https://www.youtube.com/watch?v=yIN6k57OB3U&list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV&index=20&t=0s -->
