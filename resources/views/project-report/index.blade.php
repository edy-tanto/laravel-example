<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Customer</th>
                <th>Work Type</th>
                <th>Project's Name</th>
                <th>Deadline</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $projects as $index => $project )
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $project->customer->name }}</td>
                <td>{{ $project->workType->name }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->deadline }}</td>
                <td>{{ 'Rp ' . number_format($project->value, 2, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
