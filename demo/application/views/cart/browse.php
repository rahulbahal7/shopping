	<?php 
		echo "<b>Browse:</b>";
		echo form_open('cart/browse_item'); 
			$data = array(
              'name'        => 'name',
              'id'          => 'name',
              'value'       => 'search',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
            );

echo form_input($data);
			echo form_submit('browse', 'Search'); 
			
			
echo form_close(); ?>	

