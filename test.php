<?php 
abstract class AbstractClass
{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    public function printOut()
    {
        print $this->getValue()."\n" ;
    }
}
class ConcreteClass1 extends AbstractClass
{
    protected function getValue()
    {
        return "ConcreteClass1";
    }
    public function prefixValue($prefix)
    {
        return "{$prefix}Concreteclass1";
    }

}
class ConcreteClass2 extends AbstractClass
{
    protected function getValue()
    {
        return "ConcreteClass 2";
    }
    public function prefixValue($prefix)
    {
        return "{$prefix}Concreteclass2";
    }
}
$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_')."\n";
$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_')."\n";
?> 