
		<div class="container">
			<h1 id='form_head'>User Listing</h1>

			<?php if (isset($books)) { ?>
				<table border="1" cellpadding="0" cellspacing="0">
					<tr>
						<th>ID</th>
						<th>NAME</th>
					</tr>
					
					<?php foreach ($books as $data) { ?>
						<tr>
							<td><?php echo $data->opp_id ?></td>
							<td><?php echo $data->type ?></td>
						</tr>

					<?php } ?>
				</table>
				
			<?php }
                  
			 else { ?>
				<div>No user(s) found.</div>
			<?php } ?>			
			
<?php 
$this->pagination->initialize($pag);  
echo  $this->pagination->create_links();
?>

			
		</div>
	</body>
</html>