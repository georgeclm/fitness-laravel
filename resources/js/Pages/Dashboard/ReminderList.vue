<template>
  <div class="card">
    <div class="card-header h4">Reminders List</div>
    <div class="card-body">
      <ul class="list-group list-group-flush" v-if="reminders.length > 0">
        <li
          class="list-group-item"
          v-for="reminder in reminders"
          :key="reminder.id"
        >
          <inertia-link
            :href="
              route('reminder.view', {
                lead: reminder.lead,
                reminder: reminder,
              })
            "
            class="h5"
          >
            <strong>{{ reminder.lead.name }}</strong>
            <br />
            {{ reminder.reminder }}
          </inertia-link>
        </li>
      </ul>
      <div v-else>You Have No Reminders For Today</div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    reminders: Array,
  },
};
</script>