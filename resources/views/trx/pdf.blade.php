<!-- resources/views/loans/pdf.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Loan Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Loan Details</h1>
    <p><strong>No Transaction:</strong> {{ $loan->no_trx }}</p>
    <p><strong>Member:</strong> {{ $loan->loanname->member_name }}</p>
    
    <h2>Borrowed Books</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Book Name</th>
                <th>Date of Loan</th>
                <th>Date of Return</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loan->dls as $index => $detail)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $detail->books->books_name }}</td>
                    <td>{{ $detail->dateOfloan }}</td>
                    <td>{{ $detail->dateOfreturn }}</td>
                    <td>{{ $detail->descriptions }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
