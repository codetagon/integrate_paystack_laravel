<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
</head>
<body>
    @if(session()->has('error')) {{session()->get('error')}} @endif
    <h1>Start Payment</h1>

    <form action="{{route('pay')}}" method="POST">
        @csrf 
        <input type="text" name="email" placeholder="Email Address" required> <br><br>
        <input type="number" name="amount" placeholder="Enter amount" required> <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>