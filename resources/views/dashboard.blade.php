@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0d1117 0%, #1a1f2a 100%);
            color: #e6edf3;
            margin: 0;
            padding: 0;
        }

        .dashboard-section {
            padding: 60px 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .dashboard-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 50px;
            text-align: center;
            color: #8ab4f8;
            letter-spacing: 0.5px;
        }

        .template-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        .template-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 20px;
            width: 320px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
            transition: all 0.4s ease;
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }

        .template-card:hover {
            transform: scale(1.03);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            background: rgba(255, 255, 255, 0.05);
        }

        .template-name {
            font-size: 1.4rem;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 12px;
        }

        .template-desc {
            font-size: 1rem;
            color: #c9d1d9;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .template-btn {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(135deg, #238636, #2ea043);
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 0.95rem;
            transition: transform 0.3s ease, background 0.3s ease;
            box-shadow: 0 5px 15px rgba(34, 197, 94, 0.3);
        }

        .template-btn:hover {
            background: linear-gradient(135deg, #2ea043, #45d96e);
            transform: translateY(-2px);
        }

        @keyframes fadeInUp {
            0% {
                transform: translateY(40px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>


    <section class="dashboard-section">
        <div class="container">
            <h1 class="dashboard-title">ath ang edk maashe</h1>

            <div class="template-grid">
                <!-- Resume Template Card -->
                <div class="template-card">
                    <h3 class="template-name">MEC Resume Template</h3>
                    <p class="template-desc">A clean and professional format tailored for MEC students.</p>
                    <a href="{{ route('mec.landing') }}" class="template-btn">Use Template</a>
                </div>
            </div>
        </div>
    </section>
@endsection
