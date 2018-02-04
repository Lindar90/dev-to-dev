<template>
  <div class="btn-group m-3">
    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
      Filter by: {{ name }}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a
          class="dropdown-item"
          href="#"
          v-for="value in values"
          :key="value"
          @click="selectFilter(value)"
      >{{ value }}</a>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['name', 'values'],

    methods: {
      selectFilter(value) {
        this.$emit('select', {
          name: this.name,
          value
        })
      }
    }
  }
</script>
