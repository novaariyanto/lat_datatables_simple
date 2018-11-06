<!DOCTYPE html>
<html>
<head>
	<title>Simple DataTables</title>
	<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
</head>
<body>

	<h1>Data Datatables</h1>
	<table id="dataTables" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NO.</th>
                <th>ID</th>
                <th>NAME</th>
                <th>OPTION 1</th>
                <th>OPTION 2</th>
                <th>OPTION 3</th>
                <th>OPTION 4</th>
            </tr>
        </thead>
		
		<tbody>
			<?php
			$conn = new mysqli("localhost", "root", "", "mysql");
			if ($conn->connect_errno) {
				echo "Failed to connect to MySQL: " . $conn->connect_error;
			}
			
			$no = 1;
			$res = $conn->query("SELECT * FROM help_keyword");
			while($row = $res->fetch_assoc()){
				echo '
				<tr>
					<td>'.$no.'</td>
					<td>'.$row['help_keyword_id'].'</td>
					<td>'.$row['name'].'</td>
					<td>Hanya Pilihan '.$no.'</td>
					<td>Hanya Pilihan '.$no.'</td>
					<td>Hanya Pilihan '.$no.'</td>
					<td>Hanya Pilihan '.$no.'</td>
				</tr>
				';
				$no++;
			}
			?>
		</tbody>
	
	</table>
	
	<script src="jquery-1.12.0.min.js"></script>
	<script src="jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#dataTables').DataTable();
	} );
	</script>

</body>
</html> 