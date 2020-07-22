let table = document.getElementById("table");

let students = [
    {
        id: 1,
        name: "Brad surge",
        email: "bradffhdgfgfgfhfhfhsurge@gmail.com",
        phoneNumber: "08012345678",
    },
    {
        id: 2,
        name: "Brad surge",
        email: "bradsurge@gmail.com",
        phoneNumber: "08012345678",
    },
    {
        id: 3,
        name: "Brad surge",
        email: "bradsurge@gmail.com",
        phoneNumber: "08012345678",
    },
    {
        id: 1,
        name: "Brad surge",
        email: "bradsurge@gmail.com",
        phoneNumber: "08012345678",
    },
    {
        id: 2,
        name: "Brad surge",
        email: "bradsurge@gmail.com",
        phoneNumber: "08012345678",
    },
    {
        id: 3,
        name: "Bradfgfgfgfg surge scjffhsdkjbfbh",
        email: "bradsurge@gmail.com",
        phoneNumber: "08012345678",
    }
]


let button = `<button class="view-profile">View</button>
             <button class="remove-profile">Remove</button>`

students.map((value, index) => {
    let row = `<tr>
                    <td>${index + 1}.</td>
                    <td>${value.name}</td>
                    <td>${value.email}</td>
                    <td>${value.phoneNumber}</td>
                    <td>
                    ${button}
                    </td>
                </tr>`;
    table.innerHTML += row
})

let view_profile = document.getElementsByClassName("view-profile");

for (let i = 0; i < view_profile.length; i++) {
    view_profile[i].addEventListener("click", () => {
        window.location.href = "profile.php"
    })
}

const activeAdmin = document.getElementById("active")
const deactivatedAdmin = document.getElementById("deactivated")

//Activate Active admin tab
activeAdmin.addEventListener("click", function () {
    this.classList.add("active");
    deactivatedAdmin.classList.remove("active")
})

//Activate deactivated admin tab
deactivatedAdmin.addEventListener("click", function () {
    this.classList.add("active");
    activeAdmin.classList.remove("active")
})