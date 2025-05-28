{{-- <x-filament-widgets::widget>
    <x-filament::section>
        <div class="text-2xl font-bold mb-4">Kalender Sertifikasi</div>


        <div id="calendar" class="rounded-lg shadow bg-white p-4"></div>

        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const calendarEl = document.getElementById('calendar');
                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    height: 600,
                    events: @json($this->getCalendarEvents()),
                });
                calendar.render();
            });
        </script>
    </x-filament::section>
</x-filament-widgets::widget> --}}
