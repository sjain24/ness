<!DOCTYPE html>
<html>
<head>
	<style type='text/css'>
    
		body{
			margin: 0;
			padding: 0;
			font-family: 'Trebuchet MS', sans-serif;
		}

		.content{
			width: 100%;
			max-width: 600px;
		}
		
		@media only screen and (min-device-width: 601px){
			.content{
				width: 600px !important;
			}
		}

		.email_header, .email_body, .email_footer{
			width: 100%;
		}

		.email_header{
			background-color: #942c2c;
			padding: 10px;
		}

		.email_header_logo{
			
		}

		.email_header_logo img{
			width: 158px !important;
            height: 74px !important;
		}

		.email_header_title{
			text-align: center;
		}

		.email_header_title p{
			color: white;
			font-size: 40px;
			font-weight: 600;
			margin: 0;
		}

		.email_header a{
			text-decoration: none;
		}

		.email_header a:hover{
			text-decoration: none;
		}

		.email_header a:visited{
			text-decoration: none;
		}

		.email_body{
			padding: 10px;
		}

		.email_body p{
			font-size: 14px;
			margin: 5px 0;
		}

		.email_body a{
			display: inline-block;
			background-color: #00bcd4;
			color: white;
			padding: 10px;
			text-decoration: none;
		}

		.email_body a:visited{
			display: inline-block;
			background-color: #00bcd4;
			color: white;
			padding: 10px;
			text-decoration: none;
		}

		.email_body a:hover{
			display: inline-block;
			background-color: #00bcd4;
			color: white;
			padding: 10px;
			text-decoration: none;
		}

		.email_body_welcome{
			padding: 25px 0;
		}

		.email_body_thankyou{
			padding: 25px 0;
		}

		.email_footer{
			background-color: #ebeef0;
			padding: 10px;
		}

		.email_footer p{
			font-size: 14px;
		}

		.email_footer td{
			text-align: center;
		}

		.email_footer td a{
			text-decoration: underline;
			font-size: 14px;
			color: black;
		}

		.email_footer td a:visited{
			text-decoration: underline;
			font-size: 14px;
			color: black;
		}

		.email_footer td a:hover{
			text-decoration: underline;
			font-size: 14px;
			color: black;
		}

		.email_footer tr.footer_links img{
			width: 40px;
			height: 40px;
			padding: 10px;
		}

	</style>
</head>
<body>
	<!--[if (gte mso 9)|(IE)]>
	<table width='600' align='center' cellpadding='0' cellspacing='0' border='0'>
	    <tr>
	        <td>
	            <![endif]-->
	            <table class='content' align='center' cellpadding='0' cellspacing='0' border='0'>
	                <tr>
	                    <td class='email_header'>

	                    	<table style='width: 100%'>
	                    		<tr>
	                    			<td class='email_header_logo'>
	                    				<a href='https://www.alcheringa.in'><img src='https://alcheringa.in/registrations/images/avatar3.png' alt='Alcheringa Logo'></a>
	                    			</td>
	                    		</tr>
	                    		
	                    	</table>
                        
	                    </td>
	                </tr>
	                <tr>
	                	<td class='email_body'>

	                		<table style='width: 100%'>
	                			<tr>
	                				<td class='email_body_welcome'>
	                					#email_welcome#
	                				</td>
	                			</tr>
	                			<tr>
	                				<td class='email_body_body'>
	                					#email_body#
	                				</td>
	                			</tr>
	                			<tr>
	                				<td class='email_body_thankyou'>
	                					#email_thankyou#
	                				</td>
	                			</tr>
	                		</table>

	                	</td>
	                </tr>
	                <tr>
	                	<td class='email_footer'>

	                		<table style='width: 100%'>
	                			
	                			
	                			<tr>
	                				<td>
	                					<p>Reach us on</p>
	                				</td>
	                			</tr>
	                			<tr class='footer_links'>
	                				<td>
	                					<a href='https://www.facebook.com/alcheringaiitg' target='blank'><img src="https://alcheringa.in/registrations/images/email_fb.png"></a>
										<a href='https://www.twitter.com/alcheringaiitg' target='blank'><img src="https://alcheringa.in/registrations/images/email_twitter.png"></a>
	                					<a href='https://www.instagram.com/alcheringaiitg' target='blank'><img src="https://alcheringa.in/registrations/images/email_insta.png"></a>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>
	                					<p>Alcheringa, IIT Guwahati, 781039</p>
	                					<p>Guwahati, Assam, India</p>
	                				</td>
	                			</tr>
	                		</table>

	                	</td>
	                </tr>
	            </table>
	            <!--[if (gte mso 9)|(IE)]>
	        </td>
	    </tr>
	</table>
	<![endif]-->
	
</body>
</html>