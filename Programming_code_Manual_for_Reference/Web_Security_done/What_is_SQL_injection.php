<!-- What happens in SQL Injection -->

The query will mostly look like
    - SELECT * FROM USERS WHERE   USERNAME="TOM";

- It is possible the user might type "TOM"
- now the quotes do not match so an error occurs

    - What if someone does this
        - SELECT * FROM USERS WHERE USERNAME=" "tom";DROP ALL DATABASES;
        - We should use "escaping" to treat the "quotes" as a regular character

    - We can use mysql_real_escape_string();
    - But mostly, we should use "Prepared Statements"

    Eg - SELECT * FROM USERS WHERE USERNAME = ? / :USERNAME;
