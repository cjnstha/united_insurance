<!DOCTYPE html>
<html>
<head>
    <title>Enquiry Email</title>
</head>
<body>
    <table>
        <thead>
            <tr><td>Dear Admin!</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>User Enquiry details are as below:</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td><strong>Name:</strong> {{ $name }}</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td><strong>Email:</strong> {{ $email }}</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td><strong>Subject:</strong> {{ $subject }}</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td><strong>Message:</strong> {{ $message }}</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td><strong>Thanks & Regards,</strong></td></tr>
            <tr><td><strong>{{$name}}</strong></td></tr>
        </thead>
    </table>
</body>
</html>
