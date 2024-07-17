function displayDate() {
    const dateElement = document.getElementById('date');
    const currentDate = new Date();
    const formattedDate = currentDate.toDateString(); // Format the date as desired
    dateElement.textContent = formattedDate;
}

// Call the function to display the date
displayDate();
