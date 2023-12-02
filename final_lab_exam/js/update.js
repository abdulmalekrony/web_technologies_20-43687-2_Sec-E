function updateValidation() 
{
    let empname = document.getElementById("emp_name").value;
    let emp_cno = document.getElementById("cont_no").value;
    let empuname = document.getElementById("emp_uname").value;
    let emppass = document.getElementById("emp_pass").value;

    // Name Check.
    if (empname === "") 
    {
        alert("Employer Name cannot be empty.");
        return false;
    }

    // Contact Number Check.
    if (emp_cno === "") 
    {
        alert("Contact no cannot be empty.");
        return 
    }

    // Username Check.
    if (empuname === "") 
    {
        alert("Please enter a username."); 
    } 
    else if (empuname.length > 8) 
    {
       alert("Username maximum 8 characters.");
    }

    // Password validation
    if (emppass === "") 
    {
       alert("Password fields must be filled.");  
    }


}