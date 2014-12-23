<div class="mainbox" id="popup_domination_tab_schedule">
    <div class="popdom_contentbox the_help_box">
        <p><strong>Reset Your Cookies to test the popup on your live website again.</strong></p>
        <p><a href="#clear" id="clear-cookies">Clear my cookie</a> <img class="waiting" style="display:none;" src="images/wpspin_light.gif" alt="" /></p>
        <h3 class="help">Help</h3>
        <div class="popdom_contentbox_inside">
            <?PHP if ($campaign['schedule']['show_anim'] != "inpost") { ?>
            <p><strong>On Website Load:</strong> The popup will appear as soon as the webpage has been fully loaded by the user's browser.</p>
            <p><strong>When mouse leaves the browser viewport:</strong> The popup will appear when the user's mouse enters the address back area. This option in great for when you want the popup to appear when the user tried to leave your website, but won't appear when they click on links on your website.</p>
            <p style="margin-right:15px;"><strong>When the user tries to leave the page:</strong> The popup will appear when ever the user clicks on a link or attempts to leave the page. If you have many links to different parts of your site, we don't recommend this setting.
                This setting also makes an alert box appear before the popup appears. The user will have to click the "Stay On Page" option in the alert box <strong>before</strong> the popup will appear.
            </p>
            <p><strong>Example:</strong></p>
            <img src="<?PHP echo $this->plugin_url; ?>css/images/alert.png" height="178" width="582" alt="" />
            <p>If you are experiencing problems with your popup, please have a look at our help articles at:</p>
            <p><a href="https://popdom.assistly.com/">our Assistly Help Area.</a></p>
            <?PHP } ?>
        </div>
    </div>
    <div class="inside twomaindivs">
        <div class="the_content_box">
            <?PHP if (empty($_GET['type']) || $_GET['type'] != "inline") { ?>
            <div class="popdom_contentbox" style="margin-left:0px;">
                <div class="popdom_contentbox_inside schedule_tab">
                    <h3>When the close button is clicked, how long should it be before the lightbox is shown again?</h3>
                    <span class="exmaple">Please specify in days - e.g. 7. The minimal amount is 1, entering 0 will not make the popup work correctly.</span>
                    <input type="text" name="popup_domination[cookie_time]" value="<?PHP echo (isset($campaign['schedule']['cookie_time'])) ? intval($campaign['schedule']['cookie_time']) : '7'; ?>" />
                    <h3>How many times must site page(s) be visited before the popup appears?</h3>
                    <span class="exmaple">Note: 1 and 0 will both make the PopUp appear on the first visit.</span>
                    <input type="text" name="popup_domination[impression_count]" value="<?PHP echo (isset($campaign['schedule']['impression_count'])) ? $campaign['schedule']['impression_count'] : '0'; ?>" />
                    <h3>What should trigger the popup to display?</h3>
                    <ul id="show_options">
                        <li class="show_opts" id="opt_open">
                            <input type="radio" name="popup_domination[show_opt]" value="open" id="show_opt_open" <?PHP echo $show_opt == 'open' ? ' checked="checked"' : ''; ?> /> <label for="show_opt_open">On Website page load</label>
                            <p class="toggle" id="opt_open_options" style="margin-left:25px;<?PHP echo ($show_opt != 'open') ? 'display:none;' : ''; ?>" >
                                <label for="opt_open_delay">How Long should the delay be before the popup appears? (This is in seconds)</label>
                                <input type="text" class="open_delay" name="popup_domination[delay]" value="<?PHP echo (!empty($campaign['schedule']['delay'])) ? floatval($campaign['schedule']['delay']) : '' ?>"/>
                            </p>
                        </li>
                        <li class="show_opts opt_mouselave">
                            <input type="radio" name="popup_domination[show_opt]" value="mouseleave" id="show_opt_mouseleave" <?PHP echo $show_opt == 'mouseleave' ? ' checked="checked"' : ''; ?> />
                            <label for="show_opt_mouseleave">When mouse leaves the browser viewport. (Mobile devices won't be able to trigger (no mouse!))</label>
                        </li>
                        <li class="show_opts opt_bottompage">
                            <input type="radio" name="popup_domination[show_opt]" value="bottompage" id="show_opt_bottompage" <?PHP echo $show_opt == 'bottompage' ? ' checked="checked"' : ''; ?> />
                            <label for="show_opt_bottompage">When user reaches the bottom of the page.</label>
                        </li>
                        <li class="show_opts opt_unload">
                            <input type="radio" name="popup_domination[show_opt]" value="unload" id="show_opt_unload"<?PHP echo $show_opt == 'unload' ? ' checked="checked"' : ''; ?> /> <label for="show_opt_unload">When the user tries to leave the page (This option requires a javascript alert box).</label>
                            <p style="margin-left:25px; <?PHP echo $show_opt == 'unload' ? '' : 'display:none'; ?>" class="show_opt_unload toggle">
                                <label for="popup_domination_unload_msg" id="popup_domination_unload_msg_label">Alert Text</label>
                                <input type="text" name="popup_domination[unload_msg]" id="popup_domination_unload_msg" value="<?PHP $msg = isset($campaign) ? $campaign['schedule']['unload_msg'] : ''; echo (empty($msg) ? 'Don\'t leave! We have a special offer waiting for you!' : $msg); ?>" />
                            </p>
                        </li>
                        <li class="show_opts opt_linkclick">
                            <input type="radio" name="popup_domination[show_opt]" value="linkclick" id="show_opt_linkclick" <?PHP echo $show_opt == 'linkclick' ? ' checked="checked"' : ''; ?> /> <label for="show_opt_linkclick">When visitors selects an object (i.e. images, buttons, links etc)</label>
                            <p class="toggle" style="margin-left:25px; <?PHP echo $show_opt == 'linkclick' ? '' : 'display:none'; ?>">
                                <label for="show_opt_link_class">Default class is 'popup-domination-link'</label>
                                <input id="show_opt_link_class" type="text" class="" name="popup_domination[linkclick]" value="<?PHP echo!empty($campaign['schedule']['linkclick']) ? $campaign['schedule']['linkclick'] : 'popup-domination-link'; ?>" placeholder="Enter the class name of the element here..." />
                                <strong>Tutorial:</strong> <a href="http://www.popupdomination.com/blog/?p=684" target="_blank">3 Reasons The “Click To Display” Feature Is Great For Your Business</a>
                            </p>
                        </li>
                        <li class="show_opts opt_tab">
                            <input type="radio" name="popup_domination[show_opt]" value="tab" id="show_opt_tab" <?PHP echo $show_opt == 'tab' ? ' checked="checked"' : ''; ?> />
                            <label for="show_opt_tab">When user clicks on a small tab on the side of the page. (Users of IE9 and under will not see this - falls back to "on page load".)</label>
                            <p class="toggle" id="opt_open_options" style="margin-left:25px;<?PHP echo ($show_opt != 'tab') ? 'display:none;' : ''; ?>" >
                                <label for="opt_tab_height">How far down the screen should the tab be in pixels? (Default is 120)</label>
                                <input type="text" class="tab_height" name="popup_domination[tab_height]" value="<?PHP echo (!empty($campaign['schedule']['tab_height'])) ? intval($campaign['schedule']['tab_height']) : '120' ?>"/>
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <h3>How should the popup appear to your visitors</h3>
                        <ul id="show_anim_options">
                            <li><em>Please note these animations won't run if trigger is set to "small tab" above.</em></li>
                            <li><em>Also some older browsers may not support certain animations</em></li>
                            <li>
                                <select name="popup_domination[show_anim]">
                                    <option value="open" <?PHP echo $show_anim == 'open' ? 'selected="selected"' : ''; ?>>Appear immediately with no effects</option>
                                    <option value="fade" <?PHP echo $show_anim == 'fade' ? 'selected="selected"' : ''; ?>>Fade in</option>
                                    <option value="slide" <?PHP echo $show_anim == 'slide' ? 'selected="selected"' : ''; ?>>Slide down from the top</option>
                                    <option value="slideUp" <?PHP echo $show_anim == 'slideUp' ? 'selected="selected"' : ''; ?>>Slide up from the bottom</option>
                                    <option value="slideLeft" <?PHP echo $show_anim == 'slideLeft' ? 'selected="selected"' : ''; ?>>Slide in from the right</option>
                                    <option value="slideRight" <?PHP echo $show_anim == 'slideRight' ? 'selected="selected"' : ''; ?>>Slide in from the left</option>
                                </select>
                            </li>
                        </ul>
                        <ul id="show_to_mobiles">
                            <li class="show_mobile" id="show_mobile">
                                <label><input type="checkbox" name="popup_domination[show_background]" value="true" id="show_background"<?PHP echo $show_background == 'true' ? ' checked="checked"' : ''; ?> /> Show popup backdrop</label><br />
                                <script>
                                jQuery(function(){ 
                                    jQuery('#slider_opacity').slider({
                                        range: 'min',
                                        value: <?PHP echo intval($show_opacity); ?>,
                                        min: 0,
                                        max: 100,
                                        slide: function(event, ui) {
                                            jQuery('#slider_opacity_value').html(ui.value+'%');
                                            jQuery('#show_opacity').val(ui.value);
                                        }
                                    });
                                    jQuery('#slider_opacity_value').html(jQuery('#slider_opacity').slider('value')+'%');
                                    if(jQuery('#mv_cr_section_color').length > 0)
                                        jQuery('#mv_cr_section_color').wpColorPicker();
                                });
                                </script>
                                <input type="hidden" name="popup_domination[show_opacity]" id="show_opacity" value="<?PHP echo intval($show_opacity); ?>" />
                                <label>Popup backdrop opacity<br /><div id="slider_opacity"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="slider_opacity_value"></span></label><br />
                                <label id="backdrop_color">Popup backdrop color</label><br /><input name="popup_domination[show_color]" type="text" id="mv_cr_section_color" value="<?PHP echo esc_attr($show_color); ?>" data-default-color="#000000">
                            </li>
                        </ul>
                        <h3>Where should the popup appear to your visitors</h3>
                        <ul id="show_where_options">
                            <li>
                                <select name="popup_domination[show_where]">
                                    <option value="center" <?PHP echo $show_where == 'center' ? 'selected="selected"' : ''; ?>>Center</option>
                                    <option value="topleft" <?PHP echo $show_where == 'topleft' ? 'selected="selected"' : ''; ?>>Top Left</option>
                                    <option value="topright" <?PHP echo $show_where == 'topright' ? 'selected="selected"' : ''; ?>>Top Right</option>
                                    <option value="bottomleft" <?PHP echo $show_where == 'bottomleft' ? 'selected="selected"' : ''; ?>>Bottom Left</option>
                                    <option value="bottomright" <?PHP echo $show_where == 'bottomright' ? 'selected="selected"' : ''; ?>>Bottom Right</option>
                                </select>
                            </li>
                        </ul>
                        <h3>Do you wish to disable the option to close the popup?</h3>
                        <ul>
                            <li>
                                <p><input class="close_options close_option_true" type="radio" name="popup_domination[close_option]" value="true" id="close_option_true" <?PHP echo (!empty($campaign['schedule']['close_option']) && $campaign['schedule']['close_option'] != 'false') ? ' checked="checked"' : ''; ?> /> <label for="close_option_true">No, user's should be able to exit the popup.</label></p>
                                <p><input class="close_options close_options_false" type="radio" name="popup_domination[close_option]" value="false" id="close_option_false" <?PHP echo (!empty($campaign['schedule']['close_option']) && $campaign['schedule']['close_option'] == 'false') ? ' checked="checked"' : ''; ?> /> <label for="close_option_false">Yes, user's should be required to opt-in to view the requested page.</label></p>                                
                            </li>
                        </ul>
                        <label><input type="checkbox" name="popup_domination[allow_background_close]" value="true" id="allow_background_close"<?PHP echo $allow_background_close == 'true' ? ' checked="checked"' : ''; ?> /> Allow user to close popup by clicking backdrop</label><br />
                    </ul>
                </div>
            </div>
            <?PHP
            //end of section to only be displayed to non-inline popups 
            } else {
            //section to be shown only to inline popups 
            ?>
            <input type="hidden" name="popup_domination[show_anim]" value="inpost" />  								
            <?PHP } //end of section to be shown only to inline popups ?>

            <div class="popdom_contentbox" style="margin-top:20px; margin-left:0px;">
                <h3>On what pages do you wish to display this campaign?</h3>
                <div class="popdom_contentbox_inside">
                    <a class="toggle-all" href="#">Toggle all</a>
                    <?PHP echo $this->page_list() ?>
                </div>
                <p>Please note if you append the text ?pdref=1 or &amp;pdref=1 to your URL PopUp Domination won't show to visitors using that URL. <br />
                    Example:<br/>
                    <i><?PHP echo site_url() ?>/?pdref=1</i><br/><i><?PHP echo site_url() ?>?p=1&amp;pdref=1</i>
                </p>
                <div class="clear"></div>
            </div>
            <div class="popdom_contentbox" style="margin-top:20px; margin-left:0px;">
                <h3>Show based on referral</h3>
                    <label><input type="checkbox" name="popup_domination[show_referral][]" value="/facebook.com/" <?PHP if(in_array('/facebook.com/', $show_referral)) { echo 'checked="checked"'; } ?>> Facebook</label><br>
                    <label><input type="checkbox" name="popup_domination[show_referral][]" value="/google.com/" <?PHP if(in_array('/google.com/', $show_referral)) { echo 'checked="checked"'; } ?>> Google</label><br>
                    <label><input type="checkbox" name="popup_domination[show_referral][]" value="/t.co/" <?PHP if(in_array('/t.co/', $show_referral)) { echo 'checked="checked"'; } ?>> Twitter</label>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
