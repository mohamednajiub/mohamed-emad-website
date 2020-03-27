$(document).ready(function () {
   $('#experiences').horizontalTimeline({
      desktopDateIntervals: 200, //************\\
      tabletDateIntervals: 150, // Minimum: 120 \\
      mobileDateIntervals: 120, //****************\\
      minimalFirstDateInterval: true,

      dateDisplay: "date", // dateTime, date, time, dayMonth, monthYear, year
      dateOrder: "normal", // normal, reverse

      autoplay: false,
      autoplaySpeed: 8, // Sec
      autoplayPause_onHover: false,

      useScrollWheel: true,
      useTouchSwipe: true,
      useKeyboardKeys: true,
      addRequiredFile: true,
      useNavBtns: false,
      useScrollBtns: false,

      animation_baseClass: "animationSpeed", // Space separated class names
      enter_animationClass: {
         "left": "enter-left",
         "right": "enter-right"
      },
      exit_animationClass: {
         "left": "exit-left",
         "right": "exit-right"
      },
   });
});