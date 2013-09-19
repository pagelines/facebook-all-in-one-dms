<?php
/*
Section: Facebook All-in-One DMS
Author: MrFent
Author URI: http://www.MrFent.com/facebook-all-in-one
Demo: http://www.MrFent.com/facebook-all-in-one
External: http://www.MrFent.com/facebook-all-in-one
Version: 1.0.0   
Description: Combines three Facebook Social Widgets: Like Box, Like Button, & Comments
Class Name: FacebookAllInOneDMS
Workswith: templates, main, sidebar1, sidebar2, sidebar_wrap, header, footer, morefoot
Cloning: true
Filter: component
PageLines: true
v3: true
*/

class FacebookAllInOneDMS extends PageLinesSection {
	function section_opts(){

		$options = array();
		$options[] = array(
				'title' => __( 'Facebook Mode Setup', 'facebook-all-in-one-dms' ),
				'type'	=> 'multi',
				'opts'	=> array(
					array(
						'key'			=> 'fbmode',
						'type' 			=> 'select',
						'help'			=> __( 'Select a Facebook Mode, then refresh for more options', 'facebook-all-in-one-dms' ),							
						'label'			=> __( 'Facebook Mode', 'twitter-all-in-one-dms' ),
						'opts'	=> array(
										'box'	=> array('name' => __( 'Like Box', 'facebook-all-in-one-dms' )),
										'button'	=> array('name' => __( 'Like Button', 'facebook-all-in-one-dms' )),
										'comments'		=> array('name' => __( 'Comments', 'facebook-all-in-one-dms' ))
						)),
					array(
								'key'			=> 'fbappId',
								'type' 			=> 'text',				
								'label' 		=> 'Enter your <a href="https://developers.facebook.com/apps" target="blank">App ID/API Key</a>',
								'help'	=> '<a href="http://www.mrfent.com/facebook-all-in-one/facebook-app-id/" target="blank">How do I get an App ID/API Key?</a>',

						),
					array(
								'key'			=> 'fblanguage',
								'type' 		=> 'select',
								'default'	=> 'profile',
								'label'	=> 'Language',
								'default' 			=> 'en_US',	
								'help'			=> "Make sure the same language is set for any clones you may have. You cannot have clones with different languages on the same page.",
								'opts'	=> array(
												'af_ZA'	=> array("name" => "Afrikaans"),
												'ar_AR'	=> array("name" => "Arabic"),
												'az_AZ'	=> array("name" => "Azerbaijani"),
												'be_BY'	=> array("name" => "Belarusian"),
												'bg_BG'	=> array("name" => "Bulgarian"),
												'bn_IN'	=> array("name" => "Bengali"),
												'bs_BA'	=> array("name" => "Bosnian"),
												'ca_ES'	=> array("name" => "Catalan"),
												'cs_CZ'	=> array("name" => "Czech"),
												'cy_GB'	=> array("name" => "Welsh"),
												'da_DK'	=> array("name" => "Danish"),
												'de_DE'	=> array("name" => "German"),
												'el_GR'	=> array("name" => "Greek"),
												'en_GB'	=> array("name" => "English (UK)"),
												'en_PI'	=> array("name" => "English (Pirate)"),
												'en_UD'	=> array("name" => "English (Upside Down)"),
												'en_US'	=> array("name" => "English (US)"),
												'eo_EO'	=> array("name" => "Esperanto"),
												'es_ES'	=> array("name" => "Spanish (Spain)"),
												'es_LA'	=> array("name" => "Spanish"),
												'et_EE'	=> array("name" => "Estonian"),
												'eu_ES'	=> array("name" => "Basque"),
												'fa_IR'	=> array("name" => "Persian"),
												'fb_LT'	=> array("name" => "Leet Speak"),
												'fi_FI'	=> array("name" => "Finnish"),
												'fo_FO'	=> array("name" => "Faroese"),
												'fr_CA'	=> array("name" => "French (Canada)"),
												'fr_FR'	=> array("name" => "French (France)"),
												'fy_NL'	=> array("name" => "Frisian"),
												'ga_IE'	=> array("name" => "Irish"),
												'gl_ES'	=> array("name" => "Galician"),
												'he_IL'	=> array("name" => "Hebrew"),
												'hi_IN'	=> array("name" => "Hindi"),
												'hr_HR'	=> array("name" => "Croatian"),
												'hu_HU'	=> array("name" => "Hungarian"),
												'hy_AM'	=> array("name" => "Armenian"),
												'id_ID'	=> array("name" => "Indonesian"),
												'is_IS'	=> array("name" => "Icelandic"),
												'it_IT'	=> array("name" => "Italian"),
												'ja_JP'	=> array("name" => "Japanese"),
												'ka_GE'	=> array("name" => "Georgian"),
												'km_KH'	=> array("name" => "Khmer"),
												'ko_KR'	=> array("name" => "Korean"),
												'ku_TR'	=> array("name" => "Kurdish"),
												'la_VA'	=> array("name" => "Latin"),
												'lt_LT'	=> array("name" => "Lithuanian"),
												'lv_LV'	=> array("name" => "Latvian"),
												'mk_MK'	=> array("name" => "Macedonian"),
												'ml_IN'	=> array("name" => "Malayalam"),
												'ms_MY'	=> array("name" => "Malay"),
												'nb_NO'	=> array("name" => "Norwegian (bokmal)"),
												'ne_NP'	=> array("name" => "Nepali"),
												'nl_NL'	=> array("name" => "Dutch"),
												'nn_NO'	=> array("name" => "Norwegian (nynorsk)"),
												'pa_IN'	=> array("name" => "Punjabi"),
												'pl_PL'	=> array("name" => "Polish"),
												'ps_AF'	=> array("name" => "Pashto"),
												'pt_BR'	=> array("name" => "Portuguese (Brazil)"),
												'pt_PT'	=> array("name" => "Portuguese (Portugal)"),
												'ro_RO'	=> array("name" => "Romanian"),
												'ru_RU'	=> array("name" => "Russian"),
												'sk_SK'	=> array("name" => "Slovak"),
												'sl_SI'	=> array("name" => "Slovenian"),
												'sq_AL'	=> array("name" => "Albanian"),
												'sr_RS'	=> array("name" => "Serbian"),
												'sv_SE'	=> array("name" => "Swedish"),
												'sw_KE'	=> array("name" => "Swahili"),
												'ta_IN'	=> array("name" => "Tamil"),
												'te_IN'	=> array("name" => "Telugu"),
												'th_TH'	=> array("name" => "Thai"),
												'tl_PH'	=> array("name" => "Filipino"),
												'tr_TR'	=> array("name" => "Turkish"),
												'uk_UA'	=> array("name" => "Ukrainian"),
												'vi_VN'	=> array("name" => "Vietnamese"),
												'zh_CN'	=> array("name" => "Simplified Chinese (China)"),
												'zh_HK'	=> array("name" => "Traditional Chinese (Hong Kong)"),
												'zh_TW'	=> array("name" => "Traditional Chinese (Taiwan)"),

												), 											
						),
						
						array(
							'key'	=> 'fbcolorscheme',	
							
										'type' => 'check',
										'title' => 'Dark Color Scheme',
										'shortexp' => "If your page's background is dark, switch to a darker color scheme",
										'label' => 'Dark Color Scheme?',				
												
						)));
						$mode = ($this->opt('fbmode')) ? $this->opt('fbmode') : '';
						
						$Likebox_Mode_A = array(
							array(
								'key'	=> 'fbboxpagename',			
								'type' 	=> 'text',
								'label'	=> __( 'Facebook Page Name', 'facebook-all-in-one-dms' ),
								'help'	=> __( 'Enter the name component of your Facebook page URL. ( For example, what comes after the facebook url: www.facebook.com/<strong>[name]</strong> )', 'facebook-all-in-one-dms' )
							),
							array(
											'key'	=> 'fbheader',	
											'type' => 'check',
											'label' => 'Hide Header',			
							),		
							array(
											'key'	=> 'fbstream',	
											'type' => 'check',
											'label' => 'Hide Stream?',	
							),
							array(
											'key'	=> 'fbfaces',	
											'type' => 'check',
											'label' => 'Hide Faces',	
							),
							array(
								'key'	=> 'fbbordercolor',
								'type' 			=> 'color',					
								'label' 	=> 'Border Color (optional)',
								'default'		=> '',
								
							),
							array(
								'key'	=> 'fbheight',			
								'type' 	=> 'text',
								'label'	=> __( 'Height', 'facebook-all-in-one-dms' ),
								'help'	=> __( 'Enter a custom height. (Optional)', 'facebook-all-in-one-dms' )
							),
						
							
							
							
							);
					
					
					
					
					if(!$this->opt( 'fbfaces' )){	
							$Likebox_Mode_B = array(
								array(
									'key'	=> 'fbwidth',			
									'type' 	=> 'text',
									'label'	=> __( '(Fake) Width', 'facebook-all-in-one-dms' ),
									'help'	=> __( 'This section is responsive, so entering a width value does not actually change the width. It does however affect the number of faces that appear. So if you want more faces, enter a value higher than the default 300. (Optional) )', 'facebook-all-in-one-dms' )
								));
							
							
							
								} else {	
									$Likebox_Mode_B = array();
								}
										$Likebox_Mode_C = array_merge( $Likebox_Mode_A, $Likebox_Mode_B );
							
							
							
							$Likebutton_Mode_A = array();
							$Likebutton_Mode_B = array(
								array(	
									
								'key'	=> 'fbsend',
								'type' => 'check',
								'label' => 'Hide Send Button?',
								'title' => 'Like Button Options',
								'exp' => 'The Send Button allows users to send & share content to individual friends.',										
				),
								array(
											'key'	=> 'fblayoutstyle',
											'type' 		=> 'select',
											'default' => 'standard',
											'opts'	=> array(
															'standard'	=> array("name" => "Standard"),
															'button_count'	=> array("name" => "Button Count"),
															'box_count'		=> array("name" => "Box Count"),
															), 
											'label' 	=> 'Layout Style',				
						),	
							array(
										'key'	=> 'fbfriends',
										'type' => 'check',
										'label' => 'Hide Faces',
						),						
						array(
											'key'	=> 'fbverb',
											'type' 		=> 'select',
											'default' => 'like',
											'opts'	=> array(
															'like'	=> array("name" => "Like"),
															'recommend'	=> array("name" => "Recommend"),
															), 
											'help' 		=> 'Choose the verb to display in the button.',
											'label' 	=> 'Verb to Display',				
						),
					array(
										'key'	=> 'fbfont',
											'type' 		=> 'select',
											'label' 	=> 'Font',	
												'default' => 'arial',
											'opts'	=> array(
															'arial'	=> array("name" => "arial"),
															'lucida grande'	=> array("name" => "lucida grande"),
															'segoe ui'	=> array("name" => "segoe ui"),
															'tahoma'	=> array("name" => "tahoma"),
															'trebuchet ms'	=> array("name" => "trebuchet ms"),
															'verdana'	=> array("name" => "verdana"),
															), 
																		
						),
						
					array(
							'key'	=> 'fbbuttonurl',
								'type' 			=> 'text',				
								'label'	=> 'Custom URL to Like',	
								'help'			=> "If you want to link this button to a website or page other than this one, enter the custom URL here. Otherwise, just leave this blank.<br /><br />Don't forget the <strong>http://</strong>"
								
						),
						array(
							'key'	=> 'fbwidth',			
							'type' 	=> 'text',
							'label'	=> __( 'Width', 'facebook-all-in-one-dms' ),
						)
						);
				$Likebutton_Mode_C = array_merge( $Likebutton_Mode_A, $Likebutton_Mode_B );
							$Comments_Mode = array(
								
								array(
											'key'			=> 'fbcposts',
											'type' 			=> 'count_select',
											'default'		=> '10',
											'count_number'	=> '100', 
											'count_start'	=> '1',
											'label' 		=> 'Number of Posts',
								),
								array(
										'key'			=> 'fbcommentsurl',
										'type' 			=> 'text',				
										'label'			=> 'Custom URL to comment on',	
										'help'			=> "If you want these comments to link to a page other than this one, enter the custom URL here. Otherwise, just leave this blank.<br /><br />Don't forget the <strong>http://</strong>"
								),
		
		
							);
							
							
							
							
							
							
						
							
						if($this->opt( 'fbmode' )){			
				if ($mode == 'box') {
				
							$options[] = array(
									'title' => __( 'Likebox Mode', 'facebook-all-in-one-dms' ),
									'type'	=> 'multi',
									'opts'	=> $Likebox_Mode_C
									);
								} elseif ($mode == 'button') {
				
									$options[] = array(
											'title' => __( 'Likebutton Mode', 'facebook-all-in-one-dms' ),
											'type'	=> 'multi',
											'opts'	=> $Likebutton_Mode_C
											);
				} else {
					
					$options[] = array(
							'title' => __( 'Comments Mode', 'facebook-all-in-one-dms' ),
							'type'	=> 'multi',
							'opts'	=> $Comments_Mode
							);
					
					
					
					
				}
				
				
				$OG_Meta_A = array(
					array(
											'key'			=> 'fb_opengraphtags',
											'type' => 'check',
											'help' => '<a href="http://www.mrfent.com/facebook-all-in-one/open-graph-meta-tags/" target="blank">Open Graph Meta Tags</a> let you control how your page/post appears on Facebook',
											'label' => 'Enable Custom Open Graph Meta Tags?',			
						)
				);
				
				 if($this->opt( 'fb_opengraphtags' )){	
				
				$OG_Meta_B = array(
				
				
				array(
					'key'	=> 'fb_fbadmins',
					
						'type' 			=> 'text',				
						'label'	=> 'fb:admins',		
						'help'			=> 'A comma-separated list of the Facebook IDs of page administrators. At a minimum, include only your own Facebook ID. If you entered a Facebook App ID/API Key up above, that will work in lieu of this setting. <a href="http://www.mrfent.com/facebook-all-in-one/open-graph-meta-tags/#admins" target="blank">More Info</a>',			
				),
				array(
					'key'	=> 'fb_ogimage',
								'type' 		=> 'image_upload',			
								'label'=> 'og:image',
								'help'			=> 'The URL to an image that represents the entity. Images must be at least 50 pixels by 50 pixels. Square images work best, but you are allowed to use images up to three times as wide as they are tall. <a href="http://www.mrfent.com/facebook-all-in-one/open-graph-meta-tags/#image" target="blank">More Info</a>',
				),
				array(
					'key'	=> 'fb_ogtitle',
						'type' 			=> 'text',				
						'label'	=> 'og:title',
						'help'			=> 'The title of your object as it should appear within the graph, e.g., "The Rock. <a href="http://www.mrfent.com/facebook-all-in-one/open-graph-meta-tags/#title" target="blank">More Info</a>',					
				),			
				array(
					'key'	=> 'fb_ogtype',
						'type' 		=> 'select',
						'label'	=> 'og:type',
						'help'			=> 'The type of your object, e.g., "movie". <a href="http://www.mrfent.com/facebook-all-in-one/open-graph-meta-tags/#type" target="blank">More Info</a>',
						'opts'	=> array(			
											'activity'	=> array("name" => "Activity"),
											'actor'		=> array("name" => "Actor"),
											'album'		=> array("name" => "Album"),
											'article'	=> array("name" => "Article"),
											'athlete'	=> array("name" => "Athlete"),
											'author'	=> array("name" => "Author"),
											'band'		=> array("name" => "Band"),
											'bar'		=> array("name" => "Bar"),
											'blog'		=> array("name" => "Blog"),
											'book'		=> array("name" => "Book"),
											'cafe'		=> array("name" => "Cafe"),
											'cause	'	=> array("name" => "Cause"),
											'city'		=> array("name" => "City"),
											'company'	=> array("name" => "Company"),
											'country'	=> array("name" => "Country"),
											'director'	=> array("name" => "Director"),
											'drink'		=> array("name" => "Drink"),
											'food'		=> array("name" => "Food"),
											'game'		=> array("name" => "Game"),
											'government'=> array("name" => "Government"),
											'hotel'		=> array("name" => "Hotel"),
											'landmark'	=> array("name" => "Landmark"),
											'movie'		=> array("name" => "Movie"),
											'musician'	=> array("name" => "Musician"),
											'non_profit'=> array("name" => "Non Profit"),
											'politician'=> array("name" => "Politician"),
											'product'	=> array("name" => "Product"),
											'public_figure'	=> array("name" => "Public Figure"),
											'restaurant'	=> array("name" => "Restaurant"),
											'school'	=> array("name" => "School"),
											'song'		=> array("name" => "Song"),
											'sport'		=> array("name" => "Sport"),
											'sports_league'	=> array("name" => "Sports League"),
											'sports_team'	=> array("name" => "Sports Team"),
											'state_province'=> array("name" => "State Province"),
											'tv_show'	=> array("name" => "TV Show"),
											'university'=> array("name" => "University"),
											'website'	=> array("name" => "Website"),
											),
				),				
				array(
					'key'	=> 'fb_ogurl',
							'type' 			=> 'text',				
							'label'	=> 'og:url',	
							'help'			=> 'The canonical, permanent URL of the page representing the entity. When you use Open Graph tags, the Like button posts a link to the og:url instead of the URL in the Like button code. <a href="http://www.mrfent.com/facebook-all-in-one/open-graph-meta-tags/#url" target="blank">More Info</a>',			
				),	
				array(
					'key'	=> 'fb_ogsite_name',
							'type' 			=> 'text',				
							'label'	=> 'og:site_name',
							'help'			=> 'A human-readable name for your site, e.g., "IMDb". <a href="http://www.mrfent.com/facebook-all-in-one/open-graph-meta-tags/#site_name" target="blank">More Info</a>'					
				),
					array(
						'key'	=> 'fb_ogdescription',
							'type' 			=> 'textarea',				
							'label'	=> 'og:description',
							'help'			=> 'A one to two sentence description of your page. <a href="http://www.mrfent.com/facebook-all-in-one/open-graph-meta-tags/#description" target="blank">More Info</a>'					
				));
				
			} else {	
				$OG_Meta_B = array();
			}
					$OG_Meta_C = array_merge( $OG_Meta_A, $OG_Meta_B );
					$options[] = array(
							'title' => __( 'Open Graph Meta Tags', 'facebook-all-in-one-dms' ),
							'type'	=> 'multi',
							'opts'	=> $OG_Meta_C
						);
				
			
				
				}
			
				
	return $options;		
		
}

