<!-- Late static binding -->

<!-- Compile time is when all errors show up. Also all variables are replaced with their values -->
<!-- Late static binding involves doing the above at run time -->
<?php

    static $abc = 'I am ABC variable';
    echo $abc;
    echo '<br />';
 ?>

<?php

class DB
{
    protected static $table = 'baseTable';
    public function select()
    {
        echo 'SELECT * FROM '.static::$table;
    }

    public function insert()
    {
        echo "INSERT INTO".static::$table;
    }
}

$db = new DB;
echo '<br />';
$db->select();
echo '<br />';
echo '<br />';
$db->insert();
echo '<br />';
class abc extends DB
{
    //we want a different table name here
    protected static $table = 'abc';
}

$abc = new abc;
$abc->select();

 ?>
