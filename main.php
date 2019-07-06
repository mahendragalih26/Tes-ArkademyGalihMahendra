<!-- Koneksi Ke Database -->
<?php include("konek.php"); ?>

<!-- HTML tabel -->
<!DOCTYPE html>
<html>
<head>
	<title>Biodata...</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-light bg-light" style="box-shadow: 0 4px 2px -2px gray;">
		<a class="navbar-brand " href="#">
		    <img src="asset/logo.png" width="100" height="40" alt="ARKADEMY">
		    <span class="navbar-brand mb-0 h1">ARKADEMY BOOTCAMP</span>
		 </a>
	</nav>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<table class="table table-bordered">
			  <thead class="thead-light">
			    <tr>
			      	<th scope="col">Name</th>
					<th scope="col">Hobby</th>
					<th scope="col">Category</th>
					<th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			<?php
	        $sql = "SELECT n.id, n.name as nnama, h.name as hnama, k.name as knama
				FROM nama n
				INNER JOIN hobi h ON n.id_hobby = h.id 
				INNER JOIN kategori k ON h.id_category = k.id";
	        $query = mysqli_query($db, $sql);

	        while($biodata = mysqli_fetch_array($query)){
	        	$data[] = $biodata;
	        }
	        foreach ($data as $biodata) {
	        ?>
	        	<tr>
	        		<td><?php echo $biodata['nnama']; ?></td>
	        		<td><?php echo $biodata['hnama']; ?></td>
	        		<td><?php echo $biodata['knama']; ?></td>
	        		<td><button type="button" class="btn btn-danger mr-2" data-toggle="modal" data-target="#add_bio"><span class="fa fa-trash"></span></span></button><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_bio"><span class="fa fa-pencil"></span></span></button></td>
	        	</tr>
	    	<?php } ?>
	  </tbody>
	</table>
</div>
</div>

<div class="modal fade" id="add_bio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="nama">
          </div>
          <div class="form-group">
          	<select class="form-control">
          	<?php
          		$sql = "SELECT * FROM hobi";
	        	$query = mysqli_query($db, $sql);

		        while($biodata = mysqli_fetch_array($query)){
		        	$data[] = $biodata;
		        	?>
		        	<option value="<?php echo $biodata['id']; ?>"> <?php echo $biodata['name']; ?></option>
		        	<?php
		        }
				  ?>
          	</select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

