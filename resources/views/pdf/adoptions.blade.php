<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Applications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        .header, .footer {
            text-align: center;
        }
        .pet-info {
            text-align: center;
            margin-top: 10px;
        }
        .pet-info img {
            max-width: 300px;
            height: auto;
            border-radius: 10px;
        }
        .pet-description {
            text-align: justify;
            margin-top: 20px;
        }
        .pet-details {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .pet-details th, .pet-details td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
            border-collapse: collapse;
        }
        .organization-info {
            display: flex;
            /* padding: 10px; */
            padding-left: 20px;
            background-color: #0000FF;
            color: #FFFFFF;
            border-radius: 5px;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Adoption Application</h1>
        </div>

        @foreach($adoptions as $adoption)
            <div class="pet-info">
                <h2>Amazing little dog!</h2>
                <img src="{{ public_path('images/' . $adoption->pet->images) }}" alt="Pet Image">
                <h3>{{ $adoption->pet->name }}</h3>
            </div>
            <div class="pet-description">
                <p>{{ $adoption->pet->content }}</p>
            </div>
            <div class="pet-details">
                <table>
                    <tbody>
                        <tr>
                            <th>Age</th>
                            <td>{{ $adoption->pet->age }}</td>
                        </tr>
                        <tr>
                            <th>Vaccinated</th>
                            <td>{{ $adoption->pet->vaccine }}</td>
                        </tr>
                        <tr>
                            <th>Sex</th>
                            <td>{{ $adoption->pet->sex }}</td>
                        </tr>
                        <tr>
                            <th>Rescue Organisation</th>
                            <td>Royal University of Phnom Penh</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="organization-info">
                <div>
                    <h4>PetRescue ID: {{ $adoption->pet->id }}</h4>
                </div>
                {{-- <div>
                    <img src="image/logo.jpg" alt="Logo">
                </div> --}}
            </div>
        @endforeach
    </div>
</body>
</html>
