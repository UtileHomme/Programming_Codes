<!-- leads Table -->

<!-- Columns -->

1. id -> Lead/Customers id

2. fname -> Customer's first name

3. mName -> Customer's middle name

4. lName -> Customer's last name

5. EmailId -> Customer's email id for contacting / mail purpose

6. Source -> Name of the Hospital / Institution which has suggested the Customer

7. MobileNumber -> Contact Number of the Customer

8. Alternatenumber -> Alternate Contact Number/Landline of the Customer

9. EmergencyContact -> Number to Call in case of emergency (can be customer/family)

10. AssesmentReq -> Whether assessment is required or not(only applicable to Physiotheraphy)

11. createdby -> Which person created that particular lead (can be customercare/ etc.)

12. ReferenceId -> Id for the references(like Just Dial) -> mapped to the "refers" table

13. empid -> Id for the employees -> mapped to the "employees" table

- ReferenceId is the foreign key from the table "refers" for the table "leads"
- empid is the foreign key from the table "employees" for the table "leads"

<!-- services Table -->

<!-- Columns -->

1. id -> id for the Services

2. ServiceType -> Type of Services being availed by the customer (Nursing Services, Physiotheraphy, Personal Supportive Care, Mathrutvam Baby Care)
        -- Does the customer want a Registered Nurse or an Attender

3. requested_service -> Service that has been requested by the customer

4. GeneralCondition -> Conditon of the patient whether partial , mobile or bedridden

5. LeadType -> Lead Priority High ,medium and low

6. Branch -> To which location service is required

7. RequestDateTime -> Requested date time info

8. AssignedTo -> To which vertical head, the lead has been assigned

9. QuotedPrice -> Price for specific Service & Product

10. ExpectedPrice -> Price request for Negotiation by customer

11. ServiceStatus -> Whether the Lead is in new, inProgress, converted, deferred or Dropped state

12. PreferedGender -> Gender for home service

13. PreferedLanguage -> Language preference for communication

14. Remarks -> Detailed description

15. langId -> The id from the Languages table for language preference of the service person by the customer

16. Leadid -> The id from the Leads table for which these services have been availed

- Leadid is the "foreign key" from "leads table" for the "services" table
- langId is the "foreign key" from the "languages" table for the "services" table

<!-- addresses tables -->

<!-- Columns -->

1. id -> id for identification of Address

2. Address1 -> Present Address line 1 of the patient

3. Address2 -> Address line 2 (in case the first field is not enough for storing the details)

4. City -> Residential city

5. District -> Residential District

6. State -> Residential state

7. PinCode -> Postal code

8. PAddress1 -> Permanent Address

9. PAddress2 -> Address line 2 (in case the first field is not enough for storing the details)

10. PCity -> Residential city for permanent address

11. PDistrict -> Residential District for permanent address

12. PState -> Residential state for permanent address

13. PPinCode -> Postal code for permanent address

Similary for Emergency Address

14. EAddress1, EAddress2, ECity, EDistrict, EState, EPinCode

15. leadid -> Lead id from the "leads" table

16. empid -> employee id from the "employees table"

- leadid is the "foreign key" from "leads table" for the "addresses" table
- empid is the "foreign key" from the "employees" table for the "addresses" table


<!-- logs tables -->

<!-- Columns -->

1. Id -> id for identification of Log

2. session_id -> Stores the session id of the person who is currently logged in

3. name -> Stores the name of the person who is currently logged in

<!-- activities tables -->

<!-- Columns -->

1. Id -> id for identification of the activity

2. log_Id -> the id from logs table which is for mapping the logs table with the activities table

3. lead_Id -> the id from the leads table to map the leads table with the activities table

4. emp_Id -> the id from the employees table to map the employees table with the activities table

5. activity -> gives information regarding the kind of activity being performed (Login, Log out, Lead created etc)

6. activity_time -> stores the time the activity was created

7. field_updated -> stores the names of all fields that were updated

8. values_updated -> stores the values of all the fields updated in the previous column

- lead_Id is the "foreign key" from "leads table" for the "activities" table
- emp_Id is the "foreign key" from the "employees" table for the "activities" table
- log_Id is the "foreign key" from the "logs" table for the "activities" table


<!-- admins tables -->

<!-- Columns -->

1. id -> id for identification of the kind of person for whom the login has been created

2. name -> contains the names of all people who have login credentials in the application

3. email -> contains the email id of the people who can login

4. password -> hashed form of the password

5. remember_token -> when the remember me checkbox is clicked, this field is updated

<!-- cities tables -->

<!-- Columns -->

1. id -> id for identification of the city name

2. name -> contains the name of the city

<!-- employees tables -->

<!-- Columns -->

1. id -> id for identification of the employee

2. Regid -> contains the Registration id of the employee (their order of joining the company)

3. ReportingTo / underwhom -> to whom this person reports

Eg - Coordinators report to Vertical Heads
     -  Vertical Heads report to Management

4. category -> A category that each employee is assigned to

5. FirstName -> Stores the first name of the employee

6. MiddleName -> Stores the middle name of the employee

7. LastName -> Stores the last name of the employee

8. DOB -> stores the date of the birth of the employee

9. Gender -> stores the gender of the employee

10. MartialStatus -> stores the Marital Status of the employee

11. BloodGroup -> stores the blood group of the employee

12. DOJ -> stores the data of joining of the employee

13. EmployementType -> stores whether the employee is a Permanent or a temporary employee

14. Designation -> stores whether the employee is VerticalHead, Marketing, Coordinator etc.

15. MobileNumber -> stores the mobile number of the employee

16. AlternateNumber ->stores the alternate mobile number of the employee

17. Department -> stores the kind of ServiceType the employee belongs to

18. under -> stores  the id of the employee this employee is under
- may be used for "SELF JOIN"

19. LangaugesKnown -> the languages that the person knows

20. city -> the city that the employee belongs to

<!-- leadstatus tables -->

<!-- Columns -->

1. id -> id for identification of the status

2. status -> contains the various statuses that can be assigned to a lead

<!-- orders tables -->

<!-- Columns -->

1. id -> id for identification of the order

2. leadid -> contains the lead id of the lead who has made that particular order

- leadid is the "foreign key" from "leads table" for the "orders" table

<!-- roles tables -->

<!-- Columns -->

1. id -> id for identification of the kind of the role that the employee plays in the company

2. name -> contains the name of the role (customercare, vertical, admin)

<!-- role_admins tables -->

<!-- Columns -->

1. id -> id for identification of the kind of the role that the employee plays in the company

2. role_id -> contains the role id for the particular person who is trying to login to the system

3. admin_id -> contains the admin id in tandem with the role id

- role_id is the "foreign key" from "roles table" for the "role_admins" table

- admin_id is the "foreign key" from "admins table" for the "role_admins" table

<!--  verticals tables -->

<!-- Columns -->

1. id -> id for identification the kind of vertical type (Nursing Services, PSC etc.)

2. verticaltype -> stores the name of the vertical type

3. servicetype -> stores the name of the service type corresponding to the vertical type
