<template>
  <div class="col-sm-4">
    <div class="card">
      <img class="card-img-top" :src="product.image" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ product.title }}</h5>
        <p class="card-text">Brand: {{ product.brand }}</p>
        <p class="card-text">Color: {{ product.color }}</p>
        <p class="card-text">Size: {{ product.size }}</p>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['product']
  }
</script>