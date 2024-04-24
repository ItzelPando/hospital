<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/formulary_service.css">
    <link rel="stylesheet" href="vistas/css/navbar_style.css">
    <link rel="stylesheet" href="vistas/css/footer.css">
    <title>Add Services</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form action="up_data_service.php" method="post" enctype="multipart/form-data" class="contact-form">
                <h1>SERVICES</h1>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
                
                <label for="image">Attach image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>

                <button type="submit" name="action" class="add-service-btn">Add Service</button>
            </form>
        </div>
    </div>
    
    <script>
    document.querySelector('.add-service-btn').addEventListener('click', function() {
        alert('Changes saved successfully');
    });
    </script>
</body>

</html>


