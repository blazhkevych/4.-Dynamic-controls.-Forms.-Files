<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $country = $_POST['countryInput'];

    if (!empty($country)) {
        $filenameDictionary = 'dictionary.txt';
        $contentDictionary = file_get_contents($filenameDictionary);
        // Check if the country exists in the dictionary
        if (strpos($contentDictionary, $country) !== false) {
            $filenameCountries = 'countries.txt';
            $contentCountries = file_get_contents($filenameCountries);
            // If the file is empty - add the country
            if (empty($contentCountries)) {
                file_put_contents($filenameCountries, $country . "\n", FILE_APPEND);
            } // Check if the country already exists in the file
            else if (strpos($contentCountries, $country) !== false) {
                // If the country already exists in the file, show an error message
                echo "<p style='color: red'>The country already exists in the file!</p>";
            } else {
                file_put_contents($filenameCountries, $country . "\n", FILE_APPEND);
            }
        } else {
            // If the country does not exist in the dictionary, show an error message
            echo "<p style='color: red'>Please enter a valid country name!</p>";
        }
    } else {
        // If the country is empty, show an error message
        echo "<p style='color: red'>Please enter a country name!</p>";
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