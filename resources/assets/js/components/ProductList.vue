<template>
  <div>
    <div class="card filters">
      <div class="card-header">
        Filters
      </div>
      <div class="card-body mx-auto">
        <filter-option
            v-for="(values, filter) in filters"
            :key="filter"
            :name="filter"
            :values="values"
            @select="setFilter"
        ></filter-option>
      </div>
    </div>

    <div class="card-deck">
      <product
          v-for="product in products"
          :key="product.id"
          :product="product"
      ></product>
    </div>
  </div>
</template>

<script>
  import Product from './Product';
  import FilterOption from './FilterOption';

  export default {
    data() {
      return {
        products: [],
        filters: [],
        active_filters: {}
      };
    },

    components: {
      Product,
      FilterOption
    },

    created() {
      axios.post('/api/products')
        .then(({data}) => {
          this.products = data.products;
          this.filters  = data.filters;
        });
    },

    methods: {
      setFilter(filter) {
        this.active_filters[filter.name] = filter.value;

        axios.post('/api/products', {
          filters: this.active_filters
        }).then(({data}) => {
            this.products = data.products;
            this.filters  = data.filters;
          });
      }
    }
  }
</script>
