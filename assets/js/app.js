// Đổi mật khẩu
document.addEventListener("DOMContentLoaded", function () {
  let change = document.querySelector(".change-btn");
  let changePassword = document.querySelector(".change-password");
  let loginProfile = document.querySelector(".login-profile");
  let capnhap = document.querySelector(".submit-btn");
  change.addEventListener("click", () => {
    changePassword.classList.toggle("hidden");
    loginProfile.classList.toggle("hidden");
    change.classList.add("hidden");
    capnhap.classList.remove("hidden");
  });
});
// Tìm kiếm theo tên sách

document.addEventListener("DOMContentLoaded", function () {
  let text = document.querySelector(".search-input");
  let books = document.querySelectorAll(".book-item");

  text.onkeyup = function () {
    let term = text.value.toLowerCase();

    books.forEach(function (book) {
      let title = book.querySelector(".book-title").textContent.toLowerCase();

      if (title.includes(term)) {
        book.style.display = "block";
      } else {
        book.style.display = "none";
      }
    });
  };
});
