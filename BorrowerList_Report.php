<?php include 'db_connect.php' ?>

<?php include 'print.php' ?>
<div class="container-fluid" id="page" style="margin: 5%">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<large class="card-title">
				<div style="color:#009900; text-align: center;"><div style="font-size:15px"><div style="align:center" >Student SACCO Loans </div></div></div>
					<small class="pull-left"><div style="color:#009900">All list borrowers details</div></small>
          <small class="pull-right"><div style="color:#009900; margin-left: 75%;"><?php $today = date ('y:m:d'); 
		  								  $new = date ('l, F, d, Y', strtotime($today));	
										      echo $new;?></div>
		</small>
                    
				</large>
				<table class="table table-bordered" id="borrower-list">
					<colgroup>
						<col width="10%">
						<col width="35%">
						<col width="30%">
						<col width="15%">
					</colgroup>
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Borrower</th>
							<th class="text-center">Current Loan</th>
							<th class="text-center">Next Payment Schedule</th>
						</tr>
					</thead>
					<tbody>
						
                        <?php
                           $i = 1;
                           $qry = $conn->query("SELECT * FROM borrowers order by id desc");
                           while($row = $qry->fetch_assoc()): 

						 ?>
                       
						 <tr>
						 	
						 	<td class="text-center"><?php echo $i++ ?></td>
						 	<td>
                             
                                <p>Name :<b><?php echo ucwords($row['lastname'].", ".$row['firstname'].' '.$row['middlename']) ?></b></p>
						 		<p><small>Address :<b><?php echo $row['address'] ?></small></b></p>
						 		<p><small>Contact # :<b><?php echo $row['contact_no'] ?></small></b></p>
						 		<p><small>Email :<b><?php echo $row['email'] ?></small></b></p>
						 		<p><small>Tax ID :<b><?php echo $row['tax_id'] ?></small></b></p>
								<p style="color:skyblue;"><large><b>Guarantor's Info</small></b></p>
								<p><?php echo "<img src='uploads/".$row['g_avatar']."' class='img-fluid img-thumbnail' alt='image'>"; ?></p>
								<p><small>Name :<b><?php echo $row['g_name'] ?></small></b></p>
								<p><small>RelationShip :<b><?php echo $row['grela'] ?></small></b></p>
								<p><small>Contact # :<b><?php echo $row['g_phone'] ?></small></b></p>
								<p><small>Address :<b><?php echo $row['gaddress'] ?></small></b></p>
						 		
						 	</td>
						 	<td class="">None</td>
						 	<td class="">N/A</td>
						 </tr>

                         <?php endwhile; ?>
                
                    
                    
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<style>
	td p {
		margin:unset;
	}
	td img {
	    width: 8vw;
	    height: 12vh;
	}
	td{
		vertical-align: middle !important;
	}
</style>	