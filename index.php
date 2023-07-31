<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <main class="px-3">
        <h1>Exchange Rate</h1>
        <p id="rate">Loading...</p>
    </main>
</div>
<script>
    const rateElement = document.getElementById('rate');

    const updateRate = () => {
        fetch('/get_rate.php')
            .then(response => response.json())
            .then(data => rateElement.textContent = data.rate);
    };

    updateRate();
    setInterval(updateRate, 24 * 60 * 60 * 1000);  // Update every 5 seconds
</script>
</body>
</html>
