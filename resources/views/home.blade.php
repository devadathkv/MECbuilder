@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="title-line">Craft the Perfect</span>
                    <span class="title-highlight">AI-Powered Resume</span>
                    <span class="title-line">in Seconds</span>
                </h1>
                <p class="hero-subtitle">Let our AI help you create a professional resume that gets you hired</p>
                <div class="hero-cta">
                    {{-- <a href="#features" class="cta-btn primary">Try For Free</a> --}}
                    <a href="{{ route('register') }}" class="cta-btn secondary">Get Started</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="resume-preview">
                    <div class="resume-paper">
                        <div class="resume-header"></div>
                        <div class="resume-section"></div>
                        <div class="resume-section"></div>
                        <div class="resume-section"></div>
                    </div>
                    <div class="sparkles">
                        <div class="sparkle"></div>
                        <div class="sparkle"></div>
                        <div class="sparkle"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <h2 class="section-title">Why Choose MECbuilder</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="feature-title">AI-Powered</h3>
                    <p class="feature-desc">Our AI analyzes thousands of successful resumes to craft yours.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h3 class="feature-title">One-Click Design</h3>
                    <p class="feature-desc">Professional templates that impress recruiters.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="feature-title">ATS Optimized</h3>
                    <p class="feature-desc">Resumes designed to beat Applicant Tracking Systems.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews-section" style="background: #0d1117; padding: 50px 20px; text-align: center;">
        <div class="container">
            <h2 class="section-title">What Users Say About MECbuilder</h2>
            <p style="color: #c9d1d9; font-size: 1rem; margin-bottom: 40px;">Hear from our community of job-seekers who
                built their resumes with us.</p>

            <div class="reviews-grid"
                style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        ">
                <!-- Review Card 1 -->
                <div class="review-card"
                    style="
                background: #161b22;
                padding: 20px;
                border-radius: 12px;
                border: 1px solid #30363d;
                color: #e6edf3;
                box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            ">
                    <p style="font-size: 0.95rem;">“MECbuilder made my resume look professional and clean. I got my first
                        interview within a week!”</p>
                    <h4 style="margin-top: 10px; font-weight: 600; color: #58a6ff;">– Anjali R., Software Engineer</h4>
                </div>

                <!-- Review Card 2 -->
                <div class="review-card"
                    style="
                background: #161b22;
                padding: 20px;
                border-radius: 12px;
                border: 1px solid #30363d;
                color: #e6edf3;
                box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            ">
                    <p style="font-size: 0.95rem;">“The AI suggestions were spot on! Helped me improve my resume
                        dramatically.”</p>
                    <h4 style="margin-top: 10px; font-weight: 600; color: #58a6ff;">– Rahul M., Data Analyst</h4>
                </div>

                <!-- Review Card 3 -->
                <div class="review-card"
                    style="
                background: #161b22;
                padding: 20px;
                border-radius: 12px;
                border: 1px solid #30363d;
                color: #e6edf3;
                box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            ">
                    <p style="font-size: 0.95rem;">“Best resume builder I’ve used so far. Simple, beautiful templates, and
                        easy to use.”</p>
                    <h4 style="margin-top: 10px; font-weight: 600; color: #58a6ff;">– Sneha P., Marketing Specialist</h4>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Ready to Build Your Perfect Resume?</h2>
            <p class="cta-subtitle">Join thousands who landed their dream jobs with our AI resume builder</p>
            <a href="{{ route('register') }}" class="cta-btn primary large">Create My Resume Now</a>
        </div>
    </section>
@endsection
