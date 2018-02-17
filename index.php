Place your code here
<style>
#people {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#people td, #people th {
    border: 1px solid #ddd;
    padding: 8px;
}

#people tr:nth-child(even){background-color: #f2f2f2;}

#people tr:hover {background-color: #ddd;}

#people th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</style>

<?php
$people =array(
array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

echo "<table id='people'>";
echo "<caption>List of People - (Developed by:Navpreet)</caption>";
echo "<tr><th>Id</th><th>First Name</th><th>Last Name</th> <th>Email</th></tr>";
for($row=0;$row<count($people);$row++)
{
	echo "<tr>";
	echo "<td>".$people[$row]['id']."</td>";
	echo "<td>".$people[$row]['first_name']."</td>";
	echo "<td>".$people[$row]['last_name']."</td>";
	echo "<td>".$people[$row]['email']."</td>";
	echo "</tr>";
}
echo "</table>";
?>
