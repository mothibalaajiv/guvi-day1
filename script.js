function addSubject() {
    const subjectsDiv = document.getElementById("subjects");

    const div = document.createElement("div");
    div.innerHTML = `
        <input type="number" placeholder="Credits" class="credits">
        <input type="number" placeholder="Grade (0-10)" class="grades">
    `;

    subjectsDiv.appendChild(div);
}

function calculateCGPA() {
    const credits = document.querySelectorAll(".credits");
    const grades = document.querySelectorAll(".grades");

    let totalCredits = 0;
    let totalPoints = 0;

    for (let i = 0; i < credits.length; i++) {
        let credit = parseFloat(credits[i].value);
        let grade = parseFloat(grades[i].value);

        if (!isNaN(credit) && !isNaN(grade)) {
            totalCredits += credit;
            totalPoints += credit * grade;
        }
    }

    if (totalCredits === 0) {
        document.getElementById("result").innerText = "Please enter valid data!";
        return;
    }

    let cgpa = totalPoints / totalCredits;
    document.getElementById("result").innerText = "Your CGPA: " + cgpa.toFixed(2);
}

window.onload = addSubject;  // Add one subject by default
