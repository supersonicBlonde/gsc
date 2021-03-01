<?php

/*
 * Template Name: Landing page
 * description: >-
  Page without header and footer
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PPWK357');</script>-->
	<!-- End Google Tag Manager -->
	<!-- Begin Inspectlet Asynchronous Code -->
	<script type="text/javascript"> (function() { window.__insp = window.__insp || []; __insp.push(['wid', 1582829376],['tagSession', {site: "gsc website"} ]); var ldinsp = function(){ if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=1582829376&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); }; setTimeout(ldinsp, 0); })();</script>
	<!-- End Inspectlet Asynchronous Code -->
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '287479325710326');
	fbq('track', 'PageView');
	</script>
	<noscript>
	<img height="1" width="1"
	src="https://www.facebook.com/tr?id=287479325710326&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
	<!-- DO NOT MODIFY -->
	<!-- Quora Pixel Code (JS Helper) -->
	<script>
	!function(q,e,v,n,t,s){if(q.qp) return; n=q.qp=function(){n.qp?n.qp.apply(n,arguments):n.queue.push(arguments);}; n.queue=[];t=document.createElement(e);t.async=!0;t.src=v; s=document.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s);}(window, 'script', 'https://a.quora.com/qevents.js');
	qp('init', 'ac96eae1871d4aa292fc08949b95b1bb');
	qp('track', 'ViewContent');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://q.quora.com/_/ad/ac96eae1871d4aa292fc08949b95b1bb/pixel?tag=ViewContent&noscript=1"/></noscript>
	<!-- End of Quora Pixel Code -->
	<!-- Hotjar Tracking Code for https://www.gmailsharedcontacts.com/ -->
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:1307203,hjsv:6};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:wght@300;400;700&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="icon" href="//www.getsharedcontacts.com/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPWK357"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
	<!-- End Google Tag Manager (noscript) -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header d-block border-bottom-0">
					<div class="text-right">
						<button type="button" class="close float-none" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="text-center modal-header__register">
						<h2>Shared Contacts for Gmail®</h2>
						<p style="font-size: 1.5em; color:#666;" class="mb-0">Get your 15-days free trial</p>
					</div>
				</div>
				<div class="modal-body text-center">
					<a href="https://app.gmailsharedcontacts.com/?landingSite=GSC%20EN&landingPage=homepage" data-lang="en-US" class="btn btn-white customGPlusSignIn px-5" id="customBtn" style="font-family: 'Google Sans', sans-serif;border: 1px solid #ccc;box-shadow: 0 2px 5px 0 rgba(0,0,0,0.1);">
						<img class="mr-2" src="https://www.gmailsharedcontacts.com/wp-content/uploads/2020/01/g-suite-icon.png" alt="" width="32">
						<span style="color:#666;vertical-align: middle;font-weight: 500;font-size: 1.1em;">Sign up with Google</span>
					</a>
				</div>
				<input name="googleId" id="googleId" type="hidden"/>
				<div class="modal-footer border-top-0 text-center mb-3">
					<p>Thanks to <strong>Shared Contacts for Gmail®</strong>, share your contacts as you share your Google Docs.</p>
				</div>
			</div>
		</div>
	</div>

	<main>
		<div>
			<?php
				if(have_posts()):

					while(have_posts()):
						the_post();
			?>
				
				<?php the_content(); ?>
				

			<?php	
					endwhile;
			
				else:
					echo 'No results';

				endif;
			?>
		</div>
	</main>

	<?php wp_footer(); ?>