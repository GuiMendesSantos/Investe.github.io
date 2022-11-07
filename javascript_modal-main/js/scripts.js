
//RAI//
const openModalButtonR = document.querySelector("#open-modalR");
const closeModalButtonR = document.querySelector("#close-modalR");
const modalR = document.querySelector("#modalR");
const fadeR = document.querySelector("#fadeR");

const toggleModalR = () => {
  [modalR,fadeR].forEach((el) => el.classList.toggle("#hideR"))
};

[openModalButtonR, closeModalButtonR, fadeR].forEach((el) => {
  el.addEventListener("click", () => toggleModalR());
});

//NICHOLAS//
const openModalButtonN = document.querySelector("#open-modalN");
const closeModalButtonN = document.querySelector("#close-modalN");
const modalN = document.querySelector("#modalN");
const fadeN = document.querySelector("#fadeN");

const toggleModalN = () => {
  [modalN,fadeN].forEach((el) => el.classList.toggle("#hideN"))
};

[openModalButtonN, closeModalButtonN, fadeN].forEach((el) => {
  el.addEventListener("click", () => toggleModalN());
});

//TAINÁ//

const openModalButton = document.querySelector("#open-modalT");
const closeModalButton = document.querySelector("#close-modalT");
const modal = document.querySelector("#modalT");
const fade = document.querySelector("#fadeT");

const toggleModal = () => {
  [modal,fade].forEach((el) => el.classList.toggle("#hideT"))
};

[openModalButton, closeModalButton, fade].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});

//JESSICA//
const openModalButtonJ = document.querySelector("#open-modalJ");
const closeModalButtonJ = document.querySelector("#close-modalJ");
const modalJ = document.querySelector("#modalJ");
const fadeJ = document.querySelector("#fadeJ");

const toggleModalJ = () => {
  modalJ.classList.toggle("hideJ");
  fadeJ.classList.toggle("hideJ");
};

[openModalButtonJ, closeModalButtonJ, fadeJ].forEach((el) => {
  el.addEventListener("click", () => toggleModalJ());
});

//GUILHERME//
const openModalButtonG = document.querySelector("#open-modalG");
const closeModalButtonG = document.querySelector("#close-modalG");
const modalG = document.querySelector("#modalG");
const fadeG = document.querySelector("#fadeG");

const toggleModalG = () => {
  modalG.classList.toggle("hideG");
  fadeG.classList.toggle("hideG");
};

[openModalButtonG, closeModalButtonG, fadeG].forEach((el) => {
  el.addEventListener("click", () => toggleModalG());
});