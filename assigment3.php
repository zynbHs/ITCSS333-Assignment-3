<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Make the page responsive -->
    <title>UOB Students Nationality Data</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"> <!-- Add some nice styles -->
</head>
<body>
    <main class="container">
        <table>
            <thead>
                <tr>
                    <th>Year</th> 
                    <th>Semester</th> 
                    <th>The Programs</th>
                    <th>Nationality</th>
                    <th>Colleges</th>
                    <th>Number of Students</th>
                </tr>
            </thead>
            <tbody id="table-body"> <!-- adding id to access this element in api.js -->
            </tbody>
        </table>
    </main>
    <script src="api.js"></script> <!-- Links the api.js to handle the data -->
</body>
</html>