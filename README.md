# 4.-Dynamic-controls.-Forms.-Files

## Task 1

Create a form with a text field and a submit button. The user must enter the name of a country in the text field.

When the submit button is clicked, two things should happen:

1) the name of the country from the form must be written to the countries.txt file. (Think over the structure of this file so that it is convenient to work with it);

2) on the same page, under the form, a select element should appear, displaying all countries from the countries.txt file.

It is necessary to make sure that when the submit button is clicked, writing to the file is not performed if nothing is entered in the country name field and if the country name in the form is already present in the file.

## Task 2

This assignment is a revision of the previous homework assignment.

Let's repeat the previous task first.

Create a form with a text field and a submit button. The user must enter the name of a country in the text field.

When the submit button is clicked, two things should happen:

1) the name of the country from the form must be written to the countries.txt file. (Think over the structure of this file so that it is convenient to work with it);

2) on the same page, under the form, a select element should appear, displaying all countries from the countries.txt file.

It is necessary to make sure that when the submit button is clicked, writing to the file is not performed if nothing is entered in the country name field and if the country name in the form is already present in the file.

What needs to be improved.

In the previous task, the user can enter any text value in the form, which is not necessarily the name of the country. It is necessary to fix the work of this page in such a way that only country names are entered in the select element.

It can be done in this way. Create a reference file dictionary.txt with country names. The list of countries can be easily found on the Internet. Which countries will be present in this file is up to you. After extracting the text value entered by the user in the form, we need to check if it is the name of a valid country. That is, whether this value is present in the dictionary.txt file. And only if this value is in the dictionary. txt, it must be written to the countries.txt file.
