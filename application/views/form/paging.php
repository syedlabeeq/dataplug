<?php $config['first_link'] 	= '<input type="submit" value="First">';
$config['div'] 		= 'container'; //Div tag id
$config['base_url'] 	= base_url().'form/'.$ajax_function.'/'.$slug;
$config['total_rows']	= $totalRows;
$config['per_page'] 	= $perPage;
$config['postVar'] 	= 'page';

$this->ajax_pagination->initialize($config);
echo $this->ajax_pagination->create_links();
