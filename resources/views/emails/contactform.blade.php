<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>From Website Contact Form </h2>

<div>
    <p>
      Name: {{ $data['name'] }}
    </p>
    <p>
      Email: {{ $data['email'] }}
    </p>
    <h3>Message:</h3>
    <p>
    {{ $data['message'] }}
    </p>
</div>

</body>
</html>