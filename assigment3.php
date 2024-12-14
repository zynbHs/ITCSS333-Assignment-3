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

<script>
// The API link we are getting the data from
const apiEndpoint = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100"

// Asynchronous function to fetch student data
async function getStudentData() {
    try {
        // Fetch data from the API and wait for the response
        const apiResponse = await fetch(apiEndpoint);

        // Check if the response is valid
        if (!apiResponse.ok || apiResponse.status !== 200) {
            console.error('Failed to fetch data'); // Log an error message if the fetch fails
            return; // Exit the function if there's an issue
        }

        // Convert the response to JSON format
        const responseData = await apiResponse.json();

        // Pass the results to the function that displays data
        renderStudentTable(responseData.results);
    } catch (fetchError) {
        // Log any errors that occur during the fetching process
        console.error('Error while fetching data', fetchError);
    }
}