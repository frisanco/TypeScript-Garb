function greeter(person) {
    return "Hello, " + person.firstName + " " + person.lastName;
}
var user = { firstName: "Ben", lastName: "Frisanco" };
var selectmsg = "Please select your favorite movies:";
document.body.innerHTML = greeter(user);
document.body.innerHTML = selectmsg;
