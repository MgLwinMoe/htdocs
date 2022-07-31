<!DOCTYPE html>
<html>
<head>
    <title>2FA Verification Code - PLWP</title>
    <style>
        .code-section{
            padding:20px;
            font-size: 16px;
        }
        .code-section>span{
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h3>{{ $title }}</h3>
<p>Enter the below code at the 2FA login within 3 minutes.</p>
<div class="code-section">Your code is : <span>{{ $code }}</span></div>

<p>Thank you</p>

<p>© {{date('Y')}} PLWP. All rights reserved.</p>
</body>
</html>
