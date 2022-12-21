<template>
  <DefaultField
    :field="field"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent"
  >
    <template #field>
      <div class="flex items-center space-x-2">
        <FlagField :code="field.countryCode" :name="field.countryName" />
        <span>{{ field.countryName }}</span>
      </div>
    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";
import FlagField from "./FlagField.vue";

export default {
  components: { FlagField },
  mixins: [FormField, HandlesValidationErrors],
  props: ["resourceName", "resourceId", "field"],
};
</script>
