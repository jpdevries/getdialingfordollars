<?php include 'functions.php'; get_header(); ?>
<?php get_container_open(); ?>


		<section class="contact" id="section-contact">
            <div class="container">
    			<div class="snuggy">

    				<header class="title">
    					<h2>Register Now</h2>
    					<hr class="small">
    					<p><i class="fa fa-female"></i>&emsp;Let's build a brighter future together&emsp;<i class="fa fa-male"></i></p>
    				</header>

                    <form action="#" method="post" class="un-marked">
                        <fieldset name="contact_info">
                            <legend for="contact_info"><i class="fa fa-pencil-square-o"></i>&emsp;Contact Information</legend>
                            <input type="text" placeholder="First Name" name="first_name" required></input>
                            <input type="text" placeholder="Last Name" name="last_name" required></input>
                            <input type="email" placeholder="Email" name="primary_email" required></input>
                            <!--input type="email" placeholder="secondary_email"></input-->
                            <input type="text" name="street_address" placeholder="Street Address"></input>
                            <input type="text" name="city" placeholder="City"></input>
                            <input id="input__providence" type="text" name="mailing_region" placeholder="State / Providence"></input>
                            <input type="text" name="zip" placeholder="Postal Code"></input>
                            <input id="input__country" type="text" name="country" placeholder="Country" class="typeahead"></input>
                            <hr>
                            <legend name="daytime_phone"><i class="fa fa-fax"></i>&emsp;Telephone Numbers</legend>
                            <input type="text" name="daytime_phone" placeholder="Daytime Phone" required></input>
                            <input type="text" name="evening_phone" placeholder="Evening Phone"></input>
                            <input type="text" name="home_phone" placeholder="Home Phone"></input>
                            <input type="text" name="mobile_phone" placeholder="Mobile Phone"></input>
                        </fieldset>
                        <p class="pssst">&mdash;&nbsp;&nbsp;We never spam or sell your information.&nbsp;&nbsp;&mdash;</p>
                        <fieldset>
                            <legend name="how_did_you_hear"><i class="fa fa-bullhorn"></i>&emsp;How did you learn about this&nbsp;workshop?</legend>
                            <input type="radio" name="how_did_you_hear" value="wtpowers_back_office">WTPowers Back Office</input><br>
                            <input type="radio" name="how_did_you_hear" value="waveten_back_office">WaveTen Back Office</input><br>
                            <input type="radio" name="how_did_you_hear" value="yg90_system_back_office">YG90 System Back Office</input><br>
                            <input type="radio" name="how_did_you_hear" value="wtpowerbuilder_back_office">WTPowerBuilder Back Office</input><br>
                            <input type="radio" name="how_did_you_hear" value="home_business">Home Business Radio Network (HBRN)</input><br>
                            <input type="radio" name="how_did_you_hear" value="social_media">Social Media</input><br>
                            <input type="radio" name="how_did_you_hear" value="referral">Referral</input><br>
                            <input type="radio" name="how_did_you_hear" value="other" checked>Other</input>
                        </fieldset>
                        <fieldset>
                            <legend for="current_situation"><i class="fa fa-user"></i>&emsp;Which of the following best describes your current&nbsp;situation?</legend>
                            <input type="radio" name="current_situation" value="brand_new">I am brand new and I have never sponsored anyone yet.</input><br>
                            <input type="radio" name="current_situation" value="awhile_no_sucess">I've been in network marketing awhile but without success.</input><br>
                            <input type="radio" name="current_situation" value="sponsored_few_but_stuck">I am have sponsored a few people but feel stuck.</input><br>
                            <input type="radio" name="current_situation" value="adv_help">I am looking for advanced network marketing help.</input><br>
                            <input type="radio" name="current_situation" value="other" checked>Other</input>
                        </fieldset>
                        <p class="pssst">&mdash;&nbsp;&nbsp;We appreciate your time.&nbsp;&nbsp;&mdash;</p>
                        <fieldset>
                            <legend><i class="fa fa-share-alt"></i>&emsp;What is the name of your Network Marketing Company?</legend>
                            <input type="text" placeholder="Your Company Name&hellip;"></input>
                        </fieldset>
                    
                        <fieldset>
                            <legend><i class="fa fa-line-chart"></i>&emsp;What are your income goals with Network Marketing?</legend>
                            <input type="text" placeholder="Ex: $100,000/yr"></input>
                        </fieldset>
                    
                        <fieldset>
                            <legend><i class="fa fa-ban"></i>&emsp;What has been stopping you from achieving your income goals with your network marketing&nbsp;business?</legend>
                            <textarea placeholder="I've been struggling with&hellip;" rows="4"></textarea>
                        </fieldset>
                        <p class="pssst">&mdash;&nbsp;&nbsp;You're almost finished.&nbsp;&nbsp;&mdash;</p>
                        <fieldset>
                            <legend for="can_you_attend"><i class="fa fa-microphone"></i>&emsp;Provided you qualify, can you attend the&nbsp;workshop?</legend>
                            <input type="radio" name="can_you_attend" value="day_time_only" checked>Day Time</input><br>
                            <input type="radio" name="can_you_attend" value="night_time_only">Night Time</input><br>
                            <input type="radio" name="can_you_attend" value="both">Both</input><br>
                            <input type="radio" name="can_you_attend" value="no">No</input><br>
                        </fieldset>
                        <p id="can_you_attend__error-message" class="pssst error-message" style="display:none" data-attend-no-msg="<i class='fa fa-ban'></i>&emsp;Only applicants willing and able to attend are eligible to apply.">&nbsp;</p>
                        <fieldset>
                            <legend><i class="fa fa-trophy"></i>&emsp;What is the number one skill you'd like to improve as a result of this&nbsp;workshop?</legend>
                            <input type="text" placeholder="I'd like to be better at&hellip;"></input>
                        </fieldset>
                    
                        <fieldset>
                            <legend for="best_time_to_phone"><i class="fa fa-clock-o"></i>&emsp;What is the best time to contact you by&nbsp;telephone?</legend>
                            <input type="radio" name="best_time_to_phone" value="morning">Morning</input><br>
                            <input type="radio" name="best_time_to_phone" value="afternoon" checked>Afternoon</input><br>
                            <input type="radio" name="best_time_to_phone" value="evening">Evening</input><br>
                        </fieldset>
                        <p id="be-in-touch" class="pssst" data-please-correct-msg="<i class='fa fa-arrow-up'></i>&emsp;&emsp;Uh oh. Please correct the above errors before submitting the form.&emsp;&emsp;<i class='fa fa-arrow-up'></i>" data-orig="&mdash;&nbsp;&nbsp;We'll be in touch soon.&nbsp;&nbsp;&mdash;">&mdash;&nbsp;&nbsp;We'll be in touch soon.&nbsp;&nbsp;&mdash;</p>
                        <button type="submit" id="submit">Submit</button>
                    </form>

    			</div>
            </div>
		</section>


		
		<!-- ///// CONTACT SECTION ///// -->





