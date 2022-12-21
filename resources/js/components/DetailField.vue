<template>
  <PanelItem :index="index" :field="field">
    <template #value>
      <div class="flex items-center space-x-2">
        <FlagField :code="field.countryCode" :name="field.countryName" />
        <span>{{ field.countryName }}</span>
      </div>
    </template>
  </PanelItem>
</template>

<script>
import FlagField from "./FlagField.vue";

export default {
  components: { FlagField },
  props: ["index", "resource", "resourceName", "resourceId", "field"],
};
</script>
