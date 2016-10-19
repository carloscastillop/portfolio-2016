@include('emails.emailHeader')
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; margin: 0 auto; padding: 0;">
	<tr style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;">
    	<td align="center" bgcolor="#FFFFFF" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; padding: 0;">
        	<div style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; display: block; margin: 0 auto; padding: 0;">
            	<table border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; margin: 0; padding: 0;">
                	<tr style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;">
            			<td style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin:0; padding: 0;">
	                        <div style="text-align: center; background-color: #403F3C; margin-bottom: 20px; border-bottom: solid 5px #f2f2f2;">
						   		<img src="http://blogs.wickedlocal.com/files/2001.jpg" style="width: 100%; height: auto;">
						   		
						   	</div>	
	                        <h6 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #000; line-height: 1.1; font-weight: 500; font-size: 15px; margin: 10px 10px 10px 0; padding: 0;">Hello <strong>{{ $name }}</strong>!!</h6>

	                        <p style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; font-weight: normal; font-size: 14px; line-height: 1.6; margin: 0 0 10px; padding: 0;">You requested my CV from my portfolio about {{ $ago }} ago. </p>
	                        
	                        <h3 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #000; line-height: 1.1; font-weight: 500; font-size: 20px; margin: 20px 10px; padding: 0;">
	                        	{{ $userName }}<br>
	                        	{{ $userProfession }}<br>
	                        </h3>
	                        <p style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; font-weight: normal; font-size: 14px; line-height: 1.6; margin: 0 0 10px; padding: 0;">You can download my CV here.</p>
	                        
	                        
	                       	
	                        <div style="background-color:#F5F5F5; padding:30px 100px; margin-bottom: 20px;">
	                            <table cellspacing="0" cellpadding="5" width="100%">
								<tr>
								<td align="center" width="100%"  height="40" bgcolor="green" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; color: #ffffff;">
								<a href="{{ URL::to($userFile) }}" style="font-size:16px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-decoration: none; line-height:40px; width:100%; display:inline-block"><span style="color: #FFFFFF">Download CV</span></a>
								</td>
								</tr>
								
								</table>
							</div>
							
							<p style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; font-weight: normal; font-size: 14px; line-height: 1.6; margin: 0 0 10px; padding: 0;">You can see a list of my last works:</p>
							<div style="background-color:#F5F5F5; padding:10px 20px 10px 30px; margin-bottom: 20px;">
								<ul style="padding: 0">
									@for($i=0; $i<15; $i++)
									<li><a href="#" style="color: #403F3C"><strong>Bicitrader.cl</strong></a><small>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non nisl condimentum, tristique leo vel, porttitor enim. Ut fermentum eu elit sed bibendum. </small></li>
									@endfor
									<li><a href="{{ URL::to('portfolio') }}" style="color: #403F3C">See all my portfolio!</a></li>
								</ul>
							</div>

	                       	<p style="margin:10px 0; padding-bottom:10px; font-style:italic;">
	                       		Good bye!!<br /> 
	                       		& thanks!<br />
	                       		date: <strong>{{ date("d/m/Y") }}</strong>
						   	</p>
	                 	</td>
					</tr>
	          	</table>
	      	</div>
		</td>
	</tr>
</table>
@include('emails.emailFooter')
<?php //exit; ?>