<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url');?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/facebook.css';?>">
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js'?>"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row head">
	<div class="col-md-offset-1 col-md-5 pad_1">
		<input type="text" name="search" placeholder="Facebook search" class="form-control ">
	</div>
	<div class="col-md-offset-1 col-md-1 pro_pad_2">
			<img src="<?php echo base_url().'image/'; ?><?php echo $profile; ?>" class=" pro_img_2">
			<!-- <img src="<?php echo base_url().'image/'; ?><?php echo $profile;?>"> -->
			<label class="white"><?php echo $fname;  ?></label>
	</div>
	</div>
	

	<div class="row footer">
		<div class="col-md-3">
			<div class="col-md-12 pad_3">
				<img src="<?php echo base_url().'image/'; ?><?php echo $profile ?>" class="pro_img_2 pad_3" >
				<label><?php echo $fname;  ?></label>
			</div>
			<div class="col-md-12 pad_3">
				<img src="<?php echo base_url().'image/edit.png'; ?>" class="pro_img_2 pad_3" >
				<label>Edit Profile</label>

			</div>

			
			
		</div>
		<div class="col-md-6 bootom_footer pro_name_pad">
			<div class="col-md-3 pad_3">
				<img src="<?php echo base_url().'image/edit.png'; ?>" class="pro_img_2 pad_3" >
				<label>Update Status</label>
			</div>
			<div class="col-md-4 pad_3">
				<img src="<?php echo base_url().'image/photo.png'; ?>" class="pro_img_2 pad_3" >
				<label><a href=""> Add photos/Video</a></label>
			</div>
				<div class="col-md-4 pad_3">
				<img src="<?php echo base_url().'image/write.png'; ?>" class="pro_img_2 pad_3" >
				<label><a href=""> Write Notes </a></label>
			</div>
			<div class="col-md-12">
			<hr>
			</div>
			<div class="col-md-6 bootom_footer">
				<div class="col-md-12 pad1_bottom">
					<img src="<?php echo base_url().'image/'; ?><?php echo $profile; ?>" class="pro_img_2" >
					What is your mind?
				</div>
			</div>
		</div>
		<div class=" col-md-2 pad_3">
			<select class="form-control pad_left"><option >Your Ads</option></select>
		</div>
		<div class=" col-md-12">
			
		</div>

		<div class=" col-md-offset-3 col-md-6 bootom_footer pro_name_pad pad2_bottom">
			
		</div>
		
	</div>


</div>

</body>
</html>