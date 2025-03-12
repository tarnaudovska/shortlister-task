# Scoping Task: Enabling Multiple Email Addresses for Companies

##  Current State
1. Single Email input
2. UI - 1 field for the email input
3. The email is used for all system-generated communications
4. For the mailing process there is no differentiation of the type of the communication (marketing, billing, etc…)

## Needed Changes
### **1.  UI:**
- The "single email field" should be changed to a field with additional option, **+ button**, for adding multiple emails.
- Adding **Email Type Field** as a **dropdown field** which enables users to choose the type of the email (marketing, billing...).
- Adding a **checkerbox** to mark the **primary email**.
- Adding buttons for **edit** or **delete** for all the email imputs.
### **2.  Database Changes:**
- Create a **new EMAIL table** for storing multiple emails. 
- Add a foreign key column inside the new table to relate it to the `Company` table.
- The existing email from the `Company` table, needs to be transfered inside the new email table. The emails should be taken alltogether with their ID and fill the FK column info. 
- Ensuring that the additional email fields can be **optional (nullable)** inside the new email table.
### **3. Email Validation**
- Implementing **email validation** for new entries.
- Checking for **uniqueness** of the emails within the company and outside of it. 
### **4. Backend Changes**
- Update the email sending logic. It has to use the avaliable emails to send the propper communication to the right email.
- Ensure emails are sent to the correct address (marketing emails to marketing address).
### **5. Testing**
- Validate that the emails are correctly storred in the database
- Ensure that the emails are sent to the correct "type recipient"
### **6. Data Migration**
- Migrating the **existing company emails** into the new table, 
- Set all existing emails as **"Primary"**