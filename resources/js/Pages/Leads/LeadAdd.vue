<template>
  <layout>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>
            <inertia-link :href="route('lead.list')">Members</inertia-link>
            <span class="breadcrumb-sep">/</span>
            New Member
          </h1>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <lead-form
            @formSubmit="handleSubmit"
            :main-lead="lead"
            :packages="packages"
          ></lead-form>
        </div>
      </div>
    </div>
  </layout>
</template>
<script>
import Layout from "../../Shared/Layout.vue";
import LeadForm from "../../Shared/LeadForm.vue";

export default {
  props: {
    packages: Array,
  },
  components: {
    Layout,
    LeadForm,
  },
  data() {
    return {
      lead: {
        name: "",
        email: "",
        phone: "",
        dob: "",
        interested_packagee: "",
      },
    };
  },
  methods: {
    async handleSubmit() {
      let response = await this.$inertia.post("/leads/save", this.lead);
    },
  },
};
</script>