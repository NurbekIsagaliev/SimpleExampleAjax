<?php
$q = intval($_GET['q']);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = mysqli_connect('localhost','root','','demo');
$sql="SELECT * FROM ajax_demo WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['hometown'] . "</td>";
  echo "<td>" . $row['job'] . "</td>";
  echo "</tr>";
}
echo "</table>";

/*
create  table on mysql :
"CREATE TABLE ajax_demo (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    age int(11) NOT NULL,
    hometown VARCHAR(30) NOT NULL,
    job VARCHAR(30) NOT NULL
    ) "
insert  values to  table on mysql:
"INSERT INTO ajax_demo (firstname, lastname, age, hometown, job) VALUES
            ('Ivan', 'Ivanov', 30, 'Moskow', 'designer'),
            ('Stepan', 'Stepanov', 32, 'Kiev', 'manager'),
            ('Maxim', 'Maxsimov', 33, 'London', 'boss'),
            ('Irina', 'Sidorova', 35, 'Varshava', 'programmer')";

*/






