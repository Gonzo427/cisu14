<?php 
//customer/default.php
	$this->load->view($this->config->item('theme') . 'header');	
	foreach($query as $customer)
	{
		echo '<code class="row">' . $customer['FirstName'] . '</code><br>';
	}
	$this->load->view($this->config->item('theme') . 'footer');			
?>