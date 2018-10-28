<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
               <div class="card card-default">
                    <div class="card-header">Add/Remove Sales Record</div>

<!-- Add item field -->
                  <div class="card-body">
                    <button class="btn btn-success col-md-4 mt-22" @click="addSales">
                      Create <br>
                    </button>
                    <div class="form-inline" v-for="(item, index) of items">

                      <input class="form-control mt-2" placeholder="Item ID">

                      <button class="btn btn-success ml-1 mr-1 mt-2" @click="deleteSales(index)">
                        -
                      </button>
                    </div>

                    <div class="submit">
                      <button class="btn btn-submit col-md-4 mt-2"> Submit </button>
                    </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    data () {
        return {
        items: [{id:''}]
      }
    },
    methods: {
      addSales() {
        this.items.push({id : ''});
      },
      deleteSales(index) {
        this.items.splice(index, 1);
      }
    }
  }
</script>
