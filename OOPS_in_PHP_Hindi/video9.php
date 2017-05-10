<!-- Polymorphism -->

<?php
function my_autoloader($class) {
    include_once 'classes/'. $class .'.php';
}

spl_autoload_register('my_autoloader');

function getLogger($type)
{
    switch($type)
    {
        case 'file': return new FileLogger();
                        break;
        case 'database' : return new DBLogger();
                        break;
    }
}

$logger = getLogger('file');
$profile = new UserProfile($logger);
$profile->createUser();

?>
