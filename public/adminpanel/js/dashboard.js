// Отклчение скролла у input type=number
// let numberInputs = document.querySelectorAll('.input-number');

// numberInputs.forEach((item) => {
//   item.onwheel = function(e) {
//     e.preventDefault();
//   }
// });

// Маска ввода диапазона времени в формате 10:00 - 18:00
// let openingHours = document.querySelectorAll('.openinghours');
// if (openingHours) {
//   openingHours.forEach((item) => {
//     const openinghoursMask = {
//       mask: '00:00 - 00:00'
//     }
//     const mask = IMask(item, openinghoursMask);
//   });
// }

// current notifications
let currentNotifications = document.querySelector('.current-notifications');

if (currentNotifications) {
  let readButtons = document.querySelectorAll('.read-button');

  readButtons.forEach((item) => {
    item.onclick = function () {
      // Добавляю класс disabled, делаю текст серым цветом и меняю на Прочитано
      item.parentElement.classList.add('disabled');
      item.innerText = 'Прочитано';

      // Уменьшаю счетчик уведомлений
      let notificationsCounter = document.querySelector('#notifications-counter'),
          notificationsCounterNumber = Number(notificationsCounter.innerText);
      if (notificationsCounterNumber > 0) {
        notificationsCounterNumber = notificationsCounterNumber - 1
        notificationsCounter.innerText = notificationsCounterNumber;
      }
      if (notificationsCounterNumber == 0) {
        notificationsCounter.classList.add('hidden');
      }

    }
  });
}


// air datepicker
let datepicker = document.querySelector('.datepicker');

if (datepicker) {
  const dp = new AirDatepicker('.datepicker', {
    autoClose: true
  });
}


// fade out
let alertSuccess = document.querySelector('.alert-success');

if (alertSuccess) {
  fadeOut(alertSuccess, 3000);
}

function fadeOut (el, timeout) {
  el.style.opacity = 1;
  el.style.transition = `opacity ${timeout}ms`;
  el.style.opacity = 0;

  setTimeout(() => {
    el.style.display = 'none';
  }, timeout);

  return false;
};