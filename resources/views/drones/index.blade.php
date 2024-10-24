<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <h1 class="text-4xl mx-10 my-5">Drone List</h1>
    <table class="table-auto border-collapse border border-slate-500 ">
        <thead>
            <tr class="">
                <th class="border p-5 border-slate-600">Name</th>
                <th class="border  p-5 border-slate-600">Model</th>
                <th class="border p-5 border-slate-600">Brand</th>
                <th class="border p-5 border-slate-600">Airworthiness</th>
                <th class="border p-5 border-slate-600">Operational</th>
                <th class="border p-5 border-slate-600">internalSerial</th>
                <th class="border p-5 border-slate-600">printedSerial</th>
                <th class="border p-5 border-slate-600">remoteID</th>
                <th class="border p-5 border-slate-600">registration</th>
                <th class="border p-5 border-slate-600">purchased</th>
                <th class="border p-5 border-slate-600">notes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drones as $drone)
                <tr>
                    <td class="border p-2 border-slate-600">{{ $drone['name'] }}</td>
                    <td class="border p-2 border-slate-600">{{ $drone['model'] }}</td>
                    <td class="border p-2 border-slate-600">{{ $drone['brand'] }}</td>
                    <td class="border p-2 border-slate-600">{{ $drone['airworthiness'] }}</td>
                    <td class="border p-2 border-slate-600">{{ $drone['operational'] }}</td>
                    <td class="border p-2 border-slate-600">{{ $drone['internalSerial'] }}</td>
                    <td class="border p-2 border-slate-600">{{ $drone['printedSerial'] }}</td>
                    <td class="border p-2 border-slate-600">{{ $drone['remoteID'] }}</td>
                    <td class="border p-2 border-slate-600">{{ $drone['registration'] }}</td>
                    <td class="border p-2 border-slate-600">{{ $drone['purchased'] }}</td>
                    <td class="border p-2 border-slate-600">{{ $drone['notes'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>
</html>
    