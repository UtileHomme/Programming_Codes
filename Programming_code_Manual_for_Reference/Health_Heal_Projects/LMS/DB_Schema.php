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

11. ServiceStatus -> Whether the Lead is in new, inProgress, converted, deffred or Dropped state

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
