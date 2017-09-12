jQuery(document).ready(function($) {
    //phonak_content SHORTCODE BUTTON
    tinymce.create('tinymce.plugins.phonak_content_plugin', {
        init : function(ed, url) {
            // Register buttons - trigger above command when clicked
            ed.addButton('phonak_content_button', {
                title : 'Insert Phonak Content',
                image: url + '/images/content.png',
                onclick : function() {
                    // triggers the thickbox
                    var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                    W = W - 80;
                    H = H - 84;
                    tb_show( 'phonak_content', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=phonak_content-form' );
                }
            });
        }
    });

    // Register our TinyMCE plugin
    // first parameter is the button ID1
    // second parameter must match the first parameter of the tinymce.create() function above
    tinymce.PluginManager.add('phonak_content_button', tinymce.plugins.phonak_content_plugin);



    // executes this when the DOM is ready
    jQuery(function(){
        // creates a form to be displayed everytime the button is clicked
        // you should achieve this using AJAX instead of direct html code like this

        var formContent = '<div id="phonak_content-form"><table id="phonak_content-table" class="form-table">';

        formContent += '\
            <tr>\
                <th><label for="phonak_content_type">Type</label></th>\
                <td>\
                <select name="phonak_content_type" id="phonak_content_type">\
                <option value="Hearing Loss">Hearing Loss - Hearing matters</option>\
                <option value="How Do We Hear">Hearing Loss - How do we hear?</option>\
                <option value="Typical warning signs of hearing loss">Hearing Loss - Typical warning signs of hearing loss</option>\
                <option value="Hearing loss in everyday life">Hearing Loss - Hearing loss in everyday life</option>\
                <option value="Levels of sound (in dB HL)">Hearing Loss - Levels of sound (in dB HL)</option>\
                <option value="Problems caused by hearing loss">Hearing Loss - Problems caused by hearing loss</option>\
                <option value="Why should you consider a hearing aid">Hearing Loss - Why should you consider a hearing aid?</option>\
                <option value="Types of hearing aids">Hearing Loss - Types of hearing aids</option>\
                <option value="Types of hearing loss">Hearing Loss - Types of hearing loss</option>\
                </select>\
                </td>\
            </tr>\
		</table>\
		<p class="submit">\
			<input type="button" id="button-submit" class="button-primary" value="Insert Content" name="submit" />\
		</p>\
		</div>';

        var form = jQuery(formContent);

        var table = form.find('table');
        form.appendTo('body').hide();

        // handles the click event of the submit button
        form.find('#button-submit').click(function(){
            var shortcode = '';
            var phonak_content_type = table.find('#phonak_content_type').val();

            if(phonak_content_type == 'Hearing Loss'){
                shortcode += '' +
                    '<p>[container inner_class="row"]</p>' +
                        '<p>[col class="col-md-8"]</p>' +
                            '<h2>Hearing matters</h2></p>' +
                            '<p>Being able to hear is an important part of an active and enjoyable life. Normal hearing allows us to connect with the world around us, to have conversations with friends, enjoy TV and music, and hear warning signals such as fire alarms or approaching traffic.</p>' +
                            '<p>About 360 million people (over 5% of the world’s population) are affected by hearing loss. Half of all cases could be avoided through prevention and medical treatment.</p>' +
                            '<p>Even people with mild hearing loss experience difficulties, such as following a conversation or a business meeting, especially in a crowded or noisy environment.</p>' +
                            '<p>Reasons why people lose some of their ability to hear are:</p>' +
                            '<ul>' +
                                '<li>Age</li>' +
                                '<li>Exposure to noise</li>' +
                                '<li>Illness</li>' +
                                '<li>Medicine or drugs</li>' +
                            '</ul>' +
                            '<p>When hearing loss starts, other things can be lost too, such as social connection and the ability to communicate. Even physical health can deteriorate.</p>' +
                        '<p>[/col]</p>' +
                        '<p>[col class="col-md-4"]</p>' +
                            '<p><img class="alignnone size-full" src="http://phonakmarketing.ca/web-design-assets/images/hearing-matters.png" width="383" height="403" /></p>' +
                        '<p>[/col]</p>' +
                    '<p>[/container]</p>';
            }else if(phonak_content_type == 'How Do We Hear'){
                shortcode += '' +
                    '<p>[container inner_class="row"]</p>' +
                        '<p>[col class="col-md-4"]</p>' +
                            '<p><img class="alignnone size-full" src="http://phonakmarketing.ca/web-design-assets/images/how-do-we-hear.png" width="612" height="375" /></p>' +
                        '<p>[/col]</p>' +
                        '<p>[col class="col-md-8"]</p>' +
                            '<h2>How Do We Hear?</h2>' +
                            '<p>Sound waves enter the ear canal and cause the eardrum and middle ear bones to vibrate. This sends an electrical signal from the inner ear, via the hearing nerve to the brain.</p>' +
                        '<p>[/col]</p>' +
                    '<p>[/container]</p>';
            }else if(phonak_content_type == 'Typical warning signs of hearing loss'){
                shortcode += '' +
                    '<p>[container inner_class="row"]</p>' +
                        '<p>[col class="col-md-6"]</p>' +
                            '<h2>Typical warning signs of hearing loss</h2>' +
                            '<ul>' +
                                '<li>Difficulty hearing from a distance</li>' +
                                '<li>Problems hearing speech in the presence of background noise</li>' +
                                '<li>Others find the affected person speaks too loudly</li>' +
                                '<li>Other people appear to mumble</li>' +
                                '<li>Family or neighbour complains that radio or TV is played too loudly</li>' +
                                '<li>Difficulty understanding soft speech or female and children’s voices</li>' +
                                '<li>Often having to ask people to repeat themselves</li>' +
                                '<li>Inability to hear common sounds in the household, such as alarm clock, water-tap dripping, etc.</li>' +
                            '</ul>' +
                            '<p>People wait for 5 to 7 years after first experiencing hearing loss symptoms before seeking help.</p>' +
                        '<p>[/col]</p>' +
                        '<p>[col class="col-md-6"]</p>' +
                            '<p><img class="alignnone size-full" src="http://phonakmarketing.ca/web-design-assets/images/Typical-warning-signs-of-hearing-loss.png" width="383" height="285" /></p>' +
                            '<p>If you or someone close to you might have hearing loss, talk to your physician about the best action to take</p>' +
                            '<p>A hearing care professional can help identify hearing loss and suggest the best solution</p>' +
                            '<p>New types of hearing aids are available that are effective, affordable, comfortable and discrete</p>' +
                        '<p>[/col]</p>' +
                    '<p>[/container]</p>';
            }else if(phonak_content_type == 'Hearing loss in everyday life'){
                shortcode += '' +
                    '<p>[container inner_class="row"]</p>' +
                        '<p>[col]</p>' +
                            '<h2>Hearing loss in everyday life</h2>'+
                            '<p>Hearing loss can range from mild to profound. This graph shows which sounds can or cannot be heard depending on the degree of hearing loss. For example, someone with a severe hearing loss can hear an airplane or a motorbike close-by. (Very loud, hence lower end of the graph) However they will not be able to hear normal-level speech or birdsong.</p>' +
                            '<h3>Frequency and amplitude of a variety of common sounds</h3>'+
                            '<p>A birdtweet is a high-pitched tone, therefore on the right of the graph; low-pitched tones are on the left.</p>' +
                            '<p><img class="alignnone size-full" src="http://phonakmarketing.ca/web-design-assets/images/Frequency-and-amplitude-of-a-variety-of-common-sounds.png" width="2389" height="1052" /></p>' +
                        '<p>[/col]</p>' +
                    '<p>[/container]</p>';
            }else if(phonak_content_type == 'Levels of sound (in dB HL)'){
                shortcode += '' +
                    '<p>[container inner_class="row"]</p>' +
                        '<p>[col]</p>' +
                            '<h2>Levels of sound (in dB HL)</h2>'+
                            '<p>The following table gives examples of how loud different sounds are. Loud levels of noise can cause temporary or permanent damage to hearing. It is therefore important to wear ear protection when exposed to loud sounds, especially over a longer period of time.</p>' +
                            '<h3>How loud is too loud?</h3>'+
                            '<p><img class="alignnone size-full" src="http://phonakmarketing.ca/web-design-assets/images/How-loud-is-too-loud.png" width="2389" height="1052" /></p>' +
                        '<p>[/col]</p>' +
                    '<p>[/container]</p>';
            }else if(phonak_content_type == 'Problems caused by hearing loss'){
                shortcode += '' +
                    '<p>[container inner_class="row"]</p>' +
                    '<p>[col]</p>' +
                    '<h2>Problems caused by hearing loss</h2>'+
                    '<p>Hearing loss means more than simply not hearing well – people with hearing loss have reported a range of problems that have a negative effect on their lives or on the lives of people around them.</p>' +
                    '<p>Hearing loss can also cause changes to the body’s immune system, increasing the risk of illness – working people with hearing loss tend to have more sick leave than those with normal hearing.</p>' +
                    '<h3>Health</h3>' +
                    '<ul>' +
                        '<li>Fatigue due to listening effort (e.g. in noisy surroundings)</li>' +
                        '<li>Frustration, depression</li>' +
                        '<li>Anger</li>' +
                        '<li>Increased frequency of illness and hospital visits</li>' +
                        '<li>Impaired memory and ability to learn new tasks</li>' +
                        '<li>Significantly increased risk of developing dementia</li>' +
                        '<li>Diminished psychological and overall health</li>' +
                    '</ul>' +
                    '<h3>Interpersonal</h3>' +
                    '<ul>' +
                        '<li>Misunderstandings</li>' +
                        '<li>Loneliness, social isolation</li>' +
                        '<li>Reduced job performance and salary</li>' +
                        '<li>Impact on travel, activities with friends, events</li>' +
                    '</ul>' +
                    '<h3>Safety</h3>' +
                    '<ul>' +
                        '<li>Traffic</li>' +
                        '<li>Alarms</li>' +
                    '</ul>'+
                    '<p>[/col]</p>' +
                    '<p>[/container]</p>';
            }else if(phonak_content_type == 'Why should you consider a hearing aid'){
                shortcode += '' +
                    '<p>[container inner_class="row"]</p>' +
                        '<p>[col class="col-md-8"]</p>' +
                            '<h2>Why should you consider a hearing aid?</h2>' +
                            '<p>As you have seen, hearing loss can have a potentially devastating effect on life</p>' +
                            '<p>However, most people wait for years before seeking help to correct hearing loss</p>' +
                            '<p>Having a hearing test and getting a hearing aid fitted offers multiple benefits</p>' +
                            '<ul>' +
                            '<li>Better hearing</li>' +
                            '<li>Improved quality of life (e.g. social activity, feeling connected with people)</li>' +
                            '<li>A higher level of general health</li>' +
                            '<li>More satisfying communications at work, with friends and family, and in other circumstances (shopping, answering the phone, etc.)</li>' +
                            '</ul>' +
                        '<p>[/col]</p>' +
                    '<p>[col class="col-md-4"]</p>' +
                        '<p><img class="alignnone size-full" src="http://phonakmarketing.ca/web-design-assets/images/Why-should-you-consider-a-hearing-aid.png" width="380" height="448" /></p>' +
                    '<p>[/col]</p>' +
                '<p>[/container]</p>';
            }else if(phonak_content_type == 'Types of hearing aids'){
                shortcode += '' +
                '<p>[container inner_class="row pt-4 pb-0"]</p>' +
                    '<p>[col class="col-md-6"]</p>' +
                        '<p><img class="alignleft size-full" src="http://phonakmarketing.ca/web-design-assets/images/Nano.png" width="125" /></p>' +
                        '<h2>Nano/Invisible In the Canal</h2>'+
                        '<h6>(IIC)</h6>'+
                        '<p>These discreet hearing aids are the tiniest hearing aids made. They fit very deep in the ear canal making it ideal for life on the go. Because of their tiny size, they are a great option for people looking for a discreet solution.</p>' +
                    '<p>[/col]</p>' +
                    '<p>[col class="col-md-6"]</p>' +
                        '<p><img class="alignleft size-full" src="http://phonakmarketing.ca/web-design-assets/images/CIC.png" width="125" /></p>' +
                        '<h2>Completly In the Canal</h2>'+
                        '<h6>(CIC)</h6>'+
                        '<p>Sleek and subtle, these hearing aids are molded to the contours of your ear for a superior fit. They offer a natural look and hearing experience. </p>' +
                    '<p>[/col]</p>' +
                  '<p>[/container]</p>' +
                  '<p>[container inner_class="row pt-0 pb-0"]</p>' +
                    '<p>[col class="col-md-6"]</p>' +
                        '<p><img class="alignleft size-full" src="http://phonakmarketing.ca/web-design-assets/images/HalfShell.png" width="125" /></p>' +
                        '<h2>Half Shell/In the Canal</h2>'+
                        '<h6>(ITC)</h6>'+
                        '<p>This style sits in the lower portion of the outer bowl of the ear, making them comfortable and easy to use. They have longer battery life, are easy to handle, and have external controls.</p>' +
                    '<p>[/col]</p>' +
                    '<p>[col class="col-md-6"]</p>' +
                        '<p><img class="alignleft size-full" src="http://phonakmarketing.ca/web-design-assets/images/FullShell.png" width="125" /></p>' +
                        '<h2>Full Shell/In the Ear</h2>'+
                        '<h6>(ITE)</h6>'+
                        '<p>These are custom molded hearing aids that are easy to use for people with dexterity or vision problems. They are comfortable hearing aids allowing for all day use.</p>' +
                    '<p>[/col]</p>' +
                  '<p>[/container]</p>' +
                  '<p>[container inner_class="row pt-0 pb-4"]</p>' +
                    '<p>[col class="col-md-6"]</p>' +
                        '<p><img class="alignleft size-full" src="http://phonakmarketing.ca/web-design-assets/images/Receiver.png" width="125" /></p>' +
                        '<h2>Receiver in the Canal</h2>'+
                        '<h6>(RIC)</h6>'+
                        '<p>Reliable and convenient, these devices are lightweight, small, and flexible. They are the most popular hearing aids on the market today. </p>' +
                    '<p>[/col]</p>' +
                    '<p>[col class="col-md-6"]</p>' +
                        '<p><img class="alignleft size-full" src="http://phonakmarketing.ca/web-design-assets/images/BehindtheEar.png" width="125" /></p>' +
                        '<h2>Behind the Ear</h2>'+
                        '<h6>(BTE)</h6>'+
                        '<p>This option can fit any type of hearing loss. It follows the contour behind your ear, giving you more controls and power than any other style</p>' +
                    '<p>[/col]</p>' +
                '<p>[/container]</p>';
            }else if(phonak_content_type == 'Types of hearing loss'){
                shortcode += '' +
                    '<p>[container inner_class="row" class="text-center"]</p>' +
                        '<p>[col]</p>' +
                            '<p><img class="aligncenter size-full" src="http://phonakmarketing.ca/web-design-assets/images/HearingLossBanner.png" width="550" /></p>' +
                        '<p>[/col]</p>' +
                        '<p>[col class="col-md-4"]</p>' +
                            '<h2>Conductive hearing loss</h2>'+
                            '<p>Conductive hearing loss occurs when there is an obstruction in the outer or middle ear, impeding the sound waves from passing through the auditory pathway. Ear wax, infections, fluid behind the eardrum, perforations of the eardrum and otosclerosis (a stiffening of the bones in the middle ear) are the most common types of conductive hearing loss. Most outer and middle ear problems can be effectively managed with medical intervention.</p>'+
                        '<p>[/col]</p>' +
                        '<p>[col class="col-md-4"]</p>' +
                            '<h2>Sensorineural hearing loss</h2>'+
                            '<p>Sensorineural hearing loss occurs when the hair cells in the hearing organ (cochlea) become damaged and affect the transmission of signals to the auditory part of the brain via the auditory nerve. The most common cause is aging, but loud noise, some types of medication, and genetics can also affect hearing. Inner ear hearing loss cannot be reversed with medication or surgery.</p>'+
                        '<p>[/col]</p>' +
                        '<p>[col class="col-md-4"]</p>' +
                            '<h2>Mixed hearing loss</h2>'+
                            '<p>Mixed hearing loss is a combination of both conductive and sensorineural hearing loss. This type of hearing loss can range from mild to profound.</p>'+
                        '<p>[/col]</p>' +
                    '<p>[/container]</p>';
            }else{
                alert('No template found for this type');
            }

            tinyMCE.activeEditor.execCommand('mceInsertContent', 0, shortcode);

            tb_remove();
        });

    });
});
