function validate() {
    var f_name = document.register.first_name.value;
    var l_name = document.register.last_name.value;
    var age_ = document.register.age.value;
    var email = document.register.email.value;
    var dob = document.register.dob.value;
    var gender = document.register.gender.value;
    var dept = document.register.dept.value;
    var college_name = document.register.college.value;
    var mobile_num = document.register.mobile.value;
    var address = document.register.address.value;


    if (f_name == "") {
        alert("First name is empty");
        return false;
    }
    if (/\d/.test(f_name)) {
        alert("First Name is Numbers not allowed!");
        return false;
    }
    if (l_name == "") {
        alert("Last name is empty");
        return false;
    }
    if (/\d/.test(l_name)) {
        alert("Last Name is Numbers not allowed!");
        return false;
    }

    if (age_.length > 2) {
        alert("Age must be only two digits");
        return false;
    }
    if (age_ < 18) {
        alert("Age must be greater than 18");
        return false;
    }
    if (email == "") {
        alert("Email is required");
        return false;
    }
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!email.match(mailformat)) {
        alert("Email id is not valid");
        return false;
    }
    var today = new Date();
    var birthDate = new Date(dob);
    var age = today.getFullYear() - birthDate.getFullYear();

    if (age != age_) {
        alert("Age does not match with the provided date");
        return false;
    }
    if (gender == "") {
        alert("Gender not selected");
        return false;
    }
    if (dept == "") {
        alert("Department not selected");
        return false;
    }

    if (college_name == "") {
        alert("College name is empty");
        return false;
    }
    if (/\d/.test(college_name)) {
        alert("College name should not contain only numbers");
        return false;
    }

    if (mobile_num == "") {
        alert("Mobile number is required");
        return false;
    }
    if (mobile_num.length != 10) {
        alert("Length of mobile number should be 10");
        return false;
    }
    if (!/^[6-9]/.test(mobile_num)) {
        alert("Invalid mobile number");
        return false;
    }

    if (address == "") {
        alert("Address is empty");
        return false;
    }
}