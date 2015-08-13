<?php 

/**
 * @file
 * Default theme implementation to format an HTML mail.
 *
 * Copy this file in your default theme folder to create a custom themed mail.
 * Rename it to mimemail-message--[key].tpl.php to override it for a
 * specific mail.
 *
 * Available variables:
 * - $recipient: The recipient of the message
 * - $subject: The message subject
 * - $body: The message body
 * - $css: Internal style sheets
 * - $key: The message identifier
 *
 * @see template_preprocess_mimemail_message()
 */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Facebook sharing information tags for marketing emails -->
		<meta property="og:title" content="<?php echo $subject; ?>" />
		
		<title><?php echo $subject; ?></title>

		<!-- =================================== -->
		<!-- ===============  CSS  ============= -->
		<!-- =================================== -->

		<style type="text/css">
			/* NOTE: CSS should be inlined to avoid having it stripped in certain email clients like GMail. 
					MailChimp automatically inlines CSS for you or you can use this tool: http://www.mailchimp.com/labs/inlinecss.php. */
					table {
						border-collapse: collapse;
						border-spacing: 0;
				}
				
			/* Client-specific Styles */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
			body{width:100% !important;} /* Force Hotmail to display emails at full width */
			body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

			/* Reset Styles */
			body{margin:0; padding:0;}
			img{border:none; font-size:14px; font-weight:bold; height:auto; line-height:100%; outline:none; text-decoration:none; text-transform:capitalize;}
			#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

			/* Template Styles */

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Page
			* @section background color
			* @tip Set the background color for your email. You may want to choose one that matches your company's branding.
			* @theme page
			*/
			body, .backgroundTable{
				/*background-color:#f2f2f2;*/
				margin-top: 30px;
				color: #333;
			}

			a {
				color: #4286c9;
			}

			/**
			* @tab Page
			* @section email border
			* @tip Set the border for your email.
			*/
			#templateContainer{
				/*border: 1px solid #c7c7c7;*/
				font-family:Helvetica,Arial,sans-serif;
				margin-bottom: 20px;
			}


			h1, h2, h3, h4, h5 {
				font-family: "Helvetica Neue", "Arial", "Helvetica", sans-serif;
			}

			/**
			* @tab Page
			* @section heading 1
			* @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
			* @theme heading1
			*/
			h1, .h1{

			}

			/**
			* @tab Page
			* @section heading 2
			* @tip Set the styling for all second-level headings in your emails.
			* @theme heading2
			*/
			h2, .h2{

			}

			/**
			* @tab Page
			* @section heading 3
			* @tip Set the styling for all third-level headings in your emails.
			* @theme heading3
			*/
			h3, .h3{

			}

			/**
			* @tab Page
			* @section heading 4
			* @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
			* @theme heading4
			*/
			h4, .h4{

			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: PREHEADER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Header
			* @section preheader style
			* @tip Set the background color for your email's preheader area.
			* @theme page
			*/
			#templatePreheader{
				margin: 20px 20px 20px 0;
			}

			/**
			* @tab Header
			* @section preheader text
			* @tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
			*/
			.preheaderContent div{
				font-family:Helvetica,Arial,sans-serif;
				font-size:10px;
				line-height:100%;
				text-align:left;
			}

			/**
			* @tab Header
			* @section preheader link
			* @tip Set the styling for your email's preheader links. Choose a color that helps them stand out from your text.
			*/
			.preheaderContent div a:link, .preheaderContent div a:visited{
				color:#0e6d9b;
				font-weight:normal;
				text-decoration:underline;
			}
			
			.preheaderContent div img{
				height:auto;
				max-width:700px;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Header
			* @section header style
			* @tip Set the background color and border for your email's header area.
			* @theme header
			*/
			#templateHeader{
				background-color:#ffffff;
				border-bottom: 1px solid #c7c7c7;

			}

			/**
			* @tab Header
			* @section header text
			* @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
			*/
			/**
			* @tab Header
			* @section header text
			* @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
			*/
			.headerContent{
				font-family:Arial;
				font-size:34px;
				font-weight:bold;
				line-height:100%;
				padding:0 0 0 0;
				vertical-align:middle;
				padding: 20px 0;
			}

			/**
			* @tab Header
			* @section header link
			* @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
			*/
			.headerContent a:link, .headerContent a:visited{
				color:#0e6d9b;
				font-weight:normal;
				text-decoration:underline;
			}

			#headerImage{
				height:auto;
				max-width:700px !important;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Body
			* @section body style
			* @tip Set the background color for your email's body area.
			*/
			#templateContainer{
				background-color:#ffffff;
				padding: 20px;
			}

			/**
			* @tab Body
			* @section body text
			* @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
			* @theme main
			*/
			.bodyContent div{
				font-size:14px;
				line-height:20px;
				text-align:left;
				border-bottom: 1px solid #c7c7c7;
				color: #333;
				padding: 20px 0;
				font-family: Helvetica, Arial, sans-serif;
			}

			/**
			* @tab Body
			* @section body link
			* @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
			*/
			.bodyContent div a:link, .bodyContent div a:visited{
				color:#4286c9;
				font-weight:normal;
				text-decoration:underline;
			}

			.bodyContent img{
				display:inline;
				margin-bottom:10px;
			}

			.bodyContent li {
				padding: 5px 0;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Footer
			* @section footer style
			* @tip Set the background color and top border for your email's footer area.
			* @theme footer
			*/
			#templateFooter{
				
				background-color:#ffffff;
				margin-top: 30px;
				font-family: Helvetica,Arial,sans-serif;
				font-size: 14px;
			}

			/**
			* @tab Footer
			* @section footer text
			* @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
			* @theme footer
			*/
			.footerContent div{
				font-family:Helvetica,Arial,sans-serif;
				font-size:12px;
				line-height:125%;
				text-align:left;
			}

			/**
			* @tab Footer
			* @section footer link
			* @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
			*/
			.footerContent a:link, .footerContent a:visited{
				color:#0e6d9b;
				font-weight:normal;
				text-decoration:none;
			}

			.footerContent img{
				display:inline;
			}

			#utility{
				background-color:#FDFDFD;
				border-top:1px solid #F5F5F5;
			}

			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email's footer utility bar.
			*/
			#utility div{
				text-align:center;
			}

			.footer {
				margin: 30px 0 100px;
				font-family: Helvetica, Arial, sans-serif;
			}

			.footer ul {
				margin: 0;
				padding: 0;
				list-style-type: none;
			}

			.footer ul li {
				display: inline;
				margin-right: 20px;
				font-size: 14px;
			}

			.footer ul li a {
				text-decoration: none;
			}

			.post-footer {
				margin: 30px 0 100px;
				width: 700px;
				margin: 0 auto;
				font-family:Helvetica,Arial,sans-serif;
				font-size:12px;
				line-height:130%;
				text-align:center;
				color: #666666;
				margin-bottom: 100px;
			}
			.post-footer a {
				color: #666666;
			}
			.post-footer p {
				margin-top: 0;
			}
		</style>
	</head>
		
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" id="mimemail-body" <?php if ($key): print 'class="'. $key .'"'; endif; ?>>
		<center>
			<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">

				<!-- ======================================= -->
				<!-- =============  HEADER  ================ -->
				<!-- ======================================= -->
				<tr>
					<td align="center" valign="top">
						<table border="0" cellpadding="0" cellspacing="0" width="700" id="templateHeader">
							<tr>
								<td class="headerContent">                       
									<img src="<?= base_path()?><?=$directory?>/assets/img/email/logo.png" width="250" height="90">
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<!-- ======================= -->
				<!-- !=====  BODY  ========= -->
				<!-- ======================= -->
				<tr>
					<td align="center" valign="top">
						<table border="0" cellpadding="0" cellspacing="0" width="700" id="templateBody">
							<tr>
								<!-- BODY CONTAINER -->
								<td valign="top" class="bodyContent">
									<!-- MESSAGE CONTENT -->
									<table class="message" border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td valign="top">
												<div>

												<?
													$trimmed_subject = explode('] ', $subject);
												?>

													<h1><?=$trimmed_subject[1]?></h1>
													<p><?=$body?></p>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>     
			</table>
		</center>
	</body>
</html>
