<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Page with CKEditor</title>
    <script src="../assets/ckeditor/ckeditor.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="#" method="post">
            <label for="textInput">Text Input:</label>
            <input type="text" id="textInput" name="textInput" placeholder="Enter text here">

            <label for="ckeditorInput">CKEditor Input:</label>
            <textarea id="ckeditorInput" name="ckeditorInput" rows="4"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditorInput'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>
