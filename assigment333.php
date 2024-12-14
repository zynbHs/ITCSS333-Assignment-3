// Function to display student data in the table
function renderStudentTable(records) {

    // Get the table body element where rows will be added
    const tableContainer = document.getElementById('table-body');

    // Loop through each record in the fetched data
    records.forEach(record => {

        // Create a new row for the table
        const tableRow = document.createElement('tr');

        // Add the row content with the corresponding data
        tableRow.innerHTML = `
            <td>${record.year}</td> <!-- Year of the record -->
            <td>${record.semester}</td> <!-- Semester of the record -->
            <td>${record.the_programs}</td> <!-- The program name -->
            <td>${record.nationality}</td> <!-- Student nationality -->
            <td>${record.colleges}</td> <!-- College name -->
            <td>${record.number_of_students}</td> <!-- Number of students -->
        `;

        // Append the row to the table body
        tableContainer.appendChild(tableRow);
    });
}