<?
$random_id_length = 6;
 //generate a random id encrypt it and store it in $rnd_id
 $rnd_id = (uniqid(rand(),1));
 //to remove any slashes that might have come
 $rnd_id = strip_tags(stripslashes($rnd_id));
 //Removing any . or / and reversing the string
 $rnd_id = str_replace(".","",$rnd_id);
 $rnd_id = strrev(str_replace("/","",$rnd_id));
 //finally I take the first 10 characters from the $rnd_id
 $rnd_id = strtoupper(strtolower(substr($rnd_id,0,$random_id_length)));



					$headers1  = 'MIME-Version: 1.0' . "\r\n";
					$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";		// Additional headers		
					$headers1 .= 'From:info@thetearoomco.com <info@thetearoomco.com> '."\r\n";
					$subject1  =  "Free cup of Tea from The Tea Room Co.";


					echo $content.='<div style="width:50%;margin:0 auto;position:relative;">
						<img src="http://www.demoproject.co.in/Token.jpg" width="718" height="316" alt="" />
						<div style="position:absolute; width:200px; height:32px; left:506px; top:6px; display:block;"><strong>TRCVO</strong>&nbsp;&nbsp;'.$rnd_id.'</div>
						
						</div>';
					
					$retmail=mail('khusanil@gmail.com','Test subj',$content,$headers1); 
					$retmail_1=mail('abhishek@agtsindia.com', $subject1, $content, $headers1);
							
					/*$retmail_1=mail('anirban@agtsindia.com', $subject1, $content, $headers1);
					$retmail_2=mail('tarun@agtsindia.com', $subject1, $content, $headers1);*/
						if($retmail && $retmail_1)
						{
							echo 'Mail send...';
						}
						else{
							echo 'Mail not send...';	
						}
					
?>
