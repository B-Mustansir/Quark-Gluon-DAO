var data = { "name": "John", "age": 30 };
fetch('/submit-data', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
})
.then(response => response.text())
.then(data => {
    console.log(data);
})
.catch(error => {
    console.error(error);
});