<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>App42 Sample Php-PostgreSql Application</title>
<link href="css/style-User-Input-Form.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="App42PaaS_header_wrapper">
    	<div class="App42PaaS_header_inner">
        	<div class="App42PaaS_header">  
                <div class="logo"> 
                    <a href="http://app42paas.shephertz.com"><img border="0" alt="App42PaaS" src="images/logo.png"></img></a>
                 </div>     
            </div> 
    	</div>
	</div>
<!------------------------------------Header Closed------------------------------------------->
	<div class="App42PaaS_body_wrapper">
    	<div class="App42PaaS_body">
        	<div class="App42PaaS_body_inner">
            <div class="contactPage_title">
            	<table>
                	<thead class="table-head">
                    	<tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Description</td>
                        </tr>
                	</thead><tbody>
<?php 
//connection to the database

require_once "DBManager.php";
$client = new DBManager();

$result = $client->getAllDocs();
$numrows = pg_numrows($result);
for($ri = 0; $ri < $numrows; $ri++) {
	$row = pg_fetch_array($result, $ri);
	echo "<tr><td>" . $row['name']. "</td>";
	echo "<td>" . $row['email']. "</td>";
	echo "<td>" . $row['description']. "</td></tr>";
}

?>
</tbody>
         </table>
			<div align="left"></div><br/><br/><a href="index.php">Create Post</a>
            </div>
            </div>
    	</div>
    </div>
</body>
</html>