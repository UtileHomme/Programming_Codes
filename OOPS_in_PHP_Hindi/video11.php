<?php

    class Base
    {
        public function abc()
        {
            echo 'ABC method from Base Class';

        }
    }

    trait test
    {
        public function abc()
        {
            echo 'ABC method from test trait';
        }
    }

    class Child extends Base
    {
        // now the trait method will be called
        use test;

        //now the child class method will be called
        public function abc()
        {
            echo 'ABC method in Child class';
        }
    }

    $obj = new Child;

    $obj->abc();



?>
