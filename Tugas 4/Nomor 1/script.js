function bilanganUnik() {
  let userInput = parseInt(document.querySelector("#userInput").value);
  let output = document.querySelector("#output");
  let html = "";
  let hilangkanKali = "";
  if (userInput <= 0 || userInput >= 21) {
    output.innerHTML = "Kamu salah memasukkan angka";
  } else {
    output.innerHTML = "";
    if (userInput % 2 == 1) {
      let bil1 = 0,
        bil2 = 1;
      let hasil = 0;
      for (i = 1; i < userInput * 10; i++) {
        hasil = bil1 + bil2;
        bil1 = bil2;
        bil2 = hasil;
        if (bil1 + bil2 <= userInput * 10) {
          output.innerHTML += "Hasilnya " + (bil1 + bil2) + "<br>";
        }
      }
    } else if (userInput % 2 == 0) {
      let total = 1;
      n = userInput / 2;
      for (i = 1; i <= n; i++) {
        total = total * i;
        html += i + "x";
      }
      output.innerHTML = html + "=" + total;
    }
  }
}
