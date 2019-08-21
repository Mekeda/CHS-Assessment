<html>
 <head>
  <title>Continuum Health Solutions Assessment</title>
 </head>
 <body>
 <?php 

// If using MySQL as backend database, you would query the database by creating a connection as such:
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "dbname";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// } 

// You then substitute the PHP array creation statement with a query to the server, with a while loop linking
// through the SQL query by row until the a set time limit or until the database is completely parsed through
// into a usable array within PHP, in this case $table, which is a nested array.

 	$table = array (
    'itemID' => array(
        1,2,3,4,5,6,7,8,9,10,11,12
    ),
    'item' => array(
        'Item1','Item2','Item3','Item10','Item11','Item12','Item100','Item101','Item102','Item30','Item31','Item32'
    ),
    'subItemOfID' => array(
        0,0,0,1,1,1,4,4,4,3,3,3
    )
);
outputChild(0, $table);

// Outputs child items recursively
// integer $parentItemID Parent item itemID
// array   $table        Table Data (itemID, item, and subItemOfID)

function outputChild($parentItemID, array $table)
{

// Obtain the child nodes of the array that are associated with subItemOfID relative to
// the initial itemID. This associates the children to a parent key allowing them to be
// correctly nested into a list.

    $children = array();
    foreach ($table['itemID'] as $key => $value) {
        if ($table['subItemOfID'][$key] == $parentItemID) {
            $children[] = $key;
        }
    }

    // Output children and grandchildren
    if (!empty($children)) {
        echo '<ul>';
        foreach ($children as $childKey) {
            echo '<li>';
            echo $table['item'][$childKey];
            // Prevent infinite recursion if itemID equals subItemOfID
            if ($table['itemID'][$childKey] != $table['subItemOfID'][$childKey]) {
                outputChild($table['itemID'][$childKey], $table);
            }
            echo '</li>';
        }
        echo '</ul>';
    }
} 
?> 
 </body>
</html>