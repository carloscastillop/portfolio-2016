@include('emails.emailHeader')
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; margin: 0 auto; padding: 0;">
	<tr style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;">
    	<td align="center" bgcolor="#FFFFFF" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; padding: 0;">
        	<div style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; display: block; margin: 0 auto; padding: 0;">
            	<table border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; margin: 0; padding: 0;">
                	<tr style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;">
            			<td style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin:0; padding: 0;">
	                        <h6 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #000; line-height: 1.1; font-weight: 500; font-size: 15px; margin: 10px 10px 10px 0; padding: 0;">Hola Admin!!</h6>
	                        <p style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin:10px 0; padding: 10px 0; font-size: 13px;">Se ha creado una nueva solicitud de CV con los siguientes datos:</p>
	                        <h3 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #000; line-height: 1.1; font-weight: 500; font-size: 20px; margin: 20px 10px; padding: 0;">
	                        	<small>Name:</small> {{ $name }}<br>
	                        	<small>Email:</small> {{ $email }}<br>
	                        	<small>Mobile:</small> {{ $mobile }}<br>
	                        	<small>Company:</small> {{ $company }}<br>
	                        	<small>IP:</small> {{ $ip }}
	                        </h3>
	                        <p style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; font-weight: normal; font-size: 14px; line-height: 1.6; margin: 0 0 10px; padding: 0;">Selecciona una opcion para este requerimiento.</p>
	                        
	                        
	                       	
	                        <div style="background-color:#F5F5F5; padding:10px;">
	                            <table cellspacing="0" cellpadding="5" width="100%">
								<tr>
								<td align="center" width="48%" height="40" bgcolor="red" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; color: #ffffff;">
								<a href="{{ URL::to('cv-request/no/'.$code) }}" style="font-size:16px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-decoration: none; line-height:40px; width:100%; display:inline-block;"><span style="color: #FFFFFF">NO ENVIAR CV</span></a>
								</td>
								<td align="center" width="4%" height="40" bgcolor="#F5F5F5" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; color: #ffffff;">
								</td>
								<td align="center" width="48%"  height="40" bgcolor="green" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; color: #ffffff;">
								<a href="{{ URL::to('cv-request/yes/'.$code) }}" style="font-size:16px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-decoration: none; line-height:40px; width:100%; display:inline-block"><span style="color: #FFFFFF">ENVIAR CV</span></a>
								</td>
								</tr>
								
								</table>
							</div>
	                       	<p style="margin:10px 0; padding-bottom:10px; font-style:italic;">
	                       		ATTE<br /> Hal 9001!<br />
	                       		Fecha: <strong>{{ date("d/m/Y") }}</strong>
						   	</p>
	                 	</td>
					</tr>
	          	</table>
	      	</div>
		</td>
	</tr>
</table>
@include('emails.emailFooter')