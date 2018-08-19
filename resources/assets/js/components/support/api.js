import Vue from 'vue';

export default {

  getInitialState(vm) {
    axios.get('/api/gallery-initial-state')
    .then((response) => {
      vm.galleryItens = response.data;
    });
  },

  updateOrder(itens) {
    axios.post('/api/gallery-update-order', {itens})
    .then((response) => {
      if (response.data.status) {
        Vue.notify({
          type: 'success',
          text: 'Gallery order updated!'
        })
      }
    });
  },

};