<?php get_container_close(); ?>
    <script>
        $(document).ready(function(){
            $('input[name="can_you_attend"]').change(function(){
                switch($(this).val()) {
                    case 'no':
                        $('#submit').attr('disabled', true); 
                        $('#can_you_attend__error-message').html($('#can_you_attend__error-message').data('attend-no-msg')).show();
                        $('#be-in-touch').html($('#be-in-touch').data('please-correct-msg'));
                    break;
                
                    default:
                        $('#submit').attr('disabled', false); 
                        $('#can_you_attend__error-message').hide().html('');
                        $('#be-in-touch').html($('#be-in-touch').data('orig'));
                    break;
                }
            });
        });
    </script>
    <script src="js/vendor/typeahead/typeahead.bundle.min.js"></script>
        <script>
        var substringMatcher = function(strs) {
          return function findMatches(q, cb) {
            var matches, substrRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
              if (substrRegex.test(str)) {
                // the typeahead jQuery plugin expects suggestions to a
                // JavaScript object, refer to typeahead docs for more info
                matches.push({ value: str });
              }
            });

            cb(matches);
          };
        };
        
        var countries = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");

          
        var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
          'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
          'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
          'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
          'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
          'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
          'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
          'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
          'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
        ];
        
        $('#input__providence').typeahead(
            {
              hint: true,
              highlight: true,
              minLength: 1
            },
            {
              name: 'states',
              displayKey: 'value',
              source: substringMatcher(states)
            }
        );
        $('#input__country').typeahead(
            {
              hint: true,
              highlight: true,
              minLength: 1
            },
            {
              name: 'countries',
              displayKey: 'value',
              source: substringMatcher(countries)
            }
        );
        </script>
	</body>
</html>