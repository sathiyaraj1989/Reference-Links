<?php

/**
 * @author 
 * @copyright 2018
 */

$myArray = array(
    array('status' => '1', 'link' => '123', 'oid' => '001'),
    array('status' => '1', 'link' => '123', 'oid' => '002'),
    array('status' => '1', 'link' => '123', 'oid' => '003'),
    
    array('status' => '0', 'link' => '124', 'oid' => '004'),
    array('status' => '0', 'link' => '124', 'oid' => '005'),
    array('status' => '0', 'link' => '124', 'oid' => '006'),
    
    array('status' => '1', 'link' => '125', 'oid' => '007'),
    array('status' => '1', 'link' => '125', 'oid' => '008'),
    array('status' => '0', 'link' => '125', 'oid' => '009'),
    
    array('status' => '1', 'link' => '126', 'oid' => '010'),
    array('status' => '0', 'link' => '126', 'oid' => '011'),
    array('status' => '1', 'link' => '126', 'oid' => '012')
);

echo '<pre>'; print_r($myArray);

/*
Expected Output: 

$outputArray = Array
(
    [0] => Array
        (
            [status] => 1
            [link] => 123
            [oid] => 001
            [grp] => Array 
            (
                [0] => Array
                    (
                        [status] => 1
                        [link] => 123
                        [oid] => 001
                    )

                [1] => Array
                    (
                        [status] => 1
                        [link] => 123
                        [oid] => 002
                    )
            
                [2] => Array
                    (
                        [status] => 1
                        [link] => 123
                        [oid] => 003
                    )
            )
        )
        
    [1] => Array
        (
            [status] => 1
            [link] => 124
            [oid] => 004            
        )
        
    [2] => Array
        (
            [status] => 1
            [link] => 125
            [oid] => 007
            [grp] => Array 
            (
                [0] => Array
                    (
                        [status] => 1
                        [link] => 123
                        [oid] => 001
                    )

                [1] => Array
                    (
                        [status] => 1
                        [link] => 123
                        [oid] => 002
                    )
            )
        )
       
    [3] => Array
        (
            [status] => 1
            [link] => 126
            [oid] => 010
            [grp] => Array 
            (
                [0] => Array
                    (
                        [status] => 1
                        [link] => 123
                        [oid] => 010
                    )

                [1] => Array
                    (
                        [status] => 1
                        [link] => 123
                        [oid] => 012
                    )
            )
        ) 
    

*/

?>