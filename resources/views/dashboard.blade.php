@extends('layouts.admin')

@section('content')
<style>
/* Global Styles */
body {
    font-family: 'Inter', sans-serif;
    background-color: #f7f8fa;
    margin: 0;
    padding: 0;
}

h1 {
    font-size: 2rem;
    font-weight: 700;
    color: #343a40;
    margin-bottom: 2px;
    text-transform: uppercase;
}

/* Card Styles */
.card {
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.4s ease, background-color 0.4s ease;
    background-color: #fff;
    margin-bottom: 2px; /* Reduced margin for smaller cards */
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    background-color: #f1f3f5;
}

.card-body {
    padding: 15px 20px; /* Reduced padding */
    color: #fff;
    position: relative;
}

/* Gradient Backgrounds for Cards */
.bg-gradient-card-1 {
    background: linear-gradient(135deg, #0d6efd, #004085);
}

.bg-gradient-card-2 {
    background: linear-gradient(135deg, #198754, #146c43);
}

.bg-gradient-card-3 {
    background: linear-gradient(135deg, #00549e, #5a6268);
}

.bg-gradient-card-4 {
    background: linear-gradient(135deg, #fd7e14, #e85c1e);
}

.bg-gradient-card-5 {
    background: linear-gradient(135deg, #dc3545, #b02a37);
}

.bg-gradient-card-6 {
    background: linear-gradient(135deg, #6f42c1, #5a2a9d);
}

/* Icon Style */
.icon-wrapper {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    padding: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    transition: all 0.3s ease;
}

.icon-wrapper i {
    font-size: 24px; /* Reduced icon size */
}

.icon-wrapper:hover {
    background: rgba(255, 255, 255, 0.4);
    transform: scale(1.1);
}

/* Label and Value Styles */
.label {
    font-size: 14px; /* Reduced label size */
    font-weight: 500;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.8);
    letter-spacing: 0.5px;
    margin-bottom: 3px;
}

.value {
    font-size: 24px; /* Reduced value size */
    font-weight: 700;
    opacity: 1;
}

/* Layout Grid */
.row {
    margin: 0 -10px;
}

.col-xl-4, .col-md-4 {
    padding: 10px;
}

.row > .col-xl-4 {
    margin-bottom: 2px;
}

/* Responsive Adjustments */
@media (max-width: 1148px) {
    .col-md-4 {
        padding: 15px;
        flex: 0 0 50%;
    }

    h1 {
        font-size: 2rem;
    }

    .label {
        font-size: 12px;
    }

    .value {
        font-size: 20px;
    }
}

@media (max-width: 767px) {
    .col-md-4 {
        margin-bottom: 20px;
        flex: 0 0 100%;
    }

    h1 {
        font-size: 1.75rem;
    }

    .label {
        font-size: 10px;
    }

    .value {
        font-size: 18px;
    }
}

</style>

<main class="py-4 px-4">
    <h3 class=" text-uppercase">Dashboard</h3>
    <div class="row">
        <!-- Total Allocated Hours -->
        <div class="col-xl-4 col-md-4">
            <div class="card">
                <div class="card-body bg-gradient-card-1">
                    <div class="d-flex align-items-center">
                        <div class="icon-wrapper me-3">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <span class="label">Allocated Hours</span>
                            <div class="value">1200</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Billed Hours -->
        <div class="col-xl-4 col-md-4">
            <div class="card">
                <div class="card-body bg-gradient-card-2">
                    <div class="d-flex align-items-center">
                        <div class="icon-wrapper me-3">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div>
                            <span class="label">Billed Hours</span>
                            <div class="value">950</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Billable Hours -->
        <div class="col-xl-4 col-md-4">
            <div class="card">
                <div class="card-body bg-gradient-card-3">
                    <div class="d-flex align-items-center">
                        <div class="icon-wrapper me-3">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div>
                            <span class="label">Billable Hours</span>
                            <div class="value">850</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Amount Received -->
        <div class="col-xl-4 col-md-4">
            <div class="card">
                <div class="card-body bg-gradient-card-4">
                    <div class="d-flex align-items-center">
                        <div class="icon-wrapper me-3">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div>
                            <span class="label">Amount Received</span>
                            <div class="value">₹500,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Amount Spent -->
        <div class="col-xl-4 col-md-4">
            <div class="card">
                <div class="card-body bg-gradient-card-5">
                    <div class="d-flex align-items-center">
                        <div class="icon-wrapper me-3">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div>
                            <span class="label">Amount Spent</span>
                            <div class="value">₹200,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Profit -->
        <div class="col-xl-4 col-md-4">
            <div class="card">
                <div class="card-body bg-gradient-card-6">
                    <div class="d-flex align-items-center">
                        <div class="icon-wrapper me-3">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <span class="label">Total Profit</span>
                            <div class="value">₹300,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
