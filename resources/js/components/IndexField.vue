<template>
  <FlagField :code="field.countryCode" :name="field.countryName" />
</template>

<script>
import FlagField from "./FlagField.vue";

export default {
  components: { FlagField },
  props: ["resourceName", "field"],
};
</script>
