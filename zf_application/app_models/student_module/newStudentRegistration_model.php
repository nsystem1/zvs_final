<?php

//THIS CODE IS WRITTEN BY:
//1. ATHIAS AVIANS (MATHEW JUMA), THE CHIEF AND CORE DEVELOPER OF ZILAS FRAMEWORK PROJECT.

/*
 * ---------------------------------------------------------------------
 * |                                                                   |
 * |  This the Model which is responsible responsible for handling all |
 * |  logic that is related to management of school classes and a new  |
 * |  new streams into the classess.                                   |
 * |                                                                   |
 * ---------------------------------------------------------------------
 */

class newStudentRegistration_Model extends Zf_Model {
    
    private $_errorResult = array();
    private $_validResult = array();


    /*
    * --------------------------------------------------------------------------------------
    * |                                                                                    |
    * |  The is the main class constructor. It runs automatically within any class object  |
    * |                                                                                    |
    * --------------------------------------------------------------------------------------
    */
    public function __construct() {
        
        parent::__construct();
         
    }
    
    
    
    /**
     * This method is used to register new student into the school.
     */
    public function registerNewStudent($identificationCode){
        
        
        //echo "We are here!!";
        
         //Here we chain all form data.
        
        //In this section we chain all student personal data
        $this->zf_formController->zf_postFormData('studentFirstName')
                                ->zf_validateFormData('zf_maximumLength', 60, 'Student First Name')
                                ->zf_validateFormData('zf_minimumLength', 2, 'Student First Name')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student First Name')
                
                                ->zf_postFormData('studentMiddleName')
                                ->zf_validateFormData('zf_maximumLength', 60, 'Student Middle Name')
                                ->zf_validateFormData('zf_minimumLength', 2, 'Student Middle Name')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Middle Name')
                
                                ->zf_postFormData('studentLastName')
                                ->zf_validateFormData('zf_maximumLength', 60, 'Student Last Name')
                                ->zf_validateFormData('zf_minimumLength', 2, 'Student Last Name')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Last Name')
                
                                ->zf_postFormData('studentGender')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Gender')
                
                                ->zf_postFormData('studentDateOfBirth')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Date of Birth')
                
                                ->zf_postFormData('studentReligion')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Religion')
                
                                ->zf_postFormData('studentCountry')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Country')
                
                                ->zf_postFormData('studentLocality')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Locality')
                
                                ->zf_postFormData('studentBoxAddress')//not required field
                                ->zf_validateFormData('zf_maximumLength', 60, 'Student Box Address')
                
                                ->zf_postFormData('studentPhoneNumber')//not required field
                                ->zf_validateFormData('zf_maximumLength', 60, 'Student Phone Number')
                
                                ->zf_postFormData('studentLanguage')
                                ->zf_validateFormData('zf_maximumLength', 60, 'Student Language')
                                ->zf_validateFormData('zf_minimumLength', 2, 'Student Language');
        
        
        
        //In this section we chain all guardian related data
        $this->zf_formController->zf_postFormData('guardianDesignation')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Country')
                
                                ->zf_postFormData('guardianFirstName')
                                ->zf_validateFormData('zf_maximumLength', 60, 'Guardian First Name')
                                ->zf_validateFormData('zf_minimumLength', 2, 'Guardian First Name')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian First Name')
                    
                                ->zf_postFormData('guardianMiddleName')//not required field
                                ->zf_validateFormData('zf_maximumLength', 60, 'Guardian Middle Name')
                                
                                ->zf_postFormData('guardianLastName')
                                ->zf_validateFormData('zf_maximumLength', 60, 'Guardian Last Name')
                                ->zf_validateFormData('zf_minimumLength', 2, 'Guardian Last Name')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian Last Name')
                
                                ->zf_postFormData('guardianGender')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian Gender')
                
                                ->zf_postFormData('guardianDateOfBirth')//not required field
                
                                ->zf_postFormData('guardianReligion')//not required field
                
                                ->zf_postFormData('guardianCountry')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian Country')
        
                                ->zf_postFormData('guardianLocality')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian Locality')
                    
                                ->zf_postFormData('guardianBoxAddress')//not required field
                
                                ->zf_postFormData('guardianPhoneNumber')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian Phone Number')
                
                                ->zf_postFormData('guardianRelation')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian Relation')
                
                                ->zf_postFormData('guardianOccupation')//not required field
                                ->zf_validateFormData('zf_maximumLength', 120, 'Guardian Occupation')
                
                                ->zf_postFormData('guardianLanguage')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian Language');
        
        
        
        //In this section we chain all student medical data
        $this->zf_formController->zf_postFormData('isStudentBloodGroup')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'One Option')
        
