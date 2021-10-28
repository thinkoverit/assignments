Welcome and thank you for showing interest in working with us at Pixel6. Wish you best of luck for the assignment. Please read the entire document carefully before you start writing code.

# Assignment
You will be creating an Angular CRUD application as described below. You can use any plugin / framework of your choice, like for CSS you may use bootstrap / Material, for date fields you may use https://github.com/kekeh/ngx-mydatepicker or momentJS.
You may start with any `Angular starter app` you are comfortable with.

## Entity - Customer

- Fields 
  - PAN (required and valid PAN format for INDIA and max length of 10.)
  - Full Name (required and max length of 140)
  - Email (required and max length of 255 and valid format)
  - Mobile Number (required and valid mobile format and max length of 10. (Please show prefix of static +91 to mobile field)
  - Addresses (Multiple entries allowed)
     - Address Line 1 (required)
     - Address Line 2
     - Postcode (required and valid NUMBER ONLY format and max length of 6)
     - State (prefilled via API)
     - City (prefilled via API)
 
## Instructions
   - Customer shall be able to add multiple addresses, max 10. Administartor shall have ability to add new or remove existing address of customer.
   - PAN fields needs verification and customer can be submitted only if PAN is valid.
   - postcode is searchable field and is used to prefill city an state from DB via API.
   - When customer is added, save them in localstorage and take user to customer list page.
   - Customer list page shall alllow administrator to edit and delete customer.
   - 
   
## API Details
Please check request payload and response structure carefully as below-

- Verify PAN
    As soon as valid PAN is entred by user, this API shall be called with loader shown at right side of input field. On response if PAN is valid, 
    prefill fullname field with fullname received in response.

   - REQUEST TYPE: POST
   - REQUEST PAYLOAD:
      - URL: http://lab.thinkoverit.com/api/verify-pan.php
      - Type: POST
      - Data Type:- JSON
      - Body:-
      
         {
            "panNumber": "AAFNZ2078H"
         }

    - RESPONSE PAYLOAD:
      - Data Type:- JSON
      - Body:-
      
         {
            "status": "Success",
            "statusCode": 200,
            "isValid": true,
            "fullName": "Alpha Tester"
         }
         
         
- Get Postcode
   As soon as valid postcode is entred by user, this API shall be called with loader shown at right side of input field. On response if city 
   and state is received prefill city and state field with received values. Remember city and state are select boxes.
   
   - REQUEST TYPE: POST
   - REQUEST PAYLOAD:
      - URL: http://lab.thinkoverit.com/api/get-postcode-details.php
      - Type: POST
      - Data Type:- JSON
      - Body:-
      
         {
             "postcode": 411005
         }

    - RESPONSE PAYLOAD:
      - Data Type:- JSON
      - Body:-
      
         {
            "status": "Success",
            "statusCode": 200,
            "postcode": 411005,
            "city": [{id: 5, "name": "Pune"}],
            "state": [{id: 11, "name": "Maharashtra"}]
         }

    
# Assessment Criteria
- Code quality of the Angular Code (Use of angular libraries and features. e.g RxJs - obervables, directives, pipes, subscribers - etc..)
- Code quality of the HTML and CSS (if any).
- Look and feel of the form landing page.

# Deliverable
Create a repository in your github account and commit the code into that repository. Please send us the link to the repository.
It is expected that you send us the link to your code repository within 3 days after receiving this assignment.
