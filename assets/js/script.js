"use strict";

const menuBtn = document.querySelector(".menu-btn");
const topSection = document.querySelector(".top-section");
const outerContainer = document.querySelector(".outer-container");
const closeBtn = document.querySelector(".close-btn");
const menuOverlay = document.querySelector(".menu-backdrop");
const searchIcon = document.querySelector(".mobile-search");
const searchModalCloseBtn = document.querySelector(".search-modal-close-btn");
const searchOverlay = document.querySelector(".search-backdrop");
const menuModal = document.querySelector("#mobile-menu-modal");
const searchModal = document.querySelector("#search-bar-modal");

//Menu Bar:
function handleMenuOpen() {
  if (topSection) {
    topSection.classList.add("mobile-menu-visible");
  } else {
    outerContainer.classList.add("mobile-menu-visible");
  }
}
function handleCloseMenu() {
  if (topSection) {
    topSection.classList.remove("mobile-menu-visible");
  } else {
    outerContainer.classList.remove("mobile-menu-visible");
  }
}

menuBtn.addEventListener("click", handleMenuOpen);
closeBtn.addEventListener("click", handleCloseMenu);
menuOverlay.addEventListener("click", handleCloseMenu);

//Search Modal:
function handleSearchClick(e) {
  e.preventDefault();
  if (topSection) {
    topSection.classList.add("search-modal-visible");
  } else {
    outerContainer.classList.add("search-modal-visible");
  }
}

function closeSearchPanel() {
  if (topSection) {
    topSection.classList.remove("search-modal-visible");
  } else {
    outerContainer.classList.remove("search-modal-visible");
  }
}

searchIcon.addEventListener("click", handleSearchClick);
searchModalCloseBtn.addEventListener("click", closeSearchPanel);
searchOverlay.addEventListener("click", closeSearchPanel);

//Closing of Modals as per screensize

window.addEventListener("resize", function () {
  if (window.innerWidth > 768) {
    handleCloseMenu(menuModal);
    closeSearchPanel(searchModal);
  }
});
