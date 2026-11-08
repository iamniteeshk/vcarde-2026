<?php

namespace Modules\Custom\App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Modules\Custom\App\Emails\SupportMail;


class CustomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'VCARDe - Your Digital Business Card Solution',
            'metaDescription' => 'VCARDe offers innovative digital business card solutions with NFC and QR code technology for seamless networking. Customize your digital card today.',
            'metaKeywords' => 'Digital Business Cards, NFC Business Cards, QR Code Networking, Online Business Card Maker, VCARDe, Eco-Friendly Networking',
            'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/vcarde-new-favi.png',
        ];
        return view('custom::index', array(
            'data' => $data
        ));
    }

    public function showDataDeletionPolicy(){
        $data = [
           'title' => 'VCARDe - Your Digital Business Card Solution',
            'metaDescription' => 'VCARDe offers innovative digital business card solutions with NFC and QR code technology for seamless networking. Customize your digital card today.',
            'metaKeywords' => 'Digital Business Cards, NFC Business Cards, QR Code Networking, Online Business Card Maker, VCARDe, Eco-Friendly Networking',
            'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/vcarde-new-favi.png',
        ];
        return view('custom::data-deletion-policy', array(
            'data' => $data
        ));

   }
   public function showActivateYourVcardeNfcCard(){
       $data = [
          'title' => 'VCARDe - Your Digital Business Card Solution',
           'metaDescription' => 'VCARDe offers innovative digital business card solutions with NFC and QR code technology for seamless networking. Customize your digital card today.',
           'metaKeywords' => 'Digital Business Cards, NFC Business Cards, QR Code Networking, Online Business Card Maker, VCARDe, Eco-Friendly Networking',
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/vcarde-new-favi.png',
       ];
       return view('custom::activate-your-vcarde-nfc-card', array(
           'data' => $data
       ));

    }   
     public function showTheRoleOfNfcInGoogleReviewsEnhancingBusinessGrowthIn2025(){
       $data = [
          'title' => 'The Role of Google Review NFC Cards in Business Growth 2025 | VCARDe',
          'metaDescription' => 'Discover how Google Review NFC Cards help businesses boost local SEO, collect more reviews, and enhance customer trust in 2025. Learn benefits, SEO impact, and why colorful NFC cards attract more customers at VCARDe.',
          'metaKeywords' => 'Google Review NFC Cards, NFC Business Cards, Local SEO Reviews, Tap to Review Cards, Digital Business Cards, VCARDe, Business Growth 2025',

           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/vcarde-new-favi.png',
       ];
       return view('custom::the-role-of-nfc-in-google-reviews-enhancing-business-growth-in-2025', array(
           'data' => $data
       ));

  }
   public function showContact()
   {
       $data = [
           'title' => 'Contact VCARDe - Get in Touch with Our Team',
           'metaDescription' => 'Reach out to vCARDe for inquiries, support, or feedback. Contact our team for assistance with digital business card services, NFC card queries, or any other questions you may have about our products and services.',
           'metaKeywords' => 'Contact vCARDe, Digital Business Card Support, NFC Card Assistance, vCARDe Customer Service, Business Card Help, vCARDe Contact Information',            
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       return view('custom::contact', array(
           'data' => $data
       ));
   }

   public function showFaq()
   {
       $data = [
           'title' => 'VCARDe FAQs - Learn About Digital Business Cards',
           'metaDescription' => 'Discover answers to frequently asked questions about VCARDe, your solution for digital business cards with NFC and QR code technology. Get insights and tips for seamless networking.',
           'metaKeywords' => 'VCARDe FAQs, Digital Business Card Queries, NFC Card Information, QR Code Networking, Business Card Customization, Online Business Card FAQs',
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       return view('custom::faq', array(
           'data' => $data
       ));
   }
   public function showVCard()
   {
       $data = [
           'title' => 'VCARDe vCard Portfolio Pages - Showcase Your Professional Identity',
           'metaDescription' => 'Explore VCARDe’s vCard portfolio pages, where you can create a unique and professional digital identity. Choose from a range of customizable templates to reflect your personal brand with NFC and QR code features.',
           'metaKeywords' => 'VCARDe vCard Portfolios, Digital Business Card Portfolios, Professional vCard Templates, Customizable Digital Cards, NFC Portfolio Pages, QR Code Business Profiles, VCARDe Personal Branding',            
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       return view('custom::how-to-create-vcard', array(
           'data' => $data
       ));
   }
   public function showNfcCard()
   {
       $data = [
           'title' => 'VCARDe NFC Designs - Innovative and Stylish Cards',
           'metaDescription' => 'Discover vCARDe’s NFC card designs that blend innovation with style. Choose from a variety of unique NFC designs for your digital business card to stand out in networking and professional interactions.',
           'metaKeywords' => 'vCARDe NFC Designs, Stylish NFC Business Cards, Digital Business Card Designs, Custom NFC Card Styles, Unique NFC Business Cards, vCARDe NFC Technology',            
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       return view('custom::nfc-card', array(
           'data' => $data
       ));
   }
   public function showPlan()
   {
       $data = [
           'title' => 'VCARDe Pricing and Plans - Choose Your Ideal Package',
           'metaDescription' => 'Explore pricing and plan options for VCARDe digital business cards. Find the perfect package that fits your needs, from free lifetime plans to premium features with NFC and QR code technology.',
           'metaKeywords' => 'VCARDe Pricing, Digital Business Card Plans, NFC Card Packages, QR Code Business Card Pricing, Online Business Card Costs, VCARDe Subscription Plans',            
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       $plans = Plan::with(['currency', 'planFeature', 'hasZeroPlan'])->whereIsDefault(Plan::IS_DEACTIVE)->whereStatus(Plan::IS_ACTIVE)->get();
       return view('custom::plan', array('plans'=> $plans, 'data' => $data ));
   }
   public function showPrivacyPolicy()
   {
       $data = [
           'title' => 'VCARDe Privacy Policy - Your Data Safety and Confidentiality',
           'metaDescription' => 'Read VCARDe’s Privacy Policy to understand how we protect and manage your personal information. Learn about our commitment to data privacy, security, and user rights in handling digital business cards.',
           'metaKeywords' => 'VCARDe Privacy Policy, Data Protection, Personal Information Security, Digital Business Card Privacy, User Data Confidentiality, NFC Card Privacy',            
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       return view('custom::privacy-policy', array(
           'data' => $data
       ));
   }
   public function showRefundPolicy()
   {
       $data = [
           'title' => 'VCARDe Refund Policy - Understanding Your Options',
           'metaDescription' => 'Learn about VCARDe’s Refund Policy. Get detailed information on our terms and conditions for refunds related to digital business card services, including NFC and QR code card purchases.',
           'metaKeywords' => 'VCARDe Refund Policy, Digital Business Card Refunds, NFC Card Cancellation, QR Code Card Money-Back, Online Business Card Refund Terms, VCARDe Service Refunds',            
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       return view('custom::refund-policy', array(
           'data' => $data
       ));
   }
   public function showShippingPolicy()
   {
       $data = [
           'title' => 'VCARDe Shipping Policy - Your Order Delivery Details',
           'metaDescription' => 'Understand VCARDe’s Shipping Policy for digital and NFC business cards. Find out about shipping procedures, timelines, and handling for your orders of customizable business cards with advanced technology.',
           'metaKeywords' => 'VCARDe Shipping Policy, Digital Business Card Delivery, NFC Card Shipping, QR Code Card Distribution, Online Business Card Shipping Terms, VCARDe Order Delivery',            
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       return view('custom::shipping-policy', array(
           'data' => $data
       ));
   }
   public function showTemplates()
   {
       $data = [
           'title' => 'VCARDe vCard Templates - Customize Your Digital Card',
           'metaDescription' => 'Explore a wide range of VCARDe vCard templates. Choose and customize your digital business card to match your style, with options including NFC and QR code integration for enhanced networking.',
           'metaKeywords' => 'VCARDe vCard Templates, Digital Business Card Designs, NFC Card Templates, QR Code Business Card Styles, Customizable Online Business Cards, VCARDe Card Customization',            
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       return view('custom::templates', array(
           'data' => $data
       ));
   }
   public function showTermsCondition()
   {
       $data = [
           'title' => 'VCARDe Terms and Conditions - User Agreement and Policies',
           'metaDescription' => 'Read VCARDe Terms and Conditions to understand user agreements, policies, and guidelines. Stay informed about your rights and responsibilities while using our digital business card services, including NFC and QR code features.',
           'metaKeywords' => 'VCARDe Terms and Conditions, Digital Business Card User Agreement, NFC Card Usage Policy, QR Code Business Card Terms, Online Business Card Policies, VCARDe User Guidelines',            
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       return view('custom::terms-condition', array(
           'data' => $data
       ));
   }

   public function pricing()
   {
       $data = [
           'title' => 'VCARDe Pricing and Plans - Choose Your Ideal Package',
           'metaDescription' => 'Explore pricing and plan options for VCARDe digital business cards. Find the perfect package that fits your needs, from free lifetime plans to premium features with NFC and QR code technology.',
           'metaKeywords' => 'VCARDe Pricing, Digital Business Card Plans, NFC Card Packages, QR Code Business Card Pricing, Online Business Card Costs, VCARDe Subscription Plans',               
           'ogImg' => 'https://vcarde.com/assets/assets-home/img/nft/logo/logo-vcarde.png',
       ];
       $plans = Plan::with(['currency', 'planFeature', 'hasZeroPlan'])->whereIsDefault(Plan::IS_DEACTIVE)->whereStatus(Plan::IS_ACTIVE)->get();
       return view('custom::pricing', array('plans'=> $plans, 'data' => $data));
   }

   public function submitSupport(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|min:10|max:10',
            'recaptcha_token' => 'required',
        ]);

        // Verify reCAPTCHA v3 token with Google
        $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('recaptcha.api_secret_key'),
            'response' => $request->recaptcha_token,
        ]);

        $recaptchaData = $recaptchaResponse->json();

        if (!($recaptchaData['success'] ?? false) || ($recaptchaData['score'] ?? 0) < 0.5) {
            return back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
        }

        // Proceed with form submission
        $data = $request->except(['_token', 'recaptcha_token']);

        Mail::to('cc@vcarde.com')->send(new SupportMail($data));

        return redirect()->back()->with('success', 'Your request is sent successfully');
    }

    public function showGrokHome()
    {
        $htmlPath = public_path('spa-home/index.html');

        if (! is_file($htmlPath)) {
            abort(404);
        }

        $html = file_get_contents($htmlPath);
        $v = (string) filemtime($htmlPath);
        $html = preg_replace('/(\/spa-home\/assets\/[^"\']+\.(?:js|css))/', '$1?v='.$v, $html) ?? $html;

        return response($html, 200, [
            'Content-Type' => 'text/html; charset=UTF-8',
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
            'Pragma' => 'no-cache',
            'CDN-Cache-Control' => 'no-store',
        ]);
    }
}
