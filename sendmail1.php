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
                            <td align="left">phone</td>
                            <td>'.$_REQUEST['phone'].'</td>
                          </tr>	
						  <tr>
                            <td align="left">Email</td>
                            <td>'.$_REQUEST['email'].'</td>
                          </tr>	
						 
						  <tr>
                            <td align="left">city</td>
                            <td>'.$_REQUEST['city'].'</td>
                          </tr>
						  <tr>
                            <td align="left">message</td>
                            <td>'.$_REQUEST['yourme'].'</td>
                          </tr>
						 </table>';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";		// Additional headers		
		$headers .= 'From:tarun@agtsindia.com <tarun@agtsindia.com> '."\r\n";		
		$subject="enquiry from ".$_REQUEST['name'];
		mail('tarun@agtsindia.com', $subject, $confirmbody, $headers);
	header('location:index.php');

  ?>
