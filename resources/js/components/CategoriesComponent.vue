<template>
  <section class="wrapper" >
    <div class="row">
            <div class="col-lg-12">
            <div class="form-panel">
            <h4  ><i class="fa fa-desktop"></i> Categories</h4>
          </div>
              <!-- <h4><i class="fa fa-angle-right"></i> Form Validations</h4> -->
              <div class="form-panel">
                  
  <h4 ></h4>

                <div class=" form">
                  <form action="routeName" method="post" class="cmxform form-horizontal style-form" id="commentForm"  >
                   
                    <div class="form-group ">
                      <label for="name" class="control-label col-lg-2"><b>Category Name</b></label>
                      <div class="col-lg-6">
                        
                        <input class=" form-control" id="name" v-model="name" minlength="2" type="text" required />
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button @click="addCategory()" class="btn btn-theme" type="button">New Category</button>
                        <button class="btn btn-theme04" type="reset">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
          </div>
  </section>
  
</template>

<script>
    export default {
      
       data() {
         routeName: "{{route('blog.store')}}"
            return { 
                name: "",
                categories: [],
            }
        },

        methods: {
            addCategory() {
                const self = this;

                axios.post('addcategory', {
                    name: self.name,
                }).then((response) => {
                    self.categories.push(response.data.category);
                }).catch((response) => {
                    self.error = 1;
                    console.log('Errors');
                });
            }
        },
        mounted() {
            console.log('CategoriesComponent new mounted.')
        }
    }
</script>
