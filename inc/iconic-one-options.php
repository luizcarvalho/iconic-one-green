<?php
/** 
 * Adding options page under Appearance menu 
 */
function iconic_one_options_theme_menu() {  
  
add_theme_page( 'Iconic One Theme', 'Iconic One Theme', 'edit_theme_options', 'iconic_one_theme_options', 'iconic_one_options_display');  
  
} 
add_action( 'admin_menu', 'iconic_one_options_theme_menu' ); 

/** 
 * Adding customizer link under Appearance menu
 */ 
	function iconic_one_customize_button() {
	    $theme_page = add_theme_page(
	        __( 'Iconic One' , 'themonic' ),
	        __( 'Customize Iconic One' , 'themonic' ),  
	        'edit_theme_options' ,       
	        'customize.php'            
	    );
	} add_action('admin_menu', 'iconic_one_customize_button');

/** 
 * Show Iconic One Options 
 */ 
function iconic_one_options_display() { 
?> 
    <!-- Create a header in the default WordPress 'wrap' container --> 
    <div class="wrap"style='border:1px solid #e1e1e1; padding:20px;min-width:750px; max-width:960px;'> 
  
	<div class="header" style="margin-bottom:10px;">   
       <div class="hleft" style="float:left;width:50%;">
			<div id="icon-themes" class="icon32"></div> 
				<h2>Iconic One Theme Options</h2>
					<p>
						<a href="http://themonic.com/iconic-one-pro/">
						<img style='margin-left:0px;' src="<?php echo get_template_directory_uri(); ?>/img/themonic.png" alt="Iconic One"></a>
					</p>
					<div class="hotitle" style='background: #fff; padding:5px; margin-top:10px;'><h1>Thank You for Choosing Iconic One</h1></div>
				
			</div>
			<div style="float:right;width:41%;">
				<img style='max-width:97%;' src="http://demo.themonic.com/io/wp-content/uploads/2013/06/superspeed2.jpeg" alt="Pagespeed">
			</div>
	</div>
<div style="clear:both;">
<div style="background:#F7F08F;float:right;padding:25px 40px 25px 15px;;margin:10px;max-width:320px;">
<h3>Donation and Customization</h3>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="Support Packages">Optional</td></tr><tr><td><select name="os0">
	<option value="Donate -">Donate - $2.00 USD</option>
	<option value="Donate - (1 customizations)">Donate - (1 customizations) $10.00 USD</option>
	<option value="Donate (2 customizations)">Donate (2 customizations) $17.00 USD</option>
	<option value="Donate (3 customizations)">Donate (3 customizations) $25.00 USD</option>
	<option value="Pagespeed optimization + 5 customizations">Pagespeed optimization + 5 customizations $75.00 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Blog URL(optional)">Blog URL(optional)</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

We will refund the full amount if you are not happy 
with the customization without asking any questions.<br .../><br .../>
After payment, <a href="mailto:support@themonic.com?Subject=Iconic One Customization">send an email</a> with your customization details. Use the same Paypal email from which you made the payment else include 
the transaction ID.<br .../>
</div>
<h2>Getting Started</h2> 
<h3><a style="text-decoration:none;" href="http://demo.themonic.com/io/">Official Demo</a> for reference.</h3>
<h4>Responsive Menu - Important! - Update: 28th July 2013 - It will now work automagically.</h4> 
This is the first step: Configure the Main Navigation menu by
going to Appearance -> Menus. Create a custom menu by the name of 'top', or simply rename your existing menu to 'top'.
Make sure that under Primary Menu 'top' is selected, Navigation Menu responsiveness won't work otherwise.
<h4>Using Live Customizer - for logo upload, colors etc.</h4> 
<h2>Starting from version 1.2 you can access the live customizer from the <b>Appearance menu >> Customize Iconic One.</b></h2>
Alternatively you can go through the Live Customizer ( http://yourdomain.com/wp-admin/customize.php )
to upload the logo image, set the social bookmarks and footer copyright texts, background color etc., 
you don't have to touch any code or login to ftp for the most needed customizations. Sidebar is Widget ready for easy configuration. 
<h4>Logo Size</h4>
Logo of 187 x 54 pixel dimensions is used in the demo. 
You can easily try uploading logos of different sizes via live customizer. Version 1.2 now comes with support for bigger logos. Refer to changelog.txt in the home directory.
<h3>Safe Customization & How to Upgrade</h3>
Iconic One is supplied with custom.css file, simply add your css in this file, you can access this from 
under Appearance - > Editor -> Custom.css and it will just work.
<p>Before upgrading to new versions backup the content of custom.css file 
and all the files you have modified.</p>
<h3>Idea Behind Iconic One</h3>
<p>The Idea behind Iconic One is to equip the bloggers with a theme so that they don't have to look anywhere else,
It has been designed and coded in such a way that even if you are new to Wordpress 
you will be able to make the most out of it.
</p>
<h3>Iconic One is Safe</h3>
<p>Iconic One uses Wordpress native funtions to generate thumbnails without relying on third party scripts 
such as timthumb. Iconic One is also properly coded to avoid plugin conflicts and is customizable.
</p>
<h3>Built for Speed</h3>
The first thing you will notice about Iconic One is its blazing fast rendering, it will be loved by your visitors and they will have more time for browsing your content.
<h3>The Right Choice - Ultra Responsive</h3>
Iconic One is a premium quality theme with pixel perfect typography and responsiveness and is built for speed with pagespeed score of 95+, Iconic One implements proper SEO so that your content will rank high and is compatible with AIOSEO and Yoast SEO,
It utilizes latest HTML 5, CSS3 for creating the awesomeness that looks good on every browser and is future ready.
<h3>Support</h3>
Support is free, access the <a href="http://themonic.com/support/">Support Here</a>.
You can also <a href="http://themonic.com/feedback/.">report issues and feedback</a> and help us in improving the theme.
<h3>Further Development and Roadmap</h3>
Iconic One has been handcrafted with utmost care and love, we hope that you will love this theme, kindly support us by rating
the theme 5 stars, if there are any issue/bugs simply head to the support section to report them and we will do our best to fix those issues.
<br .../><br .../>
More than 500 hours have already been spent in development and fine tuning Iconic One. Based on your <a href="http://themonic.com/feedback/.">feedback</a> we will add the most wanted
features for further improvement.
<br .../><br .../>
This is just the beginning.<br .../><br .../>
- Shashank Singh
<br .../>Iconic One Developer<br .../><br .../>
<br .../>
<a href="http://themonic.com/iconic-one-pro/">
<img style='margin-left:0px;' src="http://demo.themonic.com/io/wp-content/uploads/2013/06/io.jpg" alt=""></a>



</div><!-- /.wrap --> 
<?php 
} // end iconic_one_options_display 