                                ->zf_postFormData('studentBloodGroup')//not required field
        
                                ->zf_postFormData('isStudentDisable')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'One Option')
        
                                ->zf_postFormData('studentDisability')//not required field
                                ->zf_validateFormData('zf_maximumLength', 500, 'Student disability details')
        
                                ->zf_postFormData('isStudentMedicated')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'One Option')
        
                                ->zf_postFormData('studentMedication')//not required field
                                ->zf_validateFormData('zf_maximumLength', 500, 'Student current medication details')
        
                                ->zf_postFormData('isStudentAllergic')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'One Option')
        
                                ->zf_postFormData('studentAllergic')//not required field
                                ->zf_validateFormData('zf_maximumLength', 500, 'Student allergy details')
        
                                ->zf_postFormData('isStudentTreatment')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'One Option')
        
                                ->zf_postFormData('studentTreatment')//not required field
                                ->zf_validateFormData('zf_maximumLength', 500, 'Student special treatment details')
        
                                ->zf_postFormData('isStudentPhysician')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'One Option')
        
                                ->zf_postFormData('physicianDesignation')//not required field
        
                                ->zf_postFormData('physicianFirstName')//not required field
                                ->zf_validateFormData('zf_maximumLength', 60, 'Physician First Name')
        
                                ->zf_postFormData('physicianLastName')//not required field
                                ->zf_validateFormData('zf_maximumLength', 60, 'Physician Last Name')
        
                                ->zf_postFormData('1stMobileNumber')//not required field
                                ->zf_validateFormData('zf_maximumLength', 30, 'Physician 1st Mobile Number')
        
                                ->zf_postFormData('2ndMobileNumber')//not required field
                                ->zf_validateFormData('zf_maximumLength', 30, 'Physician 2nd Mobile Number')
        
                                ->zf_postFormData('physicianEmailAddress')//not required field
                                ->zf_validateFormData('zf_checkEmail', 'physicianEmailAddress')
                                ->zf_validateFormData('zf_maximumLength', 60, 'Physician Email Address')
        
                                ->zf_postFormData('physicianBoxAddress')//not required field
                                ->zf_validateFormData('zf_maximumLength', 60, 'Physician Box Address')
        
                                ->zf_postFormData('physicianCountry')//not required field
        
                                ->zf_postFormData('physicianLocality')//not required field
        
                                ->zf_postFormData('isStudentHospital')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'One Option')
        
                                ->zf_postFormData('hospitalName')//not required field
                                ->zf_validateFormData('zf_maximumLength', 60, 'Hospital Name')
        
                                ->zf_postFormData('1stHospitalNumber')//not required field
                                ->zf_validateFormData('zf_maximumLength', 30, 'Hospital 1st Mobile Number')
        
                                ->zf_postFormData('2ndHospitalNumber')//not required field
                                ->zf_validateFormData('zf_maximumLength', 30, 'Hospital 2nd Mobile Number')
        
                                ->zf_postFormData('hospitalEmailAddress')//not required field
                                ->zf_validateFormData('zf_checkEmail', 'hospitalEmailAddress')
                                ->zf_validateFormData('zf_maximumLength', 60, 'Hospital Email Address')
        
                                ->zf_postFormData('hospitalBoxAddress')//not required field
                                ->zf_validateFormData('zf_maximumLength', 60, 'Hospital Box Address')
        
                                ->zf_postFormData('hospitalCountry')//not required field
        
                                ->zf_postFormData('hospitalLocality');//not required field
        
        
        
        //In this section we chain all student class data
        $this->zf_formController->zf_postFormData('studentClassCode')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Class')
        
                                ->zf_postFormData('studentStreamCode')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Stream')
        
                                ->zf_postFormData('studentYearOfStudy')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Year of Study')
        
                                ->zf_postFormData('studentAdmissionNumber')
                                ->zf_validateFormData('zf_maximumLength', 30, 'Student Admission Number')
                                ->zf_validateFormData('zf_minimumLength', 2, 'Student Admission Number')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Admission Number');
        
        
        
        //In this section we chain all student login data
        $this->zf_formController->zf_postFormData('studentEmailAddress')
                                ->zf_validateFormData('zf_maximumLength', 120, 'Student Email Address')
                                ->zf_validateFormData('zf_minimumLength', 6, 'Student Email Address')
                                ->zf_validateFormData('zf_checkEmail', 'studentEmailAddress')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Email Address')
                
                                ->zf_postFormData('studentPassword')
                                ->zf_validateFormData('zf_maximumLength', 120, 'Student Password')
                                ->zf_validateFormData('zf_minimumLength', 5, 'Student Password')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Password')
        
                                ->zf_postFormData('studentSchoolRole')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Student Role');
        
        
        
        //In this section we chain all student login data
        $this->zf_formController->zf_postFormData('guardianEmailAddress')
                                ->zf_validateFormData('zf_maximumLength', 120, 'Guardian Email Address')
                                ->zf_validateFormData('zf_minimumLength', 6, 'Guardian Email Address')
                                ->zf_validateFormData('zf_checkEmail', 'guardianEmailAddress')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian Email Address')
        
                                ->zf_postFormData('guardianPassword')
                                ->zf_validateFormData('zf_maximumLength', 120, 'Guardian Password')
                                ->zf_validateFormData('zf_minimumLength', 5, 'Guardian Password')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian Password')
        
                                ->zf_postFormData('guardianSchoolRole')
                                ->zf_validateFormData('zf_fieldNotEmpty', 'Guardian Role');
        
        
        
        $this->zf_formController->zf_postFormData('registeredBy');
        
        //This array holds all error data
        $this->_errorResult = $this->zf_formController->zf_fetchErrorData();

        //This array holds all valid data. 
        $this->_validResult = $this->zf_formController->zf_fetchValidData();
        
        
        
        $registeredBy = $this->_validResult['registeredBy'];
        
        
        
        //This of debugging purposes only.
        //echo "<pre>All Student Data<br>"; print_r($this->_errorResult); echo "</pre>"; echo "<pre>"; print_r($this->_validResult); echo "</pre>"; //exit();
        
        
        if(empty($this->_errorResult)){
            
            //This is the school code for the person registering the new student.
            $systemSchoolCode = Zf_Core_Functions::Zf_DecodeIdentificationCode($registeredBy)[2];
            
            //Prepare all variables for student form data.
                $studentFirstName = $this->_validResult['studentFirstName'];
                $studentMiddleName = $this->_validResult['studentMiddleName'];
                $studentLastName = $this->_validResult['studentLastName'];
                $studentGender = $this->_validResult['studentGender'];
                $studentDateOfBirth = $this->_validResult['studentDateOfBirth'];
                $studentReligion = $this->_validResult['studentReligion'];
                $studentCountry = $this->_validResult['studentCountry'];
                $studentLocality = $this->_validResult['studentLocality'];
                $studentBoxAddress = $this->_validResult['studentBoxAddress'];//not required field
                $studentPhoneNumber = $this->_validResult['studentPhoneNumber'];//not required field
                $studentLanguage = $this->_validResult['studentLanguage'];
                $studentClassCode = $this->_validResult['studentClassCode'];
                $studentStreamCode = $this->_validResult['studentStreamCode'];
                $studentYearOfStudy = $this->_validResult['studentYearOfStudy'];
                $studentAdmissionNumber = $this->_validResult['studentAdmissionNumber'];
                $studentEmailAddress = $this->_validResult['studentEmailAddress'];
                $studentPassword = $this->_validResult['studentPassword'];
                $studentRole = explode(ZVSS_CONNECT, $this->_validResult['studentSchoolRole'])[1];
                //Generate unique student access code.
                $studentIdentificationCode = Zf_SecureData::zf_encode_data($studentCountry.ZVSS_CONNECT.$studentLocality.ZVSS_CONNECT.$systemSchoolCode.ZVSS_CONNECT.$studentRole.ZVSS_CONNECT.$studentAdmissionNumber);
              
                
            //Prepare all variable for guardian form data
                $guardianDesignation = $this->_validResult['guardianDesignation'];
                $guardianFirstName = $this->_validResult['guardianFirstName'];
                $guardianMiddleName = $this->_validResult['guardianMiddleName'];//not required field
                $guardianLastName = $this->_validResult['guardianLastName'];
                $guardianGender = $this->_validResult['guardianGender'];
                $guardianDateOfBirth = $this->_validResult['guardianDateOfBirth'];//not required field
                $guardianReligion = $this->_validResult['guardianReligion'];//not required field
                $guardianCountry = $this->_validResult['guardianCountry'];
                $guardianLocality= $this->_validResult['guardianLocality'];
                $guardianBoxAddress = $this->_validResult['guardianBoxAddress'];//not required field
                $guardianPhoneNumber = $this->_validResult['guardianPhoneNumber'];//not required field
                $guardianRelation = $this->_validResult['guardianRelation'];
                $guardianOccupation = $this->_validResult['guardianOccupation'];//not required field
                $guardianLanguage = $this->_validResult['guardianLanguage'];
                $guardianEmailAddress = $this->_validResult['guardianEmailAddress'];
                $guardianPassword = $this->_validResult['guardianPassword'];
                $guardianRole = explode(ZVSS_CONNECT, $this->_validResult['guardianSchoolRole'])[1];
                //Generate unique guardian access code.
                $guardianIdentificationCode = Zf_SecureData::zf_encode_data($guardianCountry.ZVSS_CONNECT.$guardianLocality.ZVSS_CONNECT.$systemSchoolCode.ZVSS_CONNECT.$guardianRole.ZVSS_CONNECT.$studentAdmissionNumber);
            
            
            //Prepare all variables for student medical data
                $isStudentBloodGroup = $this->_validResult['isStudentBloodGroup'];
                $studentBloodGroup = $this->_validResult['studentBloodGroup'];//not required field
                $isStudentDisable = $this->_validResult['isStudentDisable'];
                $studentDisability = $this->_validResult['studentDisability'];//not required field
                $isStudentMedicated = $this->_validResult['isStudentMedicated'];
                $studentMedication = $this->_validResult['studentMedication'];//not required field
                $isStudentAllergic = $this->_validResult['isStudentAllergic'];
                $studentAllergic = $this->_validResult['studentAllergic'];//not required field
                $isStudentTreatment = $this->_validResult['isStudentTreatment'];
                $studentTreatment = $this->_validResult['studentTreatment'];//not required field
                $isStudentPhysician = $this->_validResult['isStudentPhysician'];
                $physicianDesignation = $this->_validResult['physicianDesignation'];//not required field
                $physicianFirstName = $this->_validResult['physicianFirstName'];//not required field
                $physicianLastName = $this->_validResult['physicianLastName'];//not required field
                $firstMobileNumber = $this->_validResult['1stMobileNumber'];//not required field
                $secondMobileNumber = $this->_validResult['2ndMobileNumber'];//not required field
                $physicianEmailAddress = $this->_validResult['physicianEmailAddress'];//not required field
                $physicianBoxAddress = $this->_validResult['physicianBoxAddress'];//not required field
                $physicianCountry = $this->_validResult['physicianCountry'];//not required field
                $physicianLocality = $this->_validResult['physicianLocality'];//not required field
                $isStudentHospital = $this->_validResult['isStudentHospital'];
                $hospitalName = $this->_validResult['hospitalName'];//not required field
                $firstHospitalNumber = $this->_validResult['1stHospitalNumber'];//not required field
                $secondHospitalNumber = $this->_validResult['2ndHospitalNumber'];//not required field
                $hospitalEmailAddress = $this->_validResult['hospitalEmailAddress'];//not required field
                $hospitalBoxAddress = $this->_validResult['hospitalBoxAddress'];//not required field
                $hospitalCountry = $this->_validResult['hospitalCountry'];//not required field
                $hospitalLocality = $this->_validResult['hospitalLocality'];;//not required field
                
                
                //Process Student data for insertion.
                
                //1. Check if a similar student has already been registered in the same school. 
                //Hint: Each Zilas user must have a unique email address, so check using the email address.
                    $studentEmailValue['email'] = Zf_QueryGenerator::SQLValue($studentEmailAddress);
                    $studentEmailColumn = array("email");
                    
                    $zvs_studentEmailSqlQuery = Zf_QueryGenerator::BuildSQLSelect('zvs_application_users', $studentEmailValue, $studentEmailColumn);
                    $zvs_executeStudentEmailSqlQuery = $this->Zf_AdoDB->Execute($zvs_studentEmailSqlQuery);
                    
                    if(!$zvs_executeStudentEmailSqlQuery){
                        
                        echo "<strong>Query Execution Failed:</strong> <code>" . $this->Zf_AdoDB->ErrorMsg() . "</code>";
                        
                    }else{
                        
                        //Check if a similar user exists.
                        if($zvs_executeStudentEmailSqlQuery->RecordCount() > 0){
                            
                            //This student 
                            Zf_SessionHandler::zf_setSessionVariable("student_registration", "existent_student_email");

                            $zf_errorData = array("zf_fieldName" => "studentEmailAddress", "zf_errorMessage" => "* This student email address is already registered!!");
                            Zf_FormController::zf_validateSpecificField($this->_validResult, $zf_errorData);
                            Zf_GenerateLinks::zf_header_location("student_module", 'register_student', $registeredBy);
                            exit();
                        
                        }else{
                            
                            //Check if a similar student has already been registered in the same school
                            //Hint: Each student within the school MUST have a unique admission number: check the istudent admission number.
                            $studentAdmissionNumberValue['systemSchoolCode'] = Zf_QueryGenerator::SQLValue($systemSchoolCode);
                            $studentAdmissionNumberValue['studentAdmissionNumber'] = Zf_QueryGenerator::SQLValue($studentAdmissionNumber);
                            $studentAdmissionNumberColumn = array("studentAdmissionNumber");

                            $zvs_studentAdmissionNumberSqlQuery = Zf_QueryGenerator::BuildSQLSelect('zvs_students_class_details', $studentAdmissionNumberValue, $studentAdmissionNumberColumn);
                            
                            $zvs_executeStudentAdmissionNumberSqlQuery = $this->Zf_AdoDB->Execute($zvs_studentAdmissionNumberSqlQuery); 
                            
                            if(!$zvs_executeStudentAdmissionNumberSqlQuery){
                                
                                echo "<strong>Query Execution Failed:</strong> <code>" . $this->Zf_AdoDB->ErrorMsg() . "</code>";
                                
                            }else{
                                
                                //Check if a similar admission number exists
                                if($zvs_executeStudentAdmissionNumberSqlQuery->RecordCount() > 0){
                                    
                                    Zf_SessionHandler::zf_setSessionVariable("student_registration", "existent_admission_number");
                                    
                                    $zf_errorData = array("zf_fieldName" => "studentAdmissionNumber", "zf_errorMessage" => "* This admission number is already registered!!");
                                    Zf_FormController::zf_validateSpecificField($this->_validResult, $zf_errorData);
                                    Zf_GenerateLinks::zf_header_location("student_module", 'register_student', $registeredBy);
                                    exit();
                                    
                                }else{
                                    
                                    //Check if a similar guardian email address has already been registered into the school
                                    $guardianEmailValue['email'] = Zf_QueryGenerator::SQLValue($guardianEmailAddress);
                                    $guardianEmailColumn = array("email");

                                    $zvs_guardianEmailSqlQuery = Zf_QueryGenerator::BuildSQLSelect('zvs_application_users', $guardianEmailValue, $guardianEmailColumn);
                                    $zvs_executeGuardianEmailSqlQuery = $this->Zf_AdoDB->Execute($zvs_guardianEmailSqlQuery);

                                    if(!$zvs_executeGuardianEmailSqlQuery){

                                        echo "<strong>Query Execution Failed:</strong> <code>" . $this->Zf_AdoDB->ErrorMsg() . "</code>";

                                    }else{

                                        //Check if a similar user exists.
                                        if($zvs_executeGuardianEmailSqlQuery->RecordCount() > 0){

                                            //This student 
                                            Zf_SessionHandler::zf_setSessionVariable("student_registration", "existent_guardian_email");

                                            $zf_errorData = array("zf_fieldName" => "guardianEmailAddress", "zf_errorMessage" => "* This guardian email address is already registered!!");
                                            Zf_FormController::zf_validateSpecificField($this->_validResult, $zf_errorData);
                                            Zf_GenerateLinks::zf_header_location("student_module", 'register_student', $registeredBy);
                                            exit();

                                        }else{

                                            //THREE VALIDATION CHECKS ACCOMPLISHED:
                                            //1. A similar student email address hasn't been registered into the system
                                            //2. A similar student admission number hasn't been registered into the system for the same school
                                            //3. A simial guardian email address hasn't been registered into the system
                                            
                                            //PREPARE ALL STUDENT  DATA FOR INSERTION
                                            
                                            //1. Application user details
                                            $studentApplicationUserDetails['email'] = Zf_QueryGenerator::SQLValue($studentEmailAddress);
                                            $studentApplicationUserDetails['password'] = Zf_QueryGenerator::SQLValue($studentPassword);
                                            $studentApplicationUserDetails['identificationCode'] = Zf_QueryGenerator::SQLValue($studentIdentificationCode);
                                            $studentApplicationUserDetails['userStatus'] = Zf_QueryGenerator::SQLValue(1);
                                            
                                            
                                            $guardianApplicationUserDetails['email'] = Zf_QueryGenerator::SQLValue($guardianEmailAddress);
                                            $guardianApplicationUserDetails['password'] = Zf_QueryGenerator::SQLValue($guardianPassword);
                                            $guardianApplicationUserDetails['identificationCode'] = Zf_QueryGenerator::SQLValue($guardianIdentificationCode);
                                            $guardianApplicationUserDetails['userStatus'] = Zf_QueryGenerator::SQLValue(1);
                                            
                                            
                                            //2. Student personal detiails
                                            $studentPersonalDetails['systemSchoolCode'] = Zf_QueryGenerator::SQLValue($systemSchoolCode);
                                            $studentPersonalDetails['identificationCode'] = Zf_QueryGenerator::SQLValue($studentIdentificationCode);
                                            $studentPersonalDetails['studentFirstName'] = Zf_QueryGenerator::SQLValue($studentFirstName);
                                            $studentPersonalDetails['studentMiddleName'] = Zf_QueryGenerator::SQLValue($studentMiddleName);
                                            $studentPersonalDetails['studentLastName'] = Zf_QueryGenerator::SQLValue($studentLastName);
                                            $studentPersonalDetails['studentGender'] = Zf_QueryGenerator::SQLValue($studentGender);
                                            $studentPersonalDetails['studentDateOfBirth'] = Zf_QueryGenerator::SQLValue($studentDateOfBirth);
                                            $studentPersonalDetails['studentReligion'] = Zf_QueryGenerator::SQLValue($studentReligion);
                                            $studentPersonalDetails['studentCountry'] = Zf_QueryGenerator::SQLValue($studentCountry);
                                            $studentPersonalDetails['studentLocality'] = Zf_QueryGenerator::SQLValue($studentLocality);
                                            $studentPersonalDetails['studentBoxAddress'] = Zf_QueryGenerator::SQLValue($studentBoxAddress);
                                            $studentPersonalDetails['studentPhoneNumber'] = Zf_QueryGenerator::SQLValue($studentPhoneNumber);
                                            $studentPersonalDetails['studentLanguage'] = Zf_QueryGenerator::SQLValue($studentLanguage);
                                            $studentPersonalDetails['registeredBy'] = Zf_QueryGenerator::SQLValue($registeredBy);
                                            $studentPersonalDetails['studentStatus'] = Zf_QueryGenerator::SQLValue(1);
                                            
                                            //3. Student guardian details
                                            $studentGuardianDetails['systemSchoolCode'] = Zf_QueryGenerator::SQLValue($systemSchoolCode);
                                            $studentGuardianDetails['identificationCode'] = Zf_QueryGenerator::SQLValue($guardianIdentificationCode);
                                            $studentGuardianDetails['guardianDesignation'] = Zf_QueryGenerator::SQLValue($guardianDesignation);
                                            $studentGuardianDetails['guardianFirstName'] = Zf_QueryGenerator::SQLValue($guardianFirstName);
                                            $studentGuardianDetails['guardianMiddleName'] = Zf_QueryGenerator::SQLValue($guardianMiddleName);
                                            $studentGuardianDetails['guardianLastName'] = Zf_QueryGenerator::SQLValue($guardianLastName);
                                            $studentGuardianDetails['guardianGender'] = Zf_QueryGenerator::SQLValue($guardianGender);
                                            $studentGuardianDetails['guardianDateOfBirth'] = Zf_QueryGenerator::SQLValue($guardianDateOfBirth);
                                            $studentGuardianDetails['guardianReligion'] = Zf_QueryGenerator::SQLValue($guardianReligion);
                                            $studentGuardianDetails['guardianCountry'] = Zf_QueryGenerator::SQLValue($guardianCountry);
                                            $studentGuardianDetails['guardianLocality'] = Zf_QueryGenerator::SQLValue($guardianLocality);
                                            $studentGuardianDetails['guardianBoxAddress'] = Zf_QueryGenerator::SQLValue($guardianBoxAddress);
                                            $studentGuardianDetails['guardianPhoneNumber'] = Zf_QueryGenerator::SQLValue($guardianPhoneNumber);
                                            $studentGuardianDetails['guardianRelation'] = Zf_QueryGenerator::SQLValue($guardianRelation);
                                            $studentGuardianDetails['guardianOccupation'] = Zf_QueryGenerator::SQLValue($guardianOccupation);
                                            $studentGuardianDetails['guardianLanguage'] = Zf_QueryGenerator::SQLValue($guardianLanguage);
                                            $studentGuardianDetails['registeredBy'] = Zf_QueryGenerator::SQLValue($registeredBy);
                                            $studentGuardianDetails['guardianStatus'] = Zf_QueryGenerator::SQLValue(1);
                                            
                                            //4. Student medical details
                                            $studentMedicalDetails['systemSchoolCode'] = Zf_QueryGenerator::SQLValue($systemSchoolCode);
                                            $studentMedicalDetails['studentIdentificationCOde'] = Zf_QueryGenerator::SQLValue($studentIdentificationCode);
                                            $studentMedicalDetails['isStudentBloodGroup'] = Zf_QueryGenerator::SQLValue($isStudentBloodGroup);
                                            $studentMedicalDetails['studentBloodGroup'] = Zf_QueryGenerator::SQLValue($studentBloodGroup);
                                            $studentMedicalDetails['isStudentDisable'] = Zf_QueryGenerator::SQLValue($isStudentDisable);
                                            $studentMedicalDetails['studentDisability'] = Zf_QueryGenerator::SQLValue($studentDisability);
                                            $studentMedicalDetails['isStudentMedicated'] = Zf_QueryGenerator::SQLValue($isStudentMedicated);
                                            $studentMedicalDetails['studentMedication'] = Zf_QueryGenerator::SQLValue($studentMedication);
                                            $studentMedicalDetails['isStudentAllergic'] = Zf_QueryGenerator::SQLValue($isStudentAllergic);
                                            $studentMedicalDetails['studentAllergic'] = Zf_QueryGenerator::SQLValue($studentAllergic);
                                            $studentMedicalDetails['isStudentTreatment'] = Zf_QueryGenerator::SQLValue($isStudentTreatment);
                                            $studentMedicalDetails['studentTreatment'] = Zf_QueryGenerator::SQLValue($studentTreatment);
                                            $studentMedicalDetails['isStudentPhysician'] = Zf_QueryGenerator::SQLValue($isStudentPhysician);
                                            $studentMedicalDetails['physicianDesignation'] = Zf_QueryGenerator::SQLValue($physicianDesignation);
                                            $studentMedicalDetails['physicianFirstName'] = Zf_QueryGenerator::SQLValue($physicianFirstName);
                                            $studentMedicalDetails['physicianLastName'] = Zf_QueryGenerator::SQLValue($physicianLastName);
                                            $studentMedicalDetails['1stMobileNumber'] = Zf_QueryGenerator::SQLValue($firstMobileNumber);
                                            $studentMedicalDetails['2ndMobileNumber'] = Zf_QueryGenerator::SQLValue($secondMobileNumber);
                                            $studentMedicalDetails['physicianEmailAddress'] = Zf_QueryGenerator::SQLValue($physicianEmailAddress);
                                            $studentMedicalDetails['physicianBoxAddress'] = Zf_QueryGenerator::SQLValue($physicianBoxAddress);
                                            $studentMedicalDetails['physicianCountry'] = Zf_QueryGenerator::SQLValue($physicianCountry);
                                            $studentMedicalDetails['physicianLocality'] = Zf_QueryGenerator::SQLValue($physicianLocality);
                                            $studentMedicalDetails['isStudentHospital'] = Zf_QueryGenerator::SQLValue($isStudentHospital);
                                            $studentMedicalDetails['hospitalName'] = Zf_QueryGenerator::SQLValue($hospitalName);
                                            $studentMedicalDetails['1stHospitalNumber'] = Zf_QueryGenerator::SQLValue($firstHospitalNumber);
                                            $studentMedicalDetails['2ndHospitalNumber'] = Zf_QueryGenerator::SQLValue($secondHospitalNumber);
                                            $studentMedicalDetails['hospitalBoxAddress'] = Zf_QueryGenerator::SQLValue($hospitalBoxAddress);
                                            $studentMedicalDetails['hospitalEmailAddress'] = Zf_QueryGenerator::SQLValue($hospitalEmailAddress);
                                            $studentMedicalDetails['hospitalCountry'] = Zf_QueryGenerator::SQLValue($hospitalCountry);
                                            $studentMedicalDetails['hospitalLocality'] = Zf_QueryGenerator::SQLValue($hospitalLocality);
                                            $studentMedicalDetails['registeredBy'] = Zf_QueryGenerator::SQLValue($registeredBy);
                                            $studentMedicalDetails['studentStatus'] = Zf_QueryGenerator::SQLValue(1);
                                            
                                            //5. Student class details
                                            $studentClassDetails['systemSchoolCode'] = Zf_QueryGenerator::SQLValue($systemSchoolCode);
                                            $studentClassDetails['identificationCode'] = Zf_QueryGenerator::SQLValue($studentIdentificationCode);
                                            $studentClassDetails['studentClassCode'] = Zf_QueryGenerator::SQLValue($studentClassCode);
                                            $studentClassDetails['studentStreamCode'] = Zf_QueryGenerator::SQLValue($studentStreamCode);
                                            $studentClassDetails['studentYearOfStudy'] = Zf_QueryGenerator::SQLValue($studentYearOfStudy);
                                            $studentClassDetails['studentAdmissionNumber'] = Zf_QueryGenerator::SQLValue($studentAdmissionNumber);
                                            $studentClassDetails['registeredBy'] = Zf_QueryGenerator::SQLValue($registeredBy);
                                            $studentClassDetails['studentClassStatus'] = Zf_QueryGenerator::SQLValue(1);
                                            
                                            //6. Student-Guardian mapper
                                            $studentGuardianMapperDetails['studentIdentificationCode'] = Zf_QueryGenerator::SQLValue($studentIdentificationCode);
                                            $studentGuardianMapperDetails['guardianIdentificationCode'] = Zf_QueryGenerator::SQLValue($guardianIdentificationCode);
                                            $studentGuardianMapperDetails['recordStatus'] = Zf_QueryGenerator::SQLValue(1);
                                            
                                            
                                            //Since all data has been prepared for database, build the INSERTION SQL quries
                                            
                                            //1. Insert student application user details
                                            $insertStudentApplicationUserDetails = Zf_QueryGenerator::BuildSQLInsert('zvs_application_users', $studentApplicationUserDetails);
                                            //$executeInsertStudentApplicationUserDetails = $this->Zf_AdoDB->Execute($insertStudentApplicationUserDetails);
                                            
                                            //2. Insert guardian application user details
                                            $insertGuardianApplicationUserDetails = Zf_QueryGenerator::BuildSQLInsert("zvs_application_users", $guardianApplicationUserDetails);
                                            //$executeInsertGuardianApplicationUserDetails = $this->Zf_AdoDB->Execute($insertGuardianApplicationUserDetails);
                                            
                                            //3. Insert student personal detials
                                            $insertStudentPersonalDetails = Zf_QueryGenerator::BuildSQLInsert("zvs_students_personal_details", $studentPersonalDetails);
                                            //$executeInsertStudentPersonalDetails = $this->Zf_AdoDB->Execute($insertStudentPersonalDetails);
                                            
                                            //4. Insert student guardian details
                                            $insertStudentGuardianDetails = Zf_QueryGenerator::BuildSQLInsert("zvs_students_guardian_details", $studentGuardianDetails);
                                            //$executeInsertStudentGuardianDetails = $this->Zf_AdoDB->Execute($insertStudentGuardianDetails);
                                            
                                            //5. Insert student medical details
                                            $insertStudentMedicalDetails = Zf_QueryGenerator::BuildSQLInsert("zvs_students_medical_details", $studentMedicalDetails);
                                            //$executeInsertStudentMedicalDetails = $this->Zf_AdoDB->Execute($insertStudentMedicalDetails);
                                            
                                            //6. Insert student class details
                                            $insertStudentClassDetails = Zf_QueryGenerator::BuildSQLInsert("zvs_students_class_details", $studentClassDetails);
                                            //$executeInsertStudentClassDetails = $this->Zf_AdoDB->Execute($insertStudentClassDetails);
                                            
                                            //7. Insert student-guardian mapper details
                                            $insertStudentGuardianMapper = Zf_QueryGenerator::BuildSQLInsert("zvs_students_guardian_mapper", $studentGuardianMapperDetails);
                                            //$executeInsertStudentGuardianMapper = $this->Zf_AdoDB->Execute($insertStudentGuardianMapper);
                                            
                                            
                                            exit();
                                        }
                                    }
                                    
                                }
                                 
                            }
                            
                        }
                    }
            
        }else{
            
            //Redirect to the registration form section. Also make an error indicator.
            Zf_SessionHandler::zf_setSessionVariable("student_registration", "general_form_error");
            
            echo Zf_FormController::zf_validateGeneralForm($this->_validResult, $this->_errorResult);
            Zf_GenerateLinks::zf_header_location("student_module", 'register_student', $registeredBy);
            exit();
            
            
        }
       
        
    }
    
  
    
    
}

?>
