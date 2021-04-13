<?php                                                     
                                                          
$a = new ArrayObject(array(), ArrayObject::STD_PROP_LIST);
    $a['arr'] = 'array data';                             
    $a->prop = 'prop data';                               
$b = new ArrayObject();                                   
    $b['arr'] = 'array data';                             
    $b->prop = 'prop data';                               
                                                          
// ArrayObject Object                                     
// (                                                      
//      [prop] => prop data                               
// )                                                      
print_r($a);                                              
                                                          
// ArrayObject Object                                     
// (                                                      
//      [arr] => array data                               
// )                                                      
print_r($b);                                              
                                                          
?>