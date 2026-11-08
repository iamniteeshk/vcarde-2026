@extends('custom::layouts.master')
@section('content')

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        /* Header Styling */
        .vcarde-configure-page-header-container {
            text-align: center;
            padding: 20px;
        }
        .vcarde-configure-page-header-logo {
            width: 200px;
            height: 100px;
        }
        .vcarde-configure-page-header-description {
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0;
        }

        /* Button Container */
        .vcarde-configure-page-buttons-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
            gap: 15px;
        }

        /* General Button Styling */
        .vcarde-configure-page-button-wrapper a {
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #fff;
            width: 250px;
            height: 55px;
            font-weight: 700;
            border-radius: 30px;
            background-size: 200% 200%;
            -webkit-transition: 500ms all ease;
            transition: 500ms all ease;
            cursor: pointer; /* Ensures pointer cursor on hover */
        }

        /* Gradient Backgrounds for Buttons */
        .vcarde-configure-page-button-configure {
            background-image: linear-gradient(90deg, #02F746 0%, #3C10F2 50%, #02F746);
            animation: rotate 5s infinite; /* 2s animation + 3s break */
        }
        .vcarde-configure-page-button-whatsapp {
            background-image: linear-gradient(90deg, #25D366 0%, #128C7E 50%, #25D366);
        }
        .vcarde-configure-page-button-instagram {
            background-image: linear-gradient(45deg, #F58529, #DD2A7B, #8134AF, #515BD4); /* Instagram Colors */
        }
        .vcarde-configure-page-button-save-contact {
            background-image: linear-gradient(90deg, #007AFF 0%, #005EFF 50%, #007AFF); /* Changed to Blue */
        }
        .vcarde-configure-page-button-sales-enquiry {
            background-image: linear-gradient(90deg, #FF4500 0%, #FF6347 50%, #FF4500); /* Changed to Orange-Red */
        }
        .vcarde-configure-page-button-amazon {
            background-image: linear-gradient(90deg, #FF9900 0%, #FF6600 50%, #FF9900);
        }

        /* Hover Effect for All Buttons */
        .vcarde-configure-page-button-wrapper a:hover {
            background-position: 100% 0;
        }

        /* Rotate Animation for Configure Button */
        @keyframes rotate {
            0% {
                transform: rotate(0deg); /* Normal */
            }
            20% {
                transform: rotate(-5deg); /* Rotate left */
            }
            40% {
                transform: rotate(5deg); /* Rotate right */
            }
            60% {
                transform: rotate(-5deg); /* Rotate left */
            }
            80% {
                transform: rotate(0deg); /* Back to normal */
            }
            100% {
                transform: rotate(0deg); /* Stay normal during break */
            }
        }

        /* Footer Styling */
        .vcarde-configure-page-footer {
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="vcarde-configure-page-header-container">
        <p class="vcarde-configure-page-header-description">Your NFC & QR Code is <strong>NOT</strong> yet activated</p>
    </div>

    <div class="vcarde-configure-page-buttons-wrapper">
        <div class="vcarde-configure-page-button-wrapper">
            <a href="#" class="vcarde-configure-page-button-configure">
                <span>Click to activate</span>
            </a>
        </div>
        <div class="vcarde-configure-page-button-wrapper">
            <a href="#" class="vcarde-configure-page-button-whatsapp">
                <span>WhatsApp Support</span>
            </a>
        </div>
        <div class="vcarde-configure-page-button-wrapper">
            <a href="#" class="vcarde-configure-page-button-instagram">
                <span>Instagram</span>
            </a>
        </div>
        <div class="vcarde-configure-page-button-wrapper">
            <a href="#" class="vcarde-configure-page-button-save-contact">
                <span>Save Contact</span>
            </a>
        </div>
        <div class="vcarde-configure-page-button-wrapper">
            <a href="#" class="vcarde-configure-page-button-sales-enquiry">
                <span>Sales Enquiry</span>
            </a>
        </div>
        <div class="vcarde-configure-page-button-wrapper">
            <a href="#" class="vcarde-configure-page-button-amazon">
                <span>Amazon Store</span>
            </a>
        </div>
    </div>

@endsection