	function section_head(){
		$clone_id = $this->oset['clone_id'];
		global $pagelines_ID;

		$fb_img = apply_filters('pl_opengraph_image', pl_the_thumbnail_url( $pagelines_ID, 'full' ) );
		$fb_content = get_post( $pagelines_ID );
		$facebooksend = ( ploption('fbsend', $this->oset) == true ) ? 'false' : 'true';
		$facebook_opengraphtags = ( ploption('fb_opengraph', $this->oset) == true ) ? 'true' : 'false';
		$facebook_ogtitle = (ploption('fb_ogtitle', $this->oset)) ? ploption('fb_ogtitle', $this->oset) : get_the_title($pagelines_ID);
		$facebook_ogtype = (ploption('fb_ogtype', $this->oset)) ? ploption('fb_ogtype', $this->oset) : 'website';
		$facebook_ogurl = (ploption('fb_ogurl', $this->oset)) ? ploption('fb_ogurl', $this->oset) : get_permalink($pagelines_ID);
		$facebook_ogsite_name = (ploption('fb_ogsite_name', $this->oset)) ? ploption('fb_ogsite_name', $this->oset) : get_bloginfo( 'name' );
		$facebook_fbadmins = (ploption('fb_fbadmins', $this->oset)) ? ploption('fb_fbadmins', $this->oset) : '';
		$facebook_fbapp_id = (ploption('fbappId', $this->oset)) ? ploption('fbappId', $this->oset) : '';
		$facebook_ogimg = (ploption('fb_ogimage', $this->oset)) ? ploption('fb_ogimage', $this->oset) : $fb_img;
		$facebook_ogdescription = str_replace(array("'"), array(),(ploption('fb_ogdescription', $this->oset)) ? ploption('fb_ogdescription', $this->oset) : pl_short_excerpt( $fb_content, 15 ));
 	
	if(!$this->opt('fb_opengraph')){
		echo pl_source_comment('Facebook All-In-One Custom Open Graph');	
		printf( "<meta property='og:title' content='%s' />\n", $facebook_ogtitle);
		printf( "<meta property='og:type' content='%s' />\n", $facebook_ogtype);
		printf( "<meta property='og:url' content='%s' />\n", $facebook_ogurl);
		printf( "<meta property='og:site_name' content='%s' />\n", $facebook_ogsite_name);	
		printf( "<meta property='og:description' content='%s' />", $facebook_ogdescription );
		if(ploption('fb_fbadmins', $this->oset))
			printf( "\n<meta property='fb:admins' content='%s' />", $facebook_fbadmins);
		if(ploption('fbappId', $this->oset))
			printf( "\n<meta property='fb:app_id' content='%s' />", $facebook_fbapp_id);			
		if(ploption('fb_ogimage', $this->oset) || $fb_img)
			printf( "\n<meta property='og:image' content='%s' />", $facebook_ogimg);
		printf( "\n\n");
}
if ($this->opt( 'fbbordercolor' ) && ($this->opt( 'fbmode' ) == 'box')) {

		$facebook_border_color = ($this->opt('fbbordercolor')) ? $this->opt('fbbordercolor') : '';
		$facebook_border_style = sprintf( '<style>section#facebook-all-in-one-dms%s .fb-like-box {border:solid 1px #%s;}</style>', $clone_id, $facebook_border_color );
		echo $facebook_border_style;} 

}	
	
