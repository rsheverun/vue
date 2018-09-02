<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Table</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>URL</th>
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
</template>

<script>
    export default {
        props: [
            'urldata'
        ],
        mounted() {
            this.update();
        },
        methods: {
            update: function() {
                console.log(this.urldata);
            }    
        }
    }
</script>
