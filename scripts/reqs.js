function validateApplicationForm() {
  document.getElementById("applicationForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form submission

      // Retrieve form inputs
      var paneps = document.getElementsByName("paneps")[0].value;
      var num1 = parseInt(document.getElementsByName("num1")[0].value);
      var num2 = parseFloat(document.getElementsByName("num2")[0].value);
      var englishLevel = document.querySelector('input[name="my_radio_choice"]:checked');

      // Perform validation checks
      if (paneps !== "2ο" && paneps !== "3ο" && paneps !== "bigger") {
          alert("Το πεδίο 'Τρέχον έτος σπουδών' πρέπει να είναι '2ο', '3ο', '4ο' ή 'μεγαλύτερο'.");
          return;
      }

      if (isNaN(num1) || num1 < 0 || num1 > 100) {
          alert("Το πεδίο 'Ποσοστό «περασμένων» μαθημάτων' πρέπει να είναι ένας αριθμός μεταξύ 0 και 100.");
          return;
      }

      if (isNaN(num2) || num2 < 0) {
          alert("Το πεδίο 'Μέσος όρος «περασμένων» μαθημάτων' πρέπει να είναι ένας θετικός αριθμός.");
          return;
      }

      if (!englishLevel) {
          alert("Παρακαλώ επιλέξτε το επίπεδο του πιστοποιητικού γλώσσας της αγγλικής.");
          return;
      }

      alert("Επιτυχής υποβολή! Μπορείτε να επεξεργαστείτε τα αποτελέσματα.");
  });
}

validateApplicationForm();
