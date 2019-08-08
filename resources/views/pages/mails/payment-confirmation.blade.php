<style type="text/css">
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

<div id="mailsub" class="notification" align="center">

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">


<!--[if gte mso 10]>
<table width="680" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<![endif]-->

<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
    <tr><td>
	<!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
	</td></tr>
	<!--header -->
	<tr>
		<td id="yiv9937920353header_wrapper" bgcolor="#DDECEF" style="padding:36px 48px;display:block;">
												<h1 style="color:#202020;font-family:&quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;font-size:30px;font-weight:300;line-height:150%;margin:0;text-align:left;text-shadow:0 1px 0 #dfa4d3;">Thank you for your Order!</h1>
											</td></tr>
	<!--header END-->

	<tr>
		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr><td align="top" bgcolor="#FFFFFF" style="padding: 45px;">
					<div style="color:#636363;font-family:&quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;font-size:14px;line-height:150%;text-align:left;">
						<p style="margin:0 0 16px;">Your payment has been received and is now being processed. Your booking details are shown below for your reference:</p>
						<h2 style="color:#DDECEF;display:block;font-family:&quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left;">{{$book->no}}</h2>
						<table cellspacing="0" cellpadding="6" style="width:100%;font-family:'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;color:#636363;border:1px solid #e5e5e5;" border="1">
							<thead>
								<tr>
									<th scope="col" style="text-align:left;color:#636363;border:1px solid #e5e5e5;padding:12px;">Event</th>
									<th scope="col" style="text-align:left;color:#636363;border:1px solid #e5e5e5;padding:12px;">Qty</th>
									<th scope="col" style="text-align:left;color:#636363;border:1px solid #e5e5e5;padding:12px;">Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align:left;vertical-align:middle;border:1px solid #eee;word-wrap:break-word;color:#636363;padding:12px;">{{$event->name}}</td>
									<td style="text-align:left;vertical-align:middle;border:1px solid #eee;color:#636363;padding:12px;">{{$book->bookDetail->qty}}</td>
									<td style="text-align:left;vertical-align:middle;border:1px solid #eee;color:#636363;padding:12px;">Rp{{number_format($event->price, 2)}}</td>
								</tr>
								<tr>
									<td colspan="3" style="text-align:left;vertical-align:middle;border:1px solid #eee;word-wrap:break-word;color:#636363;padding:12px;">
									<p style="margin:0 0 10px">The event will be held on {{date('l, jS F Y', strtotime($event->eventInformation->date))}}!<br>The event will start on {{date('h:i A',strtotime($event->eventInformation->time))}}</p>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th scope="row" colspan="2" style="text-align:left;border-top-width:4px;color:#636363;border:1px solid #e5e5e5;padding:12px;">Subtotal:</th>
									<td style="text-align:left;border-top-width:4px;color:#636363;border:1px solid #e5e5e5;padding:12px;">Rp{{number_format($book->bookDetail->subtotal, 2)}}</td>
								</tr>
								<tr>
									<th scope="row" colspan="2" style="text-align:left;border-top-width:4px;color:#636363;border:1px solid #e5e5e5;padding:12px;">Unique Code:</th>
									<td style="text-align:left;border-top-width:4px;color:#636363;border:1px solid #e5e5e5;padding:12px;">{{$book->unique_number}}</td>
								</tr>
								<tr>
									<th scope="row" colspan="2" style="text-align:left;color:#636363;border:1px solid #e5e5e5;padding:12px;">Total:</th>
									<td style="text-align:left;color:#636363;border:1px solid #e5e5e5;padding:12px;"><span class="yiv9937920353woocommerce-Price-amount yiv9937920353amount">Rp{{number_format($book->total, 2)}}</td>
								</tr>
							</tfoot>
						</table>
						<table cellspacing="0" cellpadding="6" style="margin:20px 0; width:100%;font-family:'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;color:#636363;border:1px solid #e5e5e5;" border="1">
							<tbody>
								<tr>
									<td class="yiv9937920353td" style="text-align:left;color:#636363;border:1px solid #e5e5e5;padding:12px;" valign="top" width="50%">
									<h3 style="color:#DDECEF;display:block;font-family:&quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;font-size:16px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left;">Participants</h3>
									<ol style="font-family:&quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;font-size:16px;font-weight:bold;">
										@foreach($book->bookParticipants as $participant)
										<li>{{$participant->participant_name}}</li>
										@endforeach
									</ol>
									</td>
								</tr>
							</tbody>
						</table>	
					</div>
				</td></tr>
			</table>
		</td>
	</tr>

	<!--footer -->
	<tr><td class="iage_footer" align="center" bgcolor="#fff">
		<!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div>	
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="center">
				<font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
				<span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
					&copy;Copyright Lokalaja, 2017. All rights reserved.
				</span></font>				
			</td></tr>			
		</table>
		
		<!-- padding --><div style="height: 20px; line-height: 30px; font-size: 10px;"> </div>	
	</td></tr>
	<!--footer END-->
	<tr><td>
	<!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
	</td></tr>
</table>
<!--[if gte mso 10]>
</td></tr>
</table>
<![endif]-->
 
</td></tr>
</table>
			
</div> 
