<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
               <div class="card card-default">
                    <div class="card-header">Add/Remove Sales Record</div>

<!-- Add item field -->
                  <div class="card-body">
                    <form action="/sales" method="post" @submit="submitSales()">
                    <input type="hidden" name="_token" :value="csrf">
                      <button class="btn btn-success col-md-2" @click="addSales">
                        Create Item <br />
                      </button>
                    <div class="form-inline" v-for="(item, index) of items">

                      <input class="form-control mt-2 col-xs-3" placeholder="Item ID" name="salesID">

                      <button class="btn btn-success ml-1 mr-1 mt-2" @click="deleteSales(index)">
                        -
                      </button>
                    </div>

                    <div class="submit">

                      <input type="submit" name="submit" value="Submit">
                    </div>
                  </form>
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
        items: [{id:''}],
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      }
    },
    methods: {
      addSales() {
        this.items.push({id : ''});
      },
      deleteSales(index) {
        if (index = 1) {
          while (index >= 1) {
            this.items.splice(index, 1);
            break;
          }
        } else {
          null;
        }

      }
    }
  }
</script>
