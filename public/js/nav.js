
    document.addEventListener('DOMContentLoaded', function () {
        const routeSchedLink = document.getElementById('route-sched-link');
        const routeSchedSubnav = document.getElementById('route-sched-subnav');

        if (routeSchedLink && routeSchedSubnav) {
            routeSchedLink.addEventListener('click', function () {
                routeSchedSubnav.classList.toggle('hidden');
            });
        }

        // Optionally handle navigation link clicks to auto-expand corresponding subnav
        const currentRoute = '{{ request()->route()->getName() }}';
        const routeSchedRoutes = ['route-sched', 'route-bus-stop', 'route-timetable', 'route-holiday'];

        if (routeSchedRoutes.includes(currentRoute)) {
            routeSchedSubnav.classList.remove('hidden');
        }
    });

