// Отклчение скролла у input type=number
let numberInputs = document.querySelectorAll('.input-number');

numberInputs.forEach((item) => {
  item.onwheel = function(e) {
    e.preventDefault();
  }
});

// Маска ввода диапазона времени в формате 10:00 - 18:00
let openingHours = document.querySelectorAll('.openinghours');
if (openingHours) {
  openingHours.forEach((item) => {
    const openinghoursMask = {
      mask: '00:00 - 00:00'
    }
    const mask = IMask(item, openinghoursMask);
  });
}