<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.11/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    timeZone: 'UTC',
    initialView: 'resourceTimelineDay',
    aspectRatio: 1.5,
    headerToolbar: {
      left: 'prev,next',
      center: 'title',
      right: 'resourceTimelineDay,resourceTimelineWeek,resourceTimelineMonth'
    },
    editable: true,
    resourceAreaHeaderContent: 'Slots',
    resources: 'https://fullcalendar.io/api/demo-feeds/resources.json?with-nesting&with-colors',
    events: 'https://fullcalendar.io/api/demo-feeds/events.json?single-day&for-resource-timeline'
  });

  calendar.render();
});

    </script>
  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html>