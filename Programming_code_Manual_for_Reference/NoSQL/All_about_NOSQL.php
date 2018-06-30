<!-- Why NoSQL was required -->

<!-- Reference - https://www.youtube.com/watch?v=BgQFJ_UNIgw -->

** stands for "Not Only SQL"

In case of relational databases, a relationship exists between different aspects of the website.
- It is because of these relationships the website makes sense

- In a relational database, we need to know upfront what the structure or schema of the database is before we write data into it

- NoSQL represents a broad category of databases which allow large quantities of unstructured and semi-structured data to be stored and managed
- Additionally they are used to allow high levels of reads and writes while scaling horizontally

** NoSQL allows you to structure data but they don't require it upfront
- one can store data even though there isn't a logical category for it yet

** In the SQL case, whenever we receive some data from somewhere, we have to either change the data to suit our database model or we have to change the database model to suit our data
- this takes a lot of discipline and effort

** In case of NoSQL, we need not categorize the data beforehand; we can let it sit somewhere and categorize it later

Types of NoSQL databases

1. Document Store
- MongoDB
- store data similar to JSON (Javascript object notation)

2. Column Store
- optimized for reading and writing data in the forms of columns instead of rows
- good for analytics

3. Graph Database
- Everything here is a node and they can have relationships with other nodes through an edge
- used for Social Networks

4. Key value stores
- key value pairs

5. Hybrid Cache Store
- also a key value store but also stores temporary values
Eg - Redis

<!-- Reference - https://www.youtube.com/watch?v=uD3p_rZPBUQ&t=50s -->

** work well with big data and real-time web apps

<!-- What is Big Data -->

- it describes data sets that are so large that traditional methods of storage and processing are inadequate


<!-- Advantages of NoSQL over RDBMS -->

1. Handles Big data

2. Data Models
- they are extremely flexible
- no predefined schema

3. NoSQL handles unstructured data

4. NoSQL are cheaper to manage

5. Scaling out or horizontal scaling is very easy here

<!-- Scaling in/up (Relation Databases) and Scaling out (Non-Relational Databases) -->

https://imgur.com/a/HpRgoE5

** For scaling in , we need to add memories, storage, drives, CPU power, network ports which are very expensive

** For scaling out, we add clusters once the inital cluster has been completely used

<!-- Advantages of RDBMS over NoSQL -->

1. Better for Relational data

2. They use Normalization (which eliminates data redundancy)

3. Use Structured Query Language (SQL)

4. Maintains data integrity rules
- we won't be able to delete a post until we have deleted the author of the post as well

5. ACID compliance
- Atomicity, Consistency, Isolation and Durability

<!-- How do NoSQL databases help -->

<!-- Reference - https://www.youtube.com/watch?v=pHAItWE7QMU -->

1. Provide scalability

2. Provide performance

3. High Availability

<!-- Difference between RDBMS and NoSQL -->

https://imgur.com/a/xsjVfU3

https://imgur.com/a/XQxLDag

- unstructured data means video files, log files , audio files, text messages

https://imgur.com/a/4NXNZXC

<!-- What does NoSQL not have -->

1. No joins support

2. No complex transactions support

3. No constraints support

<!-- What does NoSQL have -->

1. Fast performance

2. Horizontal scalability

3. Query Language (apart from SQL)

<!-- When to use NoSQL databases -->

- The ability to store and retrieve great quantities of data is important

- Storing relationships between the elements is not important

- Dealing with growing lists of elements like Twitter posts, Internet server logs, Blogs

- Dealing with unstructured data or the structure is changing with time

- Prototypes or fast applications need to be developed

- constraints and validations logic is not required to be implemented in database

<!-- When Not to use NoSQL databases -->

- Complex transactions need to be handled

- Joins must be handled by databases

- Validations must be handled by databases
