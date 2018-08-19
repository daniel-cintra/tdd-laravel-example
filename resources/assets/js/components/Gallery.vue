<template>

  <div>

    <draggable
    v-model="galleryItens"
    class="row"
    @end="updateOrder"
    >

      <div
      v-for="item in galleryItens"
      :key="item.id"
      class="col-lg-3"
      >

        <div>

          <img :src="getImg(item)" class="item__img" :alt="item.nome">

          <p>
            {{item.title}}
          </p>

        </div>

      </div>

    </draggable>

    <notifications position="bottom right" />

  </div>

</template>

<script>

import draggable from 'vuedraggable';
import api from './support/api';

export default {

  components: {
      draggable,
  },

  created(){
    api.getInitialState(this);
  },

  data() {
    return {
      galleryItens: null,
    };
  },

  methods: {

    getImg(item) {
      return `/img/${item.img_src}`;
    },

    updateOrder() {
      api.updateOrder(this.galleryItens);
    },

  },

};

</script>
