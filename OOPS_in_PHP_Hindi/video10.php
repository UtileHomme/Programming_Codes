<!-- Traits -->
<!-- Helps extend more than one class -->

<?php

    class abc
    {
        public function test()
        {
            echo 'Test from class ABC';
        }

        // public function test2()
        // {
        //
        // }
    }

    trait test
    {
        public function test2()
        {
            echo 'Test 2 method of test traits';
        }
    }

    //using multiple traits
    trait test2
    {
        public function test3()
        {
            echo 'Test 3 method of test2 trait';
        }
    }

    class one extends abc
    {
        use test,test2;
    }

    class two extends abc
    {
        //we don't want the second function of abc here only first
    }

    class three extends abc
    {
        use test,test2;
    }

$obj = new three;
echo $obj->test2().'<br />';
echo $obj->test3();

 ?>
