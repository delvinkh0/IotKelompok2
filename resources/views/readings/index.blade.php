<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Readings</title>
</head>
<body>
    <h1>Sensor Readings</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sensor Reading</th>
                <th>Sensor Voltage</th>
                <th>Temperature</th>
                <th>Pressure</th>
                <th>Humidity</th>
                <th>Gas</th>
                <th>Altitude</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($latestReading as $reading)
                <tr>
                    <td>{{ $reading->id }}</td>
                    <td>{{ $reading->sensor_reading }}</td>
                    <td>{{ $reading->sensor_voltage }}</td>
                    <td>{{ $reading->temperature }}</td>
                    <td>{{ $reading->pressure }}</td>
                    <td>{{ $reading->humidity }}</td>
                    <td>{{ $reading->gas }}</td>
                    <td>{{ $reading->altitude }}</td>
                    <td>{{ $reading->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
