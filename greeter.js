function greeter(person) {
    return "Hello, " + person;
}
var user = { firstName: "Ben", lastName: "Frisanco" };
document.body.innerHTML = greeter(user);
