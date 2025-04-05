{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pay Now</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .payment-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }
        h2 {
            color: #333;
        }
        .pay-button {
            background: #28a745;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
            width: 100%;
        }
        .pay-button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Secure Payment</h2>
        <p>Click the button below to proceed with your payment.</p>
        <form action="https://secure.payu.in/" method="POST">
            <input type="hidden" name="key" value="{{ $MERCHANT_KEY }}">
            <input type="hidden" name="txnid" value="{{ $txnid }}">
            <input type="hidden" name="amount" value="{{ $amount }}">
            <input type="hidden" name="productinfo" value="{{ $productinfo }}">
            <input type="hidden" name="firstname" value="{{ $firstname }}">
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="hidden" name="phone" value="{{ $phone }}">
            <input type="hidden" name="service_provider" value="{{ $service_provider }}">
            <input type="hidden" name="hash" value="{{ $hash }}">
            <input type="hidden" name="surl" value="{{ route('payment.success') }}">
            <input type="hidden" name="furl" value="{{ route('payment.failure') }}">
            <button type="submit" class="pay-button">Pay Now</button>
        </form>
    </div>
</body>
</html> --}}