function greeter(person) {
    return "Hello, " + person.firstName + " " + person.lastName;
}
var user = { firstName: "Ben", lastName: "Frisanco" };
document.body.innerHTML = greeter(user);
