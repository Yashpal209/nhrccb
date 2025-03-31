<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Member Certificate</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .certificate {
            width: 100%;
            height: 100vh;
            position: relative;
            background: url("{{ public_path('admin/assets/images/print/Certificate1.jpg') }}") no-repeat center center;
            background-size: cover;
        }

        .content {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -30%);
            width: 80%;
            text-align: center;
        }

        .title {
            font-size: 32px;
            font-weight: bold;
            text-decoration: underline;
        }

        .details {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        .description {
            margin-top: 20px;
            font-size: 18px;
        }

        .reg_no {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .issue_date {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .signature {
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <div class="content">
            <div class="title">Active Member Certificate</div>
            <div class="details">This is to certify that</div>
            <div class="details"><strong>{{ $user->name }}</strong></div>
            <div class="description">
                has been approved as an Active Member of the National Human Rights and Crime Control Bureau, 
                who will be working with the team for the protection and promotion of Human Rights and 
                Crime Prevention activities with the support of the government administration.
            </div>
            <div class="reg_no"><strong>Unique ID:</strong> {{ $user->reg_no }}</div>
            <div class="issue_date"><strong>Issue Date:</strong> {{ $user->updated_at->format('d-m-Y') }}</div>
        </div>

        <div class="signature">
            <p>(National President)</p>
            <p>(Valid: 3 years from issue date)</p>
        </div>
    </div>
</body>
</html>
