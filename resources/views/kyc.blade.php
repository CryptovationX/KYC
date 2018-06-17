<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cryptovation | KYC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{ asset('css/kycpage.css') }}">
    
</head>
<body style="background-color:lightgrey;">

    {!! Form::open(['action'=>'Test@test']) !!}

        <div class="container", style='background-color:white;height:100vh auto;'>
            <div class="row", style='margin-left:10px;margin-bottom:-20px;margin-top:10px'>
                <h4 style='font-size:20px; font-family:sans-serif; font-weight:600'>Personal</h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2 kycheading">
                ID Type 
                </div>
                <div class='col-md-2 kycradio1'>
                    {{ Form::radio('country', 'American') }}
                        American
                </div>
                <div class='col-md-2 kycradio2'>
                    {{ Form::radio('country', 'Other') }}
                        Other
                </div>
            </div>
            <div class="row">

                <div class="col-md-2"></div>

                <div class='col-md-6'>
                    <p class="kycmargintext">This verification option applies to users with ID from all countries and territories outside United states of America<br>
                        You must use your real identity during this verification process. Your personal information will be securely protected.<br>
                        The following forms of government-issued ID can be used:<br>
                        1. Passport <br>
                        2. Driver's license <br>
                        3. Government-issued ID Card
                    </p>
                </div>
                   
            </div>


            <div class="row kycheading kycrow ">
                <div class="col-md-2">
                First Name
                </div>
                <div class='col-md-6', style='text-align:center'>

                    {{ Form::text('firstname', null, ["class" => "kyctextbox kycmargin"]) }}


                </div>
            </div>

            <div class="row kycheading kycrow ">
                <div class="col-md-2">
                Last Name
                </div>
                <div class='col-md-6', style='text-align:center'>
                    {{ Form::text('lastname', null, ["class" => "kyctextbox kycmargin"]) }}
                </div>
            </div>

            <div class="row kycrow ">
                <div class="col-md-2 kycheading">
                    Sex 
                </div>
                <div class='col-md-2 kycradio1', style='margin-left: -37px'>
                        {{ Form::radio('sex', 'Male') }}
                            Male
                </div>
                <div class='col-md-2 kycradio2', style='margin-left: -52px'>
                        {{ Form::radio('sex', 'Female') }}
                            Female
                </div>
            </div>

            <div class="row  kycrow ">
                <div class="col-md-2 kycheading">
                Country/territory
                </div>
                <div class='col-md-6', style='color:gray'>
                        {{Form::select('country', ["Aland Islands" => "Aland Islands",
                        "Albania" => "Albania",
                        "Algeria" => "Algeria",
                        "American Samoa" => "American Samoa",
                        "Andorra" => "Andorra",
                        "Angola" => "Angola",
                        "Anguilla" => "Anguilla",
                        "Antigua" => "Antigua",
                        "Argentina" => "Argentina",
                        "Armenia" => "Armenia",
                        "Aruba" => "Aruba",
                        "Australia" => "Australia",
                        "Austria" => "Austria",
                        "Azerbaijan" => "Azerbaijan",
                        "Bahamas" => "Bahamas",
                        "Bahrain" => "Bahrain",
                        "Bangladesh" => "Bangladesh",
                        "Barbados" => "Barbados",
                        "Belarus" => "Belarus",
                        "Belgium" => "Belgium",
                        "Belize" => "Belize",
                        "Benin" => "Benin",
                        "Bermuda" => "Bermuda",
                        "Bhutan" => "Bhutan",
                        "Bolivia" => "Bolivia",
                        "Bosnia" => "Bosnia",
                        "Botswana" => "Botswana",
                        "Bouvet Island" => "Bouvet Island",
                        "Brazil" => "Brazil",
                        "British Virgin Islands" => "British Virgin Islands",
                        "Brunei" => "Brunei",
                        "Bulgaria" => "Bulgaria",
                        "Burkina Faso" => "Burkina Faso",
                        "Burma" => "Burma",
                        "Burundi" => "Burundi",
                        "Caicos Islands" => "Caicos Islands",
                        "Cambodia" => "Cambodia",
                        "Cameroon" => "Cameroon",
                        "Canada" => "Canada",
                        "Cape Verde" => "Cape Verde",
                        "Cayman Islands" => "Cayman Islands",
                        "Central African Republic" => "Central African Republic",
                        "Chad" => "Chad",
                        "Chile" => "Chile",
                        "China" => "China",
                        "Christmas Island" => "Christmas Island",
                        "Cocos Islands" => "Cocos Islands",
                        "Colombia" => "Colombia",
                        "Comoros" => "Comoros",
                        "Congo Brazzaville" => "Congo Brazzaville",
                        "Congo" => "Congo",
                        "Cook Islands" => "Cook Islands",
                        "Costa Rica" => "Costa Rica",
                        "Cote Divoire" => "Cote Divoire",
                        "Croatia" => "Croatia",
                        "Cuba" => "Cuba",
                        "Cyprus" => "Cyprus",
                        "Czech Republic" => "Czech Republic",
                        "Denmark" => "Denmark",
                        "Djibouti" => "Djibouti",
                        "Dominica" => "Dominica",
                        "Dominican Republic" => "Dominican Republic",
                        "Ecuador" => "Ecuador",
                        "Egypt" => "Egypt",
                        "El Salvador" => "El Salvador",
                        "England" => "England",
                        "Equatorial Guinea" => "Equatorial Guinea",
                        "Eritrea" => "Eritrea",
                        "Estonia" => "Estonia",
                        "Ethiopia" => "Ethiopia",
                        "European Union" => "European Union",
                        "Falkland Islands" => "Falkland Islands",
                        "Faroe Islands" => "Faroe Islands",
                        "Fiji" => "Fiji",
                        "Finland" => "Finland",
                        "France" => "France",
                        "French Guiana" => "French Guiana",
                        "French Polynesia" => "French Polynesia",
                        "French Territories" => "French Territories",
                        "Gabon" => "Gabon",
                        "Gambia" => "Gambia",
                        "Georgia" => "Georgia",
                        "Germany" => "Germany",
                        "Ghana" => "Ghana",
                        "Gibraltar" => "Gibraltar",
                        "Greece" => "Greece",
                        "Greenland" => "Greenland",
                        "Grenada" => "Grenada",
                        "Guadeloupe" => "Guadeloupe",
                        "Guam" => "Guam",
                        "Guatemala" => "Guatemala",
                        "Guinea-Bissau" => "Guinea-Bissau",
                        "Guinea" => "Guinea",
                        "Guyana" => "Guyana",
                        "Haiti" => "Haiti",
                        "Heard Island" => "Heard Island",
                        "Honduras" => "Honduras",
                        "Hong Kong" => "Hong Kong",
                        "Hungary" => "Hungary",
                        "Iceland" => "Iceland",
                        "India" => "India",
                        "Indian Ocean Territory" => "Indian Ocean Territory",
                        "Indonesia" => "Indonesia",
                        "Iran" => "Iran",
                        "Iraq" => "Iraq",
                        "Ireland" => "Ireland",
                        "Israel" => "Israel",
                        "Italy" => "Italy",
                        "Jamaica" => "Jamaica",
                        "Japan" => "Japan",
                        "Jordan" => "Jordan",
                        "Kazakhstan" => "Kazakhstan",
                        "Kenya" => "Kenya",
                        "Kiribati" => "Kiribati",
                        "Kuwait" => "Kuwait",
                        "Kyrgyzstan" => "Kyrgyzstan",
                        "Laos" => "Laos",
                        "Latvia" => "Latvia",
                        "Lebanon" => "Lebanon",
                        "Lesotho" => "Lesotho",
                        "Liberia" => "Liberia",
                        "Libya" => "Libya",
                        "Liechtenstein" => "Liechtenstein",
                        "Lithuania" => "Lithuania",
                        "Luxembourg" => "Luxembourg",
                        "Macau" => "Macau",
                        "Macedonia" => "Macedonia",
                        "Madagascar" => "Madagascar",
                        "Malawi" => "Malawi",
                        "Malaysia" => "Malaysia",
                        "Maldives" => "Maldives",
                        "Mali" => "Mali",
                        "Malta" => "Malta",
                        "Marshall Islands" => "Marshall Islands",
                        "Martinique" => "Martinique",
                        "Mauritania" => "Mauritania",
                        "Mauritius" => "Mauritius",
                        "Mayotte" => "Mayotte",
                        "Mexico" => "Mexico",
                        "Micronesia" => "Micronesia",
                        "Moldova" => "Moldova",
                        "Monaco" => "Monaco",
                        "Mongolia" => "Mongolia",
                        "Montenegro" => "Montenegro",
                        "Montserrat" => "Montserrat",
                        "Morocco" => "Morocco",
                        "Mozambique" => "Mozambique",
                        "Namibia" => "Namibia",
                        "Nauru" => "Nauru",
                        "Nepal" => "Nepal",
                        "Netherlands Antilles" => "Netherlands Antilles",
                        "Netherlands" => "Netherlands",
                        "New Caledonia" => "New Caledonia",
                        "New Guinea" => "New Guinea",
                        "New Zealand" => "New Zealand",
                        "Nicaragua" => "Nicaragua",
                        "Niger" => "Niger",
                        "Nigeria" => "Nigeria",
                        "Niue" => "Niue",
                        "Norfolk Island" => "Norfolk Island",
                        "North Korea" => "North Korea",
                        "Northern Mariana Islands" => "Northern Mariana Islands",
                        "Norway" => "Norway",
                        "Oman" => "Oman",
                        "Pakistan" => "Pakistan",
                        "Palau" => "Palau",
                        "Palestine" => "Palestine",
                        "Panama" => "Panama",
                        "Paraguay" => "Paraguay",
                        "Peru" => "Peru",
                        "Philippines" => "Philippines",
                        "Pitcairn Islands" => "Pitcairn Islands",
                        "Poland" => "Poland",
                        "Portugal" => "Portugal",
                        "Puerto Rico" => "Puerto Rico",
                        "Qatar" => "Qatar",
                        "Reunion" => "Reunion",
                        "Romania" => "Romania",
                        "Russia" => "Russia",
                        "Rwanda" => "Rwanda",
                        "Saint Helena" => "Saint Helena",
                        "Saint Kitts and Nevis" => "Saint Kitts and Nevis",
                        "Saint Lucia" => "Saint Lucia",
                        "Saint Pierre" => "Saint Pierre",
                        "Saint Vincent" => "Saint Vincent",
                        "Samoa" => "Samoa",
                        "San Marino" => "San Marino",
                        "Sandwich Islands" => "Sandwich Islands",
                        "Sao Tome" => "Sao Tome",
                        "Saudi Arabia" => "Saudi Arabia",
                        "Senegal" => "Senegal",
                        "Serbia" => "Serbia",
                        "Serbia" => "Serbia",
                        "Seychelles" => "Seychelles",
                        "Sierra Leone" => "Sierra Leone",
                        "Singapore" => "Singapore",
                        "Slovakia" => "Slovakia",
                        "Slovenia" => "Slovenia",
                        "Solomon Islands" => "Solomon Islands",
                        "Somalia" => "Somalia",
                        "South Africa" => "South Africa",
                        "South Korea" => "South Korea",
                        "Spain" => "Spain",
                        "Sri Lanka" => "Sri Lanka",
                        "Sudan" => "Sudan",
                        "Suriname" => "Suriname",
                        "Svalbard" => "Svalbard",
                        "Swaziland" => "Swaziland",
                        "Sweden" => "Sweden",
                        "Switzerland" => "Switzerland",
                        "Syria" => "Syria",
                        "Taiwan" => "Taiwan",
                        "Tajikistan" => "Tajikistan",
                        "Tanzania" => "Tanzania",
                        "Thailand" => "Thailand",
                        "Timorleste" => "Timorleste",
                        "Togo" => "Togo",
                        "Tokelau" => "Tokelau",
                        "Tonga" => "Tonga",
                        "Trinidad" => "Trinidad",
                        "Tunisia" => "Tunisia",
                        "Turkey" => "Turkey",
                        "Turkmenistan" => "Turkmenistan",
                        "Tuvalu" => "Tuvalu",
                        "Uganda" => "Uganda",
                        "Ukraine" => "Ukraine",
                        "United Arab Emirates" => "United Arab Emirates",
                        "United States" => "United States",
                        "Uruguay" => "Uruguay",
                        "Us Minor Islands" => "Us Minor Islands",
                        "Us Virgin Islands" => "Us Virgin Islands",
                        "Uzbekistan" => "Uzbekistan",
                        "Vanuatu" => "Vanuatu",
                        "Vatican City" => "Vatican City",
                        "Venezuela" => "Venezuela",
                        "Vietnam" => "Vietnam",
                        "Wallis and Futuna" => "Wallis and Futuna",
                        "Western Sahara" => "Western Sahara",
                        "Yemen" => "Yemen",
                        "Zambia" => "Zambia",
                        "Zimbabwe" => "Zimbabwe"
                    
                    ], null, ['class' => 'kycselect kycplaceholder', 'placeholder' => 'Please enter keyword and select'])}}
                </div>
            </div>

            <div class="row kycrow ">
                <div class="col-md-2 kycheading">
                Passport/ID Number
                </div>
                <div class='col-md-6'>
                        {{ Form::number('id number', null, ["class" => "kyctextbox kycmargin kycplaceholder", 'placeholder'=> " Or Driver's License ID or National ID"]) }}
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-2 kycheading">
                Passport cover
                </div>
                <div class='col-md-3'>
                        {{Form::file('Choose file', ['class' => 'kyctextbox kycmargin'])}}
                </div>
            </div>

            <div class="row">

                    <div class="col-md-2"></div>

                    <div class='col-md-10'>
                        <p class="kycmargintext">Images must be sumitted in JPG format. Please ensure that the subject of the photo is complete and cleary visible. <br>
                            If you donot have a passport, please upload a photo of the front of your Driver's License or National ID document.
                        </p>
                    </div>
                       
            </div>
            <hr>

            <div class="row">
                <div class="col-md-2 kycheading">
                Passport data page
                </div>
                <div class='col-md-3'>
                        {{Form::file('Choose file', ['class' => 'kyctextbox kycmargin'])}}
                </div>
            </div>
            <div class="row">
                    <div class="col-md-2"></div>

                    <div class='col-md-10'>
                        <p class="kycmargintext">Images must be summitted in JPG format. Please ensure that the subject of the photo is complete and cleary visible. <br>
                            Identity card must be in the valid period.
                        </p>
                    </div>
                       
            </div>
            <hr>

            <div class="row">
                <div class="col-md-2 kycheading">
                Self-portrait with <br>
                photo ID and note
                </div>
                <div class='col-md-3'>
                        {{Form::file('Choose file', ['class' => 'kyctextbox kycmargin'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>

                <div class='col-md-10'>
                    <p class="kycmargintext">Please provide a photo of yourself holding your ID together with a note with the word "CXA and today's date". <br>
                    Ensure that your face is cleary visible, and that your ID is clearly readable
                    <p style="list-style-type:disc; color:green; margin-left:20px;">
                            &#10003; Face clearly visible <br>
                            &#10003; Photo ID clearly visible <br>
                            &#10003; Note with word "CXA" <br>
                            &#10003; Note with today's date
                    </p>  
                    </p>
                </div>
                    
            </div>
            <hr>

            <div class="row">
                <div class='col-md-2', style='margin-left:215px; margin-top: 25px'>
                        {{Form::submit('Submit', ['class' => 'kyctextbox, kycsubmit'])}}
                </div>
                </div>
                
                <br><br>
        </div>
    {!! Form::close() !!}
</body>
</html>