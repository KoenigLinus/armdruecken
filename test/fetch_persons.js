function fetchPersons() {
  fetch("api.php?action=get_persons")
    .then((response) => response.json())
    .then((persons) => {
      const select = document.getElementById("person");
      persons.forEach((person) => {
        const option = document.createElement("option");
        option.value = person.ID;
        option.textContent = person.Name;
        select.appendChild(option);
      });

      if (persons.length > 0) {
        select.value = persons[0].ID;
        fetchVerlaufData();
      }
    });
}
