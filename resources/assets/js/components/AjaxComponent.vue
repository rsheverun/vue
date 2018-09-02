<template>
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                         <div class="row">
                            <div class="col-md-9">
                                Table
                            </div>
                             <div class="col md-3 text-right">
                                 <button @click="update" class="btn btn-default text mb-1" v-if="!is_refresh">Update - {{ id }}</button>
                             </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="col-md-6">Title</th>
                                        <th class="col-md-6">URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="url in urldata">
                                        <td>{{ url.title }}</td>
                                        <td>{{ url.url }}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                urldata: [],
                is_refresh: false,
                id: 0
            }
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function() {
                this.is_refresh = true
                axios.get('/get-json').then((response) => {
                    console.log(response)
                    this.urldata = response.data
                    this.is_refresh = false
                    this.id++
                });
            }    
        }
    }
</script>
