interface Person {
    firstName : string;
    lastName : string;
}

function greeter(person: Person) {
    return "Hello, " + person.firstName + " " + person.lastName;
}

let user = {firstName: "Ben", lastName: "Frisanco"};

let selectmsg = "Please select your favorite movies:";

document.body.innerHTML = greeter(user);
document.body.innerHTML = selectmsg;
