<template>
    <div class="row">
        <div class="col-md-3">
            <calendar-events></calendar-events>
        </div>

        <div class="col-md-9">
            <calendar></calendar>
        </div>
    </div>
</template>

<script>
    import Calendar from './Calendar.vue'
    import CalendarEvents from './CalendarEvents.vue'
    export default {
        components:[Calendar, CalendarEvents],
        mounted() {
            console.log('Component Full Calendar mounted.')
        }
    }
</script>