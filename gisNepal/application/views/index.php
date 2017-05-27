<?php if($this->session->userdata('userID')){?>
	<p> You are logged in </p>
	<p><a href="<?=base_url()?>users/logout">Logout</a></p>
	<?php } else { ?>
	<p><a href="<?=base_url()?>users/login">Login</a></p> 
	<?php } ?>

Hello <?=$this->session->userdata('username'); ?>