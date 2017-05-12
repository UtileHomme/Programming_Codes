<!-- Access Levels in Traits -->

<?php

    trait abc
    {
        private function xyz()
        {
            echo 'XYZ method from trait abc';
        }
    }

    trait def
    {
        private function xyza()
        {
            echo 'XYZA method from trait def';
        }
    }

    class test
    {
        //to access the private function of the above class, do this
        use abc
        {
            abc::xyz as public;
        }

        use def
        {
            //name of the fucntion can also be changed
            def::xyza as public abcxyz;
        }
    }

$obj = new test;
$obj->xyz();
echo '<br />';
$obj->abcxyz();

?>
