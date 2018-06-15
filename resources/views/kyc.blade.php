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
                <h4>Personal</h4>
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

            <div class="row kycheading kycrow ">
                <div class="col-md-2">
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
                        {{Form::select('country', ["ax" => "Aland Islands",
                        "al" => "Albania",
                        "dz" => "Algeria",
                        "as" => "American Samoa",
                        "ad" => "Andorra",
                        "ao" => "Angola",
                        "ai" => "Anguilla",
                        "ag" => "Antigua",
                        "ar" => "Argentina",
                        "am" => "Armenia",
                        "aw" => "Aruba",
                        "au" => "Australia",
                        "at" => "Austria",
                        "az" => "Azerbaijan",
                        "bs" => "Bahamas",
                        "bh" => "Bahrain",
                        "bd" => "Bangladesh",
                        "bb" => "Barbados",
                        "by" => "Belarus",
                        "be" => "Belgium",
                        "bz" => "Belize",
                        "bj" => "Benin",
                        "bm" => "Bermuda",
                        "bt" => "Bhutan",
                        "bo" => "Bolivia",
                        "ba" => "Bosnia",
                        "bw" => "Botswana",
                        "bv" => "Bouvet Island",
                        "br" => "Brazil",
                        "vg" => "British Virgin Islands",
                        "bn" => "Brunei",
                        "bg" => "Bulgaria",
                        "bf" => "Burkina Faso",
                        "ar" => "Burma",
                        "bi" => "Burundi",
                        "tc" => "Caicos Islands",
                        "kh" => "Cambodia",
                        "cm" => "Cameroon",
                        "ca" => "Canada",
                        "cv" => "Cape Verde",
                        "ky" => "Cayman Islands",
                        "cf" => "Central African Republic",
                        "td" => "Chad",
                        "cl" => "Chile",
                        "cn" => "China",
                        "cx" => "Christmas Island",
                        "cc" => "Cocos Islands",
                        "co" => "Colombia",
                        "km" => "Comoros",
                        "cg" => "Congo Brazzaville",
                        "cd" => "Congo",
                        "ck" => "Cook Islands",
                        "cr" => "Costa Rica",
                        "ci" => "Cote Divoire",
                        "hr" => "Croatia",
                        "cu" => "Cuba",
                        "cy" => "Cyprus",
                        "cz" => "Czech Republic",
                        "dk" => "Denmark",
                        "dj" => "Djibouti",
                        "dm" => "Dominica",
                        "do" => "Dominican Republic",
                        "ec" => "Ecuador",
                        "eg" => "Egypt",
                        "sv" => "El Salvador",
                        "gb" => "England",
                        "gq" => "Equatorial Guinea",
                        "er" => "Eritrea",
                        "ee" => "Estonia",
                        "et" => "Ethiopia",
                        "eu" => "European Union",
                        "fk" => "Falkland Islands",
                        "fo" => "Faroe Islands",
                        "fj" => "Fiji",
                        "fi" => "Finland",
                        "fr" => "France",
                        "gf" => "French Guiana",
                        "pf" => "French Polynesia",
                        "tf" => "French Territories",
                        "ga" => "Gabon",
                        "gm" => "Gambia",
                        "ge" => "Georgia",
                        "de" => "Germany",
                        "gh" => "Ghana",
                        "gi" => "Gibraltar",
                        "gr" => "Greece",
                        "gl" => "Greenland",
                        "gd" => "Grenada",
                        "gp" => "Guadeloupe",
                        "gu" => "Guam",
                        "gt" => "Guatemala",
                        "gw" => "Guinea-Bissau",
                        "gn" => "Guinea",
                        "gy" => "Guyana",
                        "ht" => "Haiti",
                        "hm" => "Heard Island",
                        "hn" => "Honduras",
                        "hk" => "Hong Kong",
                        "hu" => "Hungary",
                        "is" => "Iceland",
                        "in" => "India",
                        "io" => "Indian Ocean Territory",
                        "id" => "Indonesia",
                        "ir" => "Iran",
                        "iq" => "Iraq",
                        "ie" => "Ireland",
                        "il" => "Israel",
                        "it" => "Italy",
                        "jm" => "Jamaica",
                        "jp" => "Japan",
                        "jo" => "Jordan",
                        "kz" => "Kazakhstan",
                        "ke" => "Kenya",
                        "ki" => "Kiribati",
                        "kw" => "Kuwait",
                        "kg" => "Kyrgyzstan",
                        "la" => "Laos",
                        "lv" => "Latvia",
                        "lb" => "Lebanon",
                        "ls" => "Lesotho",
                        "lr" => "Liberia",
                        "ly" => "Libya",
                        "li" => "Liechtenstein",
                        "lt" => "Lithuania",
                        "lu" => "Luxembourg",
                        "mo" => "Macau",
                        "mk" => "Macedonia",
                        "mg" => "Madagascar",
                        "mw" => "Malawi",
                        "my" => "Malaysia",
                        "mv" => "Maldives",
                        "ml" => "Mali",
                        "mt" => "Malta",
                        "mh" => "Marshall Islands",
                        "mq" => "Martinique",
                        "mr" => "Mauritania",
                        "mu" => "Mauritius",
                        "yt" => "Mayotte",
                        "mx" => "Mexico",
                        "fm" => "Micronesia",
                        "md" => "Moldova",
                        "mc" => "Monaco",
                        "mn" => "Mongolia",
                        "me" => "Montenegro",
                        "ms" => "Montserrat",
                        "ma" => "Morocco",
                        "mz" => "Mozambique",
                        "na" => "Namibia",
                        "nr" => "Nauru",
                        "np" => "Nepal",
                        "an" => "Netherlands Antilles",
                        "nl" => "Netherlands",
                        "nc" => "New Caledonia",
                        "pg" => "New Guinea",
                        "nz" => "New Zealand",
                        "ni" => "Nicaragua",
                        "ne" => "Niger",
                        "ng" => "Nigeria",
                        "nu" => "Niue",
                        "nf" => "Norfolk Island",
                        "kp" => "North Korea",
                        "mp" => "Northern Mariana Islands",
                        "no" => "Norway",
                        "om" => "Oman",
                        "pk" => "Pakistan",
                        "pw" => "Palau",
                        "ps" => "Palestine",
                        "pa" => "Panama",
                        "py" => "Paraguay",
                        "pe" => "Peru",
                        "ph" => "Philippines",
                        "pn" => "Pitcairn Islands",
                        "pl" => "Poland",
                        "pt" => "Portugal",
                        "pr" => "Puerto Rico",
                        "qa" => "Qatar",
                        "re" => "Reunion",
                        "ro" => "Romania",
                        "ru" => "Russia",
                        "rw" => "Rwanda",
                        "sh" => "Saint Helena",
                        "kn" => "Saint Kitts and Nevis",
                        "lc" => "Saint Lucia",
                        "pm" => "Saint Pierre",
                        "vc" => "Saint Vincent",
                        "ws" => "Samoa",
                        "sm" => "San Marino",
                        "gs" => "Sandwich Islands",
                        "st" => "Sao Tome",
                        "sa" => "Saudi Arabia",
                        "sn" => "Senegal",
                        "cs" => "Serbia",
                        "rs" => "Serbia",
                        "sc" => "Seychelles",
                        "sl" => "Sierra Leone",
                        "sg" => "Singapore",
                        "sk" => "Slovakia",
                        "si" => "Slovenia",
                        "sb" => "Solomon Islands",
                        "so" => "Somalia",
                        "za" => "South Africa",
                        "kr" => "South Korea",
                        "es" => "Spain",
                        "lk" => "Sri Lanka",
                        "sd" => "Sudan",
                        "sr" => "Suriname",
                        "sj" => "Svalbard",
                        "sz" => "Swaziland",
                        "se" => "Sweden",
                        "ch" => "Switzerland",
                        "sy" => "Syria",
                        "tw" => "Taiwan",
                        "tj" => "Tajikistan",
                        "tz" => "Tanzania",
                        "th" => "Thailand",
                        "tl" => "Timorleste",
                        "tg" => "Togo",
                        "tk" => "Tokelau",
                        "to" => "Tonga",
                        "tt" => "Trinidad",
                        "tn" => "Tunisia",
                        "tr" => "Turkey",
                        "tm" => "Turkmenistan",
                        "tv" => "Tuvalu",
                        "ug" => "Uganda",
                        "ua" => "Ukraine",
                        "ae" => "United Arab Emirates",
                        "us" => "United States",
                        "uy" => "Uruguay",
                        "um" => "Us Minor Islands",
                        "vi" => "Us Virgin Islands",
                        "uz" => "Uzbekistan",
                        "vu" => "Vanuatu",
                        "va" => "Vatican City",
                        "ve" => "Venezuela",
                        "vn" => "Vietnam",
                        "wf" => "Wallis and Futuna",
                        "eh" => "Western Sahara",
                        "ye" => "Yemen",
                        "zm" => "Zambia",
                        "zw" => "Zimbabwe"
                    
                    ], null, ['class' => 'kycselect', 'placeholder' => 'Please enter keyword and select'])}}
                </div>
            </div>

            <div class="row kycrow ">
                <div class="col-md-2 kycheading">
                Passport/ID Number
                </div>
                <div class='col-md-6'>
                        {{ Form::number('id number', null, ["class" => "kyctextbox kycmargin", 'placeholder'=> " Or Driver's License ID or National ID"]) }}
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
                        <p class="kycmargintext">Images must be summitted in JPG format. Please ensure that the subject of the photo is complete and cleary visible. <br>
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
                    <p class="kycmargintext">Please provide a photo of you holding your ID together.
                    Ensure that your face is cleary visible, and that your ID is clearly readable
                    <ul style="list-style-type:disc; color:aquamarine">
                            <li>Face clearly visible</li>
                            <li>Photo ID clearly visible</li>
                          </ul>  
                    </p>
                </div>
                    
            </div>
            <hr>

            <div class="row">
                <div class='col-md-2', style='margin-left:215px; margin-top: 25px'>
                        {{Form::submit('Submit', ['class' => 'kyctextbox'])}}
                </div>
                </div>
                
                <br><br>
        </div>
    {!! Form::close() !!}
</body>
</html>