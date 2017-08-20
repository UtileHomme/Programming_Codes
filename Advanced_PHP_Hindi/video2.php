<!-- Namespaces  -->
<!-- We cannot declare the same named function  -->

<?phpnamespace def
{
    class xyz
    {
        public function __construct()
        {
            echo 'XYZ from DEF namespace';
        }
    }
}
//this is global namespace
namespace
{
    class xyz
    {
        public function __construct()
        {
        echo 'XYZ from Global Namespace';
        }
    }

    $obj = new xyz;

    $obj1 = new def\xyz();
}
?>
