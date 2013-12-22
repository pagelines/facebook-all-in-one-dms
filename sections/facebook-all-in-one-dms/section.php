<?php
/*
Section: Facebook All-in-One DMS
Version: 1.0.1
Author: MrFent
Author URI: http://mrfent.com/
Demo: http://facebook-all-in-one-dms.mrfent.com/
Class Name: FacebookAllInOneDMS
Description: Combines three Facebook Social Widgets: Like Box, Like Button, & Comments
Workswith: templates, main, sidebar1, sidebar2, sidebar_wrap, header, footer, morefoot
Cloning: true
v3: true
PageLines: true
Filter: social
*/

class FacebookAllInOneDMS extends PageLinesSection {

	function section_opts(){

		$options = array();
		$options[] = array(
				'title' => __( 'Facebook Mode Setup', 'facebook-all-in-one-dms' ),
				'type'	=> 'multi',
				'opts'	=> array(
					array(
						'key'	=> 'fbmode',
						'type' 	=> 'select',
						'help'	=> __( 'Select a Facebook mode, then refresh for more options.', 'facebook-all-in-one-dms' ),							
						'label'	=> __( 'Facebook mode', 'twitter-all-in-one-dms' ),
						'opts'	=> array(
									'box'		=> array('name' => __( 'Like Box', 'facebook-all-in-one-dms' )),
									'button'	=> array('name' => __( 'Like Button', 'facebook-all-in-one-dms' )),
									'comments'	=> array('name' => __( 'Comments', 'facebook-all-in-one-dms' ))
						)),
					array(
						'key'	=> 'fbappId',
						'type' 	=> 'text',				
						'label' => __( 'Enter your <a href="https://developers.facebook.com/apps" target="blank">App ID/API Key</a>', 'facebook-all-in-one-dms' ),
						'help'	=> __( '<a href="http://facebook-all-in-one-dms.mrfent.com/facebook-app-id/" target="blank">How do I get an App ID/API Key?</a>', 'facebook-all-in-one-dms' )
						),
					array(
						'key'	=> 'fblanguage',
						'type' 	=> 'select',
						'label'	=> __( 'Language', 'facebook-all-in-one-dms' ),
						'default'	=> 'en_US',	
						'help'	=> __( 'Make sure the same language is set for any clones you may have. You cannot have clones with different languages on the same page.', 'facebook-all-in-one-dms' ),
						'opts'	=> array(
									'af_ZA'	=> array('name' => __( 'Afrikaans', 'facebook-all-in-one-dms' )),
									'ar_AR'	=> array('name' => __( 'Arabic', 'facebook-all-in-one-dms' )),
									'az_AZ'	=> array('name' => __( 'Azerbaijani', 'facebook-all-in-one-dms' )),
									'be_BY'	=> array('name' => __( 'Belarusian', 'facebook-all-in-one-dms' )),
									'bg_BG'	=> array('name' => __( 'Bulgarian', 'facebook-all-in-one-dms' )),
									'bn_IN'	=> array('name' => __( 'Bengali', 'facebook-all-in-one-dms' )),
									'bs_BA'	=> array('name' => __( 'Bosnian', 'facebook-all-in-one-dms' )),
									'ca_ES'	=> array('name' => __( 'Catalan', 'facebook-all-in-one-dms' )),
									'cs_CZ'	=> array('name' => __( 'Czech', 'facebook-all-in-one-dms' )),
									'cy_GB'	=> array('name' => __( 'Welsh', 'facebook-all-in-one-dms' )),
									'da_DK'	=> array('name' => __( 'Danish', 'facebook-all-in-one-dms' )),
									'de_DE'	=> array('name' => __( 'German', 'facebook-all-in-one-dms' )),
									'el_GR'	=> array('name' => __( 'Greek', 'facebook-all-in-one-dms' )),
									'en_GB'	=> array('name' => __( 'English (UK)', 'facebook-all-in-one-dms' )),
									'en_PI'	=> array('name' => __( 'English (Pirate)', 'facebook-all-in-one-dms' )),
									'en_UD'	=> array('name' => __( 'English (Upside Down)', 'facebook-all-in-one-dms' )),
									'en_US'	=> array('name' => __( 'English (US)', 'facebook-all-in-one-dms' )),
									'eo_EO'	=> array('name' => __( 'Esperanto', 'facebook-all-in-one-dms' )),
									'es_ES'	=> array('name' => __( 'Spanish (Spain)', 'facebook-all-in-one-dms' )),
									'es_LA'	=> array('name' => __( 'Spanish', 'facebook-all-in-one-dms' )),
									'et_EE'	=> array('name' => __( 'Estonian', 'facebook-all-in-one-dms' )),
									'eu_ES'	=> array('name' => __( 'Basque', 'facebook-all-in-one-dms' )),
									'fa_IR'	=> array('name' => __( 'Persian', 'facebook-all-in-one-dms' )),
									'fb_LT'	=> array('name' => __( 'Leet Speak', 'facebook-all-in-one-dms' )),
									'fi_FI'	=> array('name' => __( 'Finnish', 'facebook-all-in-one-dms' )),
									'fo_FO'	=> array('name' => __( 'Faroese', 'facebook-all-in-one-dms' )),
									'fr_CA'	=> array('name' => __( 'French (Canada)', 'facebook-all-in-one-dms' )),
									'fr_FR'	=> array('name' => __( 'French (France)', 'facebook-all-in-one-dms' )),
									'fy_NL'	=> array('name' => __( 'Frisian', 'facebook-all-in-one-dms' )),
									'ga_IE'	=> array('name' => __( 'Irish', 'facebook-all-in-one-dms' )),
									'gl_ES'	=> array('name' => __( 'Galician', 'facebook-all-in-one-dms' )),
									'he_IL'	=> array('name' => __( 'Hebrew', 'facebook-all-in-one-dms' )),
									'hi_IN'	=> array('name' => __( 'Hindi', 'facebook-all-in-one-dms' )),
									'hr_HR'	=> array('name' => __( 'Croatian', 'facebook-all-in-one-dms' )),
									'hu_HU'	=> array('name' => __( 'Hungarian', 'facebook-all-in-one-dms' )),
									'hy_AM'	=> array('name' => __( 'Armenian', 'facebook-all-in-one-dms' )),
									'id_ID'	=> array('name' => __( 'Indonesian', 'facebook-all-in-one-dms' )),
									'is_IS'	=> array('name' => __( 'Icelandic', 'facebook-all-in-one-dms' )),
									'it_IT'	=> array('name' => __( 'Italian', 'facebook-all-in-one-dms' )),
									'ja_JP'	=> array('name' => __( 'Japanese', 'facebook-all-in-one-dms' )),
									'ka_GE'	=> array('name' => __( 'Georgian', 'facebook-all-in-one-dms' )),
									'km_KH'	=> array('name' => __( 'Khmer', 'facebook-all-in-one-dms' )),
									'ko_KR'	=> array('name' => __( 'Korean', 'facebook-all-in-one-dms' )),
									'ku_TR'	=> array('name' => __( 'Kurdish', 'facebook-all-in-one-dms' )),
									'la_VA'	=> array('name' => __( 'Latin', 'facebook-all-in-one-dms' )),
									'lt_LT'	=> array('name' => __( 'Lithuanian', 'facebook-all-in-one-dms' )),
									'lv_LV'	=> array('name' => __( 'Latvian', 'facebook-all-in-one-dms' )),
									'mk_MK'	=> array('name' => __( 'Macedonian', 'facebook-all-in-one-dms' )),
									'ml_IN'	=> array('name' => __( 'Malayalam', 'facebook-all-in-one-dms' )),
									'ms_MY'	=> array('name' => __( 'Malay', 'facebook-all-in-one-dms' )),
									'nb_NO'	=> array('name' => __( 'Norwegian (bokmal)', 'facebook-all-in-one-dms' )),
									'ne_NP'	=> array('name' => __( 'Nepali', 'facebook-all-in-one-dms' )),
									'nl_NL'	=> array('name' => __( 'Dutch', 'facebook-all-in-one-dms' )),
									'nn_NO'	=> array('name' => __( 'Norwegian (nynorsk)', 'facebook-all-in-one-dms' )),
									'pa_IN'	=> array('name' => __( 'Punjabi', 'facebook-all-in-one-dms' )),
									'pl_PL'	=> array('name' => __( 'Polish', 'facebook-all-in-one-dms' )),
									'ps_AF'	=> array('name' => __( 'Pashto', 'facebook-all-in-one-dms' )),
									'pt_BR'	=> array('name' => __( 'Portuguese (Brazil)', 'facebook-all-in-one-dms' )),
									'pt_PT'	=> array('name' => __( 'Portuguese (Portugal)', 'facebook-all-in-one-dms' )),
									'ro_RO'	=> array('name' => __( 'Romanian', 'facebook-all-in-one-dms' )),
									'ru_RU'	=> array('name' => __( 'Russian', 'facebook-all-in-one-dms' )),
									'sk_SK'	=> array('name' => __( 'Slovak', 'facebook-all-in-one-dms' )),
									'sl_SI'	=> array('name' => __( 'Slovenian', 'facebook-all-in-one-dms' )),
									'sq_AL'	=> array('name' => __( 'Albanian', 'facebook-all-in-one-dms' )),
									'sr_RS'	=> array('name' => __( 'Serbian', 'facebook-all-in-one-dms' )),
									'sv_SE'	=> array('name' => __( 'Swedish', 'facebook-all-in-one-dms' )),
									'sw_KE'	=> array('name' => __( 'Swahili', 'facebook-all-in-one-dms' )),
									'ta_IN'	=> array('name' => __( 'Tamil', 'facebook-all-in-one-dms' )),
									'te_IN'	=> array('name' => __( 'Telugu', 'facebook-all-in-one-dms' )),
									'th_TH'	=> array('name' => __( 'Thai', 'facebook-all-in-one-dms' )),
									'tl_PH'	=> array('name' => __( 'Filipino', 'facebook-all-in-one-dms' )),
									'tr_TR'	=> array('name' => __( 'Turkish', 'facebook-all-in-one-dms' )),
									'uk_UA'	=> array('name' => __( 'Ukrainian', 'facebook-all-in-one-dms' )),
									'vi_VN'	=> array('name' => __( 'Vietnamese', 'facebook-all-in-one-dms' )),
									'zh_CN'	=> array('name' => __( 'Simplified Chinese (China)', 'facebook-all-in-one-dms' )),
									'zh_HK'	=> array('name' => __( 'Traditional Chinese (Hong Kong)', 'facebook-all-in-one-dms' )),
									'zh_TW'	=> array('name' => __( 'Traditional Chinese (Taiwan)', 'facebook-all-in-one-dms' ))
						)),
					array(
						'key'	=> 'fbcolorscheme',	
						'type'	=> 'check',
						'help'	=> __( 'If your page&#39;s background is dark, switch to a darker color scheme.', 'facebook-all-in-one-dms' ),
						'label'	=> __( 'Dark color scheme', 'facebook-all-in-one-dms' )				
						)));
		$mode = ($this->opt('fbmode')) ? $this->opt('fbmode') : '';
		$Likebox_Mode_A = array(
					array(
						'key'	=> 'fbboxpagename',			
						'type' 	=> 'text',
						'label'	=> __( 'Facebook page name', 'facebook-all-in-one-dms' ),
						'help'	=> __( 'Enter the name component of your Facebook page URL. ( For example, what comes after the facebook URL: www.facebook.com/<strong>[name]</strong> )', 'facebook-all-in-one-dms' )
						),
					array(
						'key'	=> 'fbheader',	
						'type' 	=> 'check',
						'label' => __( 'Hide header', 'facebook-all-in-one-dms' )			
						),		
					array(
						'key'	=> 'fbstream',	
						'type' 	=> 'check',
						'label' => __( 'Hide stream', 'facebook-all-in-one-dms' )
						),
					array(
						'key'	=> 'fbfaces',	
						'type' 	=> 'check',
						'label' => __( 'Hide faces', 'facebook-all-in-one-dms' )
						),
					array(
						'key'	=> 'fbbordercolor',
						'type' 	=> 'color',					
						'label' => __( 'Border color (optional)', 'facebook-all-in-one-dms' ),
						'default'	=> ''
						),
					array(
						'key'	=> 'fbheight',			
						'type' 	=> 'text',
						'label'	=> __( 'Height in px (optional)', 'facebook-all-in-one-dms' ),
						'help'	=> __( 'The default height is 556px. If you hide components such as the stream or faces, you may need to adjust the height to your liking. ', 'facebook-all-in-one-dms' )
							));
		if(!$this->opt( 'fbfaces' )){	
		$Likebox_Mode_B = array(
					array(
						'key'	=> 'fbwidth',			
						'type' 	=> 'text',
						'label'	=> __( '[Fake] Width in px (optional)', 'facebook-all-in-one-dms' ),
						'help'	=> __( 'The Like Box is responsive, so entering a width value does not actually change the width. It does however affect the number of faces that appear. So if you want more faces, enter a value higher than the default 300.', 'facebook-all-in-one-dms' )
						));
		} else { $Likebox_Mode_B = array();	}
		$Likebox_Mode_C = array_merge( $Likebox_Mode_A, $Likebox_Mode_B );
		$Likebutton_Mode_A = array(
					array(	
						'key'	=> 'fbsend',
						'type'	=> 'check',
						'label' => __( 'Hide send button', 'facebook-all-in-one-dms' )
						),
					array(
						'key'	=> 'fblayoutstyle',
						'type' 	=> 'select',
						'label' => __( 'Layout style', 'facebook-all-in-one-dms' ),				
						'default'	=> 'standard',
						'opts'	=> array(
										'standard'		=> array('name' => __( 'Standard', 'facebook-all-in-one-dms' )),
										'button_count'	=> array('name' => __( 'Button Count', 'facebook-all-in-one-dms' )),
										'box_count'		=> array('name' => __( 'Box Count', 'facebook-all-in-one-dms' )),
						)));
		$layoutstyle = ($this->opt('fblayoutstyle')) ? $this->opt('fblayoutstyle') : '';
		if ($layoutstyle == 'standard') {
		$Likebutton_Mode_B = array(
					array(
						'key'	=> 'fbfriends',
						'type' 	=> 'check',
						'label' => __( 'Hide faces', 'facebook-all-in-one-dms' )
						));
		} else { $Likebutton_Mode_B = array();	}				
		$Likebutton_Mode_C = array(
					array(
						'key'	=> 'fbverb',
						'type' 	=> 'select',
						'default' 	=> 'like',
						'label' => __( 'Verb to display', 'facebook-all-in-one-dms' ),
						'opts'	=> array(
									'like'		=> array('name' => __( 'Like', 'facebook-all-in-one-dms' )),
									'recommend'	=> array('name' => __( 'Recommend', 'facebook-all-in-one-dms' ))
						)),
					array(
						'key'	=> 'fbfont',
						'type' 	=> 'select',
						'label' => __( 'Font', 'facebook-all-in-one-dms' ),	
						'default' => 'arial',
						'opts'	=> array(
									'arial'			=> array('name' => __( 'arial', 'facebook-all-in-one-dms' )),
									'lucida grande'	=> array('name' => __( 'lucida grande', 'facebook-all-in-one-dms' )),
									'segoe ui'		=> array('name' => __( 'segoe ui', 'facebook-all-in-one-dms' )),
									'tahoma'		=> array('name' => __( 'tahoma', 'facebook-all-in-one-dms' )),
									'trebuchet ms'	=> array('name' => __( 'trebuchet ms', 'facebook-all-in-one-dms' )),
									'verdana'		=> array('name' => __( 'verdana', 'facebook-all-in-one-dms' )),
						)),
					array(
						'key'	=> 'fbbuttonurl',
						'type' 	=> 'text',				
						'label'	=> __( 'Custom URL to like', 'facebook-all-in-one-dms' ),	
						'help'	=> __( 'If you want to link this button to a website or page other than this one, enter the custom URL here. Otherwise, just leave this blank.<br /><br />Don&#39;t forget the <strong>http://</strong>', 'facebook-all-in-one-dms' )
						));
		if ($layoutstyle == 'standard') {						
		$Likebutton_Mode_D = array(
					array(
						'key'	=> 'fbwidth',			
						'type' 	=> 'text',
						'label'	=> __( 'Width', 'facebook-all-in-one-dms' ),
						));
		} else { $Likebutton_Mode_D = array();	}				
						
		$Likebutton_Mode_E = array_merge( $Likebutton_Mode_A, $Likebutton_Mode_B, $Likebutton_Mode_C, $Likebutton_Mode_D );
		$Comments_Mode = array(
					array(
						'key'			=> 'fbcposts',
						'type' 			=> 'count_select',
						'default'		=> '10',
						'count_number'	=> '100', 
						'count_start'	=> '1',
						'label' 		=> __( 'Number of posts', 'facebook-all-in-one-dms' )
						),
					array(
						'key'			=> 'fbcommentsurl',
						'type' 			=> 'text',				
						'label'			=> __( 'Custom URL to comment on', 'facebook-all-in-one-dms' ),	
						'help'			=> __( 'If you want these comments to link to a page other than this one, enter the custom URL here. Otherwise, just leave this blank.<br /><br />Don&#39;t forget the <strong>http://</strong>', 'facebook-all-in-one-dms' )
						));
		if($this->opt( 'fbmode' )){			
		if ($mode == 'box') {
		$options[] = array(
				'title' => __( 'Like Box Mode', 'facebook-all-in-one-dms' ),
				'type'	=> 'multi',
				'opts'	=> $Likebox_Mode_C
						);
		} elseif ($mode == 'button') {
		$options[] = array(
				'title' => __( 'Like Button Mode', 'facebook-all-in-one-dms' ),
				'type'	=> 'multi',
				'help'	=> __( '<strong>If you are testing the Like Button on a localhost, you&#39;ll need to enter a Custom URL. Facebook doesn&#39;t like localhost and needs an actual URL to make the Like Button appear</strong>', 'facebook-all-in-one-dms' ),
				'opts'	=> $Likebutton_Mode_E
						);
		} else {
		$options[] = array(
				'title' => __( 'Comments Mode', 'facebook-all-in-one-dms' ),
				'type'	=> 'multi',
				'opts'	=> $Comments_Mode
						);
		}
		if($this->opt( 'fb_opengraphtags' )){
		$OG_Meta_A = array(
					array(
						'key'	=> 'fb_opengraphtags',
						'type'	=> 'check',
						'label' => __( 'Enable Custom Open Graph Meta Tags', 'facebook-all-in-one-dms' ),			
						'help'	=> __( '<a href="http://facebook-all-in-one-dms.mrfent.com/open-graph-meta-tags/" target="blank">Open Graph Meta Tags</a> let you control how your page/post appears on Facebook.<br /><br /><strong>These tags already have default values set that will work best with your page/post, so normally you can leave most of these blank:</strong>', 'facebook-all-in-one-dms' )
						));
		$OG_Meta_B = array(
					array(
						'key'	=> 'fb_ogimage',
						'type' 	=> 'image_upload',			
						'label'	=> __( 'og:image', 'facebook-all-in-one-dms' ),
						'help'	=> __( 'The <strong>og:image</strong> tag tells Facebook to use the specified image when the page/post is shared.<br /><br /><strong>Defaults to the Featured Image</strong><br /><br /><a href="http://facebook-all-in-one-dms.mrfent.com/open-graph-meta-tags/#image" target="blank">More Info</a>', 'facebook-all-in-one-dms' )
						),
					array(
						'key'	=> 'fb_ogtitle',
						'type' 	=> 'text',				
						'label'	=> __( 'og:title', 'facebook-all-in-one-dms' ),
						'help'	=> __( 'The title to accompany the URL. In most cases, this should be the page/post title.<br /><br /><strong>Defaults to the Title of the page/post</strong><br /><br /><a href="http://facebook-all-in-one-dms.mrfent.com/open-graph-meta-tags/#title" target="blank">More Info</a>', 'facebook-all-in-one-dms' )					
						),
					array(
						'key'	=> 'fb_ogdescription',
						'type' 	=> 'textarea',				
						'label'	=> __( 'og:description', 'facebook-all-in-one-dms' ),
						'help'	=> __( 'A one to two sentence description or excerpt of your page/post.<br /><br /><strong>Defaults to a 15-word excerpt of the page/post loop</strong><br /><br /><a href="http://facebook-all-in-one-dms.mrfent.com/open-graph-meta-tags/#description" target="blank">More Info</a>' )					
						),			
					array(
						'key'	=> 'fb_ogtype',
						'type' 	=> 'select',
						'label'	=> __( 'og:type', 'facebook-all-in-one-dms' ),
						'default'	=> 'article',
						'help'	=> __( 'The type of your object, e.g., "website", "movie", etc...<br /><br /><a href="http://facebook-all-in-one-dms.mrfent.com/open-graph-meta-tags/#type" target="blank">More Info</a>', 'facebook-all-in-one-dms' ),
						'opts'	=> array(			
									'activity'	=> array('name' => __( 'Activity', 'facebook-all-in-one-dms' )),
									'actor'		=> array('name' => __( 'Actor', 'facebook-all-in-one-dms' )),
									'album'		=> array('name' => __( 'Album', 'facebook-all-in-one-dms' )),
									'article'	=> array('name' => __( 'Article', 'facebook-all-in-one-dms' )),
									'athlete'	=> array('name' => __( 'Athlete', 'facebook-all-in-one-dms' )),
									'author'	=> array('name' => __( 'Author', 'facebook-all-in-one-dms' )),
									'band'		=> array('name' => __( 'Band', 'facebook-all-in-one-dms' )),
									'bar'		=> array('name' => __( 'Bar', 'facebook-all-in-one-dms' )),
									'blog'		=> array('name' => __( 'Blog', 'facebook-all-in-one-dms' )),
									'book'		=> array('name' => __( 'Book', 'facebook-all-in-one-dms' )),
									'cafe'		=> array('name' => __( 'Cafe', 'facebook-all-in-one-dms' )),
									'cause	'	=> array('name' => __( 'Cause', 'facebook-all-in-one-dms' )),
									'city'		=> array('name' => __( 'City', 'facebook-all-in-one-dms' )),
									'company'	=> array('name' => __( 'Company', 'facebook-all-in-one-dms' )),
									'country'	=> array('name' => __( 'Country', 'facebook-all-in-one-dms' )),
									'director'	=> array('name' => __( 'Director', 'facebook-all-in-one-dms' )),
									'drink'		=> array('name' => __( 'Drink', 'facebook-all-in-one-dms' )),
									'food'		=> array('name' => __( 'Food', 'facebook-all-in-one-dms' )),
									'game'		=> array('name' => __( 'Game', 'facebook-all-in-one-dms' )),
									'government'=> array('name' => __( 'Government', 'facebook-all-in-one-dms' )),
									'hotel'		=> array('name' => __( 'Hotel', 'facebook-all-in-one-dms' )),
									'landmark'	=> array('name' => __( 'Landmark', 'facebook-all-in-one-dms' )),
									'movie'		=> array('name' => __( 'Movie', 'facebook-all-in-one-dms' )),
									'musician'	=> array('name' => __( 'Musician', 'facebook-all-in-one-dms' )),
									'non_profit'=> array('name' => __( 'Non Profit', 'facebook-all-in-one-dms' )),
									'politician'=> array('name' => __( 'Politician', 'facebook-all-in-one-dms' )),
									'product'	=> array('name' => __( 'Product', 'facebook-all-in-one-dms' )),
									'public_figure'	=> array('name' => __( 'Public Figure', 'facebook-all-in-one-dms' )),
									'restaurant'	=> array('name' => __( 'Restaurant', 'facebook-all-in-one-dms' )),
									'school'	=> array('name' => __( 'School', 'facebook-all-in-one-dms' )),
									'song'		=> array('name' => __( 'Song', 'facebook-all-in-one-dms' )),
									'sport'		=> array('name' => __( 'Sport', 'facebook-all-in-one-dms' )),
									'sports_league'	=> array('name' => __( 'Sports League', 'facebook-all-in-one-dms' )),
									'sports_team'	=> array('name' => __( 'Sports Team', 'facebook-all-in-one-dms' )),
									'state_province'=> array('name' => __( 'State Province', 'facebook-all-in-one-dms' )),
									'tv_show'	=> array('name' => __( 'TV Show', 'facebook-all-in-one-dms' )),
									'university'=> array('name' => __( 'University', 'facebook-all-in-one-dms' )),
									'website'	=> array('name' => __( 'Website', 'facebook-all-in-one-dms' )),
				)),				
					array(
						'key'	=> 'fb_ogurl',
						'type' 	=> 'text',				
						'label'	=> __( 'og:url', 'facebook-all-in-one-dms' ),	
						'help'	=> __( 'The URL should be the canonical address for the given page.<br /><br /><strong>Defaults to the current URL</strong><br /><br /><a href="http://facebook-all-in-one-dms.mrfent.com/open-graph-meta-tags/#url" target="blank">More Info</a>', 'facebook-all-in-one-dms' )			
						),	
					array(
						'key'	=> 'fb_ogsite_name',
						'type' 	=> 'text',				
						'label'	=> __( 'og:site_name', 'facebook-all-in-one-dms' ),
						'help'	=> __( 'A human-readable name for your site, e.g., "IMDb".<br /><br /><strong>Defaults to the WordPress site name</strong><br /><br /><a href="http://facebook-all-in-one-dms.mrfent.com/open-graph-meta-tags/#site_name" target="blank">More Info</a>', 'facebook-all-in-one-dms' )					
						),
					
					array(
						'key'	=> 'fb_fbadmins',
						'type' 	=> 'text',				
						'label'	=> __( 'fb:admins', 'facebook-all-in-one-dms' ),		
						'help'	=> __( 'A comma-separated list of the Facebook IDs of page administrators. This will let you moderate Facebook comments. At a minimum, include your own Facebook ID.<br /><br /><strong>If you entered a Facebook App ID/API Key, that will work in lieu of this setting.</strong><br /><br /><a href="http://facebook-all-in-one-dms.mrfent.com/open-graph-meta-tags/#admins" target="blank">More Info</a>', 'facebook-all-in-one-dms' )			
						));
		} else {
		$OG_Meta_A = array(
					array(
						'key'	=> 'fb_opengraphtags',
						'type'	=> 'check',
						'label' => __( 'Enable Custom Open Graph Meta Tags?', 'facebook-all-in-one-dms' ),			
						'help'	=> __( '<a href="http://facebook-all-in-one-dms.mrfent.com/open-graph-meta-tags/" target="blank">Open Graph Meta Tags</a> let you control how your page/post appears on Facebook.', 'facebook-all-in-one-dms' )
						));		
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

	
				//		if ( is_singular() ) {
			//			$fb_img = wp_get_attachment_url( get_post_thumbnail_id() );
			//			$facebook_ogdescription = str_replace(array("'"), array('&#39;'),($this->opt('fb_ogdescription')) ? $this->opt('fb_ogdescription') : pl_short_excerpt( get_post(), 15 ));
				//	} else {
				//		$fb_img = PL_IMAGES .'/dms.png';
		//				$facebook_ogdescription = str_replace(array("'"), array('&#39;'),($this->opt('fb_ogdescription')) ? $this->opt('fb_ogdescription') : 'Description not available';
				//	}	
		
		
		if ( is_singular() ) {
		$fb_img = wp_get_attachment_url( get_post_thumbnail_id() );
		$facebook_ogdescription = str_replace(array("'"), array('&#39;'),($this->opt('fb_ogdescription')) ? $this->opt('fb_ogdescription') : pl_short_excerpt( get_post(), 15 ));
 		} else {
		$fb_img = PL_IMAGES .'/avatar_default.gif';
		$facebook_ogdescription = str_replace(array("'"), array('&#39;'),($this->opt('fb_ogdescription')) ? $this->opt('fb_ogdescription') : 'Description not available');
	
}
		$facebooksend = ( $this->opt('fbsend') == true ) ? 'false' : 'true';
		$facebook_opengraphtags = ( $this->opt('fb_opengraph') == true ) ? 'true' : 'false';
		$facebook_ogtitle = ($this->opt('fb_ogtitle')) ? $this->opt('fb_ogtitle') : get_the_title();
		$facebook_ogtype = ($this->opt('fb_ogtype')) ? $this->opt('fb_ogtype') : 'article';
		$facebook_ogurl = ($this->opt('fb_ogurl')) ? $this->opt('fb_ogurl') : get_permalink();
		$facebook_ogsite_name = ($this->opt('fb_ogsite_name')) ? $this->opt('fb_ogsite_name') : get_bloginfo( 'name' );
		$facebook_fbadmins = ($this->opt('fb_fbadmins')) ? $this->opt('fb_fbadmins') : '';
		$facebook_fbapp_id = ($this->opt('fbappId')) ? $this->opt('fbappId') : '';
		$facebook_ogimg = ($this->opt('fb_ogimage')) ? $this->opt('fb_ogimage') : $fb_img;

	if($this->opt( 'fb_opengraphtags' )){
		echo pl_source_comment('Facebook All-In-One Custom Open Graph');	
		printf( "<meta property='og:title' content='%s' />\n", $facebook_ogtitle);
		printf( "<meta property='og:type' content='%s' />\n", $facebook_ogtype);
		printf( "<meta property='og:url' content='%s' />\n", $facebook_ogurl);
		printf( "<meta property='og:site_name' content='%s' />\n", $facebook_ogsite_name);	
		printf( "<meta property='og:description' content='%s' />", $facebook_ogdescription );
		if($this->opt('fb_fbadmins'))
			printf( "\n<meta property='fb:admins' content='%s' />", $facebook_fbadmins);
		if($this->opt('fbappId'))
			printf( "\n<meta property='fb:app_id' content='%s' />", $facebook_fbapp_id);			
		if($this->opt('fb_ogimage') || $fb_img)
			printf( "\n<meta property='og:image' content='%s' />", $facebook_ogimg);
		printf( "\n\n");

}

	if ($this->opt( 'fbbordercolor' ) && ($this->opt( 'fbmode' ) == 'box')) {
		$clone_id = $this->oset['clone_id'];
		$facebook_border_color = ($this->opt('fbbordercolor')) ? $this->opt('fbbordercolor') : '';
		$facebook_border_style = sprintf( '<style>section#facebook-all-in-one-dms%s .fb-like-box {border:solid 1px #%s;}</style>', $clone_id, $facebook_border_color );
		echo $facebook_border_style;} 
}	
	
	function section_template(){ 
		$facebookmode = ($this->opt('fbmode')) ? $this->opt('fbmode') : '';
		$facebookappid = ($this->opt('fbappId')) ? $this->opt('fbappId') : '';
		$facebookboxpagename = str_replace(array('http://', 'https://', 'www.', 'facebook.com/'), array(), ($this->opt('fbboxpagename')) ? $this->opt('fbboxpagename') : '');
		$facebookbuttonurl = ($this->opt('fbbuttonurl')) ? $this->opt('fbbuttonurl') : get_permalink();
		$facebookcommentsurl = ($this->opt('fbcommentsurl')) ? $this->opt('fbcommentsurl') : get_permalink();
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
	if(!$this->opt('fbmode')){  
		echo setup_section_notify($this, __('Set your Facebook Mode & other information in the Section Options to activate.', 'facebook-all-in-one-dms')); 
	return;
	}
	if( $facebookmode == 'box' && (!$this->opt('fbboxpagename'))){  
		echo setup_section_notify($this, __('You set the Facebook Mode to Like Box, but you still need to enter your <strong>Facebook page name.</strong>', 'facebook-all-in-one-dms')); 
	return;
	}
	if($this->opt('fbappId')) {
		$facebookappId = sprintf( '%s%s', '&appId=', $facebookappid );
 	} else {
		$facebookappId = "";
	}	
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
<div class="fb-like-box" data-href="https://www.facebook.com/<?php echo $facebookboxpagename ?>" 
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