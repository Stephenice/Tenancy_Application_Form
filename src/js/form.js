/*
  This code controls a multi-step form using JavaScript.
  It initializes variables to track buttons, progress bar, form steps, and their respective steps.
  The 'nextBtns' and 'prevBtns' handle the progression and regression of form steps respectively.
  The 'updateFormSteps' function updates the visibility of form steps based on the step index.
  The 'updateProgressbar' function manages the progress indicator on the form.
  It adds or removes classes to show active/inactive steps and adjusts the width of the progress bar.
*/

const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    updateFormSteps(++formStepsNum);
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    updateFormSteps(--formStepsNum);
    updateProgressbar();
  });
});

function updateFormSteps(stepIndex) {
  formSteps.forEach((formStep) => {
    formStep.classList.remove("form-step-active");
  });

  formSteps[stepIndex].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx <= formStepsNum) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width = `${
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100
  }%`;
}