	function section_template(){ 
	
	$facebookmode = ($this->opt('fbmode')) ? $this->opt('fbmode') : '';
	$facebookappid = ($this->opt('fbappId')) ? $this->opt('fbappId') : '';
	$currenturl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$facebookboxurl = str_replace(array('http://', 'https://', 'www.', 'facebook.com/'), array(), ($this->opt('fbboxpagename')) ? $this->opt('fbboxpagename') : 'LikeBoxMode');
	$facebookbuttonurl = ($this->opt('fbbuttonurl')) ? $this->opt('fbbuttonurl') : $currenturl;
	$facebookcommentsurl = ($this->opt('fbcommentsurl')) ? $this->opt('fbcommentsurl') : $currenturl;
	$facebooklanguage = ($this->opt('fblanguage')) ? $this->opt('fblanguage') : 'en_US';
	$facebookcommentsposts = ($this->opt('fbcposts')) ? $this->opt('fbcposts') :   2;
	$facebookheader = ( $this->opt('fbheader') == true ) ? 'false' : 'true';
	$facebookstream = ( $this->opt('fbstream') == true ) ? 'false' : 'true';
	$facebooklayoutstyle = ($this->opt('fblayoutstyle')) ? $this->opt('fblayoutstyle') : 'standard';
	$facebookverb = ($this->opt('fbverb')) ? $this->opt('fbverb') : 'like';
	$facebookfont = ($this->opt('fbfont')) ? $this->opt('fbfont') : '';
	$facebookfaces = ( $this->opt('fbfaces') == true ) ? 'false' : 'true';
	$facebookhidebox = ( $this->opt('fbhidebox') == true ) ? 'true' : 'false';
	$facebookhidebutton = ( $this->opt('fbhidebutton') == true ) ? 'true' : 'false';
	$facebookfriends = ( $this->opt('fbfriends') == true ) ? 'false' : 'true';
	$facebooksend = ( $this->opt('fbsend') == true ) ? 'false' : 'true';
	$facebookheight = ($this->opt('fbheight')) ? $this->opt('fbheight') : '556';
	if 	($facebookmode == 'box' && ($this->opt( 'fbfaces' ))) { $facebookwidth = '300';	}
	elseif ($facebookmode == 'button') { $facebookwidth = ($this->opt('fbwidth')) ? $this->opt('fbwidth') : '450'; } 
	else { $facebookwidth = ($this->opt('fbwidth')) ? $this->opt('fbwidth') : '300'; }
	$facebookcolorscheme = ( $this->opt('fbcolorscheme') == true ) ? 'dark' : 'light';

	if(!ploption('fbmode', $this->oset)){  
		echo setup_section_notify($this, __('Set your Facebook Mode & other information in the PageLines Meta Settings to activate.', 'pagelines'), null, null, 'facebook_all_in_one_meta' ); 
  return;
  }

 if(ploption('fbappId', $this->oset))  
	$facebookappId = sprintf( '%s%s', '&appId=', $facebookappid );
 else
	$facebookappId = "";
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $facebooklanguage ?>/all.js#xfbml=1<?php echo $facebookappId ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
 if ($facebookmode == 'box') {
?>
<div class="fb-like-box" data-href="https://www.facebook.com/<?php echo $facebookboxurl ?>" 
		data-width="<?php echo $facebookwidth ?>"
		data-height="<?php echo $facebookheight ?>"  
		data-show-faces="<?php echo $facebookfaces ?>" 
		data-colorscheme="<?php echo $facebookcolorscheme ?>" 
		data-stream="<?php echo $facebookstream ?>"
		data-show-border="false" 
		data-header="<?php echo $facebookheader ?>">
</div>
<?php
} elseif ($facebookmode == 'button'){
?>
<div class="fb-like" data-href="<?php echo $facebookbuttonurl ?>" 
		data-send="<?php echo $facebooksend ?>"
		data-layout="<?php echo $facebooklayoutstyle ?>"
		data-width="<?php echo $facebookwidth ?>" 
		data-show-faces="<?php echo $facebookfriends ?>"
		data-colorscheme="<?php echo $facebookcolorscheme ?>"
		data-action="<?php echo $facebookverb ?>"
		data-font="<?php echo $facebookfont ?>">
</div>
<?php
} elseif ($facebookmode == 'comments'){
?>		
<div class="fb-comments" 
		data-href="<?php echo $facebookcommentsurl ?>" 
		data-num-posts="<?php echo $facebookcommentsposts ?>" 
		data-width="<?php echo $facebookwidth ?>"
		data-colorscheme="<?php echo $facebookcolorscheme ?>"
</div>
<?php
}
}
}