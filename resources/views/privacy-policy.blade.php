<!-- resources/views/privacy-policy.blade.php -->
@extends('layout')

@section('content')
<div class="container mx-auto px-4 lg:px-0 mt-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-center">Privacy Policy</h1>
        
        <p class="text-gray-700 mb-4">Your privacy is important to us. It is [Your Company]'s policy to respect your privacy regarding any information we may collect from you across our website, <a href="{{ url('/') }}" class="text-blue-500 hover:underline">{{ config('app.name') }}</a>, and other sites we own and operate.</p>

        <h2 class="text-xl font-semibold mb-4">1. Information We Collect</h2>
        <p class="text-gray-700 mb-4">We may collect personal information such as your name, email address, phone number, etc., directly from you when you use our contact forms, sign up for our newsletter, or make inquiries about our services.</p>
        
        <h2 class="text-xl font-semibold mb-4">2. How We Use Information</h2>
        <p class="text-gray-700 mb-4">We use the information we collect to:</p>
        <ul class="list-disc list-inside mb-4 text-gray-700">
            <li>Provide, operate, and maintain our website</li>
            <li>Improve, personalize, and expand our website</li>
            <li>Understand and analyze how you use our website</li>
            <li>Develop new products, services, features, and functionality</li>
            <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
            <li>Process your transactions and send you related information, including purchase confirmations and invoices</li>
            <li>Send you emails</li>
            <li>Find and prevent fraud</li>
        </ul>

        <h2 class="text-xl font-semibold mb-4">3. Data Retention</h2>
        <p class="text-gray-700 mb-4">We will retain your personal information only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your information to the extent necessary to comply with our legal obligations, resolve disputes, and enforce our policies.</p>
        
        <h2 class="text-xl font-semibold mb-4">4. Data Protection</h2>
        <p class="text-gray-700 mb-4">We are committed to protecting your personal information and have implemented appropriate technical and organizational measures to ensure your data is secure.</p>

        <h2 class="text-xl font-semibold mb-4">5. Your Rights</h2>
        <p class="text-gray-700 mb-4">Depending on your location, you may have the following rights regarding your personal information:</p>
        <ul class="list-disc list-inside mb-4 text-gray-700">
            <li>The right to access – You have the right to request copies of your personal data.</li>
            <li>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</li>
            <li>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</li>
            <li>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</li>
            <li>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</li>
            <li>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</li>
        </ul>

        <h2 class="text-xl font-semibold mb-4">6. Changes to This Privacy Policy</h2>
        <p class="text-gray-700 mb-4">We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page. You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

        <h2 class="text-xl font-semibold mb-4">7. Contact Us</h2>
        <p class="text-gray-700 mb-4">If you have any questions about this Privacy Policy, please contact us:</p>
        <ul class="list-disc list-inside mb-4 text-gray-700">
            <li>By email: support@yourcompany.com</li>
            <li>By visiting this page on our website: <a href="{{ url('/contact') }}" class="text-blue-500 hover:underline">{{ url('/contact') }}</a></li>
            <li>By phone number: +254 700 000 000</li>
            <li>By mail: XYZ Street, Nairobi, Kenya</li>
        </ul>
    </div>
</div>
@endsection
