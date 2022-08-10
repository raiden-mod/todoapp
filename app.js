document.getElementById("form").onsubmit = function (e) {
  e.preventDefault();
  fetch("./ajax-request/add_todo.php", {
    method: "POST",
    body: JSON.stringify({
      task_hdr: document.getElementById("description").value,
      task_name: document.getElementById("description").value,
      task_description: document.getElementById("description").value,
      start: document.getElementById("description").value,
      stop: document.getElementById("description").value
    }),
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (jsonResponse) {
      console.log(jsonResponse);
      window.location.reload();
    })
    .catch(function () {
      document.getElementById("error").className = "";
    });
};
// this block of code will control the overrlay
const overlay = document.getElementById("overlay");

function openOverlay() {
  overlay.classList.add("active");
}
function closeOverlay() {
  overlay.classList.remove("active");
}
// this block of code will check the selection picked
function addtask(id) {
  document.getElementById("task-section-" + id).checked = true;
}
// this block of code is for the input buttons
// get all the inputs
const inputs = document.querySelectorAll(".input");
// functions
const handleFocus = (e) => {
  // get the parent
  const parent = e.target.parentElement;
  // get the icon
  const icon = e.target.nextElementSibling;

  //add the focused class
  parent.classList.add("focused");
  // pTags.classList.add("focused");

  // then remove success and error
  parent.classList.remove("correct");
  parent.classList.remove("wrong");

  // then remove the icon
  icon.className = "icon fas";
};

const handleBlur = (e) => {
  // get the parent
  const parent = e.target.parentElement;
  // get the icon
  const icon = e.target.nextElementSibling;

  if (e.target.checkValidity()) {
    parent.classList.add("correct");
    icon.classList.add("fa-check");
  } else {
    parent.classList.add("wrong");
    icon.classList.add("fa-exclamation");
  }
};
// add event listeners on the inputs
inputs.forEach((input) => {
  input.addEventListener("focus", handleFocus);
  input.addEventListener("blur", handleBlur);
  // input.addEventListener('input', handleInput);
});
// the end
