<style>
/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
	padding: 0;
	margin: 0;
}


html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) { 
	*[class="table_width_100"] {
		width: 96% !important;
	}
	*[class="border-right_mob"] {
		border-right: 1px solid #dddddd;
	}
	*[class="mob_100"] {
		width: 100% !important;
	}
	*[class="mob_center"] {
		text-align: center !important;
	}
	*[class="mob_center_bl"] {
		float: none !important;
		display: block !important;
		margin: 0px auto;
	}	
	.iage_footer a {
		text-decoration: none;
		color: #929ca8;
	}
	img.mob_display_none {
		width: 0px !important;
		height: 0px !important;
		display: none !important;
	}
	img.mob_width_50 {
		width: 40% !important;
		height: auto !important;
	}
}
.table_width_100 {
	width: 680px;
}
</style>

<!--
Responsive Email Template by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div id="mailsub" class="notification" align="center">

	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center">


<!--[if gte mso 10]>
<table width="680" border="0" cellspacing="0" cellpadding="0">
<tr><td>
	<![endif]-->

	<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
		<tr><td>
			<!-- padding -->
		</td></tr>
		<!--header -->
		<tr><td align="center" bgcolor="#ffffff">
			<!-- padding -->
			<table width="90%" border="0" cellspacing="0" cellpadding="0"><div style="height: 30px; line-height: 30px; font-size: 10px;"></div>
				<tr><td align="center" style="background:#4fdcb1;padding-top:5px;padding-bottom:5px;">
					<a href="{{ url('/') }}" target="_blank" style="color:white; font-family:'Poppins';font-weight: bold;width:100%;text-align:center; font-size: 28px;text-decoration: none;">
						Lokalaja
					</a>
				</td>
				<td align="right">
				<!--[endif]--><!-- 

			</td>
			</tr>
		</table>
		<!-- padding --><div style="height: 50px; line-height: 50px; font-size: 10px;"></div>
	</td></tr>
	<!--header END-->

	<!--content 1 -->
	<tr><td align="center">
		<table width="90%" border="0" cellspacing="0" cellpadding="0" >

			<tr><td align="center">
				<!-- padding --><div style="height: 20px; line-height: 60px; font-size: 10px;"></div>
				<div style="line-height: 44px;">
					
					<img src="{{asset('images/email/delivery.png')}}" width="25%">
				</div>
				<!-- padding --><div style="height: 20px; line-height: 40px; font-size: 10px;"></div>
			</td></tr>

			<tr><td align="center">
				<!-- padding --><div style="height: 0px; line-height: 60px; font-size: 10px;"></div>
				<div style="line-height: 44px;">
					
					<span style="font-size: 20px;font-family:'Poppins';font-weight:bold;color: #57697e;">
						Detail booking event
						<hr style="width:100px;border:2px solid #4fdcb1;border-radius: 50px;">
					</span>
				</div>
				<!-- padding --><div style="height: 20px; line-height: 40px; font-size: 10px;"></div>
			</td></tr>

			<tr><td align="center"  >
				<div style="line-height: 24px;">
					<font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
						<span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
							Hai <b>{{$guest}}</b>,
							Anda telah melakukan booking event dengan no invoice {{$booking->no}}
							<br><br>
							Harap segera melakukan pembayaran apabila sudah booking, jangan cuma booking enak<br> atau tes bug.. Ini bukan forum programmer untuk ngecek bug
						</span></font>
					</div>
					<!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"></div>
				</td></tr>
				<tr><td align="center" bgcolor="#fbfcfd" style="padding-top:20px; padding-bottom: 20px;">
			    <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
				<a href="{{ route('payment.book', ['id' => $booking->id]) }}">klik sni bang klo mau cek!</a>
				</font>
			</td></tr>
			</table>		
		</td></tr>
		<!--content 1 END-->


		<!--footer -->
		<tr><td class="iage_footer" align="center" bgcolor="#ffffff">


			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr><td align="center" style="padding:20px;float:left;width:100%; text-align:center;">
					<font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
						<span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
							&copy;Copyright Lokalaja, 2017. All rights reserved.
						</span></font>				
					</td></tr>			
				</table>


			</td></tr>
			<!--footer END-->
			<tr><td>

			</td></tr>
		</table>
<!--[if gte mso 10]>
</td></tr>
</table>
<![endif]-->

</td></tr>
</table>