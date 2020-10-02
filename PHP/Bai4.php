<?php 
class Test { 
    protected $member; 
    function __construct($member) { 
        $this->member = $member; 
    } 
    function __toString() { 
        return ("Test member.\n"); 
    } 
} 
$x = new Test(1); 
print $x; 
?>