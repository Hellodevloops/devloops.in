@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>
        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="{{ asset('assets/img/br-2.jpg') }}"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / Refund Policy</span>
                            </div>
                            <h2 class="breadcrumb-title">Refund Policy</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- postbox area start -->
        <section class="postbox__area pt-40 pb-105">
            <div class="container">
                <div class="postbox-content shadow-lg p-5">
                    <h4 class="postbox-title">Welcome to DevLoops Solutions!</h4>
                    <div class="postbox-text">
                        <p class="text-black">Thank you for choosing Devloops for your healthcare CMS needs. We are dedicated to providing you with a high-quality service that supports your practice’s needs. This Refund Policy outlines the conditions under which you may request a refund for our subscription services.</p>
                    </div>

                    <h5 class="postbox-title">Subscription Refund Eligibility</h5>
                    <div class="postbox-text">
                        <p class="text-black">1. <span class="postbox-title">30-Day Money-Back Guarantee</span>: We offer a 30-day money-back guarantee on our subscription plans. If you are not satisfied with our service within the first 30 days of your subscription, you can request a full refund. To qualify for a refund, you must cancel your subscription and submit a refund request within 30 days of the initial payment.</p>

                        <p class="text-black">2. <span class="postbox-title">Annual Subscriptions</span>: Refunds for annual subscriptions are only available within the first 30 days of the subscription period. After 30 days, annual subscriptions are non-refundable. However, if you cancel after 30 days, you will not be charged for subsequent renewal periods.</p>

                        <p class="text-black">3. <span class="postbox-title">Mid-Term Cancellations</span>: If you cancel your subscription mid-term (after the initial 30 days), you will be billed for the remaining days of the current billing cycle. We do not provide refunds for unused portions of your subscription term.</p>

                        <p class="text-black">4. <span class="postbox-title">Special Circumstances</span>: In exceptional cases, such as technical issues or billing errors, we may offer partial refunds or account credits. Please contact our support team to discuss any special circumstances.</p>
                    </div>

                    <h5 class="postbox-title">How to Request a Refund</h5>
                    <div class="postbox-text">
                        <p class="text-black">1. <class="postbox-title">Contact Us</span>: To request a refund, please contact our customer support team via:</p>
                        <p class="text-black mb-5">
                            - Email:
                            <a href="mailto:support@devloops.in" style="color: rgb(212, 60, 194);">
                                <i class="fa-light fa-envelope"></i> support@devloops.in
                            </a>
                        </p>
                        <p class="text-black mb-5">
                            - Phone:
                            <a href="tel:+6358150818" style="color: rgb(212, 60, 194);">
                                <i class="fa-solid fa-square-phone"></i> +6358150818
                            </a>
                        </p>
                        <p class="text-black">2. <class="postbox-title">Provide Details</span>: When requesting a refund, please include your account information, subscription plan details, and the reason for your request. This will help us process your request more efficiently.</p>

                        <p class="text-black">3. <class="postbox-title">Processing Time</span>: Refund requests are typically processed within 7-10 business days from the date of receipt. The refund will be issued to the original payment method used for the subscription.</p>

                        <p class="text-black">Account Deactivation: Upon cancellation and successful processing of your refund, your access to our CMS service will be deactivated. Ensure you have backed up any data or content before requesting cancellation.</p>
                    </div>

                    <h5 class="postbox-title">Contact Information</h5>
                    <div class="postbox-text">
                        <p class="text-black">If you have any questions or need further assistance regarding our refund policy, please contact our support team:</p>
                        <p class="text-black mb-5">
                            - Email:
                            <a href="mailto:support@devloops.in" style="color: rgb(212, 60, 194);">
                                <i class="fa-light fa-envelope"></i> support@devloops.in
                            </a>
                        </p>
                        <p class="text-black mb-5">
                            - Phone:
                            <a href="tel:+6358150818" style="color: rgb(212, 60, 194);">
                                <i class="fa-solid fa-square-phone"></i> +6358150818
                            </a>
                        </p>
                        <p class="text-black">- Address: GF-2 Dhanlaxmi Complex, Vadodara</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- postbox area end -->
    </main>

@endsection
