@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="title-line">Craft the Perfect</span>
                    <span class="title-highlight">AI-Generated Resume</span>
                    <span class="title-line">in Minutes</span>
                </h1>
                <p class="hero-subtitle">Let our AI help you create a professional resume that gets you hired</p>
                <div class="hero-cta">
                    <a href="#features" class="cta-btn primary">Try For Free</a>
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
            <h2 class="section-title">Why Choose ResumeGenius</h2>
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

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Ready to Build Your Perfect Resume?</h2>
            <p class="cta-subtitle">Join thousands who landed their dream jobs with our AI resume builder</p>
            <a href="{{ route('register') }}" class="cta-btn primary large">Create My Resume Now</a>
        </div>
    </section>
@endsection
