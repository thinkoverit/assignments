Welcome and thank you for showing interest in working with us at Pixel6. Wish you best of luck for the assignment. Please read the entire document carefully before you start writing code.

# Assignment
You will be creating an Angular application as described below. You can use any plugin / framework of your choice, like for CSS you may use bootstrap / Material, for date fields you may use https://github.com/kekeh/ngx-mydatepicker or momentJS.
You may start with any `Angular starter app` you are comfortable with.

## Form to apply for a Personal Loan
- The form should have fields for `city`, `panNumber` `fullname`, `email`, `mobile` and `otp` in this sequence.
- Please use validation rules as below and show error messages as you seef fit.
   - city - required
   - panNumber - required and valid PAN format for INDIA and max length of 10.
   - fullname - required and max length of 140.
   - email - required and valid Email format and max length of 255.
   - mobile - required and valid mobile format and max length of 10. (Please show prefix of static +91 to mobile field)
   - otp - required and valid NUMBER ONLY format and max length of 4.(Please keep OTP field hidden till getOTP API is success)

- As soon as mobile field is filled by user and is valid, then call 'getOTP' API as mentioned in section 'API Details' below.
- If 'getOTP' API is successfull please show 'otp field and a disable 'Resend OTP' link beside otp field.
- 'Resend OTP' link shall be disabled for 3 minutes and will be enabled when 3 minutes lapse. Now user can click Resend OTP link again and after successfull getOTP call above step will repeat.
- User can click 'Resend OTP' link only 3 times. after that user shall be shown error message "Please try again after an hour." and 'Resend OTP' link shall be hidden.
- As soon as user fills OTP field and its valid, please call 'verifyOTP' as mentioned in API Details section below.
- If 'verifyOTP' API is successfull show a screen displaying 'Thank you for verification xxxx'. xxxx is fullname filled by user in form.


## API Details
Please request payload and response structure carefully here https://documenter.getpostman.com/view/11819251/Szzq3EWU?version=latest


# Assessment Criteria
- Code quality of the Angular Code (Use of angular librraies and features. e.g RxJs - obervables, directives, pipes, subscribers - etc..)
- Code quality of the HTML and CSS (if any).
- Look and feel of the form landing page.

# Deliverable
Create a repository in your github account and commit the code into that repository. Please send us the link to the repository.
It is expected that you send us the link to your code repository within 3 days after receiving this assignment.

