function passApp() {
  setTimeout(() => {
    const password = document.getElementById("password").textContent;
    console.log(password);
    document.getElementById("passText").addEventListener("click", () => {
      // Copy the text inside the text field
      navigator.clipboard.writeText(password);
  
      // Alert the copied text
      alert("Copied password: " + password);
  }, 50);
  });
}
passApp();
