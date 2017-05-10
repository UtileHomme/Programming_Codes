<!-- Non - Abstract classes -->

<?php

class BaseEmployee
{
    protected $firstname;
    protected $lastname;

    public function getFullName()
    {
        return $this->firstname." ".$this->lastname;
    }

    public function __construct($f,$l)
    {
        $this->firstname = $f;
        $this->lastname = $l;
    }
}

class FullTimeEmployee extends BaseEmployee
{
    protected $annualSalary;

    public function getMonthlySalary()
    {
        return $this->annualSalary/12;
    }
}

class ContractEmployee extends BaseEmployee
{

    protected $hourlyRate;
    protected $totalHours;

    public function getMonthlySalary()
    {
        return $this->hourlyRate * $this->totalHours;
    }
}

$ft = new FullTimeEmployee('Jatin','Sharma');

echo $ft->getFullName();

$ce = new ContractEmployee('Kritika','Sharma');
echo '<br />';
echo $ce->getFullName();
 ?>
