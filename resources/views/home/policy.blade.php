@extends('layout.home')

@section('content')

<!-- Link Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<div class="container mt-5">
    <h1 class="text-center mb-4">Privacy Policy</h1>

    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <div class="card shadow-lg p-4 mb-4">
                <h3 class="font-weight-bold text-dark">1. Introduction</h3>
                <p class="lead text-muted">
                    Welcome to our website! We value your privacy and are committed to protecting your personal data. 
                    This Privacy Policy explains how we collect, use, and protect your information when you visit our website.
                </p>
            </div>

            <div class="card shadow-lg p-4 mb-4">
                <h3 class="font-weight-bold text-dark">2. Information We Collect</h3>
                <p class="text-muted">
                    We collect personal information when you visit our website, place an order, or interact with us. This may include:
                </p>
                <ul class="list-group list-group-flush text-muted">
                    <li class="list-group-item border-0"><i class="bi bi-person-check"></i> Your name and contact information (email, phone number, etc.)</li>
                    <li class="list-group-item border-0"><i class="bi bi-credit-card"></i> Payment information for transactions</li>
                    <li class="list-group-item border-0"><i class="bi bi-eye"></i> Browsing behavior and preferences</li>
                </ul>
            </div>

            <div class="card shadow-lg p-4 mb-4">
                <h3 class="font-weight-bold text-dark">3. How We Use Your Information</h3>
                <p class="text-muted">
                    We use the information we collect to:
                </p>
                <ul class="list-group list-group-flush text-muted">
                    <li class="list-group-item border-0"><i class="bi bi-box"></i> Process orders and provide customer service</li>
                    <li class="list-group-item border-0"><i class="bi bi-paint-bucket"></i> Improve our website and personalize your experience</li>
                    <li class="list-group-item border-0"><i class="bi bi-megaphone"></i> Communicate with you about updates, promotions, and offers</li>
                </ul>
            </div>

            <div class="card shadow-lg p-4 mb-4">
                <h3 class="font-weight-bold text-dark">4. Data Protection</h3>
                <p class="lead text-muted">
                    We take the security of your personal data seriously and implement reasonable measures to protect it from unauthorized access or disclosure.
                </p>
            </div>

            <div class="card shadow-lg p-4 mb-4">
                <h3 class="font-weight-bold text-dark">5. Third-Party Sharing</h3>
                <p class="lead text-muted">
                    We do not share your personal information with third parties, except as necessary to fulfill your order or as required by law.
                </p>
            </div>

            <div class="card shadow-lg p-4 mb-4">
                <h3 class="font-weight-bold text-dark">6. Cookies</h3>
                <p class="lead text-muted">
                    Our website uses cookies to enhance your experience. You can choose to disable cookies in your browser settings, but this may affect certain features of the website.
                </p>
            </div>

            <div class="card shadow-lg p-4 mb-4">
                <h3 class="font-weight-bold text-dark">7. Changes to This Privacy Policy</h3>
                <p class="lead text-muted">
                    We may update this Privacy Policy from time to time. Any changes will be posted on this page, and the date at the top of this page will be updated.
                </p>
            </div>

            <div class="card shadow-lg p-4 mb-4">
                <h3 class="font-weight-bold text-dark">8. Contact Us</h3>
                <p class="lead text-muted">
                    If you have any questions about this Privacy Policy or how we handle your personal data, feel free to contact us at <strong>support@example.com</strong>.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
