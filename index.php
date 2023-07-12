<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $country = $_POST['countryInput'];

    if (!empty($country)) {
        $filenameDictionary = 'dictionary.txt';
        $contentDictionary = file_get_contents($filenameDictionary);
        // Check if the country exists in the dictionary
        if (strpos($contentDictionary, $country)) {
            $filenameCountries = 'countries.txt';
            $contentCountries = file_get_contents($filenameCountries);
            // Check if the country already exists in the file
            if (!strpos($contentCountries, $country)) {
                file_put_contents($filenameCountries, $country . "\n", FILE_APPEND);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Country Form</title>
    <style>
        /* Add some basic styles for better appearance */
        body {
            font-family: Arial, sans-serif;
        }

        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<h1>Country Form</h1>

<form id="countryForm" method="post">
    <label for="countryInput">Country Name:</label>
    <input type="text" id="countryInput" name="countryInput" required>
    <input type="submit" value="Submit">
</form>

<label for="countrySelect">Select a Country:</label>
<select id="countrySelect" name="countrySelect">
    <?php
    $filenameCountries = 'countries.txt';
    $contentCountries = file_get_contents($filenameCountries);
    $countries = explode("\n", $contentCountries);

    foreach ($countries as $country) {
        if (!empty($country)) {
            echo "<option value=\"$country\">$country</option>";
        }
    }
    ?>
</select>
</body>
</html>