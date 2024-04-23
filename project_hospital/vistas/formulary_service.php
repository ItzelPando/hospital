<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vistas/css/formulary_service.css">
    <link rel="stylesheet" href="vistas/css/navbar_style.css">
    <link rel="stylesheet" href="vistas/css/footer.css">
    <title>Add Services</title>
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f2f7fd;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .form-container {
        background-color: #ffffff;
        padding: 50px;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
    }
    
    .contact-form h1 {
        font-size: 24px;
        color: #333333;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .contact-form label {
        font-weight: bold;
        color: #333333;
        display: block;
        margin-bottom: 10px;
    }
    
    .contact-form input[type="text"],
    .contact-form textarea,
    .contact-form input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #cccccc;
        border-radius: 8px;
        box-sizing: border-box;
    }
    
    .contact-form input[type="text"]#id {
        width: calc(100% / 3 - 10px); 
    }
    
    .contact-form textarea {
        resize: vertical;
    }
    
    .contact-form input[type="submit"],
    .contact-form button {
        background-color: #007bff;
        color: #ffffff;
        border: none;
        padding: 12px 20px;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease;
    }
    
    .contact-form input[type="submit"]:hover,
    .contact-form button:hover {
        background-color: #0056b3;
    }
    
    .contact-form input[type="text"]:focus,
    .contact-form textarea:focus,
    .contact-form input[type="file"]:focus {
        background-color: #e6f3ff; 
        border-color: #007bff; 
        outline: none; 
    }
    
    .add-service-btn {
        background-color: #28a745;
        color: #ffffff;
        border: none;
        padding: 12px 20px;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }
    
    .add-service-btn:hover {
        background-color: #218838;
    }
    
</style>

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


