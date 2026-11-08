<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFC & QR Code NOT activated</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('activate-your-vcarde-nfc-card-bg.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        /* Header Styling */
        .vcarde-configure-page-header-container {
            text-align: center;
            padding: 20px;
        }
        .vcarde-configure-page-header-description {
            font-size: 45px; /* Default for desktop */
            font-weight: bold;
            margin: 20px 0;
        }

        /* Button Container */
        .vcarde-configure-page-buttons-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px auto;
            gap: 15px;
            width: 100%;
        }

        /* General Button Styling */
        .vcarde-configure-page-button-wrapper a {
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #fff;
            width: 280px; /* Fixed width for all buttons */
            height: 60px; /* Fixed height for all buttons */
            font-size: 1rem;
            font-weight: 700;
            border-radius: 30px;
            background-size: 200% 200%;
            transition: 500ms all ease;
            cursor: pointer;
        }

        /* Rotate Animation for Click to Activate Button */
        .vcarde-configure-page-button-configure {
            background-image: linear-gradient(90deg, #02F746 0%, #3C10F2 50%, #02F746);
            animation: rotate 5s infinite; /* Ensures rotate animation works */
        }

        /* Gradient Backgrounds for Other Buttons */
        .vcarde-configure-page-button-whatsapp {
            background-image: linear-gradient(90deg, #25D366 0%, #128C7E 50%, #25D366);
        }
        .vcarde-configure-page-button-instagram {
            background-image: linear-gradient(45deg, #F58529, #DD2A7B, #8134AF, #515BD4); /* Instagram Colors */
        }
        .vcarde-configure-page-button-save-contact {
            background-image: linear-gradient(90deg, #007AFF 0%, #005EFF 50%, #007AFF); /* Blue gradient */
        }
        .vcarde-configure-page-button-click-to-mail {
            background-image: linear-gradient(90deg, #FF4500 0%, #FF6347 50%, #FF4500); /* Orange-Red gradient */
        }
        .vcarde-configure-page-button-amazon {
            background-image: linear-gradient(90deg, #FF9900 0%, #FF6600 50%, #FF9900); /* Orange gradient */
        }

        /* Hover Effect for All Buttons */
        .vcarde-configure-page-button-wrapper a:hover {
            background-position: 100% 0;
        }

        /* Rotate Keyframes */
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
            color: #fff;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .vcarde-configure-page-header-description {
                font-size: 35px; /* Adjusted for tablets and smaller screens */
            }
        }

        @media (max-width: 480px) {
            .vcarde-configure-page-header-description {
                font-size: 30px; /* Adjusted for mobile phones */
            }
        }
    </style>
</head>
<body>
    <div class="vcarde-configure-page-header-container">
        <p class="vcarde-configure-page-header-description">Your NFC & QR Code is <strong>NOT</strong> yet activated</p>
    </div>

    <div class="vcarde-configure-page-buttons-wrapper">
        <div class="vcarde-configure-page-button-wrapper">
            <a href="https://by1.me/actcard" class="vcarde-configure-page-button-configure">
                Click to activate
            </a>
        </div>
        <div class="vcarde-configure-page-button-wrapper">
            <a href="https://by1.me/vchelp" class="vcarde-configure-page-button-whatsapp">
                WhatsApp Support
            </a>
        </div>
        <div class="vcarde-configure-page-button-wrapper">
            <a href="https://by1.me/vcinsta" class="vcarde-configure-page-button-instagram">
                Instagram
            </a>
        </div>
        <div class="vcarde-configure-page-button-wrapper">
            <a href="https://by1.me/vcfvc" download class="vcarde-configure-page-button-save-contact">
                Save Contact
            </a>
        </div>
        <div class="vcarde-configure-page-button-wrapper">
            <a href="https://by1.me/vcemail" class="vcarde-configure-page-button-click-to-mail">
                Sales Enquiry
            </a>
        </div>
        <div class="vcarde-configure-page-button-wrapper">
            <a href="https://by1.me/amazon" class="vcarde-configure-page-button-amazon">
                Amazon Store
            </a>
        </div>
    </div>

    <div class="vcarde-configure-page-footer">
        © 2025 VCARDe
    </div>
</body>
</html>
