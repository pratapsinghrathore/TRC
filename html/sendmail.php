<?php 
   $confirmbody.='<table width="100%" border="0" cellspacing="4" cellpadding="0">
                          <tr>
                            <td align="left">Feedback From !</td>
                            <td>&nbsp;</td>
                          </tr>
						 <tr>
                            <td align="left">Name</td>
                            <td>'.$_REQUEST['name'].'</td>
                          </tr>	
						  <tr>
                            <td align="left">Query</td>
                            <td>'.$_REQUEST['comments'].'</td>
                          </tr>
						 </table>';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";		// Additional headers		
		$headers .= 'From:tarun@agtsindia.com <tarun@agtsindia.com> '."\r\n";		
		$subject="enquiry from ".$_REQUEST['name'];
		mail('tarun@agtsindia.com', $subject, $confirmbody, $headers);
	 header('location:index.php');

  ?>
