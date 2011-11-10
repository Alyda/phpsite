<?php include_once $_SERVER['DOCUMENT_ROOT'] . 
'/phpsite/includes/helpers.inc.php'; ?>


	

<head>
		
	<title>Clients</title>
		
	<meta http-equiv="content-type"
	content="text/html; charset=utf-8"/>

	<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
	

<body>

<h1>Clients</h1>
	
<p><a href="?addclient">Add new client</a></p>


<table>
<tr>
<th>Name</th>
<th>E-mail</th>
<th>Address</th>
<th>Phone Number</th>
<th>Options</th>
</tr>

<?php foreach ($clients as $client): ?>
	

<tr>
	<td><?php htmlout($client['name']); ?>
</td>
	<td><?php htmlout($client['email']); ?>
</td>
	<td><?php htmlout($client['address']); ?>
</td>
	<td><?php htmlout($client['phone']); ?>
</td>
	<td>
		<form action="" method="post">

		<div>
		<input type="hidden" name="id" value="<?php
 echo $client['id']; ?>" />
		<input type="submit" name="action" value="Edit"/>

		<input type="submit" name="action" value="Delete"/>

		</div>
		</form>
	</td>
</tr>
<?php endforeach; ?>
</table>




<p> <a href="..">Return to Client/Project Management System home</a> </p>

</body>

</html>