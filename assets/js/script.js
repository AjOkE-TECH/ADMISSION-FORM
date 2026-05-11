const form = document.getElementById("admissionForm");

form.addEventListener("submit", function(e){

    let errors = [];

    const firstname = document.getElementById("firstname").value.trim();
    const lastname = document.getElementById("lastname").value.trim();
    const dob = document.getElementById("dob").value.trim();
    const department = document.getElementById("department").value.trim();
    const gender = document.getElementById("gender").value.trim();
    const state = document.getElementById("state").value.trim();
    const nationality = document.getElementById("nationality").value.trim();
    const parent_phone = document.getElementById("parent_phone").value.trim();

    if(firstname === ""){
        errors.push("First Name is required");
    }

    if(lastname === ""){
        errors.push("Last Name is required");
    }

    if(dob === ""){
        errors.push("Date of Birth is required");
    }

    if(department === ""){
        errors.push("Department is required");
    }

    if(gender === ""){
        errors.push("Please select gender");
    }

    if(state === ""){
        errors.push("State of Origin is required");
    }

    if(nationality === ""){
        errors.push("Nationality is required");
    }

    if(parent_phone.length < 11){
        errors.push("Phone number must be complete");
    }

    if(errors.length > 0){

        e.preventDefault();

        let errorDiv = document.getElementById("errorMessages");

        errorDiv.innerHTML = "";

        errors.forEach(function(error){

            errorDiv.innerHTML += `
                <div class="error">
                    ${error}
                </div>
            `;

        });

    }

});