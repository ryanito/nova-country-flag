<template>
  <img :src="src" :alt="alt" :title="alt" class="nova-country-flag" />
</template>

<script>
export default {
  props: ["code", "name"],

  computed: {
    src() {
      return `https://flagcdn.com/${this.code.toLowerCase()}.svg`;
    },
    alt() {
      return this.name || this.code;
    },
  },
};
</script>
