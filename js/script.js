function app() {
  const field = document.getElementById("passLenghtInput");
  const range = document.getElementById("passLenghtRange");
  range.addEventListener("input", function (e) {
      field.value = e.target.value;
  });
  field.addEventListener("input", function (e) {
    range.value = e.target.value;
  });
}
app();
