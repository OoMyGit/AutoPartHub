<!DOCTYPE html>
<html>
<head>
    <title>Transactions</title>
    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .alert-error {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    @include('footerheader.header')
    
    <!-- Display flash messages -->
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif
    
    <div>
        <h1 class="ms-15 my-5">Your Transactions</h1>
    </div>
    
    @if (!$transactions->isEmpty())
    <div class="container mt-4 mb-12">
        <div class="card shadow-lg">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Address</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->product_name }}</td>
                                <td>{{ $transaction->quantity }}</td>
                                <td>Rp{{ $transaction->product_price }}</td>
                                <td>{{ $transaction->address }}</td>
                                <td>Rp{{ $transaction->total_price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('index') }}" class="btn btn-primary btn-md rounded-1">Back to Home</a>
            </div>
        </div>
    </div>
    @endif
    
    
    @include('footerheader.footer')
    
    
</body>
</html>
