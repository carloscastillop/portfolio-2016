@include('emails.emailHeader')
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; margin: 0 auto; padding: 0;">
	<tr style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;">
    	<td align="center" bgcolor="#FFFFFF" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; padding: 0;">
        	<div style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; display: block; margin: 0 auto; padding: 0;">
            	<table border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; margin: 0; padding: 0;">
                	<tr style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;">
            			<td style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin:0; padding: 0;">
	                        <h6 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #000; line-height: 1.1; font-weight: 500; font-size: 15px; margin: 10px 10px 10px 0; padding: 0;">Hello!!</h6>
	                        <p style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin:10px 0; padding: 10px 0; font-size: 13px;">A new contact is generated with the following information: </p>
	                        <h3 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #000; line-height: 1.1; font-weight: 500; font-size: 20px; margin: 20px 10px; padding: 0;">
	                        	<small>Subject: {{ $subject }}</small><br>
	                        	<small>Name: {{ $name }}</small><br>
	                        	<small>Email: {{ $email }}</small><br>
	                        	<small>Phone: {{ $mobile }}</small><br>
	                        	<small>Company: {{ $company }}</small>
	                        </h3>
	                        <p style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; font-weight: normal; font-size: 14px; line-height: 1.6; margin: 0 0 10px; padding: 0;">With the following message.</p>
	                        <div style="background-color:#F5F5F5; padding:10px; font-style: italic;">
	                            {{ $bodyMessage }}
							</div>
	                       	<p style="margin:10px 0; padding-bottom:10px;">
	                       		Best regards<br /> 
	                       		Date: <strong>{{ date("d-m-Y") }}</strong>
						   	</p>
	                 	</td>
					</tr>
	          	</table>
	      	</div>
		</td>
	</tr>
</table>
<?php //exit; ?>
@include('emails.emailFooter')