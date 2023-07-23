@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h2>Order Confirmation</h2>
            <i class="fas fa-check-circle fa-3x text-success my-3"></i>
        </div>

        <div class="card border-primary mb-3" style="max-width: 30rem; margin: auto;">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Transaction Summary</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Transaction ID:</strong> <span
                            class="float-right">{{ $transaction['id'] }}</span></li>
                    <li class="list-group-item"><strong>Amount Paid:</strong> <span
                            class="float-right">{{ $transaction['amount'] }} DH </span></li>
                    <li class="list-group-item"><strong>Date of Transaction:</strong> <span
                            class="float-right">{{ $transaction['date'] }}</span></li>
                    <li class="list-group-item"><strong>Payment Method:</strong><span
                            class="float-right">{{ $transaction['payment_method'] }}</span></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Include Font Awesome for the success icon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        .card {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            border: none;
        }

        .list-group-item {
            font-size: 16px;
            color: #333;
        }
    </style>
@endsection
