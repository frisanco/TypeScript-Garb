interface Person {
    firstName : string;
    lastName : string;
}

function greeter(person: Person) {
    return "Hello, " + person;
}

let user = {firstName: "Ben", lastName: "Frisanco"};

document.body.innerHTML = greeter(user);
